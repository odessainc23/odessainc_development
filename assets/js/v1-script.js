(function($) {
	'use strict';

	window.odessacore				= window.odessacore || {};

	var odessaCore = window.odessacore = {
		init: function() {
			if (odessaCore._isInit()) {
				// already init - avoid double init..
				return false;
			}

			odessaCore.config = {
				selectors: {
				},
				classes: {
					// Header Menu

					// Leadership Page
					leadershipItem			: '.pglead_ldcard',
					leadershipLink			: '.pglead_ld-item',
					leadershipExpander		: '.pglead_ld-expander',
					leadershipExpanderClose	: '.pglead_ld-exclose',
				}
			};

			odessaCore.initDone = true;

			odessaCore.bind();
		},

		_isInit: function() {
			if (typeof odessaCore.initDone === 'boolean') {
				return odessaCore.initDone;
			} else {
				return false;
			}
		},

		bind: function() {
			var __selectors	= odessaCore.config.selectors;
			var __classes	= odessaCore.config.classes;

			$(document).on('click', 'body', function(e) {
				var _mainContext	= $(__classes.leadershipItem);
				var _target			= $(e.target);
				
				if (!_mainContext.is(e.target) && _mainContext.has(e.target).length === 0) {
					_mainContext.removeClass('is-expanded').addClass('is-collapsed');
					_mainContext.find(__classes.leadershipExpander).slideUp(200);
				}
			});

			// Leadership Page - Item Click Event
			$(__classes.leadershipLink).on('click', function() {
				var _mainContext	= $(__classes.leadershipItem);
				var _currentContext = $(this).closest(__classes.leadershipItem);

				_mainContext.not(_currentContext).removeClass('is-expanded').addClass('is-collapsed');
				_mainContext.not(_currentContext).find(__classes.leadershipExpander).hide();

				if ( _currentContext.hasClass('is-collapsed') ) {
					$('html, body').animate({
						scrollTop: _currentContext.offset().top - 85
					}, 500);

					_currentContext.addClass('is-expanded').removeClass('is-collapsed');
					_currentContext.find(__classes.leadershipExpander).slideDown(200);
				} else {
					_currentContext.find(__classes.leadershipExpanderClose).trigger('click');
				}
			});

			// Leadership Page - Expander Close Click Event
			$(__classes.leadershipExpanderClose).on('click', function() {
				var _currentContext = $(this).closest(__classes.leadershipItem);

				_currentContext.removeClass('is-expanded').addClass('is-collapsed');
				_currentContext.find(__classes.leadershipExpander).slideUp(200);

				$('html, body').animate({
					scrollTop: _currentContext.offset().top - 85
				}, 500);
			});
		}
	}

	$(document).ready(function() {
		window.odessacore.init();
	});
})(jQuery);