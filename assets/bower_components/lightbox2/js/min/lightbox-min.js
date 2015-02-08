/**
 * Lightbox v2.7.1
 * by Lokesh Dhakar - http://lokeshdhakar.com/projects/lightbox2/
 *
 * @license http://creativecommons.org/licenses/by/2.5/
 * - Free for use in both personal and commercial projects
 * - Attribution requires leaving author name, author link, and the license info intact
 */
(function(){var $=jQuery,t=function(){function t(){this.fadeDuration=500,this.fitImagesInViewport=!0,this.resizeDuration=700,this.positionFromTop=50,this.showImageNumberLabel=!0,this.alwaysShowNavOnTouchDevices=!1,this.wrapAround=!1}return t.prototype.albumLabel=function(t,i){return"Image "+t+" of "+i},t}(),i=function(){function t(t){this.options=t,this.album=[],this.currentImageIndex=void 0,this.init()}return t.prototype.init=function(){this.enable(),this.build()},t.prototype.enable=function(){var t=this;$("body").on("click","a[rel^=lightbox], area[rel^=lightbox], a[data-lightbox], area[data-lightbox]",function(i){return t.start($(i.currentTarget)),!1})},t.prototype.build=function(){var t=this;$("<div id='lightboxOverlay' class='lightboxOverlay'></div><div id='lightbox' class='lightbox'><div class='lb-outerContainer'><div class='lb-container'><img class='lb-image' src='' /><div class='lb-nav'><a class='lb-prev' href='' ></a><a class='lb-next' href='' ></a></div><div class='lb-loader'><a class='lb-cancel'></a></div></div></div><div class='lb-dataContainer'><div class='lb-data'><div class='lb-details'><span class='lb-caption'></span><span class='lb-number'></span></div><div class='lb-closeContainer'><a class='lb-close'></a></div></div></div></div>").appendTo($("body")),this.$lightbox=$("#lightbox"),this.$overlay=$("#lightboxOverlay"),this.$outerContainer=this.$lightbox.find(".lb-outerContainer"),this.$container=this.$lightbox.find(".lb-container"),this.containerTopPadding=parseInt(this.$container.css("padding-top"),10),this.containerRightPadding=parseInt(this.$container.css("padding-right"),10),this.containerBottomPadding=parseInt(this.$container.css("padding-bottom"),10),this.containerLeftPadding=parseInt(this.$container.css("padding-left"),10),this.$overlay.hide().on("click",function(){return t.end(),!1}),this.$lightbox.hide().on("click",function(i){return"lightbox"===$(i.target).attr("id")&&t.end(),!1}),this.$outerContainer.on("click",function(i){return"lightbox"===$(i.target).attr("id")&&t.end(),!1}),this.$lightbox.find(".lb-prev").on("click",function(){return t.changeImage(0===t.currentImageIndex?t.album.length-1:t.currentImageIndex-1),!1}),this.$lightbox.find(".lb-next").on("click",function(){return t.changeImage(t.currentImageIndex===t.album.length-1?0:t.currentImageIndex+1),!1}),this.$lightbox.find(".lb-loader, .lb-close").on("click",function(){return t.end(),!1})},t.prototype.start=function(t){function i(t){e.album.push({link:t.attr("href"),title:t.attr("data-title")||t.attr("title")})}var e=this,n=$(window);n.on("resize",$.proxy(this.sizeOverlay,this)),$("select, object, embed").css({visibility:"hidden"}),this.sizeOverlay(),this.album=[];var a=0,o=t.attr("data-lightbox"),s;if(o){s=$(t.prop("tagName")+'[data-lightbox="'+o+'"]');for(var h=0;h<s.length;h=++h)i($(s[h])),s[h]===t[0]&&(a=h)}else if("lightbox"===t.attr("rel"))i(t);else{s=$(t.prop("tagName")+'[rel="'+t.attr("rel")+'"]');for(var r=0;r<s.length;r=++r)i($(s[r])),s[r]===t[0]&&(a=r)}var l=n.scrollTop()+this.options.positionFromTop,d=n.scrollLeft();this.$lightbox.css({top:l+"px",left:d+"px"}).fadeIn(this.options.fadeDuration),this.changeImage(a)},t.prototype.changeImage=function(t){var i=this;this.disableKeyboardNav();var e=this.$lightbox.find(".lb-image");this.$overlay.fadeIn(this.options.fadeDuration),$(".lb-loader").fadeIn("slow"),this.$lightbox.find(".lb-image, .lb-nav, .lb-prev, .lb-next, .lb-dataContainer, .lb-numbers, .lb-caption").hide(),this.$outerContainer.addClass("animating");var n=new Image;n.onload=function(){var a,o,s,h,r,l,d;e.attr("src",i.album[t].link),a=$(n),e.width(n.width),e.height(n.height),i.options.fitImagesInViewport&&(d=$(window).width(),l=$(window).height(),r=d-i.containerLeftPadding-i.containerRightPadding-20,h=l-i.containerTopPadding-i.containerBottomPadding-120,(n.width>r||n.height>h)&&(n.width/r>n.height/h?(s=r,o=parseInt(n.height/(n.width/s),10),e.width(s),e.height(o)):(o=h,s=parseInt(n.width/(n.height/o),10),e.width(s),e.height(o)))),i.sizeContainer(e.width(),e.height())},n.src=this.album[t].link,this.currentImageIndex=t},t.prototype.sizeOverlay=function(){this.$overlay.width($(window).width()).height($(document).height())},t.prototype.sizeContainer=function(t,i){function e(){n.$lightbox.find(".lb-dataContainer").width(s),n.$lightbox.find(".lb-prevLink").height(h),n.$lightbox.find(".lb-nextLink").height(h),n.showImage()}var n=this,a=this.$outerContainer.outerWidth(),o=this.$outerContainer.outerHeight(),s=t+this.containerLeftPadding+this.containerRightPadding,h=i+this.containerTopPadding+this.containerBottomPadding;a!==s||o!==h?this.$outerContainer.animate({width:s,height:h},this.options.resizeDuration,"swing",function(){e()}):e()},t.prototype.showImage=function(){this.$lightbox.find(".lb-loader").hide(),this.$lightbox.find(".lb-image").fadeIn("slow"),this.updateNav(),this.updateDetails(),this.preloadNeighboringImages(),this.enableKeyboardNav()},t.prototype.updateNav=function(){var t=!1;try{document.createEvent("TouchEvent"),t=this.options.alwaysShowNavOnTouchDevices?!0:!1}catch(i){}this.$lightbox.find(".lb-nav").show(),this.album.length>1&&(this.options.wrapAround?(t&&this.$lightbox.find(".lb-prev, .lb-next").css("opacity","1"),this.$lightbox.find(".lb-prev, .lb-next").show()):(this.currentImageIndex>0&&(this.$lightbox.find(".lb-prev").show(),t&&this.$lightbox.find(".lb-prev").css("opacity","1")),this.currentImageIndex<this.album.length-1&&(this.$lightbox.find(".lb-next").show(),t&&this.$lightbox.find(".lb-next").css("opacity","1"))))},t.prototype.updateDetails=function(){var t=this;"undefined"!=typeof this.album[this.currentImageIndex].title&&""!==this.album[this.currentImageIndex].title&&this.$lightbox.find(".lb-caption").html(this.album[this.currentImageIndex].title).fadeIn("fast").find("a").on("click",function(t){location.href=$(this).attr("href")}),this.album.length>1&&this.options.showImageNumberLabel?this.$lightbox.find(".lb-number").text(this.options.albumLabel(this.currentImageIndex+1,this.album.length)).fadeIn("fast"):this.$lightbox.find(".lb-number").hide(),this.$outerContainer.removeClass("animating"),this.$lightbox.find(".lb-dataContainer").fadeIn(this.options.resizeDuration,function(){return t.sizeOverlay()})},t.prototype.preloadNeighboringImages=function(){if(this.album.length>this.currentImageIndex+1){var t=new Image;t.src=this.album[this.currentImageIndex+1].link}if(this.currentImageIndex>0){var i=new Image;i.src=this.album[this.currentImageIndex-1].link}},t.prototype.enableKeyboardNav=function(){$(document).on("keyup.keyboard",$.proxy(this.keyboardAction,this))},t.prototype.disableKeyboardNav=function(){$(document).off(".keyboard")},t.prototype.keyboardAction=function(t){var i=27,e=37,n=39,a=t.keyCode,o=String.fromCharCode(a).toLowerCase();a===i||o.match(/x|o|c/)?this.end():"p"===o||a===e?0!==this.currentImageIndex?this.changeImage(this.currentImageIndex-1):this.options.wrapAround&&this.album.length>1&&this.changeImage(this.album.length-1):("n"===o||a===n)&&(this.currentImageIndex!==this.album.length-1?this.changeImage(this.currentImageIndex+1):this.options.wrapAround&&this.album.length>1&&this.changeImage(0))},t.prototype.end=function(){this.disableKeyboardNav(),$(window).off("resize",this.sizeOverlay),this.$lightbox.fadeOut(this.options.fadeDuration),this.$overlay.fadeOut(this.options.fadeDuration),$("select, object, embed").css({visibility:"visible"})},t}();$(function(){var e=new t,n=new i(e)})}).call(this);