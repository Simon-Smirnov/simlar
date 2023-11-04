$(document).ready(function() {
    $(".form_4").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "../mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Спасибо за вашу заявку! Скоро мы свяжемся с вами.");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
            setTimeout(function() {
				document.querySelector('.modal_close').click();
			}, 3000);
		});
		return false;
	});
});

$(document).ready(function() {
    $(".form_5").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "../mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Спасибо за вашу заявку! Скоро мы свяжемся с вами.");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
		});
		return false;
	});
});

$(document).ready(function() {
    $(".form_6").submit(function() { //Change
		var th = $(this);
		$.ajax({
			type: "POST",
			url: "../mail.php", //Change
			data: th.serialize()
		}).done(function() {
			alert("Спасибо за отзыв! Скоро я размещю его на сайте.");
			setTimeout(function() {
				// Done Functions
				th.trigger("reset");
			}, 1000);
            setTimeout(function() {
				document.querySelector('.modalreview_close').click();
			}, 3000);
		});
		return false;
	});
});