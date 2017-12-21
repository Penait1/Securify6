var lines = [];
function copySelectionToTextView() {
    lines = [];

    comments++;
    selection = window.getSelection();

    var linesSelected = selection.toString().split('\n');
    var entireChallenge = document.getElementById("codeBlock").textContent.split('\n');

    for(var i = 0;i < linesSelected.length;i++) {
        for (var j = 0; j < entireChallenge.length; j++) {
            if (linesSelected[i].toUpperCase() == entireChallenge[j].toUpperCase() && entireChallenge[j].trim().length > 0) {
                var line = j + 1;
                document.getElementById("codeBlock").setAttribute('data-line', document.getElementById("codeBlock").getAttribute('data-line').concat(',').concat(line.toString()));
                document.getElementById("comments").value += line + ": ".concat(linesSelected[i].concat("\n"));

                lines.push(line);
                break;
            }
        }
    }
    var $container = $("#comments");
    var totalComments = $container.find('.comment').length;
    console.log(totalComments);

    var prototype = "<textarea class='comment' name='comment[" + totalComments + "][value]'> </textarea>";
    prototype += "<input type='hidden' name='comment[" + totalComments + "][line_from]' value='" + lines[0] + "'/>";
    prototype += "<input type='hidden' name='comment[" + totalComments + "][line_end]' value='" + lines[lines.length - 1] + "'/>";

    $container.append(prototype);

    Prism.highlightAll();
}

