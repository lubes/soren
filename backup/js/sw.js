function isValid() {
	var pw = document.getElementById('password').value;
	if ($('#password').hasClass('high-attitude')) {
		if (pw == "rawr") {
			window.location.href = "highattitude/index.html";
		} else {
			wrongPassword();
		}

		// } else if ($('#password').hasClass('good-hustle')) {
		// 	if (password == "aaa") {
		// 		window.location.href = "high-attitude/index.html";
		// 	} else {
		// 		$('.input__warning').removeClass('is-hidden');
		// 	}
		// } else if ($('#password').hasClass('the-paraglider')) {
		// 	if (password == "bbb") {
		// 		window.location.href = "high-attitude/index.html";
		// 	} else {
		// 		$('.input__warning').removeClass('is-hidden');
		// 	}
		// } else if ($('#password').hasClass('sugar-its-eli')) {
		// 	if (password == "ccc") {
		// 		window.location.href = "high-attitude/index.html";
		// 	} else {
		// 		$('.input__warning').removeClass('is-hidden');
		// 	}
		//
	} else {
		wrongPassword();
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
$('div.award').click(function() {
	showModal();
	$('#password').focus();
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
	// wrongPassword();
});
$('#password').keyup(function(e) {
	if (e.keyCode == 13) {
		isValid();
		//wrongPassword();
	}
});

function wrongPassword() {
	$('.input__warning').removeClass('is-hidden');
	$('.modal__body').addClass('shake');
	setTimeout(function() {
		$('.modal__body').removeClass('shake');
	}, 500);
}



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
