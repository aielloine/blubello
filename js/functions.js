


(function ($) {

  // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  // !!!!!!!!!!!!!FUNCTIONS A SUPRIMMER!!!!!!!!!!!!
  // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!



  // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!
  // !!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!!

// loader de la page
  if ($("#loader").length ) {


    var pathLoader = document.querySelector('#loader');
    var pathVague = document.querySelector('#vague path');
    var toVague = pathVague.dataset['to'];

    $('#loader').click(function () {
      $(this).animate({marginTop: "-60vh"}).animate({marginTop: "-180vh"}, function() {
        $('#vague').animate({marginTop: "-50vh"},1500);
      });
      dynamics.animate(pathVague, {
            d: toVague
          }, {
            type: dynamics.spring,
        duration: 2569,
        frequency: 515,
        friction: 100,
        anticipationSize: 304
      });
      // activer le paralax a la fin du loader pour eviter des bugs
      setTimeout(finLoader, 2569);
    });
  }else {
    finLoader();
  }

  // selects
    $(".custom-select").each(function() {
      var classes = $(this).attr("class"),
          id      = $(this).attr("id"),
          name    = $(this).attr("name");
      var template =  '<div class="' + classes + '">';
          template += '<span class="custom-select-trigger">' + $(this).attr("placeholder") + '</span>';
          template += '<div class="custom-options">';
          $(this).find("option").each(function() {
            template += '<span class="custom-option ' + $(this).attr("class") + '" data-value="' + $(this).attr("value") + '">' + $(this).html() + '</span>';
          });
      template += '</div></div>';

      $(this).wrap('<div class="custom-select-wrapper"></div>');
      $(this).hide();
      $(this).after(template);
    });

    $(".custom-select-trigger").on("click", function() {
      $('html').one('click',function() {
        $(".custom-select").removeClass("opened");
      });
      $(this).parents(".custom-select").toggleClass("opened");
      event.stopPropagation();
    });
    $(".custom-option").on("click", function() {
      $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
      $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
      $(this).addClass("selection");
      $(this).parents(".custom-select").removeClass("opened");
      $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
    });
    $(".custom-option.select").each(function() {
      $(this).parents(".custom-select-wrapper").find("select").val($(this).data("value"));
      $(this).parents(".custom-options").find(".custom-option").removeClass("selection");
      $(this).addClass("selection");
      $(this).parents(".custom-select").removeClass("opened");
      $(this).parents(".custom-select").find(".custom-select-trigger").text($(this).text());
    });
    // effet buble du select
    $(".bubble .custom-select-trigger").mouseup(function () {
      dynamics.animate($(this)[0], {
        scale: 1.1
      }, {
        type: dynamics.bounce,
        duration: 959,
        frequency: 449
      })
    });
    //background-image des imgDiv
    //la function pour le paralax est au chargement du loader
    $(".img").each(function() {
      var attr = $(this).attr('data-image-src');
      var attrHeight = $(this).attr('data-image-height');
      if (typeof attr !== typeof undefined && attr !== false) {
          $(this).css('backgroundImage', 'url('+attr+')');
      }
      if (typeof attrHeight !== typeof undefined && attrHeight !== false) {
          $(this).css('height', attrHeight);
      }
    });

    function finLoader() {
      $('body, html').css('overflow-y','auto');
      $(".img.parallax").each(function() {
        var attr = $(this).attr('data-image-src');
        if (typeof attr !== typeof undefined && attr !== false) {
          gray = false;
          if ($(this).hasClass('grayscale')) {
            gray = true;
          }
            $(this).parallax({imageSrc: attr, isGray: gray});
        }
      });
    }

})(jQuery);
