!function($,e,t){"use strict";var i=$("<div/>").attr("class","imagelightbox-loading").append($("<div/>")),n=$("<button/>",{type:"button",class:"imagelightbox-arrow imagelightbox-arrow-left"}),o=$("<button/>",{type:"button",class:"imagelightbox-arrow imagelightbox-arrow-right"}),a=n.add(o),r=$("<div/>",{class:"imagelightbox-caption",html:"&nbsp;"}),l=$("<a/>",{class:"imagelightbox-close"}),c=$("<div/>",{class:"imagelightbox-overlay"}),s=$("<a/>",{href:"#",class:"imagelightbox-navitem"}),u=$("<div/>",{class:"imagelightbox-nav"}),f=$("<div/>",{class:"imagelightbox-wrapper"}),g=function(){var e=t.body||t.documentElement;return e=e.style,""===e.WebkitTransition?"-webkit-":""===e.MozTransition?"-moz-":""===e.OTransition?"-o-":""===e.transition&&""},d=!1!==g(),h=function(e,t,i){var n={},o=g();n[o+"transform"]="translateX("+t+")",n[o+"transition"]=o+"transform "+i+"s linear",e.css(n)},p="ontouchstart"in e,b=e.navigator.pointerEnabled||e.navigator.msPointerEnabled,m=function(e){if(p)return!0;if(!b||void 0===e||void 0===e.pointerType)return!1;if(void 0!==e.MSPOINTER_TYPE_MOUSE){if(e.MSPOINTER_TYPE_MOUSE!==e.pointerType)return!0}else if("mouse"!==e.pointerType)return!0;return!1},v=function(){return!!(t.fullscreenEnabled||t.webkitFullscreenEnabled||t.mozFullScreenEnabled||t.msFullscreenEnabled)},x=!1!==v();$.fn.imageLightbox=function(n){function o(e){return e.requestFullscreen?e.requestFullscreen():e.mozRequestFullScreen?e.mozRequestFullScreen():e.webkitRequestFullscreen?e.webkitRequestFullscreen():e.msRequestFullscreen&&e.msRequestFullscreen(),!1}function g(){return t.exitFullscreen?t.exitFullscreen():t.mozCancelFullScreen?t.mozCancelFullScreen():t.webkitExitFullscreen&&t.webkitExitFullscreen(),!1}function v(){o(t.getElementById(y.id).parentElement)||g()}var y=$.extend({selector:"a[data-imagelightbox]",id:"imagelightbox",allowedTypes:"png|jpg|jpeg|gif",animationSpeed:250,activity:!1,arrows:!1,button:!1,caption:!1,enableKeyboard:!0,fullscreen:!1,gutter:10,offsetY:0,lockBody:!1,navigation:!1,overlay:!1,preloadNext:!0,quitOnEnd:!1,quitOnImgClick:!1,quitOnDocClick:!0,quitOnEscKey:!0},n),w=function(){y.arrows&&P(this),y.navigation&&M(),y.overlay&&I(),y.button&&T(),y.caption&&f.append(r)},k=function(){y.activity&&S(),y.caption&&F()},E=function(){y.activity&&C(),y.arrows&&a.css("display","block")},q=function(){var e=R.index(z)-1;if(e<0){if(!0===y.quitOnEnd)return W(),!1;e=R.length-1}z=R.eq(e),f.trigger("previous.ilb2"),_(-1)},O=function(){var e=R.index(z)+1;if(e>=R.length){if(!0===y.quitOnEnd)return W(),!1;e=0}z=R.eq(e),f.trigger("next.ilb2"),_(1)},S=function(){f.append(i)},C=function(){$(".imagelightbox-loading").remove()},I=function(){f.append(c)},T=function(){l.appendTo(f).on("click.ilb7",function(){return W(),!1})},F=function(){r.html("&nbsp;"),$(z).data("ilb2-caption")?r.html($(z).data("ilb2-caption")):$(z).find("img").length>0&&r.html($(z).find("img").attr("alt"))},M=function(){if(R.length){for(var e=0;e<R.length;e++)u.append(s.clone());var t=u.children("a");t.eq(R.index(z)).addClass("active"),f.on("previous.ilb2 next.ilb2",function(){t.removeClass("active").eq(R.index(z)).addClass("active")}),f.append(u),u.on("click.ilb7 touchend.ilb7",function(){return!1}).on("click.ilb7 touchend.ilb7","a",function(){var e=$(this);if(R.eq(e.index()).attr("href")!==$(".imagelightbox").attr("src")){var t=R.eq(e.index());t.length&&(K=R.index(z),z=t,_(e.index()<K?-1:1))}e.addClass("active").siblings().removeClass("active")})}},P=function(){f.append(a),a.on("click.ilb7 touchend.ilb7",function(e){return e.stopImmediatePropagation(),e.preventDefault(),$(this).hasClass("imagelightbox-arrow-left")?q():O(),!1})},D="",R=$([]),z=$(),X=$(),B=0,L=0,N=0,j=!1,K=0,U=function(e){function i(e){var i=t.createElement("a"),n={},o,a,r;for(i.href=e,o=i.search.replace(/^\?/,"").split("&"),r=0;r<o.length;r++)a=o[r].split("="),n[a[0]]=a[1];return{protocol:i.protocol,host:i.host,hostname:i.hostname,port:i.port,pathname:i.pathname,search:i.search,searchObject:n,hash:i.hash}}var n=y.allowedTypes;if(!/^(?!\|)[\w|]+(?!\|)$/.test(n))return!1;var o=e.attr("href"),a=i(o).pathname;return new RegExp(n,"i").test(a)},Y=function(){if(!X.length)return!0;var t=y.caption?r.outerHeight():0,i=$(e).width(),n=$(e).height()-t,o=Math.abs(1-y.gutter/100),a=new Image;a.src=X.attr("src"),a.onload=function(){if(B=a.width,L=a.height,B>i||L>n){var t=B/L>i/n?B/i:L/n;B/=t,L/=t}var r=L*o,l=B*o,c=(1+y.offsetY/100)*(L-r)/2,s=($(e).width()-l)/2;X.css({width:l+"px",height:r+"px",top:c+"px",left:s+"px"})}},_=function(e){if(j)return!1;if(X.length){var t={opacity:0};d?h(X,100*e-N+"px",y.animationSpeed/1e3):t.left=parseInt(X.css("left"))+100*e+"px",X.animate(t,y.animationSpeed,function(){H()}),N=0}j=!0,k(),setTimeout(function(){var t=z.attr("href");X=$('<img id="'+y.id+'" />').attr("src",t).on("load.ilb7",function(){var t={opacity:1};if(X.appendTo(f),Y(),X.css("opacity",0),d)h(X,-100*e+"px",0),setTimeout(function(){h(X,"0px",y.animationSpeed/1e3)},50);else{var i=parseInt(X.css("left"));t.left=i+"px",X.css("left",i-100*e+"px")}if(X.animate(t,y.animationSpeed,function(){j=!1,E()}),y.preloadNext){var n=R.eq(R.index(z)+1);n.length||(n=R.eq(0)),$("<img />").attr("src",n.attr("href"))}f.trigger("loaded.ilb2")}).on("error.ilb7",function(){E()});var i=0,n=0,o=0;X.on(b?"pointerup.ilb7 MSPointerUp.ilb7":"click.ilb7",function(e){if(e.preventDefault(),y.quitOnImgClick)return W(),!1;if(m(e.originalEvent))return!0;var t=(e.pageX||e.originalEvent.pageX)-e.target.offsetLeft;B/2>t?q():O()}).on("touchstart.ilb7 pointerdown.ilb7 MSPointerDown.ilb7",function(e){if(!m(e.originalEvent)||y.quitOnImgClick)return!0;d&&(o=parseInt(X.css("left"))),i=e.originalEvent.pageX||e.originalEvent.touches[0].pageX}).on("touchmove.ilb7 pointermove.ilb7 MSPointerMove.ilb7",function(e){if(!b&&"pointermove"===e.type||!m(e.originalEvent)||y.quitOnImgClick)return!0;e.preventDefault(),n=e.originalEvent.pageX||e.originalEvent.touches[0].pageX,N=i-n,d?h(X,-N+"px",0):X.css("left",o-N+"px")}).on("touchend.ilb7 touchcancel.ilb7 pointerup.ilb7 pointercancel.ilb7 MSPointerUp.ilb7 MSPointerCancel.ilb7",function(e){if(!m(e.originalEvent)||y.quitOnImgClick)return!0;Math.abs(N)>50?N<0?q():O():d?h(X,"0px",y.animationSpeed/1e3):X.animate({left:o+"px"},y.animationSpeed/2)})},y.animationSpeed+100)},H=function(){if(!X.length)return!1;X.remove(),X=$()},Q=function(e){if(j)return!1;j=!1,z=e,w(),$("body").append(f).addClass("imagelightbox-disable-select"),y.lockBody&&$("body").addClass("imagelightbox-scroll-lock"),f.trigger("start.ilb2"),_(0)},W=function(){if(f.trigger("quit.ilb2"),$("body").removeClass("imagelightbox-disable-select"),y.lockBody&&$("body").removeClass("imagelightbox-scroll-lock"),!X.length)return!1;X.animate({opacity:0},y.animationSpeed,function(){H(),j=!1,R=$([]),f.remove().find("*").remove()})},A=function(e){function t(){e.filter(function(){return $(this).data("imagelightbox")===D}).filter(function(){return U($(this))}).each(function(){R=R.add($(this))})}e.on("click.ilb7",{set:D},function(e){e.preventDefault(),D=$(e.currentTarget).data("imagelightbox"),t(),R.length<1?W():Q($(this))})};return $(e).on("resize.ilb7",Y),$(t).ready(function(){$(t).on("keydown.ilb7",function(e){[13].indexOf(e.which)>-1&&e.preventDefault()}),y.quitOnDocClick&&$(t).on(p?"touchend.ilb7":"click.ilb7",function(e){X.length&&!$(e.target).is(X)&&(e.preventDefault(),W())}),(y.lockBody||y.fullscreen&&x)&&$(t).on("keydown.ilb7",function(e){if(!X.length)return!0;[9,32,38,40].indexOf(e.which)>-1&&e.preventDefault(),[13].indexOf(e.which)>-1&&v()}),y.enableKeyboard&&$(t).on("keyup.ilb7",function(e){if(!X.length)return!0;e.preventDefault(),[27].indexOf(e.which)>-1&&y.quitOnEscKey&&W(),[37].indexOf(e.which)>-1?q():[39].indexOf(e.which)>-1&&O()})}),$(t).off("click",y.selector),A($(this)),this.addToImageLightbox=function(e){A(e)},this.loadPreviousImage=function(){q()},this.loadNextImage=function(){O()},this.quitImageLightbox=function(){return W(),this},this.startImageLightbox=function(){$(this).trigger("click.ilb7")},this}}(jQuery,window,document);