function createarrow(carrousel, idnext, idprev){
  if(document.getElementById(idnext) != null && document.getElementById(idprev) != null){
    document.getElementById(idnext).addEventListener('click', function(){
      $(carrousel).trigger('next.owl.carousel');
    });
    document.getElementById(idprev).addEventListener('click', function(){
      $(carrousel).trigger('prev.owl.carousel');
    });
  }
}

/* VARIÁVEIS PARA MENUS DIFERENTES */
var homeMenu = '/porto-real-sa/';
var empreendimentoMenu = '/porto-real-sa/o-empreendimento/';


// RESIZE PARA 800PX ESCONDE MENUS PRINCIPAIS E LÓGICA PARA CASO SEJA APENAS NAS PAGINAS HOME E EMPREENDIMENTOS 
$(window).resize(function(){
  if(window.location.pathname === homeMenu || window.location.pathname === empreendimentoMenu){
    if($(window).width() < 800) {
      $('#menu1').css('display','none');
      $('#menu2').css('display','none'); 
      $(window).scroll(function (){
        $('#menu1').css('display','none');
        $('#menu2').css('display','none');        
      });
    } else{      
      $(window).scroll(function (){
      if ($(this).scrollTop() > 0) {
        $('#menu1').css('display','none');
        $('#menu2').css('display','flex');
      } else {
        $('#menu1').css('display','flex');
        $('#menu2').css('display','none');
        }
      });      
    }
  }else{  
    $('#menu1').css('display','none');
    $('#menu2').css('display','flex');
      if($(window).width() < 800) {
        $('#menu1').css('display','none');
        $('#menu2').css('display','none');
      }
  }
});


/* IRÁ NOTAR QUE NO DOCUMENT READY TEMOS UMA FUNÇÃO IGUAL, PORÉM, A FUNÇÃO DE CIMA É CASO SEJA FEITO UM RESIZE NA TELA, NO DOCUMENT READY CASO O USUÁRIO ACESSE DIRETAMENTE DO CELULAR */




$(document).ready(function(){   

  if(window.location.pathname == homeMenu || window.location.pathname == empreendimentoMenu){
    if($(window).width() < 800) {
      $('#menu1').css('display','none');
      $('#menu2').css('display','none'); 
      $(window).scroll(function (){
        $('#menu1').css('display','none');
        $('#menu2').css('display','none');        
      });
    } else{      
      $(window).scroll(function (){
      if ($(this).scrollTop() > 0) {
        $('#menu1').css('display','none');
        $('#menu2').css('display','flex');
      } else {
        $('#menu1').css('display','flex');
        $('#menu2').css('display','none');
          if($(window).width() < 800) {
            $('#menu1').css('display','none');
            $('#menu2').css('display','none');
          }
        }
      });      
    }
  }else{
    $('#menu1').css('display','none');
    $('#menu2').css('display','flex');
    if($(window).width() < 800) {
      $('#menu1').css('display','none');
      $('#menu2').css('display','none');
    }
  }
  //MAX WIDTH DE 800PX ESCONDE MENUS PRINCIPAIS
  

 /* SLIDE POSTS HOME */ 
var swiper = new Swiper(".mySwiper", {
  slidesPerView: 1,

  spaceBetween: 50,
  loop: false,
        autoplay: {
          delay: 2500,
          disableOnInteraction: false,
        },
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
        },
        navigation: {
          //nextEl: ".swiper-button-right",
          //prevEl: ".swiper-button-left",
          type: 'bullets',
        },
        breakpoints: {
          640: {
            slidesPerView: 1,
            spaceBetween: 20,
          },
          768: {
            slidesPerView: 2,
            spaceBetween: 40,
          },
          1024: {
            slidesPerView: 3,
            spaceBetween: 50,
          },
        }

      });


 /* SLIDES EMPREENDIMENTOS*/
  $('.owl-carousel').owlCarousel({
    center:true,
    items:1,
    loop:false,
    margin:10,
    dots:true,    
  });
 
  /* SELEÇÃO DE SLIDES PÁGINA EMPREENDIMENTO*/

  /* NO CLICK VAI SELECIONAR E APARECE O SLIDE RESPECTIVO DE CADA TITULO, BEM COMO O ESTILO DE CADA */
  $('#economia').on("click", function(){
    $("#economia h3").css('font-weight',800);
    $("#ecologia h3").css('font-weight','normal');
    $("#ecoparque h3").css('font-weight','normal');
    
    

    $('.slide-economia').fadeIn();
    $('.slide-ecologia-industrial').fadeOut();
    $('.slide-ecoparque-industrial').fadeOut();

    $('.set-slide-economia').fadeIn();
    $('.set-slide-ecologia').fadeOut();
    $('.set-slide-ecoparque').fadeOut();
  });

  $('#ecologia').on("click", function(){
    $("#economia h3").css('font-weight','normal');
    $("#ecologia h3").css('font-weight',800);
    $("#ecoparque h3").css('font-weight','normal');

    $('.slide-economia').fadeOut();
    $('.slide-ecologia-industrial').fadeIn();
    $('.slide-ecoparque-industrial').fadeOut();

    $('.set-slide-ecoparque').fadeOut();
    $('.set-slide-economia').fadeOut();
    $('.set-slide-ecologia').fadeIn();
  });

  $('#ecoparque').on("click", function(){
    $("#economia h3").css('font-weight','normal');
    $("#ecologia h3").css('font-weight','normal');
    $("#ecoparque h3").css('font-weight',800);
    
    $('.slide-economia').fadeOut();
    $('.slide-ecologia-industrial').fadeOut();
    $('.slide-ecoparque-industrial').fadeIn();


    $('.set-slide-economia').fadeOut();
    $('.set-slide-ecologia').fadeOut();
    $('.set-slide-ecoparque').fadeIn();
  });


}); // DOCUMENT READY


  
  createarrow('.owl-home','prev-slide_produtos','next-slide_produtos');
  createarrow('.owl-produto-archive','prev-slide_archive','next-slide_archive');
  createarrow('.owl-related-posts','prev-slide_related','next-slide_related');
  createarrow('.owl-parceiros','prev-slide_parceiros','next-slide_parceiros');
  createarrow('.owl-clients','prev-slide_clients','next-slide_clients');

 
 