let addTeacher = document.querySelector("#add-teacher")
let toolTip = document.querySelector(".delete-card")
let coverDelete = document.querySelector(".cover-delete ")
let delConfirm = document.querySelector("#confirm")
    // let teacherName = document.querySelectorAll(".teacher-Name")

let deletHead = document.querySelector(".delet-head")
let parTeacherName = document.querySelector(".par-teacher-name")



//create function card element append
function addCard() {
    let card = document.createElement("div")
    card.className = "card"
    card.innerHTML = `  <div class="card-header-1">
    <img src="author-image1.jpg" alt="rover" />
</div>
<div class="card-body-1">
    <span class="tag tag-teal">Technology</span>
    <h4 class="teacher-Name">
        <span>Natty</span> Deyas
    </h4>
    <p>
        Frontend Developer
    </p>
    <div class="btn-profile">
        <a href="" class="a-btn-profile ">
            View
           </a>
        <a href="#" class="delete-profile"><i class="fa fa-trash del-i" aria-hidden="true"> Delete</i> </a>
    </div>

</div>
`

    //end of card element

    //select container and appendchild(card)
    const container = document.querySelector(".container")
    container.insertAdjacentElement('afterbegin', card)
        // container
}
//end of container
// console.log(teacherName)

let bodyd = document.querySelector("body")
    // console.log(toolTip)
    // Functions
function addTool() {

    toolTip.classList.add("active-del")
    coverDelete.style.height = "100%"
        // coverDelete.style.bottom = "0"
    bodyd.classList.add("bodys")

    console.log(deletHead.textContent)

}

//remove tool tip 
function removeTool() {
    toolTip.classList.remove("active-del")
    coverDelete.style.height = "0"
        // coverDelete.style.top = "0"
    bodyd.classList.remove("bodys")
}

//end of functions

//add event listener start

//event listener ended
function removeTeacher(removeName) {
    return removeName
}


document.querySelector("#tool-check").addEventListener("click", function(e) {
    // console.log("clicked")
    // let newCard = document.querySelector(".card")
    if (e.target.className === "delete-profile") {
        // newCard.classList.add("delete-c")
        let newcard = e.target.parentElement.parentElement.parentElement

        newcard.classList.add("delete-c")

        deletHead.textContent = "Delete " + removeTeacher(e.target.parentElement.previousElementSibling.previousElementSibling.textContent) + "?"

        parTeacherName.textContent = removeTeacher(e.target.parentElement.previousElementSibling.previousElementSibling.firstElementChild.textContent)


        addTool()
    }

    if (e.target.className === "fa fa-trash del-i") {
        // newCard.classList.add("delete-c")
        let newcard = e.target.parentElement.parentElement.parentElement.parentElement

        newcard.classList.add("delete-c")
        deletHead.textContent = "Delete " + removeTeacher(e.target.parentElement.parentElement.previousElementSibling.previousElementSibling.textContent) + "?"

        parTeacherName.textContent = removeTeacher(e.target.parentElement.parentElement.previousElementSibling.previousElementSibling.firstElementChild.textContent)
        addTool()

    }

})



document.querySelector("#cancel-del").addEventListener("click", function(e) {
    removeTool()
    let canclcard = document.querySelectorAll(".card")
    canclcard.forEach(canc => {
        canc.classList.remove("delete-c")
    })
    console.log(canclcard)
        // if (canclcard.classList.contains("delete-c")) {
        //     canclcard.classList.remove("delete-c")





})

document.querySelector(".fa-remove").addEventListener("click", function(e) {
    let canclcard = document.querySelectorAll(".card")
    canclcard.forEach(canc => {
        canc.classList.remove("delete-c")
    })
    removeTool()
})

// addTeacher.addEventListener("click", addCard)

delConfirm.addEventListener("click", function(e) {
    e.preventDefault()
    let deletCard = document.querySelector(".delete-c")
    deletCard.remove()
    console.log(deletCard)
    removeTool()

})