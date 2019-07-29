( function( api ) {

	// Extends our custom "safha-one-page" section.
	api.sectionConstructor['safha-one-page'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );