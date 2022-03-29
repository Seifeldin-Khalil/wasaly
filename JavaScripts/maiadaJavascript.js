/* Contact Us: Subs form */
$(document).ready(function() {
	$('.sign-up-form').on('submit', submit);
});

function submit(e) {
	$('.sign-up-container').addClass('submitted');
	e.preventDefault();
}
