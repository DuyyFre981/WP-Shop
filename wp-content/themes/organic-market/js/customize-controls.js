( function( api ) {

	// Extends our custom "organic-market" section.
	api.sectionConstructor['organic-market'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );