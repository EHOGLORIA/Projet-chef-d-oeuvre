// section requettes de la page 3
var input = document.getElementById("Input");
var ul = document.getElementById("requetteList");


// getting input length
function inputLength() {
    return userInput.value.length;
}

function insertion(){
    li = `<li> ${ input.value }</li>`
    ul.innerHTML += li
    input.value = ""
}


