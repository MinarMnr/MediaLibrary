let targetimage = document.getElementById("targetimage");
let inputrange = document.querySelectorAll(".slider");

for (let i = 0; i <= inputrange.length - 1; i++) {
  inputrange[i].addEventListener("input", editimage);
}

function editimage() {
  let gs = document.getElementById("gs");
  let blur = document.getElementById("blur");
  let huerotate = document.getElementById("hue-rotate");
  let sepia = document.getElementById("sepia");

  let gsval = gs.value;
  let blurval = blur.value;
  let huerotateval = huerotate.value;
  let sepiaval = sepia.value;

  targetimage.style.filter =
    "grayscale(" +
    gsval +
    "%) blur(" +
    blurval +
    "px) hue-rotate(" +
    huerotateval +
    "deg) sepia(" +
    sepiaval +
    "%)";
}

let sliderform = document.getElementById("slider-form");
sliderform.addEventListener("reset", function () {
  sliderform.reset();
  setTimeout(function () {
    editimage();
  }, 0);
});

//download function
let save = document.getElementById("save");
save.addEventListener("click", function () {
  setTimeout(function () {
    download();
  }, 0);
});

function download() {
  let src = targetimage.getAttribute("src");
  var myCanvas = document.getElementById("myCanvas");
  var img = document.createElement("img");
  var ctx = myCanvas.getContext ? myCanvas.getContext("2d") : null;
  ctx.filter = targetimage.style.filter;
  img.src = src;

  img.onload = function () {
    ctx.drawImage(img, 0, 0, myCanvas.width, myCanvas.height);

    let link = document.getElementById("link");
    link.setAttribute(
      "download",
      "edited" + Math.floor(Math.random() * 10000 + 1) + ".png"
    );
    link.setAttribute(
      "href",
      myCanvas.toDataURL("image/png").replace("image/png", "image/octet-stream")
    );
    link.click();
  };
}
