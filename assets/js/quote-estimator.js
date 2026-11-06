/**
 * Live quote estimator for the contact form.
 *
 * Reads the service select and the hours range inside the same Contact Form 7
 * form, updates the estimate box and stores the result in the hidden
 * "your-estimate" field so it is included in the email.
 *
 * @package VERTEX_Solutions
 */
( function () {
	'use strict';

	function init( box ) {
		var form = box.closest( 'form' );
		if ( ! form ) {
			return;
		}

		var select = form.querySelector( 'select[name="your-interest"]' );
		var range = form.querySelector( 'input[name="your-scope"]' );
		var hidden = form.querySelector( 'input[name="your-estimate"]' );
		var tierEl = box.querySelector( '.vertex-estimate__tier' );
		var costEl = box.querySelector( '.vertex-estimate__cost' );
		var valueEl = form.querySelector( '.vertex-range-value' );

		if ( ! select || ! range || ! tierEl || ! costEl ) {
			return;
		}

		var rates = ( box.getAttribute( 'data-rates' ) || '150,180,200' ).split( ',' ).map( Number );
		var thresholds = ( box.getAttribute( 'data-thresholds' ) || '70,140' ).split( ',' ).map( Number );
		var tiers = ( box.getAttribute( 'data-tiers' ) || '' ).split( '|' );
		var currency = box.getAttribute( 'data-currency' ) || 'USD';
		var hoursLabel = box.getAttribute( 'data-hours-label' ) || 'hrs';
		var formatter = new Intl.NumberFormat( document.documentElement.lang || 'en-US', {
			style: 'currency',
			currency: currency,
			maximumFractionDigits: 0
		} );

		function update() {
			var hours = parseInt( range.value, 10 ) || 0;
			var rate = rates[ Math.max( 0, select.selectedIndex ) ] || rates[ 0 ];
			var total = hours * rate;
			var tier = 0;

			if ( hours > thresholds[ 0 ] ) {
				tier = 1;
			}
			if ( hours > thresholds[ 1 ] ) {
				tier = 2;
			}

			tierEl.textContent = tiers[ tier ] || '';
			costEl.textContent = formatter.format( total );
			if ( valueEl ) {
				valueEl.textContent = hours + ' ' + hoursLabel;
			}
			if ( hidden ) {
				hidden.value = ( tiers[ tier ] || '' ) + ' - ' + formatter.format( total ) + ' (' + hours + ' ' + hoursLabel + ')';
			}
		}

		select.addEventListener( 'change', update );
		range.addEventListener( 'input', update );
		document.addEventListener( 'wpcf7mailsent', function () {
			window.setTimeout( update, 0 );
		} );
		update();
	}

	document.addEventListener( 'DOMContentLoaded', function () {
		Array.prototype.forEach.call( document.querySelectorAll( '.vertex-estimate' ), init );
	} );
}() );
