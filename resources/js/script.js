/*slick slider section reviews*/
window.addEventListener('load', () => {
    $('.carousel_reviews').slick({
        dots: true,
        infinite: true,
        slidesToShow: 3,
        slidesToScroll: 1,
        speed: 300,
        centerMode: true,
        variableWidth: false,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: false,
        responsive: [
            {
            breakpoint: 1000,
            settings: {
                slidesToShow: 2,
            }
            },
            {
                breakpoint: 600,
                settings: {
                slidesToShow: 1,
                }
            },
        ]
    });
});
    
/*end slick slider section reviews*/

/*modal*/
window.addEventListener('load', () => {
    let openBtnList = document.querySelectorAll('.open_modal');
    let modal = document.querySelector('.modal');
    let modalContent = document.querySelector('.modal_content');
    let closeBtn = document.querySelector('.modal_close');
    let title = document.querySelector('.modal_title span');
    let modalList = document.querySelectorAll('.modal_content form .modal_content__block');
    let inputProjectName = document.querySelector('.modal_project_name');
    let inputFormSubject = document.querySelector('.modal_form_subject');
    const widthScrollBar = window.innerWidth - document.documentElement.clientWidth;

    Array.from(openBtnList).forEach(btn => {
        btn.addEventListener('click', function(e) {
            modal.classList.add('openModal');
            document.body.style.overflowY = 'hidden';
            document.documentElement.style.overflowY = 'hidden';
            document.documentElement.style.paddingRight = `${widthScrollBar}px`;
            modalContent.classList.remove('disappearModal');
            modalContent.classList.add('appearModal');
            modal.classList.remove('disappearModalBg');
            modal.classList.add('appearModalBg');
        });
    });
    closeBtn.addEventListener('click', () => {
        closeModal();
    });
    modal.addEventListener('click', function(e) {
        let target = e.target;
        if(Array.from(target.classList).includes('modal')) {
            closeModal();
        }
    });
    function closeModal() {
        modalContent.classList.add('disappearModal');
        modalContent.classList.remove('appearModal');
        modal.classList.add('disappearModalBg');
        modal.classList.remove('appearModalBg');
        setTimeout(() => {
            modal.classList.remove('openModal');
            document.body.style.overflowY = 'auto';
            document.documentElement.style.overflowY = 'auto';
            document.documentElement.style.paddingRight = "";
        }, 900);
    }
});
/*end modal*/

/*modalreview*/
window.addEventListener('load', () => {
    let openBtnList = document.querySelectorAll('.reviews_send');
    let modal = document.querySelector('.modalreview');
    let modalContent = document.querySelector('.modalreview_content');
    let closeBtn = document.querySelector('.modalreview_close');
    const widthScrollBar = window.innerWidth - document.documentElement.clientWidth;

    Array.from(openBtnList).forEach(btn => {
        btn.addEventListener('click', function(e) {
            modal.classList.add('openModal');
            document.body.style.overflowY = 'hidden';
            document.documentElement.style.overflowY = 'hidden';
            document.documentElement.style.paddingRight = `${widthScrollBar}px`;
            modalContent.classList.remove('disappearModalreview');
            modalContent.classList.add('appearModalreview');
            modal.classList.remove('disappearModalreviewBg');
            modal.classList.add('appearModalreviewBg');
        });
    });
    closeBtn.addEventListener('click', () => {
        closeModal();
    });
    modal.addEventListener('click', function(e) {
        let target = e.target;
        if(Array.from(target.classList).includes('modal')) {
            closeModal();
        }
    });
    function closeModal() {
        modalContent.classList.add('disappearModalreview');
        modalContent.classList.remove('appearModalreview');
        modal.classList.add('disappearModalreviewBg');
        modal.classList.remove('appearModalreviewBg');
        setTimeout(() => {
            modal.classList.remove('openModal');
            document.body.style.overflowY = 'auto';
            document.documentElement.style.overflowY = 'auto';
            document.documentElement.style.paddingRight = "";
        }, 900);
    }
});
/*end modalreview*/

/*mobil*/
window.addEventListener('load', () => {
    let btnOpen = document.querySelector('.header_burger');
    let mobil = document.querySelector('.mobil');
    let mobilContent = document.querySelector('.mobil_content');
    let btnClose = document.querySelector('.mobil_close');
    let mobilList = document.querySelectorAll('.mobil_list li a');
    btnOpen.addEventListener('click', () => {
        mobil.classList.add('openMobil');
        document.body.style.overflowY = 'hidden';
        document.documentElement.style.overflowY = 'hidden';
        mobilContent.classList.remove('disappearMobil');
        mobilContent.classList.add('appearMobil');
        mobil.classList.remove('disappearMobilBg');
        mobil.classList.add('appearMobilBg');
    });
    btnClose.addEventListener('click', () => {
        closeMobil();
    });
    Array.from(mobilList).forEach(link => {
        link.addEventListener('click', () => {
            setTimeout(()=> {
                closeMobil();
            }, 100);
        });
    });
    function closeMobil() {
        mobilContent.classList.remove('appearMobil');
        mobilContent.classList.add('disappearMobil');
        mobil.classList.remove('appearMobilBg');
        mobil.classList.add('disappearMobilBg');
        setTimeout(() => {
            mobil.classList.remove('openMobil');
            document.body.style.overflowY = 'auto';
            document.documentElement.style.overflowY = 'auto';
        }, 900);
    }
});
/*end mobil*/

/*animation main title start code*/
document.addEventListener('DOMContentLoaded', () => {
    let title = document.querySelector('.main_img__title');
    if(title) {
        title.classList.add('animationMainTitle');
    }
});
/*animation main title end code*/

/*animation about title start code*/
document.addEventListener('DOMContentLoaded', () => {
    let title = document.querySelector('.aboutTitleAnimation');
    function animationTitle() {
        if(title) {
            title = document.querySelector('.aboutTitleAnimation');
            let titlePosition = title.getBoundingClientRect().top;
            let windowHeight = window.innerHeight;
            if(titlePosition + 100 < windowHeight) {
                title.classList.add('animationAboutTitle');
            }
        }
    }
    window.addEventListener('scroll', animationTitle);
});
/*animation about title end code*/

/*animation form btn start code*/
document.addEventListener('DOMContentLoaded', () => {
    let btn = document.querySelector('.formAnimationBtn');
    function animationTitle() {
        if(btn) {
            btn = document.querySelector('.formAnimationBtn');
            let btnPosition = btn.getBoundingClientRect().top;
            let windowHeight = window.innerHeight;
            if(btnPosition + 100 < windowHeight) {
                btn.classList.add('animationFormBtn');
            }
        }
    }
    window.addEventListener('scroll', animationTitle);
});
/*animation form btn end code*/

/*animation resume image start code*/
document.addEventListener('DOMContentLoaded', () => {
    let img = document.querySelector('.resume_image');
    function animationImg() {
        if(img) {
            img = document.querySelector('.resume_image');
            let imgPosition = img.getBoundingClientRect().top;
            let windowHeight = window.innerHeight;
            if(imgPosition + 100 < windowHeight) {
                img.classList.add('animationResumeImage');
            }
        }
    }
    window.addEventListener('scroll', animationImg);
});
/*animation resume image end code*/