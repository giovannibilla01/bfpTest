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

function activeMoreSpan(span) {
    let activeMoreButton = document.getElementById(span.id + "-button")   
    if (span.style.display != 'inline') {
        span.style.display = 'inline'
        activeMoreButton.innerHTML = ' Ler Menos'
    } else {
        span.style.display = 'none'
        activeMoreButton.innerHTML = ' Ler Mais'
    }
}

const inputAnswers = document.querySelectorAll('.inputAnswers');

inputAnswers.forEach((input, index) => {
    input.addEventListener('input', function(event) {
        const inputValue = event.target.value;
        const validNumbers = ['1', '2', '3', '4', '5', '6', '7'];

        if (!validNumbers.includes(inputValue)) {
            event.target.value = '';
        } else {
            if (index < inputAnswers.length - 1) {
                inputAnswers[index + 1].focus();
            }
        }
    });
});