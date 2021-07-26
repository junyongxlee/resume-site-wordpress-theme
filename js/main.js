jQuery(document).ready(function ($) {
  //Change the active menu based on scroll location
  const setActiveNavMenu = () => {
    var position = window.pageYOffset;
    $(".section").each(function () {
      var target = $(this).offset().top;
      var id = $(this).attr("id");
      if (position >= target - 200) {
        $(".nav-item").removeClass("active");
        $("#nav-item-" + id).addClass("active");
      }
    });
  };

  setActiveNavMenu();
  $(window).scroll(() => setActiveNavMenu());

  //Hide navbar menu on click (for mobile dropdown menu)
  $(document).click(function (event) {
    var clickover = $(event.target);
    var $navbar = $(".navbar-collapse");
    var _opened = $navbar.hasClass("show");
    if (_opened === true && !clickover.hasClass("navbar-toggle")) {
      $navbar.collapse("hide");
    }
  });

  $(window).scroll(() => $(".navbar-collapse").collapse("hide"));

  //Move the ghost icon on scroll
  const $ghost = $(".cute-ghost-icon");
  const $navItemHome = $("#nav-item-home");
  const $navItemContact = $("#nav-item-contact");

  const translateGhostX = () => {
    var scrollTop = $(window).scrollTop();
    var docHeight = $(document).height();
    var winHeight = $(window).height();
    var scrollPercent = scrollTop / (docHeight - winHeight);
    var scrollPercentRounded = scrollPercent;

    const widthToScroll =
      $(".navbar-nav").width() -
      $ghost.width() -
      parseInt($navItemContact.css("padding-right")) * 2;

    var newPos =
      scrollPercentRounded * widthToScroll +
      parseInt($navItemHome.css("padding-left"));

    $ghost.css({
      left: newPos,
    });

    console.log({ newPos, widthToScroll });
  };

  translateGhostX();

  $(window).scroll(() => translateGhostX());
});
