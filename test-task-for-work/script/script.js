/*----------------------------Birthdate input-------------------------------*/

$( function() {
    $( "#datepicker" ).datepicker({
      changeMonth: true,
      changeYear: true
    });
  });

/*----------------------------Numder input-------------------------------*/

$(function(){
  $("#check6").mask("+1 (999) 999-9999");
});

/*--------------------------First form---------------------------------*/

$(document).ready(function(){
	$('#btn_f').on('click', function (){
		let firstNameValue = $('input.firstName').val().trim();
		let lastNameValue = $('input.lastName').val().trim();
		let birthdateValue = $('input.birthdate').val().trim();
		let reportSubjectValue = $('textarea.reportSubject').val().trim();
		let countryValue = $('select.country').val();
		let phoneValue = $('input.phone').val().trim();
		let emailValue = $('input.email').val().trim();

/*--------------------------Validation form---------------------------------*/

		if (firstNameValue == "") {
			$('.firstNameValue').addClass('check');
			return false;
		} else {
			$('.firstNameValue').removeClass('check');
		};

		if (lastNameValue == "") {
			$('.lastNameValue').addClass('check');
			return false;
		} else {
			$('.lastNameValue').removeClass('check');
		};

		if (birthdateValue == "") {
			$('.birthdateValue').addClass('check');
			return false;
		} else {
			$('.birthdateValue').removeClass('check');
		};

		if (reportSubjectValue == "") {
			$('.reportSubjectValue').addClass('check');
			return false;
		} else {
			$('.reportSubjectValue').removeClass('check');
		};

		if (countryValue.length < 2) {
			$('.countryValue').addClass('check');
			return false;
		} else {
			$('.countryValue').removeClass('check');
		};

		if (phoneValue == "") {
			$('.phoneValue').addClass('check');
			return false;
		} else {
			$('.phoneValue').removeClass('check');
		};

		if (emailValue == "") {
			$('.emailValue').addClass('check');
			return false;
		} else {
			$('.emailValue').removeClass('check');
		};

/*--------------------------Send form---------------------------------*/

		$.ajax({
			method: "POST",
			url: "../includes/form_request.php",
			data: { firstName: firstNameValue, 
					lastName: lastNameValue, 
					birthdate: birthdateValue, 
					reportSubject: reportSubjectValue,
					country: countryValue,
					phone: phoneValue,
					email: emailValue },
			beforeSend: function() {
				$('.btn_f').prop("disabled", true);
			}
		});
			
/*--------------------------Button click---------------------------------*/			
			
			$('.first_form').addClass('fly_left');
			$('.title').addClass('fly_left');
		    setTimeout (function() {
		      location.href = "/pages/finish_page.php";
		    }, 500);

		    

	});
});


