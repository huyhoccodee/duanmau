var index = 0;
var duongdan = "./image/img/";
var imgs = [
    "home_slider_2_d_master.webp",
    "home_slider_5_d_master.webp",
    "home_slider_15_d_master.webp",
    "home_slider_18_d_master.webp",
];

function nextImg() {
    if (index < imgs.length - 1) {
      index++;
    } else {
      index = 0;
    }
    document.getElementById("anh").src = duongdan + imgs[index];
  }
  function previousImg() {
    if (index < 0) {
      index--;
    } else {
      index = imgs.length - 1;
    }
    document.getElementById("anh").src = duongdan + imgs[index];
  }
  setInterval(nextImg, 2500);