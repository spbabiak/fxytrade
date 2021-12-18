const navBtn = document.querySelector('.nav_btn');
const mobileNav = document.querySelector('.mobile_nav');
const faqListItem = document.querySelector('.faq_list_item');
const answerItem = document.querySelector('.wrapper_answer');

navBtn.addEventListener('click', event => {
	if(getComputedStyle(mobileNav).display == 'none') {
		mobileNav.style.display = 'block';
		navBtn.style.background = 'url("imgs/icon_hamburger_menu_active.png")';
	} else {
		navBtn.style.background = 'url("imgs/icon_hamburger_menu.png")';
		mobileNav.style.display = 'none';
	}
});	

faqListItem.addEventListener('click', event => {
	console.log(this.event);
		if(getComputedStyle(answerItem).display == 'none') {
		answerItem.style.display = 'block';
		faqListItem.style.background = 'linear-gradient(to right top, #f79024, #ef2152)';
	} else {
		faqListItem.style.background = 'linear-gradient(to right top, #2f0092, #6a24ff)';
		answerItem.style.display = 'none';
	}
});	