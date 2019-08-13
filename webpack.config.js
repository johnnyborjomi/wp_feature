const path = require("path");
const ExtractTextPlugin = require("extract-text-webpack-plugin");
const CopyWebpackPlugin = require("copy-webpack-plugin");
const sassLoader = require('sass-loader');
const webpack = require('webpack');

const config = {
    entry: "./src/index.js",
    output: {
        // path: path.resolve(__dirname, './dist'),
        filename: "public.js"
        // publicPath: "dist/"
    },
    devtool: "source-map",
    module: {
        rules: [
            {
                test: /\.s?css$/,
                use: ExtractTextPlugin.extract({
                    fallback: "style-loader",
                    use:["css-loader", "sass-loader"]
                })
            }
            // { enforce: "pre", test: /\.js$/, loader: "source-map-loader" }
        ]
    },
    resolve: {
        extensions: [".js", ".json"]
    },
    plugins: [
        new ExtractTextPlugin("styles.css"),
        new CopyWebpackPlugin([{ from: "src/styles/assets/", to: "assets" }])
    ],
    watch: true,
    watchOptions: {
        aggregateTimeout: 1000,
        ignored: [/node_modules/]
    }
};

module.exports = config;