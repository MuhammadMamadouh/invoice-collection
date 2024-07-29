document.addEventListener('DOMContentLoaded', (event) => {
    var modal = document.getElementById("myModal");


    var btns = document.querySelectorAll(".openModalBtn");


    var span = document.querySelectorAll(".closeBtn");

    btns.forEach((btn)=>{
        btn.onclick = function () {
            modal.style.display = "block";
        }
    })
    span.forEach(spanClose => {
        spanClose.addEventListener("click" , function () {
            modal.style.display = "none";
        })
    });

    window.onclick = function (event) {
        if (event.target == modal) {
            modal.style.display = "none";
        }
    }
});

function execCmd(command, value = null) {
    document.execCommand(command, false, value);
}

function insertImage() {
    const url = prompt('Enter the image URL:');
    if (url) {
        execCmd('insertImage', url);
    }
}

function insertTable() {
    const rows = prompt('Enter number of rows:');
    const cols = prompt('Enter number of columns:');
    if (rows && cols) {
        let html = '<table border="1">';
        for (let i = 0; i < rows; i++) {
            html += '<tr>';
            for (let j = 0; j < cols; j++) {
                html += '<td>Cell</td>';
            }
            html += '</tr>';
        }
        html += '</table>';
        execCmd('insertHTML', html);
    }
}

let isHtmlMode = false;

function toggleHTML() {
    const editor = document.getElementById('editor');
    if (isHtmlMode) {
        editor.innerHTML = editor.textContent;
    } else {
        editor.textContent = editor.innerHTML;
    }
    isHtmlMode = !isHtmlMode;
}

