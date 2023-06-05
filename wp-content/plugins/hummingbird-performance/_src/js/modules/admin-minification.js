/* global WPHB_Admin */
/* global wphb */

/**
 * Asset Optimization scripts.
 *
 * @package
 */

import Fetcher from '../utils/fetcher';
import { getString, getLink } from '../utils/helpers';
import MinifyScanner from '../scanners/MinifyScanner';

( function( $ ) {
	'use strict';

	WPHB_Admin.minification = {
		module: 'minification',
		$checkFilesResultsContainer: null,
		checkURLSList: null,
		checkedURLS: 0,

		init() {
			const self = this;

			// Init files scanner.
			this.scanner = new MinifyScanner(
				wphb.minification.get.totalSteps,
				wphb.minification.get.currentScanStep
			);

			// Check files button.
			$( '#check-files' ).on( 'click', function( e ) {
				e.preventDefault();
				$( document ).trigger( 'check-files' );
			} );

			$( document ).on( 'check-files', function() {
				window.SUI.openModal( 'check-files-modal', 'wpbody-content', 'check-files-modal' );
				$( this ).attr( 'disabled', true );
				self.scanner.start();
			} );

			// CDN checkbox update status
			const checkboxes = $( 'input[type=checkbox][name=use_cdn]' );
			checkboxes.on( 'change', function() {
				$( '#cdn_file_exclude' ).toggleClass( 'sui-hidden' );
				const cdnValue = $( this ).is( ':checked' );

				// Handle two CDN checkboxes on Asset Optimization page
				checkboxes.each( function() {
					this.checked = cdnValue;
				} );

				// Update CDN status
				Fetcher.minification.toggleCDN( cdnValue ).then( () => {
					WPHB_Admin.notices.show();
				} );
			} );

			$( 'input[type=checkbox][name=debug_log]' ).on(
				'change',
				function() {
					const enabled = $( this ).is( ':checked' );
					Fetcher.minification.toggleLog( enabled ).then( () => {
						WPHB_Admin.notices.show();
						if ( enabled ) {
							$( '.wphb-logging-box' ).show();
						} else {
							$( '.wphb-logging-box' ).hide();
						}
					} );
				}
			);

			/**
			 * Save critical css file
			 */
			$( '#wphb-minification-tools-form' ).on( 'submit', function( e ) {
				e.preventDefault();

				const spinner = $( this ).find( '.spinner' );
				spinner.addClass( 'visible' );

				Fetcher.minification
					.saveCriticalCss( $( this ).serialize() )
					.then( ( response ) => {
						spinner.removeClass( 'visible' );
						if ( 'undefined' !== typeof response && response.success ) {
							WPHB_Admin.notices.show( response.message );
						} else {
							WPHB_Admin.notices.show( response.message, 'error' );
						}
					} );
			} );

			/**
			 * Parse custom asset dir input
			 *
			 * @since 1.9
			 */
			const textField = document.getElementById( 'file_path' );
			if ( null !== textField ) {
				textField.onchange = function( e ) {
					e.preventDefault();
					Fetcher.minification
						.updateAssetPath( $( this ).val() )
						.then( ( response ) => {
							if ( response.message ) {
								WPHB_Admin.notices.show( response.message, 'error' );
							} else {
								WPHB_Admin.notices.show();
							}
						} );
				};
			}

			/**
			 * Asset optimization network settings page.
			 *
			 * @since 2.0.0
			 */

			// Show/hide settings, based on checkbox value.
			$( '#wphb-network-ao' ).on( 'click', function() {
				$( '#wphb-network-border-frame' ).toggleClass( 'sui-hidden' );
			} );

			// Handle settings select.
			$( '#wphb-box-minification-network-settings' ).on(
				'change',
				'input[type=radio]',
				function( e ) {
					const divs = document.querySelectorAll(
						'input[name=' + e.target.name + ']'
					);

					// Toggle logs frame.
					if ( 'log' === e.target.name ) {
						$( '.wphb-logs-frame' ).toggle( e.target.value );
					}

					for ( let i = 0; i < divs.length; ++i ) {
						divs[ i ].parentNode.classList.remove( 'active' );
					}

					e.target.parentNode.classList.add( 'active' );
				}
			);

			// Network settings.
			$( '#wphb-ao-network-settings' ).on( 'click', function( e ) {
				e.preventDefault();

				const spinner = $( '.sui-box-footer' ).find( '.spinner' );
				spinner.addClass( 'visible' );

				const form = $( '#ao-network-settings-form' ).serialize();
				Fetcher.minification
					.saveNetworkSettings( form )
					.then( ( response ) => {
						spinner.removeClass( 'visible' );
						if ( 'undefined' !== typeof response && response.success ) {
							WPHB_Admin.notices.show();
						} else {
							WPHB_Admin.notices.show( getString( 'errorSettingsUpdate' ), 'error' );
						}
					} );
			} );

			/**
			 * Save exclusion rules.
			 */
			$( '#wphb-ao-settings-update' ).on( 'click', function( e ) {
				e.preventDefault();

				const spinner = $( '.sui-box-footer' ).find( '.spinner' );
				spinner.addClass( 'visible' );

				const data = self.getMultiSelectValues( 'cdn_exclude' );

				Fetcher.minification
					.updateExcludeList( JSON.stringify( data ) )
					.then( () => {
						spinner.removeClass( 'visible' );
						WPHB_Admin.notices.show();
					} );
			} );

			/**
			 * Asset optimization 2.0
			 *
			 * @since 2.6.0
			 */

			// How does it work? stuff.
			const expandButtonManual = document.getElementById( 'manual-ao-hdiw-modal-expand' );
			if ( expandButtonManual ) {
				expandButtonManual.onclick = function() {
					document.getElementById( 'manual-ao-hdiw-modal' ).classList.remove( 'sui-modal-sm' );
					document.getElementById( 'manual-ao-hdiw-modal-header-wrap' ).classList.remove( 'sui-box-sticky' );
					document.getElementById( 'automatic-ao-hdiw-modal' ).classList.remove( 'sui-modal-sm' );
				};
			}

			const collapseButtonManual = document.getElementById( 'manual-ao-hdiw-modal-collapse' );
			if ( collapseButtonManual ) {
				collapseButtonManual.onclick = function() {
					document.getElementById( 'manual-ao-hdiw-modal' ).classList.add( 'sui-modal-sm' );
					const el = document.getElementById( 'manual-ao-hdiw-modal-header-wrap' );
					if ( el.classList.contains( 'video-playing' ) ) {
						el.classList.add( 'sui-box-sticky' );
					}
					document.getElementById( 'automatic-ao-hdiw-modal' ).classList.add( 'sui-modal-sm' );
				};
			}

			// How does it work? stuff.
			const expandButtonAuto = document.getElementById( 'automatic-ao-hdiw-modal-expand' );
			if ( expandButtonAuto ) {
				expandButtonAuto.onclick = function() {
					document.getElementById( 'automatic-ao-hdiw-modal' ).classList.remove( 'sui-modal-sm' );
					document.getElementById( 'manual-ao-hdiw-modal' ).classList.remove( 'sui-modal-sm' );
				};
			}

			const collapseButtonAuto = document.getElementById( 'automatic-ao-hdiw-modal-collapse' );
			if ( collapseButtonAuto ) {
				collapseButtonAuto.onclick = function() {
					document.getElementById( 'automatic-ao-hdiw-modal' ).classList.add( 'sui-modal-sm' );
					document.getElementById( 'manual-ao-hdiw-modal' ).classList.add( 'sui-modal-sm' );
				};
			}

			const autoTrigger = document.getElementById( 'hdw-auto-trigger-label' );
			if ( autoTrigger ) {
				autoTrigger.addEventListener( 'click', () => {
					window.SUI.replaceModal(
						'automatic-ao-hdiw-modal-content',
						'wphb-basic-hdiw-link'
					);
				} );
			}

			const manualTrigger = document.getElementById( 'hdw-manual-trigger-label' );
			if ( manualTrigger ) {
				manualTrigger.addEventListener( 'click', () => {
					window.SUI.replaceModal(
						'manual-ao-hdiw-modal-content',
						'wphb-basic-hdiw-link'
					);
				} );
			}

			return this;
		},

		/**
		 * Switch from advanced to basic view.
		 * Called from switch view modal.
		 *
		 * @param {string} mode
		 */
		switchView( mode ) {
			let hide = false;
			const trackBox = document.getElementById(
				'hide-' + mode + '-modal'
			);

			if ( trackBox && true === trackBox.checked ) {
				hide = true;
			}

			Fetcher.minification.toggleView( mode, hide ).then( () => {
				window.location.href = getLink( 'minification' );
			} );
		},

		/**
		 * Go to the Asset Optimization files page.
		 *
		 * @since 1.9.2
		 * @since 2.1.0  Added show_tour parameter.
		 * @since 2.6.0  Remove show_tour parameter.
		 */
		goToSettings() {
			window.SUI.closeModal();

			Fetcher.minification
				.toggleCDN( $( 'input#enable_cdn' ).is( ':checked' ) )
				.then( () => {
					window.location.href = getLink( 'minification' );
				} );
		},

		/**
		 * Get all selected values from multiselect.
		 *
		 * @since 2.6.0
		 *
		 * @param {string} id Select ID.
		 * @return {{styles: *[], scripts: *[]}}  Styles & scripts array.
		 */
		getMultiSelectValues( id ) {
			const selected = $( '#' + id ).find( ':selected' );

			const data = { scripts: [], styles: [] };

			for ( let i = 0; i < selected.length; ++i ) {
				data[ selected[ i ].dataset.type ].push( selected[ i ].value );
			}

			return data;
		},

		/**
		 * Skip upgrade.
		 *
		 * @since 2.6.0
		 */
		skipUpgrade() {
			Fetcher.common.call( 'wphb_ao_skip_upgrade' ).then( () => {
				window.location.href = getLink( 'minification' );
			} );
		},

		/**
		 * Perform AO upgrade.
		 *
		 * @since 2.6.0
		 */
		doUpgrade() {
			Fetcher.common.call( 'wphb_ao_do_upgrade' ).then( () => {
				window.location.href = getLink( 'minification' );
			} );
		},

		/**
		 * Purge asset optimization orphaned data.
		 *
		 * @since 3.1.2
		 * @see Admin\Pages\Minification::orphaned_notice
		 */
		purgeOrphanedData() {
			const count = document.getElementById( 'count-ao-orphaned' )
				.innerHTML;

			Fetcher.advanced.clearOrphanedBatch( count ).then( () => {
				window.location.reload();
			} );
		},
	}; // End WPHB_Admin.minification.
}( jQuery ) );
