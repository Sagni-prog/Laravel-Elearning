const svgImage = document.querySelector(".svg-image")
const getFile = document.querySelector("#getFile")

document.querySelector('.myfile').addEventListener("click", function(e) {
    if (e.target.classlist.contains("myfile-btn"))
        console.log(getFile.value)
})