!function(e,a){var i="data:image/gif;base64,R0lGODlhAQABAIAAAAAAAP///ywAAAAAAQABAAACAUwAOw==";e.fn.imagesLoaded=function(t){function n(){var a=e(u),i=e(l);s&&(l.length?s.reject(d,a,i):s.resolve(d)),e.isFunction(t)&&t.call(o,d,a,i)}function r(a,t){a.src===i||-1!==e.inArray(a,A)||(A.push(a),t?l.push(a):u.push(a),e.data(a,"imagesLoaded",{isBroken:t,src:a.src}),c&&s.notifyWith(e(a),[t,d,e(u),e(l)]),d.length===A.length&&(setTimeout(n),d.unbind(".imagesLoaded")))}var o=this,s=e.isFunction(e.Deferred)?e.Deferred():0,c=e.isFunction(s.notify),d=o.find("img").add(o.filter("img")),A=[],u=[],l=[];return e.isPlainObject(t)&&e.each(t,function(e,a){"callback"===e?t=a:s&&s[e](a)}),d.length?d.bind("load.imagesLoaded error.imagesLoaded",function(e){r(e.target,"error"===e.type)}).each(function(t,n){var o=n.src,s=e.data(n,"imagesLoaded");s&&s.src===o?r(n,s.isBroken):n.complete&&n.naturalWidth!==a?r(n,0===n.naturalWidth||0===n.naturalHeight):(n.readyState||n.complete)&&(n.src=i,n.src=o)}):n(),s?s.promise(o):o}}(jQuery);