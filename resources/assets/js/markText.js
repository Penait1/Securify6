$( document ).ready(function() {

    $(document).on("click", ".line-numbers-rows > span", function (e) {

        var shiftKey = e.shiftKey;

        var $codeBlock = $("#codeBlock");
        var line = $(this).index() + 2;

        var lines = $codeBlock.attr("data-line").split(',');

        var found = checkExistingItems(lines, line.toString());

        if (shiftKey && !found) {
            var desc = getBeginLine(lines);
            lines.pop(); // pop the descending reference from array.
            lines.push(desc + "-" + line)
        } else if(!found) {
            lines.push(line);
        }

        $codeBlock.attr("data-line", lines.join());
        Prism.highlightAll();
    });


    $("#mark").on('click', function (e) {

        var dataLines = $("#codeBlock").attr("data-line").split(',');
        var lineFrom = 0;
        var lineTo = 0;
        var lastElement = "";

        if(dataLines.length === 1 && Number(dataLines[0]) === 0) {
            alert('No code has been found');
            return;
        } else {
            lastElement = dataLines[dataLines.length - 1];
            if(isNaN(Number(lastElement))) { // code block
                var subElements = lastElement.split('-');
                lineFrom = Number(subElements[0]);
                lineTo = Number(subElements[1]);
            } else { // single line
                lineFrom = Number(lastElement);
                lineTo = Number(lastElement);
            }
        }

        var $container = $("#comments");
        var totalComments = $container.find('.comment').length;
        var prototypeId = lineFrom.toString() + lineTo.toString();

        var prototype = "<div id='" + prototypeId + "'><a href='#codeBlock." +lastElement +"'>Line number(s):" + getPrettyLines(lastElement) +"</a><textarea class='comment' name='comment[" + totalComments + "][value]'> </textarea>";
        prototype += "<input type='hidden' name='comment[" + totalComments + "][line_from]' value='" + lineFrom + "'/>";
        prototype += "<input type='hidden' name='comment[" + totalComments + "][line_end]' value='" + lineTo + "'/></div>";

        $container.append(prototype);
    });
});

function getPrettyLines(lines) {
    if(isNaN(Number(lines))) { // code block detected
        var subElements = lines.split('-');
        return (Number(subElements[0]) - 1) + " - "  + (Number(subElements[1]) - 1);
    } else {
        return Number(lines) - 1;
    }
}

function getBeginLine(elements) { // gets the begin line by detecting if code block or not
    var element = elements[elements.length - 1];

    if(isNaN(Number(element))) { // code block detected
        var subElements = element.split('-');
        return Number(subElements[0]); // return first value of block. 1-12, return 1.
    } else {
        return Number(element);
    }

}

function checkExistingItems(lines, line)
{
    var index = $.inArray(line, lines);
    var found = false;
    var $commentsContainer = $("#comments");

    if(index > -1) { // found a single item. Remove it from the list
        lines.splice(index, 1);
        $commentsContainer.find('#' + line + line).remove();
        found = true;
    }

    if(!found) {
        $.each(lines, function (key, value) {
            var subElements = value.split('-');
            var from = Number(subElements[0]);
            var to = Number(subElements[1]);
            if(between(Number(line), from, to)) {
                $commentsContainer.find('#' + from + to).remove();
                lines.splice(key, 1);
                found = true;
            }
        });
    }

    return found;

}

function between(x, min, max) {
    return x >= min && x <= max;
}
