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
  var $ghost = $(".cute-ghost-icon");
  const heightOfSite = $("body").height();
  const widthToScroll = $(window).width() - $ghost.offset().left + 10;
  const transPerScroll = widthToScroll / heightOfSite;

  const translateGhostX = () => {
    var st = $(this).scrollTop();
    var newPos = st * transPerScroll + 15;

    $ghost.css({
      left: newPos,
    });
  };

  translateGhostX();
  $(window).scroll(() => translateGhostX());
});
