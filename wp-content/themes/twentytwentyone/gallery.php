<?php
/**
 * Template Name: Gallery
 *
 * */
?>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.css'>
<link rel='stylesheet prefetch' href='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick-theme.min.css'>
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto+Condensed:100'>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.1.1/jquery.min.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery-mousewheel/3.1.12/jquery.mousewheel.js'></script>
<script src='https://cdnjs.cloudflare.com/ajax/libs/slick-carousel/1.6.0/slick.min.js'></script>
<style type="text/css">
    body,
html {
  height: 50%;
  background: #110101;
  font-family: "Roboto", sans-serif;
  overflow: hidden;
}

.slideshow {
  position: absolute;
  z-index: 1;
  top: 0;
  left: 0;
  width: 100vw;
  height: 100vh;
  overflow: hidden;
}
.slideshow .slider {
  width: 100vw;
  height: 100vw;
  z-index: 2;
}
.slideshow .slider * {
  outline: none;
}
.slideshow .slider .item {
  height: 100vh;
  width: 100vw;
  position: relative;
  overflow: hidden;
  border: none;
}
.slideshow .slider .item .text {
  display: none;
}
.slideshow .slider .item img {
  min-width: 101%;
  min-height: 101%;
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
}
.slideshow .slick-dots {
  position: fixed;
  z-index: 100;
  width: 40px;
  height: auto;
  bottom: auto;
  top: 50%;
  right: 0;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
  left: auto;
  color: #fff;
  display: block;
}
.slideshow .slick-dots li {
  display: block;
  width: 100%;
  height: auto;
}
.slideshow .slick-dots li button {
  position: relative;
  width: 20px;
  height: 15px;
  text-align: center;
}
.slideshow .slick-dots li button:before {
  content: "";
  background: #fff;
  color: #fff;
  height: 2px;
  width: 20px;
  border-radius: 0;
  position: absolute;
  top: 50%;
  right: 0;
  left: auto;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
  transition: all 0.3s ease-in-out;
  opacity: 0.6;
}
.slideshow .slick-dots li.slick-active button:before {
  width: 40px;
  opacity: 1;
}
.slideshow.slideshow-right {
  left: 0;
  z-index: 1;
  width: 50vw;
  pointer-events: none;
}
.slideshow.slideshow-right .slider {
  left: 0;
  position: absolute;
}

.slideshow-text {
  position: absolute;
  top: 50%;
  left: 50%;
  -webkit-transform: translate(-50%, -50%);
  transform: translate(-50%, -50%);
  z-index: 100;
  font-size: 30px;
  width: 100vw;
  text-align: center;
  color: #fff;
  font-family: "Roboto Condensed", sans-serif;
  font-weight: 100;
  pointer-events: none;
  text-transform: uppercase;
  letter-spacing: 20px;
  line-height: 0.8;
}

.topnav {
  overflow: hidden;
  background-color: #333;
}

.topnav a {
  float: left;
  color: #f2f2f2;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
}

.topnav a.active {
  background-color: #4caf50;
  color: white;
}

.topnav-right {
  float: right;
}
@media (max-width: 767px) {
  .slideshow-text {
    font-size: 40px;
  }
}

</style>

<html lang="en">

<body>
  <div class="split-slideshow">
    <div class="slideshow">
      <div class="slider">
        <div class="item">
          <img src="https://cdn.hipwallpaper.com/i/97/99/2pLchf.png" />
        </div>
        <div class="item">
          <img src="https://wallpaper.dog/large/10768015.png" />
        </div>
        <div class="item">
          <img src="https://wallpaperaccess.com/full/1267221.jpg" />
        </div>
        <div class="item">
          <img src="https://miro.medium.com/max/3840/1*Act0CYfi-TmFts310z2z_A.jpeg" />
        </div>
        <div class="item">
          <img src="https://images5.alphacoders.com/862/thumb-1920-862186.jpg" />
        </div>
      </div>
    </div>
    <div class="slideshow-text">
      <div class="item">Slide 1</div>
      <div class="item">Slide 2</div>
      <div class="item">Slide 3</div>
      <div class="item">Slide 4</div>
      <div class="item">Slide 5</div>
    </div>
  </div>
</body>

</html>

<script type="text/javascript">
    var $slider = jQuery(".slideshow .slider"),
  maxItems = jQuery(".item", $slider).length,
  dragging = false,
  tracking,
  rightTracking;

$sliderRight = jQuery(".slideshow")
  .clone()
  .addClass("slideshow-right")
  .appendTo($(".split-slideshow"));

rightItems = jQuery(".item", $sliderRight).toArray();
reverseItems = rightItems.reverse();
jQuery(".slider", $sliderRight).html("");
for (i = 0; i < maxItems; i++) {
  jQuery(reverseItems[i]).appendTo(jQuery(".slider", $sliderRight));
}

$slider.addClass("slideshow-left");
jQuery(".slideshow-left")
  .slick({
    vertical: true,
    verticalSwiping: true,
    arrows: false,
    infinite: true,
    dots: true,
    speed: 1000,
    cssEase: "cubic-bezier(0.7, 0, 0.3, 1)"
  })
  .on("beforeChange", function (event, slick, currentSlide, nextSlide) {
    if (
      currentSlide > nextSlide &&
      nextSlide == 0 &&
      currentSlide == maxItems - 1
    ) {
      jQuery(".slideshow-right .slider").slick("slickGoTo", -1);
      jQuery(".slideshow-text").slick("slickGoTo", maxItems);
    } else if (
      currentSlide < nextSlide &&
      currentSlide == 0 &&
      nextSlide == maxItems - 1
    ) {
      jQuery(".slideshow-right .slider").slick("slickGoTo", maxItems);
      jQuery(".slideshow-text").slick("slickGoTo", -1);
    } else {
      jQuery(".slideshow-right .slider").slick(
        "slickGoTo",
        maxItems - 1 - nextSlide
      );
      jQuery(".slideshow-text").slick("slickGoTo", nextSlide);
    }
  })
  .on("mousewheel", function (event) {
    event.preventDefault();
    if (event.deltaX > 0 || event.deltaY < 0) {
      jQuery(this).slick("slickNext");
    } else if (event.deltaX < 0 || event.deltaY > 0) {
      jQuery(this).slick("slickPrev");
    }
  })
  .on("mousedown touchstart", function () {
    dragging = true;
    tracking = jQuery(".slick-track", $slider).css("transform");
    tracking = parseInt(tracking.split(",")[5]);
    rightTracking = jQuery(".slideshow-right .slick-track").css("transform");
    rightTracking = parseInt(rightTracking.split(",")[5]);
  })
  .on("mousemove touchmove", function () {
    if (dragging) {
      newTracking = jQuery(".slideshow-left .slick-track").css("transform");
      newTracking = parseInt(newTracking.split(",")[5]);
      diffTracking = newTracking - tracking;
      jQuery(".slideshow-right .slick-track").css({
        transform:
          "matrix(1, 0, 0, 1, 0, " + (rightTracking - diffTracking) + ")"
      });
    }
  })
  .on("mouseleave touchend mouseup", function () {
    dragging = false;
  });

jQuery(".slideshow-right .slider").slick({
  swipe: false,
  vertical: true,
  arrows: false,
  infinite: true,
  speed: 950,
  cssEase: "cubic-bezier(0.7, 0, 0.3, 1)",
  initialSlide: maxItems - 1
});
jQuery(".slideshow-text").slick({
  swipe: false,
  vertical: true,
  arrows: false,
  infinite: true,
  speed: 900,
  cssEase: "cubic-bezier(0.7, 0, 0.3, 1)"
});

</script>