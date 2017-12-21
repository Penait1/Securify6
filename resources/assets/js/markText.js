var selected = false;

function surroundSelection() {
    selection = window.getSelection();
    document.getElementById("right").value += selection.textContent;
}


function surroundSelection() {

    var a  = document.getelem("lol");
    a.innerHTML = "<mark>"+a.innerHTML+ "</mark>" ;

}
