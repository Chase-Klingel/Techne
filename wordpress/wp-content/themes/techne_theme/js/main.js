const projectCount =  $('#gallery-container img').length;
let galleryCounter = 1;

/**********                                                          **********/
/**********               HEADER ANIMATION ON PAGE LOAD              **********/
/**********                                                          **********/


const introTimeline = new TimelineMax();

introTimeline
  .staggerFromTo('#nav-items li', .8, {opacity: 0, y: 5}, {opacity: 1, y: 0}, .2)
  .fromTo('#interior-design', 2, {opacity: 0}, {opacity: 1}, '-=.8')
  .fromTo('#mission-statement', 1.5, {opacity: 0, x: -10}, {opacity: 1, x: 0}, '-=1.2')
  .fromTo('#O1-photo-outter-container', 1, {opacity: 0}, {opacity: 1, zIndex: 5}, '-= .8')
  .fromTo('#header-image', 1, {opacity: 0}, {opacity: 1}, '-=1')
  .to('#nav-helper span:first-child', .4, {width: '100%'})
  .to('#nav-helper span:nth-child(2)', .4, {height: '100%'})
  .to('#nav-helper span:nth-child(3)', .4, {width: '100%'})
  .to('#nav-helper span:nth-child(4)', .4, {height: '100%'})
  .to('.helper-outline', .4, {opacity: 0});


/**********                                                          **********/
/**********    ADDS ID FOR EACH IMG IN IMG GALLERY FOR TRACKING      **********/
/**********                                                          **********/

function addImgIds() {
  const imgs = $('#gallery-container img');
  const projects = $('#featured-project-info h5');
  const projectDetails = $('#featured-project-info p');

  $(imgs[0]).attr('id', 'img-1');
  $(projects[0]).attr('id', 'project-1');
  $(projectDetails[0]).attr('id', 'project-1-details');
  $('#img-1').css({opacity: 1});
  $('#project-1').css({opacity: 1});
  $('#project-1-details').css({opacity: 1});
  for (let i = 1; i < imgs.length; i++) {
    $(imgs[i]).attr('id', `img-${i + 1}`).css({opacity: 0});
    $(projects[i]).attr('id', `project-${i + 1}`).css({opacity: 0});
    $(projectDetails[i]).attr('id', `project-${i + 1}-details`).css({opacity: 0});
  }
}

addImgIds();

/**********                                                          **********/
/**********          HANDLES NEXT TRANSITION IN IMG SLIDER           **********/
/**********                                                          **********/

$('.next').click(function() {
  if ($('#previous, #featured-previous').attr('disabled', true))  {
    $('#previous, #featured-previous').attr('disabled', false);
  }

  galleryCounter++;
  TweenMax.to('#gallery-container img', .1, {opacity: 0});
  TweenMax.to('#featured-project-info h5', .1, {opacity: 0});
  TweenMax.to('#featured-project-info p', .1, {opacity: 0});

  TweenMax.to(`#img-${galleryCounter}`, .1, {opacity: 1}); // 1
  TweenMax.to(`#project-${galleryCounter}`, .1, {opacity: 1}); // 1
  TweenMax.to(`#project-${galleryCounter}-details`, .1, {opacity: 1}); // 1

  if (galleryCounter === projectCount) {
    $('#next, #featured-next').attr('disabled', true);
  }
});

/**********                                                          **********/
/**********         HANDLES PREVIOUS TRANSITION IN IMG SLIDER        **********/
/**********                                                          **********/

$('.previous').click(function() {
  if ($('#next, #featured-next').attr('disabled', true)) {
    $('#next, #featured-next').attr('disabled', false);
  }

  galleryCounter--;
  TweenMax.to('#gallery-container img', .1, {opacity: 0});
  TweenMax.to('#featured-project-info h5', .1, {opacity: 0});
  TweenMax.to('#featured-project-info p', .1, {opacity: 0});

  TweenMax.to(`#img-${galleryCounter}`, .1, {opacity: 1}); // 1
  TweenMax.to(`#project-${galleryCounter}`, .1, {opacity: 1}); // 1
  TweenMax.to(`#project-${galleryCounter}-details`, .1, {opacity: 1}); // 1

  if (galleryCounter === 1) {
    $('#previous, #featured-previous').attr('disabled', true);
  }
});

/****************                                              ****************/
/****************            ADD/REMOVE MENU OVERLAY           ****************/
/****************                                              ****************/

$('#mobile-menu').click(function() {
  if ($('#mobile-menu-overlay').is(':visible')) {
    const hideMenu = new TimelineMax();

    hideMenu
      .staggerFromTo('.mobile-nav-item', .7, {opacity: 1, y: 0}, {opacity: 0, y: 20, display: 'none'}, -.1)
      .fromTo('#mobile-menu-overlay', .6, {opacity: 1}, {opacity: 0, display: 'none'}, '-= .5');
  } else {
    const showMenu = new TimelineMax();

    showMenu
      .fromTo('#mobile-menu-overlay', .6, {opacity: 0}, {opacity: 1, display: 'block'})
      .staggerFromTo('.mobile-nav-item', .7, {opacity: 0, y: 20}, {opacity: 1, y: 0, display: 'block'}, .2, '-= .6');
  }

	$(this).toggleClass('open');
});

/******************                                          ******************/
/******************            MENU SCROLL EFFECTS           ******************/
/******************                                          ******************/

$('#nav-home').click(function() {
  $('html, body').animate({scrollTop: $($(this).attr('href')).offset().top - 100}, 750);
  return false;
});

$('#nav-work').click(function() {
  $('html, body').animate({scrollTop: $($(this).attr('href')).offset().top - 100}, 750);
  return false;
});

$('#nav-services').click(function() {
  $('html, body').animate({scrollTop: $($(this).attr('href')).offset().top - 100}, 750);
  return false;
});

$('#nav-questions').click(function() {
  $('html, body').animate({scrollTop: $($(this).attr('href')).offset().top - 100}, 750);
  return false;
});

$('#nav-contact').click(function() {
  $('html, body').animate({scrollTop: $($(this).attr('href')).offset().top - 100}, 750);
  return false;
});

$('#nav-helper').click(function() {
  $('html, body').animate({scrollTop: $($(this).attr('href')).offset().top - 100}, 750);
  return false;
});

$('#nav-home-mobile, #nav-work-mobile, #nav-services-mobile, #nav-questions-mobile, #nav-contact-mobile').click(function() {
  $('#mobile-menu-overlay').hide();
  $('#mobile-menu').removeClass('open');
})


/******************                                          ******************/
/******************           PROJECTS ANIMATIONS            ******************/
/******************                                          ******************/

const projectsController = new ScrollMagic.Controller();

const projectsTimeLine = new TimelineMax();

projectsTimeLine
  .fromTo('#work-slogan', 1.5, {opacity: 0, y: 40}, {opacity: 1, y: 0})
  .staggerFromTo('#project-list-container ul li', 1, {opacity: 0, y: 15}, {opacity: 1, y: 0}, .2, '-=.1.5');

const projectScene = new ScrollMagic.Scene({
                    triggerElement: '#O1-red-box',
                    offset: 130
                  })
                  .setTween(projectsTimeLine)
                  .addTo(projectsController);

/******************                                          ******************/
/******************           SERVICES ANIMATIONS            ******************/
/******************                                          ******************/

const servicesController = new ScrollMagic.Controller();

const servicesTimeLine = new TimelineMax();

servicesTimeLine
  .fromTo('#grey-techne', 1, {opacity: 0}, {opacity: 1})
  // .fromTo('#grey-techne', 2, {opacity: 0, x: -20}, {opacity: 1, x: 0})
  .fromTo('#services-heading', 1, {opacity: 0, y: 20}, {opacity: 1, y: 0}, '-= .6')
  .fromTo('#services-slogan', 1, {opacity: 0, y: 20}, {opacity: 1, y: 0}, '-=.9');

const serviceScene = new ScrollMagic.Scene({
                    triggerElement: '#project-gallery',
                    offset: 560
                  })
                  .setTween(servicesTimeLine)
                  .addTo(servicesController);

/*************                                                    *************/
/*************       RED SWIPE ANIMATION ON CONTACT BUTTON        *************/
/*************                                                    *************/

const contactController = new ScrollMagic.Controller();

const contactTimeLine = new TimelineMax();

contactTimeLine
  .to('#red-swoosh', .6, {width: '100%'})
  .to('#red-swoosh', .6, {left: '100%', width: 0})

const contactScene = new ScrollMagic.Scene({
                    triggerElement: '#O1-services-img',
                    offset: 50
                  })
                  .setTween(contactTimeLine)
                  .addTo(contactController);

/******************                                         ******************/
/******************          P.1 TESTIMONIAL ANIMATION      ******************/
/******************                                         ******************/

const testimonialController = new ScrollMagic.Controller();

const testimonialTimeLine = new TimelineMax();

testimonialTimeLine
  .fromTo('#faq', 1, {opacity: 0, y: 40}, {opacity: 1, y: 0})
  .fromTo('#faq-slogan', 1, {opacity: 0, y: 40}, {opacity: 1, y: 0}, '-=.7')
  .fromTo('#faq-info', 1, {opacity: 0, y: 40}, {opacity: 1, y: 0}, '-=.7')
  .fromTo('#testimonial-question-1', 1, {opacity: 0, x: -30}, {opacity: 1, x: 0}, '-=1.3')
  .fromTo('#testimonial-question-2', 1, {opacity: 0, x: 30}, {opacity: 1, x: 0}, '-= .8')

const testimonialScene = new ScrollMagic.Scene({
                    triggerElement: '#O6-services-img',
                    offset: 420
                  })
                  .setTween(testimonialTimeLine)
                  .addTo(testimonialController);

/******************                                         *******************/
/******************          P.2 TESTIMONIAL ANIMATION      *******************/
/******************                                         *******************/

const testimonial2Controller = new ScrollMagic.Controller();

const testimonial2TimeLine = new TimelineMax();

testimonial2TimeLine
  .fromTo('#testimonial-question-3', 1, {opacity: 0, y: 40}, {opacity: 1, y: 0})
  .fromTo('#testimonial-quote', 1, {opacity: 0, y: 40}, {opacity: 1, y: 0}, '-=.7')

const testimonial2Scene = new ScrollMagic.Scene({
                    triggerElement: '#testimonial-question-2-info',
                    offset: 200
                  })
                  .setTween(testimonial2TimeLine)
                  .addTo(testimonial2Controller);

/************************                              ************************/
/************************       FOOTER ANIMATION       ************************/
/************************                              ************************/

const footerController = new ScrollMagic.Controller();

const footerTimeLine = new TimelineMax();

footerTimeLine
.fromTo('#ceo-bio h3', 1, {opacity: 0, y: 40}, {opacity: 1, y: 0})
.fromTo('#ceo-bio h4', 1, {opacity: 0, y: 40}, {opacity: 1, y: 0}, '-=.7')
.fromTo('#ceo-bio p', 1, {opacity: 0, y: 40}, {opacity: 1, y: 0}, '-=.7')
.fromTo('#footer-contact', 1, {opacity: 0, y: 40}, {opacity: 1, y: 0}, '-=.7')
.fromTo('#footer-phone', 1, {opacity: 0, y: 40}, {opacity: 1, y: 0}, '-=.7')

const footerScene = new ScrollMagic.Scene({
            triggerElement: '#testimonial-answer-3',
            offset: 300
          })
          .setTween(footerTimeLine)
          .addTo(footerController);
