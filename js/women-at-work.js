document.addEventListener("scroll", function () {
  var spinner = document.getElementById('women-at-work-spinner');
  var scrollDistance = window.pageYOffset
  scrollDistance = scrollDistance * .1;

  // add css transform
  spinner.style.transform = 'rotate(' + scrollDistance + 'deg)'
  
});

const animateTags = document.querySelectorAll("article.project-block")

// fade out on load
animateTags.forEach(tag => {
  tag.style.opacity = 0
})

const fadeIn = function () {
  // look through all the animated tags and see
  // with the getBoundingClientRect if it's in the window
  let delay = 0.25


  animateTags.forEach(tag => {
    const tagTop = tag.getBoundingClientRect().top
    const tagBottom = tag.getBoundingClientRect().bottom

    if (tagTop < window.innerHeight) {
      tag.style.animation = `fadein 1s ${delay}s both`
      delay = delay + 0.15
    } 
  })
}

// on load, run fadeIn
fadeIn()

// on scroll, run fadeIn
document.addEventListener("scroll", function() {
  fadeIn()
})

// on browser resize, run fadeIn
window.addEventListener("resize", function() {
  fadeIn()
})