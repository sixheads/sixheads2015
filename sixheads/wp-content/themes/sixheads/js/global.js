(function(){var e=navigator.userAgent.toLowerCase().indexOf("webkit")>-1,t=navigator.userAgent.toLowerCase().indexOf("opera")>-1,n=navigator.userAgent.toLowerCase().indexOf("msie")>-1;if((e||t||n)&&document.getElementById&&window.addEventListener){window.addEventListener("hashchange",function(){var e=document.getElementById(location.hash.substring(1));if(e){if(!/^(?:a|select|input|button|textarea)$/i.test(e.tagName))e.tabIndex=-1;e.focus()}},false)}})()
(function(e){e(document).ready(function(){e("body").addClass("js");var t=e("#site-navigation"),n=e(".menu-toggle");n.click(function(){n.toggleClass("active");t.toggleClass("active");return false});e(function(){e("a[href*=#]:not([href=#])").click(function(){if(location.pathname.replace(/^\//,"")==this.pathname.replace(/^\//,"")&&location.hostname==this.hostname){var t=e(this.hash);t=t.length?t:e("[name="+this.hash.slice(1)+"]");if(t.length){e("html,body").animate({scrollTop:t.offset().top},1e3);return false}}})})})})(jQuery)