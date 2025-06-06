( function( api ) {

	// Extends our custom "data-science-specialist" section.
	api.sectionConstructor['data-science-specialist'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );