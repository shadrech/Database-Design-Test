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

/* If bundling for production, optimize output, no sourcemaps */
if (process.env.NODE_ENV === "production") {
  delete config.devtool;

  config.plugins = [
    new webpack.optimize.UglifyJsPlugin({
      comments: false,
      compress: {
          warnings: true
      }
    })
  ];
};

module.exports = config;