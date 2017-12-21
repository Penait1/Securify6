function copySelectionToTextView() {
    selection = window.getSelection();

    var linesSelected = selection.toString().split('\n');
    var entireChallenge = document.getElementById("codeBlock").textContent.split('\n');

    for(var i = 0;i < linesSelected.length;i++) {
        for (var j = 0; j < entireChallenge.length; j++) {
            if (linesSelected[i].toUpperCase() == entireChallenge[j].toUpperCase()) {
                var line = j + 1;
                document.getElementById("codeBlock").setAttribute('data-line', document.getElementById("codeBlock").getAttribute('data-line').concat(',').concat(line.toString()));
                document.getElementById("comments").value += (j + 1) + ": ".concat(linesSelected[i].concat("\n"));
                break;
            }
        }
    }
    Prism.highlightAll();
}

