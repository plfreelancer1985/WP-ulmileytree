if ( _.isUndefined( window.vc ) ) {
	var vc = { atts: {} };
}
(function ( $ ) {

	var VcColumnOffsetParam = Backbone.View.extend( {
		events: {},
		$lg_offset_placeholder_value: false,
		$lg_size_placeholder_value: false,
		initialize: function () {
			_.bindAll( this, 'setLgPlaceholders' );
		},
		render: function () {
			return this;
		},
		/**
		 *
		 * @return array
		 */
		save: function () {
			var data = [];
			this.$el.find( '.vc_column_offset_field' ).each( function () {
				var $field = $( this );
				if ( $field.is( ':checkbox:checked' ) ) {
					data.push( $field.attr( 'name' ) );
				} else if ( $field.is( 'select' ) && '' !== $field.val() ) {
					data.push( $field.val() );
				}
			} );
			return data;
		},
		setLgPlaceholders: function () {
			var offset = this.$lg_offset_placeholder_value.val().replace( /[^\d]/g, '' );
			this.$lg_size.find( 'option:first' ).text( VcI8nColumnOffsetParam.inherit_default );
			this.$lg_offset.find( 'option:first' ).text( offset ? VcI8nColumnOffsetParam.inherit + offset : '' );
		}
	} );
	/**
	 * Add new param to atts types list for vc
	 * @type {Object}
	 */
	vc.atts.column_offset = {
		parse: function ( param ) {
			var $field = this.content().find( 'input.wpb_vc_param_value.' + param.param_name + '' ),
				column_offset = $field.data( 'vcColumnOffset' ),
				result = column_offset.save();
			return result.join( ' ' );
		},
		init: function ( param, $field ) {
			/**
			 * Find all fields and execute
			 */
			$( '[data-column-offset="true"]', $field ).each( function () {
				var $this = $( this ),
					$field = $this.find( '.wpb_vc_param_value' );
				$field.data( 'vcColumnOffset', new VcColumnOffsetParam( { el: $this } ).render() );
			} );
		}
	};

})( window.jQuery );