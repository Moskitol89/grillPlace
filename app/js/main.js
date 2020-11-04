$(function () {
  $("body").on("scroll", function () {
    if ($(this).scrollTop() > 100 && $(this).width() > 550) {
      $(".scrollup").fadeIn();
    } else {
      $(".scrollup").fadeOut();
    }
  });

  $('.scrollup').click(function () {
    $("html, body").animate({
      scrollTop: 0
    }, 400);
    return false;
  });
  $(".open-popup-link").magnificPopup({
    type: "inline",
    overflowY: "scroll",
    removalDelay: 300,
    closeButtonInside: true,
    mainClass: 'mfp-fade'
  });
  let swiper = new Swiper(".menu__slider", {
    spaceBetween: 150,
    centeredSlides: true,
    speed: 1000,
    autoplay: {
      delay: 6000,
      disableOnInteraction: false,
    },
    pagination: {
      el: '.swiper-pagination',
      clickable: true
    }
  });
  $(".header__menu-btn").click(function () {
    $(".header__menu-links").slideToggle();
  });
  $("#reserve__form").submit( function () {
    $.ajax({
      url: "../php/reserve-form-send.php",
      method: "post",
      dataType: "html",
      data: $(this).serialize(),
      success: function () {
        alert("Письмо отправлено!");
      },
      error: function () {
        alert("При отправке формы возникла ошибка!");
      }
    });
    return false;
  });
  $("#footer__form").submit(function () {
    $.ajax({
      url: "../php/footer-form-send.php",
      method: "post",
      dataType: "html",
      data: $(this).serialize(),
      success: function () {
        alert("Письмо отправлено!");
      },
      error: function () {
        alert("При отправке формы возникла ошибка!");
      }
    });
    return false;
  });

  $(".reserve-popup__date").flatpickr({
    altInput: true,
    altFormat: "F j, Y",
    dateFormat: "Y-m-d",
    disableMobile: "true",
    locale: {
      weekdays: {
        shorthand: ["Вс", "Пн", "Вт", "Ср", "Чт", "Пт", "Сб"],
        longhand: [
          "Воскресенье",
          "Понедельник",
          "Вторник",
          "Среда",
          "Четверг",
          "Пятница",
          "Суббота",
        ],
      },
      months: {
        shorthand: [
          "Янв",
          "Фев",
          "Март",
          "Апр",
          "Май",
          "Июнь",
          "Июль",
          "Авг",
          "Сен",
          "Окт",
          "Ноя",
          "Дек",
        ],
        longhand: [
          "Январь",
          "Февраль",
          "Март",
          "Апрель",
          "Май",
          "Июнь",
          "Июль",
          "Август",
          "Сентябрь",
          "Октябрь",
          "Ноябрь",
          "Декабрь",
        ],
      },
      firstDayOfWeek: 1,
      ordinal: function () {
        return "";
      },
      rangeSeparator: " — ",
      weekAbbreviation: "Нед.",
      scrollTitle: "Прокрутите для увеличения",
      toggleTitle: "Нажмите для переключения",
      amPM: ["ДП", "ПП"],
      yearAriaLabel: "Год",
      time_24hr: true,
    }
  });
});