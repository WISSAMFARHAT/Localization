var slideIndex = 0;
showSlides();

function showSlides() {
  var i;
  var slides = document.getElementsByClassName("slideShow");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.opacity = "0";
  }
  slideIndex++;
  if (slideIndex > slides.length) {slideIndex = 1}
  if(slideIndex<0){slideIndex=slides.length-1}
  slides[slideIndex-1].style.opacity = "1";
  setTimeout(showSlides, 5000); // Change image every 2 seconds
}

function slidenext()
{
  var i;
  var slides = document.getElementsByClassName("slideShow");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.opacity = "0";
    }
    slideIndex++;
    if (slideIndex > slides.length) {slideIndex = 1}
    if(slideIndex<0){slideIndex=slides.length-1}
    slides[slideIndex-1].style.opacity = "1";
}

function slidepreview()
{
  var i;
  var slides = document.getElementsByClassName("slideShow");
  for (i = 0; i < slides.length; i++) {
    slides[i].style.opacity = "0";
  }
    slideIndex--;
    if (slideIndex > slides.length) {slideIndex = 1}
    if(slideIndex<0){slideIndex=slides.length-1}
    slides[slideIndex].style.opacity = "1";
}
