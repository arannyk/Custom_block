const { __ } = wp.i18n;
const { registerBlockType } = wp-blocks;

const blockStyle = {
	backgroundColor: '#ccc',
	color: '#fff',
	padding: '20px'
}

// my-plugin/block-name

registerBlockType( 'basic-gutenberg-block/block-example-01-basic-block', {

	title: __( 'Basic Blcok' ),
	icon: 'universal-access-alt'
	category: 'layout',
	// Used in editor
	edit(){
		return <div style={ blackStyle }> This Is The Basic Block with JSX! (editor) </div>;
	},
	// Used in the frontend
	save() {
		return <div style={ blockStyle }> Basic Example With JSX! (frontend) </div>;
	}

});