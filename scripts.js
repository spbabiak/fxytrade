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

// Langs switcher wide screens
// langsRow.addEventListener('click', event => {

	
// });
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