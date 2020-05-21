const animatedTags = document.querySelectorAll("h1.hero, h4.worst")

// fade out on load
animatedTags.forEach(tag => {
	tag.style.opacity = 0
})

const fadeIn = function () {
	// look through all the animated tags and see
	// with the getBoundingClientRect if it's in the window
	let delay = 1


	animatedTags.forEach(tag => {
		const tagTop = tag.getBoundingClientRect().top
		const tagBottom = tag.getBoundingClientRect().bottom

		if (tagTop < window.innerHeight) {
			tag.style.animation = `fadein 1s ${delay}s both`
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


// DRAW ON LINE
///////////////////

const lineTags = document.querySelectorAll("div.line-one-line")

// fade out on load
lineTags.forEach(tag => {
	tag.style.height = 0
})

const drawOn = function () {
	// look through all the animated tags and see
	// with the getBoundingClientRect if it's in the window
	let delay = 1


	lineTags.forEach(tag => {
		const tagTop = tag.getBoundingClientRect().top
		const tagBottom = tag.getBoundingClientRect().bottom

		if (tagTop < window.innerHeight) {
			tag.style.animation = `drawon 2s ${delay}s both`
		}
	})
}

// on load, run fadeIn
drawOn()

// on scroll, run fadeIn
document.addEventListener("scroll", function() {
	drawOn()
})

