var webpack = require("webpack");

var config = {
	devtool: "eval-source-map",
	entry: "./resources/assets/js/App.js",
	output: {
		path: __dirname + "/public/assets",
		filename: "app.js"
	},
	module: {
		rules: [{
			test: /\.js$/,
			exclude: /node_modules/,
			use: {
				loader: "babel-loader",
				options: {
					presets: ['es2015']
				}
			}
		}, {
			test: /\.scss$/,
			exclude: /node_modules/,
			use: ["style-loader","css-loader","autoprefixer-loader","sass-loader"]
		}]
	}
};

module.exports = config;