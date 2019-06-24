function toonPrompt(){
    var code = prompt('Vul uw promotiecode in', 'uw code');
    var tekst = document.getElementById("divResult").innerHTML = 'Uw ingevoerde tekst is ' + code;
}

function voorwaardelijkeOperator() {
    var vraag = prompt('Hoeveel is 20 + 60 ?', '');
    var antwoord = 80;
    if (vraag == antwoord) {
        document.getElementById("antwoordshow").innerHTML = '<h2> Prima, ga zo door! </h2>';
    }
    else if (vraag != antwoord) {
        document.getElementById("antwoordshow").innerHTML = '<h2> Jammer, volgende keer beter !</h2>';
    }
}
