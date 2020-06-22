const { watch, src, dest, parallel } = require('gulp');
const precss = require('precss');
const mixins = require('postcss-mixins');
const postcss = require('gulp-postcss');
const tailwind = require('tailwindcss');
const concat = require('gulp-concat');
const autoprefixer = require('autoprefixer');
const cssnano = require('cssnano');
const minimist = require('minimist');
const webpackGulp = require('gulp-webpack');
const webpack = require('webpack');
const UglifyJsPlugin = require('uglifyjs-webpack-plugin');


const defaults = {
    env: 'production'
};
const options = Object.assign({}, defaults, minimist(process.argv.slice(2)));

const config = {
    development: {
        cssPlugins: [
            mixins(),
            precss(),
            autoprefixer({ browsers: ['last 2 versions'] }),
            tailwind('./tailwind.config.js')
        ],
        jsMinify: false,
        jsSourcemap: 'eval-source-map'
    },
    production: {
        cssPlugins: [
            mixins(),
            precss(),
            autoprefixer({ browsers: ['last 2 versions'] }),
            tailwind('./tailwind.config.js'),
            cssnano({
                preset: ['default', {discardComments: false}]
            })
        ],
        jsMinify: true,
        jsSourcemap: 'source-map'
    }
};
const envConfig = config[options.env];

function css() {
    const plugins = envConfig.cssPlugins;

    return src('./theme/assets/postcss/*.css')
        .pipe(postcss(plugins))
        .pipe(dest('./theme'));
}

function js() {
    return src('./theme/assets/js/src/core.js')
        .pipe(webpackGulp({
            devtool: options.jsSourcemap,
            optimization: {
                minimizer: options.jsMinify ? [new UglifyJsPlugin()] : []
            },
            externals: {
                jquery: 'jQuery',
                $: 'jQuery'
            },
            module: {
                rules: [
                    {
                        test: /\.js$/,
                        exclude: /(node_modules|bower_components)/,
                        use: {
                            loader: 'babel-loader',
                            options: {
                                presets: ['@babel/preset-env']
                            }
                        }
                    },
                    {
                        test: /\.html$/,
                        loader: 'underscore-template-loader'
                    },
                    {
                        test: /\.ejs$/,
                        use: {
                            loader: 'ejs-loader'
                        }
                    },
                ]
            },
            output: {
                filename: 'core.js'
            }
        }, webpack))
        .pipe(dest('./theme/assets/js/dist/'));
}


exports.css = css;
exports.dev = function() {
    watch(['./theme/assets/postcss/*.css', './theme/assets/js/src/**/*.js', './theme/assets/js/src/**/*.html'], { ignoreInitial: false }, parallel(css, js));
};
exports.default = parallel(css, js);
