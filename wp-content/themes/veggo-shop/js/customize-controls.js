( function( api ) {

	// Extends our custom "veggo-shop" section.
	api.sectionConstructor['veggo-shop'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );