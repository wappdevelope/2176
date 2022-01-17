let front = {
  init: function () {
      this.events();
      setTimeout(function() {
        $('.header-logo').removeClass('active');
       },2100);
  },
  events: function () {
    let self = this;
    $(".accordion__item .accordion__button").on("click", function(e) {
      e.preventDefault();
          if ($(this).parent().hasClass("active")) {
          $(this).parent().removeClass("active");
          $(this).parent().find(".accordion__content").slideUp(200);
          } else {
          $(".accordion__item").removeClass("active");
          $(this).parent().addClass("active");
          $(".accordion__content").slideUp(200);
          $(this).parent().find(".accordion__content").slideDown(200);
          }
      });
      $('.tab__arrow').on('click', function() {
        $('.tab-item').hide();
        $('.accordion__content__heading').hide();
        $(this).parent().next('.tab-step').show();
      })
      $('.tab-step__back').on('click', function() {
        $(this).parent().parent().hide()
        $('.accordion__content__heading').show();
        $('.tab-item').show();
      })
      $( "#slider" ).slider({
        orientation: "horizontal",
        range: 'min',
        value:75,
        min: 0,
        max: 500,
        step: 1,
        slide: function( event, ui ) {
          $( ".amount" ).text( ui.value + 'km' );
        }
      });
      $( ".amount" ).text( $( "#slider" ).slider( "value" ) + 'km' );
      $(document).on('click', '.header-logo', function() {
        $(this).addClass('active')
        removeHeartBeat();
      })
      $('.header-logo').mouseup(function() {
        $(this).addClass('active')
        removeHeartBeat();
      })
      function removeHeartBeat() {
        setTimeout(function() {
          $('.header-logo').removeClass('active');
         },2100);
      }
  }
};

let modal = {
  closeButton: $('.modal__close'),
  closeOverlay: $('.modal'),
  can: 1,
  init: function () {
      this.events();
  },
  openModal: function (id) {
      let modalWindow = $(id);
      modalWindow.fadeIn();
      $('.content-box').addClass('animate-away').removeClass('animate-in');
      $('.content-box').fadeOut();
      modalWindow.find('.modal__content').removeClass('animate-away').addClass('animate-in');
  },

  closeModal: function (id) {
      let modalWindow = $(id);
      $('.content-box').removeClass('animate-away').addClass('animate-in');
      modalWindow.find('.modal__content').removeClass('animate-in').addClass('animate-away');
      modalWindow.fadeOut();
      $('.content-box').fadeIn();
  },

  events: function () {
      $(document).on('click', '.modalTrigger', function (e) {
          e.preventDefault();
          let self = $(this),
              target = self.attr('data-modal');
          modal.openModal(target);
      });

      $(document).on('click', '.modal', function (event) {
          let self = '#' + $(this).attr('id');
          if (event.target.className == 'modal__body') {
              modal.closeModal(self);
          }
      });

      $(document).on('click', '.modal__close', function () {
          let self = '#' + $(this).closest('.modal').attr('id');
          modal.closeModal(self);
      });
        $(document).on('click', '.scroll-to-top i', function () {
            $('body,html').animate({
                scrollTop : 0                       // Scroll to top of body
            }, 500);
      });
        $(document).on('click', '.scroll-down i', function () {
            $('html, body').animate({
                scrollTop: $(this).closest("section").next().offset().top - 90
             }, "slow");
      });

  }
};


jQuery(function () {
  front.init();
  modal.init(); 
});
