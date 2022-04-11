import "./Navbar.scss";
import $ from "jquery";

function toggleNav(button) {
  if ($(button).hasClass("opened")) {
    $(button).removeClass("opened");
    $(button).siblings(".collapse-container").removeClass("show");
    return;
  } else {
    $(button).addClass("opened");
    $(button).siblings(".collapse-container").addClass("show");
    return;
  }
}

$(document).on("click", ".navbar-toggler", function (e) {
  toggleNav(this);
});
$(document).on("click", ".collapse-container", function (e) {
  var menu = $(this).find(".navbar-collapse");
  if (!menu.is(e.target) && menu.has(e.target).length === 0) {
    $(this).siblings(".navbar-toggler").click();
  }
});
