const Bb = document.querySelector(".Bb")
const BbRes = document.querySelector(".Bb-resource")
const iconBb = document.querySelector(".b11-icon")
const a1Video = document.querySelector(".A1-video")
Bb.style.display = "none"
BbRes.style.display = "none"

console.log(a1Video)
document.querySelector(".course-section").addEventListener("click", function(e) {

    if (e.target.classList.contains("ok")) {

        displayBb()
        iconBb.style.transform = "translateY(-100deg)"

    }

    if (e.target.classList.contains("oks")) {
        displayBbResource()
        iconBb.style.transform = "translateY(-100deg)"

    }
})

Bb.addEventListener("click", function(e) {

    if (e.target.classList.contains("ok1")) {
        setVideo(e.target.nextElementSibling.textContent)
            // parentName = e.target.textContent
            // parentName = 
            // console.log("ok 1")
            // console.log(parentName)
    }
})

function displayBb() {
    if (Bb.style.display == "none") {
        Bb.style.display = "flex"
        console.log("one")
    } else {
        Bb.style.display = "none"
        console.log("two")
    }
}

function displayBbResource() {
    if (BbRes.style.display == "none") {
        BbRes.style.display = "flex"
        console.log("one")
    } else {
        BbRes.style.display = "none"
        console.log("two")
    }
}

function setVideo(videoName) {
    // console.log(videoName)
    a1Video.setAttribute("src", videoName + ".mp4")

}