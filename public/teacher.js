console.log('love u');
const sumbit = document.getElementById('sumbit');
sumbit.addEventListener('click', function change(e) {
    console.log(e);
    // document.body.style.background = "red";
    e.defaultPrevented();
})