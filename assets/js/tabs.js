/**
 * Accessible tabs for the "About" pattern.
 *
 * Without JavaScript every panel stays visible, so no content is hidden.
 *
 * @package VERTEX_Solutions
 */
( function () {
	'use strict';

	function initTabs( container ) {
		var tabs = Array.prototype.slice.call( container.querySelectorAll( '[role="tab"]' ) );
		var panels = tabs.map( function ( tab ) {
			return document.getElementById( tab.getAttribute( 'aria-controls' ) );
		} );

		if ( ! tabs.length || panels.indexOf( null ) !== -1 ) {
			return;
		}

		panels.forEach( function ( panel, index ) {
			panel.setAttribute( 'role', 'tabpanel' );
			panel.setAttribute( 'aria-labelledby', tabs[ index ].id );
		} );

		function activate( index, focus ) {
			tabs.forEach( function ( tab, i ) {
				var active = i === index;
				tab.setAttribute( 'aria-selected', active ? 'true' : 'false' );
				tab.setAttribute( 'tabindex', active ? '0' : '-1' );
				tab.classList.toggle( 'is-active', active );
				panels[ i ].classList.toggle( 'is-active', active );
			} );
			if ( focus ) {
				tabs[ index ].focus();
			}
		}

		tabs.forEach( function ( tab, index ) {
			tab.addEventListener( 'click', function () {
				activate( index, false );
			} );

			tab.addEventListener( 'keydown', function ( event ) {
				var next = null;
				if ( 'ArrowRight' === event.key ) {
					next = ( index + 1 ) % tabs.length;
				} else if ( 'ArrowLeft' === event.key ) {
					next = ( index - 1 + tabs.length ) % tabs.length;
				} else if ( 'Home' === event.key ) {
					next = 0;
				} else if ( 'End' === event.key ) {
					next = tabs.length - 1;
				}
				if ( null !== next ) {
					event.preventDefault();
					activate( next, true );
				}
			} );
		} );

		container.classList.add( 'is-enhanced' );
		activate( 0, false );
	}

	document.addEventListener( 'DOMContentLoaded', function () {
		Array.prototype.forEach.call( document.querySelectorAll( '.vertex-tabs' ), initTabs );
	} );
}() );
