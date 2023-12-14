const btnEl = document.querySelector('.btn')
const container = document.querySelector('.container')
const result_display = document.querySelector('.result-display')



btnEl.addEventListener('click', () => {
    result_display.classList.add('loader')

    setTimeout(() => {
        result_display.classList.remove('loader')
        deliver()
    }, 3000)


})

function deliver() {

    if (window.XMLHttpRequest) {
        xmlhttp = new XMLHttpRequest();
    } else {
        xmlhttp = new ActiveXObject('Microsoft.XMLHTTP');
    }
    xmlhttp.onreadystatechange = function () {
        if (xmlhttp.readyState == 4 && xmlhttp.status == 200) {
            document.getElementById('result-display').innerHTML = xmlhttp.responseText;
        }
    }
    parameters = 'text1=' + document.getElementById('ltext').value + '&text2=' + document.getElementById('rtext').value;

    xmlhttp.open('POST', 'text.php', true);
    xmlhttp.setRequestHeader('Content-type', 'application/x-www-form-urlencoded');
    xmlhttp.send(parameters);

}