const one = document.querySelector("#one-c")
const two = document.querySelector("#two-c")
const three = document.querySelector("#three-c")

// displayed course section
const music = document.querySelector("#music")
const programming = document.querySelector("#art")
const art = document.querySelector("#art")
const defaultContainers = document.querySelectorAll(".defualt-container")
console.log(defaultContainers)

// course event listener

one.addEventListener("click", function(){
removeContainers()
defaultContainers[0].className = "container defualt-container active-container"
})

two.addEventListener("click", function(){
    removeContainers()
    defaultContainers[1].className = "container defualt-container active-container"
})

three.addEventListener("click", function(){
    removeContainers()
    defaultContainers[2].className = "container defualt-container active-container"
})

function removeContainers(){
    defaultContainers.forEach(defultC=> {
        defultC.classList.remove("active-container")
    })
}