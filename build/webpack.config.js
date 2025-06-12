const path = require('path');
const MiniCssExtractPlugin = require('mini-css-extract-plugin');
const CssMinimizerPlugin = require('css-minimizer-webpack-plugin');

module.exports = {
    entry: {
        main: path.resolve(__dirname, '../src/assets/js/main.js'), // JS entry point
        styles: path.resolve(__dirname, '../src/assets/scss/custom.scss'), // SCSS entry point
    },
    output: {
        path: path.resolve(__dirname, '../dist'),
        filename: 'js/[name].bundle.js', // Output JavaScript to dist/js
        clean: true, // Clean dist folder before each build
    },
    module: {
        rules: [
            {
                test: /\.js$/,
                exclude: /node_modules/,
                use: {
                    loader: 'babel-loader',
                    options: {
                        presets: [
                            ['@babel/preset-env', { targets: 'defaults', useBuiltIns: 'usage', corejs: 3 }],
                        ],
                    },
                },
            },
            {
                test: /\.scss$/,
                use: [
                    MiniCssExtractPlugin.loader, // Extracts CSS from SCSS
                    'css-loader', // Interprets CSS imports
                    {
                        loader: 'sass-loader',
                        options: {
                            sassOptions: {
                                includePaths: [path.resolve(__dirname, 'node_modules')]
                            }
                        }
                    }
                ],
            },
        ],
    },
    plugins: [
        new MiniCssExtractPlugin({
            filename: 'css/custom.bundle.css', // Output CSS as custom.bundle.css
        }),
    ],
    optimization: {
        minimizer: [
            new CssMinimizerPlugin(), // Minify the CSS
        ],
    },
    devtool: 'source-map', // Generate source maps for easier debugging
    mode: 'production', // Set to 'production' for optimizations
};
