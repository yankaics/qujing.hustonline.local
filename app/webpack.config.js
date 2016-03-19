var path = require("path"),
    webpack = require("webpack");
module.exports = {
    context: path.join(__dirname,"debug/entry/"),
    entry: {  //入口文件
        index:"./index.js",
        register:"./register.js"
    },
    output: {  //输出文件目录
        path: path.join(__dirname, "dist"),
        filename: "[name].entry.js"
    },
    externals: {
        "jquery": "jQuery"
    },
    watch:true,
    module: {
	    loaders: [
            {
                test: /\.scss$/,
                loader: 'style!css!sass!autoprefixer'
            },
	    	{
                test: /\.(jpg|png)$/,
                loader: 'url?limit=8192'
            },
            {
                test: /\.html$/,  //html loader
                loader: 'html'
            },
            {
                test: /\.js$/,
                loader: 'babel'
            }
	    ]
	},
    resolveLoader:{
        root:[path.join(__dirname,"./../node_modules")]
    },
    plugins: [
        new webpack.optimize.UglifyJsPlugin({ //压缩js的插件
            compress: {
                warnings: false
            }
        })
    ]
};