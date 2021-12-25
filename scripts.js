const navBtn = document.querySelector('.nav_btn');
const mobileNav = document.querySelector('.mobile_nav');
const faqListItem = document.getElementsByClassName('faq_list_item');
const FAQListItemArray = Array.from(faqListItem);

navBtn.addEventListener('click', event => {
	if(getComputedStyle(mobileNav).display == 'none') {
		mobileNav.style.display = 'block';
	} else {
		mobileNav.style.display = 'none';
	}
});	

FAQListItemArray.forEach(item => { 
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