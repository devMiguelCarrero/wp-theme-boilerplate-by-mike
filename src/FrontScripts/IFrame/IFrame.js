import $ from "jquery";

const resizeIFrameToFitContent = (iFrame) => {
  const iW = $(iFrame).css("width");
  $(iFrame).css("height", (parseInt(iW) * 9) / 16) + "px";
};

$("iframe").load(function (e) {
  resizeIFrameToFitContent(this);
});
$(window).on("resize", function (e) {
  $("body iframe").each(function (Index, el) {
    resizeIFrameToFitContent($(this));
  });
});
