module.exports = {
  entry: './block.js',
  output: {
  	path: __dirname,
  	filename: 'block.build.js'
  },
  module: {
  	 rules: [
  	 	{
  	 		test:/\.js$/,
  	 		execute:/node_modules/,
  	 		use: {
  	 			loader: 'babel-loader'
  	 		},
  	 	},
  	 ],
  }
};
