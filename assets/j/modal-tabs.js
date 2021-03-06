/**
 * "The contents of this file are subject to the Mozilla Public License
 *  Version 1.1 (the "License"); you may not use this file except in
 *  compliance with the License. You may obtain a copy of the License at
 *  http://www.mozilla.org/MPL/
 
 *  Software distributed under the License is distributed on an "AS IS"
 *  basis, WITHOUT WARRANTY OF ANY KIND, either express or implied. See the
 *  License for the specific language governing rights and limitations
 *  under the License.

 *  The Original Code is OpenVBX, released June 15, 2010.

 *  The Initial Developer of the Original Code is Twilio Inc.
 *  Portions created by Twilio Inc. are Copyright (C) 2010.
 *  All Rights Reserved.

 * Contributor(s):
 **/

(function($) {
	$.fn.modalTabs = function(settings) {
		var config = {
			attr : 'href',
			history : true
		};
		
		if (settings) $.extend(config, settings);
		
		this.each(function() {
			var tabs = this;
			$(tabs).on('click','.modal-toolbar a', function(event) {
				event.preventDefault();
				$('a', tabs).removeClass('selected');
				$(this).addClass('selected');
				var pane = $(this).attr(config.attr);
				if(config.attr == 'href') {
					pane = pane.replace(/^.*#/, '');
				}
				
				$('.modal-tab-view').hide();
				$('#'+pane+'-pane').show();
				
				if(config.history) {
					document.location.href = document.location.href.replace(/^.*/,'#'+anchor);
				}
				return true;
			});
			
			var hash = function() {
				var _hash =  document.location.hash.replace('#','');
				if(_hash == '') {
					_hash = "edit";
				}
				return _hash;
			};
			
			if(config.history) {
				$(window).hashchange( function() { $('a[href="#'+hash()+'"]', tabs).click(); } );
				$(window).trigger( "hashchange" );
				$('a[href="#'+hash()+'"]').click();
				history.navigationMode = 'compatible';
			}

			$('.modal-tab-view', tabs).each(function() {
				var modal = this;
				$(modal).on('click','a.swap-form',  function() {
					$('a.swap-form, fieldset', modal).toggle();
					return false;
				});
			});
		});
	};
})(jQuery);