$(document).ready(function() {
	$('#password').focus();
	$('#username').focus();
});


// on button click
$('.button--un').click(function() {
	isUnValid();
});
$('.button--pw').click(function() {
	isPwValid();
});

// on return key up
$('#username').keyup(function(e) {
	if (e.keyCode == 13) {
		isUnValid();
	}
});
$('#password').keyup(function(e) {
	if (e.keyCode == 13) {
		isPwValid();
	}
});

// function isUnValid() {
// 	var un = document.getElementById('username').value;
// 	if (un == "deck1") {
// 		success();
// 		setTimeout(function() {
// 			window.location.href = "deck-1.html";
// 		}, 700);
//
// 	} else if (un == "deck2") {
// 		success();
// 		setTimeout(function() {
// 			window.location.href = "deck-2.html";
// 		}, 700);
//
// 	} else {
// 		wrongPassword();
// 	}
// }


function isPwValid() {
	var pw = document.getElementById('password').value;
	if (pw == "attitude" || pw == "ATTITUDE") {
		success();
		setTimeout(function() {
			window.location.href = "attitude.html";
		}, 500);
	} else if (pw == "cloudnine" || pw == "cloudnine") {
		success();
		setTimeout(function() {
			window.location.href = "cloudnine.html";
		}, 500);
	} else {
		wrongPassword();
	}
}

function success() {
	$('.input__wrapper').addClass('input--success');
}



function hideModal() {
	$('.modal__body').addClass('out-down');
	$('.logo').addClass('out-up');
	setTimeout(function() {
		$('.modal').fadeOut(1000);
	}, 500);
}



function wrongPassword() {
	$('.input__warning').removeClass('is-hidden');
	$('.modal__body').addClass('shake');
	setTimeout(function() {
		$('.modal__body').removeClass('shake');
	}, 500);
}
