window.addEventListener('load', function () {

    function checkCookies() {
        let cookieDate = localStorage.getItem('cookieDate');
        let cookieNotification = document.getElementById('cookie-block');
		
		if (!cookieNotification) return;
		
        let cookieBtnAccept = cookieNotification.querySelector('.cookie__block-accept');

        if( !cookieDate || (+cookieDate + 31536000000) < Date.now() ){
            cookieNotification.classList.add('show');
        }
		
		if (cookieBtnAccept) {
			cookieBtnAccept.addEventListener('click', function(){
				localStorage.setItem( 'cookieDate', Date.now() );
				cookieNotification.classList.remove('show');
			});
		}
    }
    setTimeout(checkCookies, 1500);
    
})