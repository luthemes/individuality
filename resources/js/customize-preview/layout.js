// Gets an array of all layout class names.
let layouts = Object.values( individualityCustomizePreview.globals ).map( layout =>
	'layout-' + layout.name
);

wp.customize( 'theme_global_layout', value => {
	value.bind( to => {
		let body = document.querySelector( 'body' );

		// Remove all layout classes.
		body.classList.remove( ...layouts );

		// Add new layout class.
		body.classList.add( 'layout-' + to );
	} );
} );