<div class="items">
	<div class="item firstNameValue">
		<label class="item__label" for="check1">First name<span class="red">*</span></label>
		<input class="item__input firstName" type="name" id="check1" name="firstName">
	</div>
	<div class="item lastNameValue">
		<label class="item__label" for="check2">Last name<span class="red">*</span></label>
		<input class="item__input lastName" type="name" id="check2" name="lastName">
	</div>
	<div class="item birthdateValue">
		<label class="item__label" for="datepicker">Birthdate<span class="red">*</span></label>
		<input class="item__input birthdate" id="datepicker" type="birthdate" 
		 name="birthdate">
	</div>
	<div class="item reportSubjectValue">
		<label class="item__label" for="check4">Report subject<span class="red">*</span></label>
		<textarea  class="item__textarea reportSubject" id="check4" 
		name="reportSubject"></textarea>
	</div>
	<div class="item countryValue">
		<label class="item__label" for="check5">Country<span class="red">*</span></label>
		<?php require "includes/country.php"; ?>
	</div>
	<div class="item phoneValue">
		<label class="item__label" for="check6">Phone<span class="red">*</span></label>
		<input class="item__input phone" type="tel" title="Формат: +1 (555) 555-5555"
		placeholder="+1 (___) ___-____" id="check6" name="phone">
	</div>
	<div class="item emailValue">
		<label class="item__label" for="check7">Email<span class="red">*</span></label>
		<input class="item__input email" type="email" id="check7" name="email">
	</div>
</div>
<div class="submit">
	<button id="btn_f" class="submit__button">Next</button>
</div>