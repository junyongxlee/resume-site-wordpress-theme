jQuery(document).ready(function ($) {
  // This is required for AJAX to work on our page
  var ajaxurl = myAjax.ajaxurl;
  var updateNewCardsTimeout;

  function load_all_posts(page, total_page, delay) {
    jQuery(document).ready(function ($) {
      clearTimeout(updateNewCardsTimeout);
      $(".card").addClass("flip-out-ver-right");

      var data = {
        page: page,
        action: "get_posts_for_front_page",
      };
      updateNewCardsTimeout = setTimeout(() => {
        // Send the data
        $.post(ajaxurl, data, function (response) {
          $("#projects-cards-container").html(response);
        });
      }, delay);

      //Update current page number
      $("#current-page").text(page);

      //Disable previous or next button depending on whether first or last page
      if (page == total_page) {
        $("#next-button").addClass("disabled");
      } else {
        $("#next-button").removeClass("disabled");
      }
      if (page == 1) {
        $("#previous-button").addClass("disabled");
      } else {
        $("#previous-button").removeClass("disabled");
      }
    });
  }

  var page = 1;
  const total_page = parseInt($("#total-page").text(), 10);
  //Load first page as default;
  load_all_posts(page, total_page, 0);

  $("#next-button").on("click", function () {
    page++;
    load_all_posts(page, total_page, 300);
  });

  $("#previous-button").on("click", function () {
    page--;
    load_all_posts(page, total_page, 300);
  });
});
