
// responsive menu

$('#bar').click(function(){
        $('.nav-desktop').css({'display':'flex'});
        $('#bar').css({'display':'none'});
        $('#close').css({'display':'inline-block'});
        navigationTLMobile.play()
        
});

    $('#close').click(function(){
        $('.nav-desktop').css({'display':'none'});
        $('#bar').css({'display':'inline-block'});
        $('#close').css({'display':'none'});
        navigationTLMobile.reverse() 
});

$(document).on("click", ".play-video", function (e) {
  e.preventDefault();
  $('body').css("overflow-y","hidden");
  $(".yt-popup").show();
});

$(document).on("click", ".close-video", function (e) {
  e.preventDefault();
  let video = document.getElementById("banner-video")
  video.contentWindow.postMessage( '{"event":"command", "func":"pauseVideo", "args":""}', '*');
  $('body').css("overflow-y","scroll");
  $(".yt-popup").hide();
});



$('.owl-one').owlCarousel({
    loop:false,
    margin:30,
    responsiveClass:true,
    // nav: true,
    navText: ["<",">"],
    responsive:{
        0:{
            items:3,
            nav:true
        },
        768:{
            items:5,
            nav:true,
            loop:true,
            margin:10
        },
        1024:{
            items:6,
            nav:true,
            loop:true,
            margin:30
        },
        1200:{
        	items:6,
            nav:true,
            loop:true
        }
    }
});

$('.owl-3').owlCarousel({
  loop:false,
  margin:30,
  responsiveClass:true,
  nav: false,
  dots:true,
  responsive:{
      0:{
          items:1,
      },
      768:{
          items:2,
          margin:10
      },
      1024:{
          items:3,
          margin:30
      },
      1200:{
        items:$(this).data('count')??3,
      }
  }
});

$('.owl-two').owlCarousel({
    loop:true,
    margin:30,
    responsiveClass:true,
    // nav: true,
    navText: ["<",">"],
    responsive:{
        0:{
            items:1,
            nav:true
        },
        768:{
            items:2,
            nav:true,
            loop:true,
            margin:10
        },
        1024:{
            items:2,
            nav:true,
            loop:true
        }
    }
});
 let video=document.getElementById("logoVideo");
 let i=0
video.addEventListener('ended',function() {
  console.log('endind')
  i++;
  video.load()
  if(i>=2)  video.pause();
})

$( "#logo" ).hover(
  function() {
    video.load();
  }, function() {
    video.load();
    video.pause();
  }
);
$('.owl-gallery-images-section').owlCarousel({
  loop:true,
  margin:10,
  responsiveClass:true,
  // nav: true,
  lazyLoad:true,
  autoplay:true,
    autoplayTimeout:2000,
    autoplayHoverPause:true,
    slideBy:3,
  responsive:{
      0:{
          items:3,
      },
      768:{
          items:3
      },
      1024:{
          items:4
      },
      1024:{
          items:4
      },
      1440:{
          items:6
      }
  }
});
 
// For Rating
 $(function () {
 
  $(".rateYo").rateYo({
    rating: 2,
    starWidth: "20px"
  });
 
});

// For Isotopes Course Listing && Gallery 2
var $grid = $('#cGrid').isotope({
  itemSelector: '.grid-item',
  layoutMode: 'fitRows'
});
// filter items on button click
$('#filters').on( 'click', 'button', function() {
  var filterValue = $(this).attr('data-filter');
  // use filterFn if matches value
  $grid.isotope({ filter: filterValue });
});

let  navigationTL,navigationTLMobile

  
  
  if($(document).width()>1024){
    navigationTL = gsap.timeline({ paused: true, reversed: true });
    navigationTL
    .from(".menu-list", {
      left: "-100%",
    })
      .from(".menu-list>li", {
        opacity: 0,
        y:  -30,
        stagger: 0.1,
      }) 
      .from(".logo-wrap",{
        autoAlpha:0
      },"-=1")
      .from(".top-header",{
        y:-55,
        autoAlpha:0
      },"-=1")
    navigationTL.reversed() ? navigationTL.play() : navigationTL.reverse();
  } 
else{
   navigationTLMobile = gsap.timeline({ paused: true, reversed: true });
  navigationTLMobile 
  .from(".nav-desktop",{
    autoAlpha:0
  })
    .from(".menu-list>li", {
      opacity: 0,
      y:  -30,
      stagger: 0.1,
    })  
    .from(".nav-desktop .top-header",{
      autoAlpha:0,
      y:200
    })
}
gsap.utils.toArray(".dataAnimateSlideUp").forEach((el) => {
    const action = gsap.timeline({ paused: true }).from(el.children, {
      y: 40,
      autoAlpha: 0,
      duration: 0.7,
      stagger: 0.2,
      ease: "Power2.easeOut",
    });

    ScrollTrigger.create({
      trigger: el,
      start: "top bottom-=150",
      end: "bottom top",
      onEnter: () => action.play(),
      ///onLeave: () => action.reverse(),
      onEnterBack: () => action.play(),
      //onLeaveBack: () => action.reverse(),
    });
  });
  gsap.utils.toArray(".dataAnimateZoomIn").forEach((el) => {
    const action = gsap.timeline({ paused: true }).from(el.children, {
      scale:0,
      autoAlpha: 0,
      duration: 0.7,
      stagger: 0.2,
      ease: "Power2.easeOut",
    });

    ScrollTrigger.create({
      trigger: el,
      start: "top bottom-=150",
      end: "bottom top",
      onEnter: () => action.play(),
      ///onLeave: () => action.reverse(),
      onEnterBack: () => action.play(),
      //onLeaveBack: () => action.reverse(),
    });
  });
  gsap.utils.toArray(".dataAnimateSlideLeft").forEach((el) => {
    const action = gsap.timeline({ paused: true }).from(el, {
      x: -20,
      autoAlpha: 0,
      duration: 1,
      stagger: 0.2,
      ease: "Power2.easeOut",
    });

    ScrollTrigger.create({
      trigger: el,
      start: "top bottom-=100",
      onEnter: () => action.play(),
      //onLeave: () => action.reverse(),
      onEnterBack: () => action.play(),
      //onLeaveBack: () => action.reverse(),
    });
  });

  gsap.utils.toArray(".dataAnimateSlideLeftChildrens").forEach((el) => {
    const action = gsap.timeline({ paused: true }).from(el.children, {
      x: -20,
      autoAlpha: 0,
      duration: 1,
      stagger: 0.2,
      ease: "Power2.easeOut",
    });

    ScrollTrigger.create({
      trigger: el,
      start: "top bottom-=100",
      onEnter: () => action.play(),
      //onLeave: () => action.reverse(),
      onEnterBack: () => action.play(),
      //onLeaveBack: () => action.reverse(),
    });
  });

  gsap.utils.toArray(".dataAnimateSlideRight").forEach((el) => {
    const action = gsap.timeline({ paused: true }).from(el, {
      x: 20,
      autoAlpha: 0,
      duration: 1,
      stagger: 0.2,
      ease: "Power2.easeOut",
    });

    ScrollTrigger.create({
      trigger: el,
      start: "top bottom-=100",
      onEnter: () => action.play(),
      //onLeave: () => action.reverse(),
      onEnterBack: () => action.play(),
      //onLeaveBack: () => action.reverse(),
    });
  });

  gsap.utils.toArray(".dataAnimateSlideRightChildren").forEach((el) => {
    const action = gsap.timeline({ paused: true }).from(el.children, {
      x: 20,
      autoAlpha: 0,
      duration: 1,
      stagger: 0.2,
      ease: "Power2.easeOut",
    });

    ScrollTrigger.create({
      trigger: el,
      start: "top bottom-=100",
      onEnter: () => action.play(),
      //onLeave: () => action.reverse(),
      onEnterBack: () => action.play(),
      //onLeaveBack: () => action.reverse(),
    });
  });

  gsap.utils.toArray(".dataAnimateFadeIn").forEach((el) => {
    const action = gsap.timeline({ paused: true }).from(el, {
      autoAlpha: 0,
      duration: 2,
      stagger: 0.2,
      ease: "Power2.easeOut",
    });

    ScrollTrigger.create({
      trigger: el,
      start: "top bottom-=150",
      end: "bottom top",
      onEnter: () => action.play(),
      //onLeave: () => action.reverse(),
      onEnterBack: () => action.play(),
      //onLeaveBack: () => action.reverse(),
    });
  });

  $.each($(".bg-img"),function(){
let obj=$(this)

gsap.to(obj, {
  yPercent: 10,
  ease: "none",
  scrollTrigger: {
    trigger: obj.closest(".aboutus-section"),
    // start: "top bottom", // the default values
    // end: "bottom top",
    scrub: true
  }, 
});
  })