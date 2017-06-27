var activeClass = 'active';
var btn = document.querySelector('#mobile-toggle');
var nav = document.querySelector('#site-navigation');

btn.addEventListener('click', function() {
	if(this.classList.contains(activeClass)) {
		this.classList.remove(activeClass);
		this.setAttribute( 'aria-expanded', 'false' );

		nav.style.height = 0;
		nav.setAttribute( 'aria-expanded', 'false' );
		setTimeout(function() {
			nav.classList.remove(activeClass);
		}, 500);
	} else {
		this.classList.add(activeClass);
		this.setAttribute( 'aria-expanded', 'true' );

		nav.classList.add(activeClass);
		nav.setAttribute( 'aria-expanded', 'true' );
		nav.style.height = (nav.scrollHeight + 10) + 'px';
	}
});