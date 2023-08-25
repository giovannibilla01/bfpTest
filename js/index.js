let input_start = document.getElementById("start")
let input_termination = document.getElementById("termination")

window.onload = () => {
    let date = new Date()
    input_start.value = date.getHours().toString() + ":" + date.getMinutes() + ":" + date.getSeconds()
}

function timeSubmit() {
    let date = new Date()
    input_termination.value = date.getHours().toString() + ":" + date.getMinutes() + ":"  + date.getSeconds()
}

function reloadPage() {
    window.location.href = "/BFPtest/";
}