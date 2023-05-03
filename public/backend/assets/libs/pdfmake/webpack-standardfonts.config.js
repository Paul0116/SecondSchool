var config = require("./webpack.config.js");

var rule = {enforce: 'post', test: /pdfkit[/\\]js[/\\]/, loader: "transform-loader?brfs"};

config.module.rules.push(rule);

module.exports = config;

var LiveReloadPlugin = require('webpack-livereload-plugin');

module.exports = {
  plugins: [
    new LiveReloadPlugin(options)
  ]
}