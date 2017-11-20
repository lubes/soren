function isValid() {
	var password = document.getElementById('password').value;
	if ($('#password').hasClass('high-attitude')) {
		if (password == "rawr") {
			window.location.href = "highattitude/index.html";
		} else {
			$('.input__warning').removeClass('is-hidden');
		}
	} else {
		$('.input__warning').removeClass('is-hidden');
	}
}

function hideModal() {
	$('.modal').addClass('is-hidden');
	$('.input__warning').addClass('is-hidden');
	$('input').val('');
	$('#password').removeClass();
}

function showModal() {
	$('.modal').removeClass('is-hidden');
}

// FAKE PASSWORDS
$('.award').click(function() {
	showModal();
});
$('.modal p, .modal__close').click(function() {
	hideModal();
});
$('.modal').click(function() {
	hideModal();
}).children().click(function(e) {
	return false;
});
$('.button').click(function() {
	isValid();
});
$('#password').keyup(function(e) {
	if (e.keyCode == 13) {
		isValid();
	}
});

// REAL PASSWORDS
$('#high-attitude').click(function() {
	$('#password').addClass('high-attitude');
});

$('#good-hustle').click(function() {
	$('#password').addClass('good-hustle');
});

$('#the-paraglider').click(function() {
	$('#password').addClass('the-paraglider');
});

$('#sugar-its-eli').click(function() {
	$('#password').addClass('sugar-its-eli');
});
