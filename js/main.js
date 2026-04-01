window.addEventListener('load', function () {

    document.querySelector('.scroll-top').addEventListener('click', function() {		
        window.scrollTo({ top: 0, behavior: 'smooth' });	
    })
		
    window.addEventListener('scroll', function(){
        if ( this.scrollY > 1000) {
            document.querySelector('.scroll-top').style.opacity = '1';
        } else {
            document.querySelector('.scroll-top').style.opacity = '0';
        }
    })

    function toggleMenu(){
        document.querySelector('.menu').classList.toggle('show');
    }

    let burgerBtn = document.querySelector('.burger');
                
	if (burgerBtn) {
		burgerBtn.addEventListener('click', function(){
            toggleMenu();
            this.classList.toggle('active');
        })	
	}

    let questions = document.querySelectorAll('.faq__item');
    for(question of questions){

        question.addEventListener('click', function(){
            this.classList.toggle('open');
            this.querySelector('.faq__answer').classList.toggle('active');
        })
    }
    
    let fixBlock = document.querySelector('.single__card');
    let sidebarBlock = document.querySelector('.sidebar__block');
    if (fixBlock) {
        window.addEventListener('scroll', function() {
            if ( this.scrollY > 500 && fixBlock) {
                fixBlock.classList.add('active');
                sidebarBlock.classList.add('active');
            } else {
                fixBlock.classList.remove('active');
                sidebarBlock.classList.remove('active');
            }
        })
    }
})