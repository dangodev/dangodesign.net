// Behold! Pre-Grunt workflow, un-uglified JS! Bask in it!

$('#contact-form').submit(function(e) {
	e.preventDefault();
	var postdata = $(this).serialize();
	$.ajax({url: '/sendmail.php',
		type: 'POST',
		data: postdata,
		timeout: 20000, // 10 sec timeout
		beforeSend: function() { $('#form-overlay').fadeIn(400);},
		error: function(jqXHR, status, error) { $('#form-overlay').hide();$('#form-status').show().html('<div class="red">Error: message couldn’t be sent. Please try again.</div>')},
		success: function(data) {
			$('#form-overlay').hide();
			if(data == 'sent') {
				$('#form-left, #form-center, #form-right').slideUp(300);
				$('#form-status').show().html('<em>Here’s the mail<br>it never fails<br>it makes me wanna wag my—</em><br><br>Oh. Sorry. Um, your message was sent. I’ll respond as soon as I can!');
			} else {
				$('#form-status').show().html('<div class="red">Error: message couldn’t be sent. Please try again.</div>');
			}
		}
	});
	return false;
});

var domain = '//dangodesign.net/atsui/wp-content/themes/dango/img/';
$('#lunchrush').html('<div id="special"></div><div id="strike"></div><audio id="sfx"><source src="' + domain + 'lunchrush.mp3" type="audio/mpeg"><source src="' + domain + 'lunchrush.ogg" type="audio/ogg"><embed src="' + domain + 'lunchrush.mp3">"></audio>');

var success = function() {
	$('#lunchrush img').remove();
	$('#lunchrush').css({opacity:0,top:0,left:0}).animate({opacity:1}, 300, function() {
		window.setTimeout(function() {
			$('#lunchrush #strike').after('<img src="' + domain + 'lunchrush.gif?' + (new Date).getTime() + '">');
			document.getElementById('sfx').play();
		}, 500);
		window.setTimeout(function() {
			$('#strike').css({opacity:1});
		}, 1500);
		window.setTimeout(function() {
			$('#special').css({opacity:1});
			$('#strike').css({opacity:0});
		}, 2100);
		window.setTimeout(function() {
			$('#special').animate({opacity:0}, 300);
			window.setTimeout(function() {
				$('#lunchrush').animate({opacity:0}, 400, function() {
					$(this).attr('style', '');
				});
			}, 2000);
		}, 4800);
	});
}

var konami = new Konami(success);


// ----- FitVids ----- //

/*global jQuery */
/*jshint browser:true */
/*!
* FitVids 1.1
*
* Copyright 2013, Chris Coyier - http://css-tricks.com + Dave Rupert - http://daverupert.com
* Credit to Thierry Koblentz - http://www.alistapart.com/articles/creating-intrinsic-ratios-for-video/
* Released under the WTFPL license - http://sam.zoy.org/wtfpl/
*
*/

(function( $ ){

  "use strict";

  $.fn.fitVids = function( options ) {
    var settings = {
      customSelector: null,
      ignore: null
    };

    if(!document.getElementById('fit-vids-style')) {
      // appendStyles: https://github.com/toddmotto/fluidvids/blob/master/dist/fluidvids.js
      var head = document.head || document.getElementsByTagName('head')[0];
      var css = '.fluid-width-video-wrapper{width:100%;position:relative;padding:0;}.fluid-width-video-wrapper iframe,.fluid-width-video-wrapper object,.fluid-width-video-wrapper embed {position:absolute;top:0;left:0;width:100%;height:100%;}';
      var div = document.createElement('div');
      div.innerHTML = '<p>x</p><style id="fit-vids-style">' + css + '</style>';
      head.appendChild(div.childNodes[1]);
    }

    if ( options ) {
      $.extend( settings, options );
    }

    return this.each(function(){
      var selectors = [
        "iframe[src*='player.vimeo.com']",
        "iframe[src*='youtube.com']",
        "iframe[src*='youtube-nocookie.com']",
        "iframe[src*='kickstarter.com'][src*='video.html']",
        "object",
        "embed"
      ];

      if (settings.customSelector) {
        selectors.push(settings.customSelector);
      }

      var ignoreList = '.fitvidsignore';

      if(settings.ignore) {
        ignoreList = ignoreList + ', ' + settings.ignore;
      }

      var $allVideos = $(this).find(selectors.join(','));
      $allVideos = $allVideos.not("object object"); // SwfObj conflict patch
      $allVideos = $allVideos.not(ignoreList); // Disable FitVids on this video.

      $allVideos.each(function(){
        var $this = $(this);
        if($this.parents(ignoreList).length > 0) {
          return; // Disable FitVids on this video.
        }
        if (this.tagName.toLowerCase() === 'embed' && $this.parent('object').length || $this.parent('.fluid-width-video-wrapper').length) { return; }
        if ((!$this.css('height') && !$this.css('width')) && (isNaN($this.attr('height')) || isNaN($this.attr('width'))))
        {
          $this.attr('height', 9);
          $this.attr('width', 16);
        }
        var height = ( this.tagName.toLowerCase() === 'object' || ($this.attr('height') && !isNaN(parseInt($this.attr('height'), 10))) ) ? parseInt($this.attr('height'), 10) : $this.height(),
            width = !isNaN(parseInt($this.attr('width'), 10)) ? parseInt($this.attr('width'), 10) : $this.width(),
            aspectRatio = height / width;
        if(!$this.attr('id')){
          var videoID = 'fitvid' + Math.floor(Math.random()*999999);
          $this.attr('id', videoID);
        }
        $this.wrap('<div class="fluid-width-video-wrapper"></div>').parent('.fluid-width-video-wrapper').css('padding-top', (aspectRatio * 100)+"%");
        $this.removeAttr('height').removeAttr('width');
      });
    });
  };

})( window.jQuery || window.Zepto );

$('body').fitVids();
