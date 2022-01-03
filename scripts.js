const navBtn = document.querySelector('.nav_btn');
const mobileNav = document.querySelector('.mobile_nav');
const faqListItem = document.getElementsByClassName('faq_list_item');
const FAQListItemsArray = Array.from(faqListItem);
const btnShowMore = document.querySelector('.btn_show_more');
const langs = document.querySelector('.langs');
const langsItems = langs.getElementsByTagName('li');
const langsItemsArray = Array.from(langsItems);
const langsRow = document.querySelector('.langs_row');
const langsRowItems = langsRow.getElementsByTagName('li');
const langsRowItemsArray = Array.from(langsRowItems);

navBtn.addEventListener('click', event => {
	if(getComputedStyle(mobileNav).display == 'none') {
		mobileNav.style.display = 'block';
	} else {
		mobileNav.style.display = 'none';
	}
});	

FAQListItemsArray.forEach(item => { 
	item.addEventListener('click', event => {
		const question = item.querySelector('.question');
		const answerItem = item.querySelector('.wrapper_answer');
		const arrowFAQ = item.querySelector('.icon_faq_arrow');
		if(item.classList[1] == 'active') {
			item.classList.remove('active');
			question.style.background = 'linear-gradient(to right top, #2f0092, #535bbf)';
			answerItem.style.display = 'none';
			arrowFAQ.style.setProperty('--transform', 'unset');
		} else {
			item.classList.add('active');
			question.style.background = 'linear-gradient(to right top, #f79024, #ef2152)';
			answerItem.style.display = 'block';
			arrowFAQ.style.setProperty('--transform', 'rotate(180deg)');
		}		
	});
});	

let clickCounter = 0;
if(btnShowMore) {
	btnShowMore.addEventListener('click', event => {
		++clickCounter;
		const itemsPerClick = 4;

		let itemNum = itemsPerClick * clickCounter;
		let stopPoint = itemNum + itemsPerClick;

		if(itemNum < FAQListItemsArray.length) {
			
			for(let i = itemNum; i < stopPoint; i++) {
				if(i < FAQListItemsArray.length) {
					FAQListItemsArray[i].style.display = 'block';
				} else {
					btnShowMore.text = "Show less";	
					// clickCounter = 0;
				}
			}
		
		} else {

			itemNum = FAQListItemsArray.length - 1;
			stopPoint = itemNum - itemsPerClick * clickCounter;
			for(let i = itemNum; i > stopPoint; i--) {
				if(i >= itemsPerClick) {
					FAQListItemsArray[i].style.display = 'none';
				} 
			}
			btnShowMore.text = "Show more";
			clickCounter = 0;
		} 	
	});
}

langs.addEventListener('click', event => {
	
	for(let i = 1; i < langsItemsArray.length; i++) {

		if((langsItemsArray[i].style.display === '') || (langsItemsArray[i].style.display === 'none')) {
			langsItemsArray[i].style.display = 'block';
		}else {
			langsItemsArray[i].style.display = 'none';
		}
	}
});


// Langs switcher (mobile)

langsItemsArray.forEach(item => {
	if(item.classList[1] != 'active') {
		item.addEventListener('click', event => {
			langsItemsArray[0].classList.toggle('active');
			item.classList.add(langsItemsArray[0].classList[0]);
			langsItemsArray[0].classList.add(item.classList[0]);
			langsItemsArray[0].classList.remove(langsItemsArray[0].classList[0]);
			item.classList.remove(item.classList[0]);
			langsItemsArray[0].classList.toggle('active');
		});	
	}
	
});

langsRowItemsArray.forEach(item => {

	item.addEventListener('click', event => {
		if(item.classList[1] !== 'active') {
			for(let i = 0; i < langsRowItemsArray.length; i++) {
				langsRowItemsArray[i].classList.remove('active');
			} 
		
			item.classList.add('active');
		}	
	});
});


// Intl-tel-input

const form = document.querySelector('#main_form');
// Form fields validation
	const errorName = document.querySelector('.error_name');
	const errorSurname = document.querySelector('.error_surname');
	const errorEmail = document.querySelector('.error_email');
	const errorPhone = document.querySelector('.error_phone');
	const phoneInput = document.querySelector('#POST-phone');

	var iti = window.intlTelInput(phoneInput, {
	  utilsScript: "utils.js",
	  nationalMode: true
	});

	function sendData() {
    const XHR = new XMLHttpRequest();

    // Bind the FormData object and the form element
    const FD = new FormData( form );

    var name = FD.get('name');
    var surname = FD.get('surname');
    var email = FD.get('email');
    var phone = iti.getNumber();
    FD.set('phone', phone);

    // Define what happens on successful data submission
    XHR.addEventListener( "load", function(event) {
      alert( event.target.responseText );
		});

    // Define what happens in case of error
    XHR.addEventListener( "error", function( event ) {
      alert( 'Oops! Something went wrong.' );
    });

    var errorCounter = 0;
		var nameFormat = /^[a-zA-Z]+$/;
		var mailFormat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;

		if(name == '') {
			++errorCounter;
			errorName.innerHTML = 'This field is required';
		} else if(name.match(nameFormat)) {
			errorName.style.color = 'green';
			errorName.innerHTML = '✓ Valid';
		} else {
			++errorCounter;
			errorName.innerHTML = 'Only letters and spaces allowed';	
		}

		if(surname == '') {
			++errorCounter;
			errorSurname.innerHTML = 'This field is required';
			
		} else if(surname.match(nameFormat)) {
			errorSurname.style.color = 'green';
			errorSurname.innerHTML = '✓ Valid';
		}	else {
			++errorCounter;
			errorSurname.innerHTML = 'Only letters and spaces allowed';
		}

		if(email == '') {
			++errorCounter;
			errorEmail.innerHTML = 'This field is required';
		} else if(email.match(mailFormat)) {
			errorEmail.style.color = 'green';
			errorEmail.innerHTML = '✓ Valid';
		} else {
			++errorCounter;
			errorEmail.innerHTML = 'Invalid email format';	
		}

		if(phone == '') {
			++errorCounter;
			errorPhone.innerHTML = 'This field is required';
		} else {
			errorPhone.innerHTML = '';
			var errorMsg = document.querySelector("#error-msg"),
			validMsg = document.querySelector("#valid-msg");

			// here, the index maps to the error code returned from getValidationError - see readme
			var errorMap = ["Invalid number", "Invalid country code", "Too short", "Too long", "Invalid number"];

			var reset = function() {
			  phoneInput.classList.remove("error");
			  errorMsg.innerHTML = "";
			  errorMsg.classList.add("hide");
			  validMsg.classList.add("hide");
			};

			reset();
		  if (phoneInput.value.trim()) {
		    if (iti.isValidNumber()) {
		      validMsg.classList.remove("hide");
		    } else {
		    	++errorCounter;
		      phoneInput.classList.add("error_input");	
		      var errorCode = iti.getValidationError();
		      errorMsg.innerHTML = errorMap[errorCode];
		      errorMsg.classList.remove("hide");
		    }
		  }

			// on keyup / change flag: reset
			phoneInput.addEventListener('change', reset);
			phoneInput.addEventListener('keyup', reset);
		}
	    
    if(errorCounter == 0) {
    	// Set up our request
    	XHR.open( "POST", "FormDataHandler.php" );

	    // The data sent is what the user provided in the form
	    XHR.send( FD );
    } else {
    	console.log(errorCounter);
    }
}

if(form) {
	form.addEventListener('submit', event => {
		event.preventDefault();
		sendData();
	});
}

