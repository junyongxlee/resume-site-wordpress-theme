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
  var widthToScroll = null;
  var initialLeft = null;

  const translateGhostX = () => {
    const heightOfSite = $("body").height();
    const transPerScroll = widthToScroll / heightOfSite;

    var st = $(this).scrollTop();
    var newPos = st * transPerScroll + initialLeft;

    $ghost.css({
      left: newPos,
    });
  };

  const updateWidthToScroll = () => {
    // widthToScroll = $(window).width() - $("#nav-item-home").offset().left + 10;
    const $navItemContact = $("#nav-item-contact");
    const $navItemHome = $("#nav-item-home");

    initialLeft = parseInt($navItemHome.css("padding-left"));
    widthToScroll = $(".navbar-nav").width() + $ghost.width();

    console.log({ widthToScroll });
  };
  updateWidthToScroll();
  translateGhostX();

  $(window).scroll(() => translateGhostX());
  $(window).resize(() => updateWidthToScroll());
});
