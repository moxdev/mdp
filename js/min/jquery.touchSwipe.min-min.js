!function(n){"function"==typeof define&&define.amd&&define.amd.jQuery?define(["jquery"],n):n(jQuery)}(function(n){function e(e){return!e||void 0!==e.allowPageScroll||void 0===e.swipe&&void 0===e.swipeStatus||(e.allowPageScroll=c),void 0!==e.click&&void 0===e.tap&&(e.tap=e.click),e||(e={}),e=n.extend({},n.fn.swipe.defaults,e),this.each(function(){var r=n(this),i=r.data(D);i||(i=new t(this,e),r.data(D,i))})}function t(e,t){function w(e){if(!(hn()||n(e.target).closest(t.excludedElements,Vn).length>0)){var r=e.originalEvent?e.originalEvent:e,i,o=x?r.touches[0]:r;return zn=S,(x?Gn=r.touches.length:e.preventDefault(),jn=0,_n=null,Wn=null,Qn=0,Cn=0,Xn=0,Yn=1,qn=0,Zn=wn(),Fn=bn(),cn(),!x||Gn===t.fingers||t.fingers===b||q()?(fn(0,o),Bn=Dn(),2==Gn&&(fn(1,r.touches[1]),Cn=Xn=mn(Zn[0].start,Zn[1].start)),(t.swipeStatus||t.pinchStatus)&&(i=U(r,zn))):i=!1,!1===i)?(zn=O,U(r,zn),i):(t.hold&&(te=setTimeout(n.proxy(function(){Vn.trigger("hold",[r.target]),t.hold&&(i=t.hold.call(Vn,r,r.target))},this),t.longTapThreshold)),pn(!0),null)}}function L(n){var e=n.originalEvent?n.originalEvent:n;if(zn!==y&&zn!==O&&!sn()){var r,i=x?e.touches[0]:e,o=dn(i);if(Jn=Dn(),x&&(Gn=e.touches.length),t.hold&&clearTimeout(te),zn=m,2==Gn&&(0==Cn?(fn(1,e.touches[1]),Cn=Xn=mn(Zn[0].start,Zn[1].start)):(dn(e.touches[1]),Xn=mn(Zn[0].end,Zn[1].end),Wn=On(Zn[0].end,Zn[1].end)),Yn=yn(Cn,Xn),qn=Math.abs(Cn-Xn)),Gn===t.fingers||t.fingers===b||!x||q()){if(_n=Pn(o.start,o.end),X(n,_n),jn=xn(o.start,o.end),Qn=Sn(),vn(_n,jn),(t.swipeStatus||t.pinchStatus)&&(r=U(e,zn)),!t.triggerOnTouchEnd||t.triggerOnTouchLeave){var u=!0;if(t.triggerOnTouchLeave){var l=Ln(this);u=kn(o.end,l)}!t.triggerOnTouchEnd&&u?zn=N(m):t.triggerOnTouchLeave&&!u&&(zn=N(y)),zn!=O&&zn!=y||U(e,zn)}}else zn=O,U(e,zn);!1===r&&(zn=O,U(e,zn))}}function k(n){var e=n.originalEvent;return x&&e.touches.length>0?(an(),!0):(sn()&&(Gn=$n),Jn=Dn(),Qn=Sn(),_()||!j()?(zn=O,U(e,zn)):t.triggerOnTouchEnd||0==t.triggerOnTouchEnd&&zn===m?(n.preventDefault(),zn=y,U(e,zn)):!t.triggerOnTouchEnd&&B()?(zn=y,H(e,zn,f)):zn===m&&(zn=O,U(e,zn)),pn(!1),null)}function R(){Gn=0,Jn=0,Bn=0,Cn=0,Xn=0,Yn=1,cn(),pn(!1)}function A(n){var e=n.originalEvent;t.triggerOnTouchLeave&&(zn=N(y),U(e,zn))}function I(){Vn.unbind(An,w),Vn.unbind(Hn,R),Vn.unbind(In,L),Vn.unbind(Nn,k),Un&&Vn.unbind(Un,A),pn(!1)}function N(n){var e=n,r=C(),i=j(),o=_();return!r||o?e=O:!i||n!=m||t.triggerOnTouchEnd&&!t.triggerOnTouchLeave?!i&&n==y&&t.triggerOnTouchLeave&&(e=O):e=y,e}function U(n,e){var t=void 0;return z()||V()||W()||q()?((z()||V())&&(t=H(n,e,h)),(W()||q())&&!1!==t&&(t=H(n,e,p))):un()&&!1!==t?t=H(n,e,d):ln()&&!1!==t?t=H(n,e,g):on()&&!1!==t&&(t=H(n,e,f)),e===O&&R(n),e===y&&(x?0==n.touches.length&&R(n):R(n)),t}function H(e,c,s){var w=void 0;if(s==h){if(Vn.trigger("swipeStatus",[c,_n||null,jn||0,Qn||0,Gn,Zn]),t.swipeStatus&&!1===(w=t.swipeStatus.call(Vn,e,c,_n||null,jn||0,Qn||0,Gn,Zn)))return!1;if(c==y&&F()){if(Vn.trigger("swipe",[_n,jn,Qn,Gn,Zn]),t.swipe&&!1===(w=t.swipe.call(Vn,e,_n,jn,Qn,Gn,Zn)))return!1;switch(_n){case r:Vn.trigger("swipeLeft",[_n,jn,Qn,Gn,Zn]),t.swipeLeft&&(w=t.swipeLeft.call(Vn,e,_n,jn,Qn,Gn,Zn));break;case i:Vn.trigger("swipeRight",[_n,jn,Qn,Gn,Zn]),t.swipeRight&&(w=t.swipeRight.call(Vn,e,_n,jn,Qn,Gn,Zn));break;case o:Vn.trigger("swipeUp",[_n,jn,Qn,Gn,Zn]),t.swipeUp&&(w=t.swipeUp.call(Vn,e,_n,jn,Qn,Gn,Zn));break;case u:Vn.trigger("swipeDown",[_n,jn,Qn,Gn,Zn]),t.swipeDown&&(w=t.swipeDown.call(Vn,e,_n,jn,Qn,Gn,Zn));break}}}if(s==p){if(Vn.trigger("pinchStatus",[c,Wn||null,qn||0,Qn||0,Gn,Yn,Zn]),t.pinchStatus&&!1===(w=t.pinchStatus.call(Vn,e,c,Wn||null,qn||0,Qn||0,Gn,Yn,Zn)))return!1;if(c==y&&Y())switch(Wn){case l:Vn.trigger("pinchIn",[Wn||null,qn||0,Qn||0,Gn,Yn,Zn]),t.pinchIn&&(w=t.pinchIn.call(Vn,e,Wn||null,qn||0,Qn||0,Gn,Yn,Zn));break;case a:Vn.trigger("pinchOut",[Wn||null,qn||0,Qn||0,Gn,Yn,Zn]),t.pinchOut&&(w=t.pinchOut.call(Vn,e,Wn||null,qn||0,Qn||0,Gn,Yn,Zn));break}}return s==f?c!==O&&c!==y||(clearTimeout(ee),clearTimeout(te),J()&&!en()?(ne=Dn(),ee=setTimeout(n.proxy(function(){ne=null,Vn.trigger("tap",[e.target]),t.tap&&(w=t.tap.call(Vn,e,e.target))},this),t.doubleTapThreshold)):(ne=null,Vn.trigger("tap",[e.target]),t.tap&&(w=t.tap.call(Vn,e,e.target)))):s==d?c!==O&&c!==y||(clearTimeout(ee),ne=null,Vn.trigger("doubletap",[e.target]),t.doubleTap&&(w=t.doubleTap.call(Vn,e,e.target))):s==g&&(c!==O&&c!==y||(clearTimeout(ee),ne=null,Vn.trigger("longtap",[e.target]),t.longTap&&(w=t.longTap.call(Vn,e,e.target)))),w}function j(){var n=!0;return null!==t.threshold&&(n=jn>=t.threshold),n}function _(){var n=!1;return null!==t.cancelThreshold&&null!==_n&&(n=Tn(_n)-jn>=t.cancelThreshold),n}function Q(){return null===t.pinchThreshold||qn>=t.pinchThreshold}function C(){var n;return n=!t.maxTimeThreshold||!(Qn>=t.maxTimeThreshold)}function X(n,e){if(!1!==t.preventDefaultEvents)if(t.allowPageScroll===c)n.preventDefault();else{var l=t.allowPageScroll===s;switch(e){case r:(t.swipeLeft&&l||!l&&t.allowPageScroll!=v)&&n.preventDefault();break;case i:(t.swipeRight&&l||!l&&t.allowPageScroll!=v)&&n.preventDefault();break;case o:(t.swipeUp&&l||!l&&t.allowPageScroll!=T)&&n.preventDefault();break;case u:(t.swipeDown&&l||!l&&t.allowPageScroll!=T)&&n.preventDefault();break}}}function Y(){var n=G(),e=Z(),t=Q();return n&&e&&t}function q(){return!!(t.pinchStatus||t.pinchIn||t.pinchOut)}function W(){return!(!Y()||!q())}function F(){var n=C(),e=j(),t=G(),r=Z();return!_()&&r&&t&&e&&n}function V(){return!!(t.swipe||t.swipeStatus||t.swipeLeft||t.swipeRight||t.swipeUp||t.swipeDown)}function z(){return!(!F()||!V())}function G(){return Gn===t.fingers||t.fingers===b||!x}function Z(){return 0!==Zn[0].end.x}function B(){return!!t.tap}function J(){return!!t.doubleTap}function K(){return!!t.longTap}function nn(){if(null==ne)return!1;var n=Dn();return J()&&n-ne<=t.doubleTapThreshold}function en(){return nn()}function tn(){return(1===Gn||!x)&&(isNaN(jn)||jn<t.threshold)}function rn(){return Qn>t.longTapThreshold&&jn<E}function on(){return!(!tn()||!B())}function un(){return!(!nn()||!J())}function ln(){return!(!rn()||!K())}function an(){Kn=Dn(),$n=event.touches.length+1}function cn(){Kn=0,$n=0}function sn(){var n=!1;if(Kn){Dn()-Kn<=t.fingerReleaseThreshold&&(n=!0)}return n}function hn(){return!(!0!==Vn.data(D+"_intouch"))}function pn(n){!0===n?(Vn.bind(In,L),Vn.bind(Nn,k),Un&&Vn.bind(Un,A)):(Vn.unbind(In,L,!1),Vn.unbind(Nn,k,!1),Un&&Vn.unbind(Un,A,!1)),Vn.data(D+"_intouch",!0===n)}function fn(n,e){var t=void 0!==e.identifier?e.identifier:0;return Zn[n].identifier=t,Zn[n].start.x=Zn[n].end.x=e.pageX||e.clientX,Zn[n].start.y=Zn[n].end.y=e.pageY||e.clientY,Zn[n]}function dn(n){var e=void 0!==n.identifier?n.identifier:0,t=gn(e);return t.end.x=n.pageX||n.clientX,t.end.y=n.pageY||n.clientY,t}function gn(n){for(var e=0;e<Zn.length;e++)if(Zn[e].identifier==n)return Zn[e]}function wn(){for(var n=[],e=0;e<=5;e++)n.push({start:{x:0,y:0},end:{x:0,y:0},identifier:0});return n}function vn(n,e){e=Math.max(e,Tn(n)),Fn[n].distance=e}function Tn(n){if(Fn[n])return Fn[n].distance}function bn(){var n={};return n[r]=En(r),n[i]=En(i),n[o]=En(o),n[u]=En(u),n}function En(n){return{direction:n,distance:0}}function Sn(){return Jn-Bn}function mn(n,e){var t=Math.abs(n.x-e.x),r=Math.abs(n.y-e.y);return Math.round(Math.sqrt(t*t+r*r))}function yn(n,e){return(e/n*1).toFixed(2)}function On(){return Yn<1?a:l}function xn(n,e){return Math.round(Math.sqrt(Math.pow(e.x-n.x,2)+Math.pow(e.y-n.y,2)))}function Mn(n,e){var t=n.x-e.x,r=e.y-n.y,i=Math.atan2(r,t),o=Math.round(180*i/Math.PI);return o<0&&(o=360-Math.abs(o)),o}function Pn(n,e){var t=Mn(n,e);return t<=45&&t>=0?r:t<=360&&t>=315?r:t>=135&&t<=225?i:t>45&&t<135?u:o}function Dn(){return(new Date).getTime()}function Ln(e){e=n(e);var t=e.offset();return{left:t.left,right:t.left+e.outerWidth(),top:t.top,bottom:t.top+e.outerHeight()}}function kn(n,e){return n.x>e.left&&n.x<e.right&&n.y>e.top&&n.y<e.bottom}var Rn=x||P||!t.fallbackToMouseEvents,An=Rn?P?M?"MSPointerDown":"pointerdown":"touchstart":"mousedown",In=Rn?P?M?"MSPointerMove":"pointermove":"touchmove":"mousemove",Nn=Rn?P?M?"MSPointerUp":"pointerup":"touchend":"mouseup",Un=Rn?null:"mouseleave",Hn=P?M?"MSPointerCancel":"pointercancel":"touchcancel",jn=0,_n=null,Qn=0,Cn=0,Xn=0,Yn=1,qn=0,Wn=0,Fn=null,Vn=n(e),zn="start",Gn=0,Zn=null,Bn=0,Jn=0,Kn=0,$n=0,ne=0,ee=null,te=null;try{Vn.bind(An,w),Vn.bind(Hn,R)}catch(e){n.error("events not supported "+An+","+Hn+" on jQuery.swipe")}this.enable=function(){return Vn.bind(An,w),Vn.bind(Hn,R),Vn},this.disable=function(){return I(),Vn},this.destroy=function(){I(),Vn.data(D,null),Vn=null},this.option=function(e,r){if(void 0!==t[e]){if(void 0===r)return t[e];t[e]=r}else n.error("Option "+e+" does not exist on jQuery.swipe.options");return null}}var r="left",i="right",o="up",u="down",l="in",a="out",c="none",s="auto",h="swipe",p="pinch",f="tap",d="doubletap",g="longtap",w="hold",v="horizontal",T="vertical",b="all",E=10,S="start",m="move",y="end",O="cancel",x="ontouchstart"in window,M=window.navigator.msPointerEnabled&&!window.navigator.pointerEnabled,P=window.navigator.pointerEnabled||window.navigator.msPointerEnabled,D="TouchSwipe",L={fingers:1,threshold:75,cancelThreshold:null,pinchThreshold:20,maxTimeThreshold:null,fingerReleaseThreshold:250,longTapThreshold:500,doubleTapThreshold:200,swipe:null,swipeLeft:null,swipeRight:null,swipeUp:null,swipeDown:null,swipeStatus:null,pinchIn:null,pinchOut:null,pinchStatus:null,click:null,tap:null,doubleTap:null,longTap:null,hold:null,triggerOnTouchEnd:!0,triggerOnTouchLeave:!1,allowPageScroll:"auto",fallbackToMouseEvents:!0,excludedElements:"label, button, input, select, textarea, a, .noSwipe",preventDefaultEvents:!0};n.fn.swipe=function(t){var r=n(this),i=r.data(D);if(i&&"string"==typeof t){if(i[t])return i[t].apply(this,Array.prototype.slice.call(arguments,1));n.error("Method "+t+" does not exist on jQuery.swipe")}else if(!(i||"object"!=typeof t&&t))return e.apply(this,arguments);return r},n.fn.swipe.defaults=L,n.fn.swipe.phases={PHASE_START:S,PHASE_MOVE:m,PHASE_END:y,PHASE_CANCEL:O},n.fn.swipe.directions={LEFT:r,RIGHT:i,UP:o,DOWN:u,IN:l,OUT:a},n.fn.swipe.pageScroll={NONE:c,HORIZONTAL:v,VERTICAL:T,AUTO:s},n.fn.swipe.fingers={ONE:1,TWO:2,THREE:3,ALL:b}});