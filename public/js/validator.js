function initializeValidatorSubmit() {
	var elements = document.getElementsByClassName("validator-submit");
	for (var i = 0; i < elements.length; i++) {
		elements.item(i).addEventListener("submit", validateSubmit);
	}
}

function validateSubmit(event){
	if (document.getElementsByClassName("invalid").length > 0) {
		event.preventDefault();
	}
}

function initializeValidatorRequired() {
	var elements = document.getElementsByClassName("validator-required");
	for (var i = 0; i < elements.length; i++) {
		elements.item(i).addEventListener("focusout", validateRequired);
		validateRequiredElement(elements.item(i));
	}
}

function validateRequired(event) {
	validateRequiredElement(event.target);
}

function validateRequiredElement(elem){
	if(!elem.value)
	{
		//alert("You picked the wrong side fool!");
		helper = document.getElementById(elem.id + "-helper");
		helper.setAttribute("data-error", "To pole jest wymagane");
		elem.classList.add("invalid");
	}
	else
	{
		elem.classList.add("valid");
	}
}