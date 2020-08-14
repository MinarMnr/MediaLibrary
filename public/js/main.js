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
let sliderform1 = document.getElementById("save");
sliderform1.addEventListener("click", function () {
  setTimeout(function () {
    download();
  }, 0);
});
function download() {
  console.log("click");
  let src = targetimage.getAttribute("src");
  console.log(src);
  targetimage.setAttribute("download", src);
  targetimage.click();
}
