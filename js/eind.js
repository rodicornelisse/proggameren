/*jslint browser: true, devel: true, eqeq: true, plusplus: true, sloppy: true, vars: true, white: true*/
/*eslint-env browser*/
/*eslint 'no-console':0*/

//console.log('hoi');

var randomNum;
var imgArray;
var gokImg;
var elementImg = document.querySelectorAll('img')[0];
var banaan = 'banaan.png';
var appel = 'appel.png';
var peer = 'peer.png';
var gewonnen;
var i;


function verwerkFormulier(event) {
    event.preventDefault();
    document.querySelector('h1').textContent = 'Hallo ' + document.querySelector('input').value + ' begin met gokken!';
}

document.querySelector('form').addEventListener('submit', verwerkFormulier);


document.querySelector('h1').textContent = uitslag;

var uitslag = veranderImg();

elementImg.addEventListener('click', function () {
    uitslag = veranderImg();
    document.querySelector('h1').textContent = uitslag;
});

function veranderImg() {
    randomNum = Math.floor((Math.random() * 3) + 1);
    console.log(randomNum);

    imgArray = [banaan,
         appel,
         peer];

    gokImg = imgArray[randomNum - 1];
    console.log(gokImg);

    elementImg.src = 'images/' + gokImg;

    if (gokImg == appel) {
        gewonnen = 'Gefeliciteerd!! Je bent een echte winnaar.';
        console.log('je hebt gewonnen');
    } else {
        console.log('je hebt verloren');
        gewonnen = 'Helaas pindakaas!! Probeer het nog een keer.';
    }
    return gewonnen;
}


var besteWinaars = ['Kees', 'Sandra', 'Piet', 'Hendrik', 'Henk', 'Frederik', 'Jelle', 'Wies'];
var tekst = document.querySelector('h3');

function winnaars(mensen) {
    var toonTekst = 'Gefeliciteerd ' + mensen;
    tekst.textContent = tekst.textContent + toonTekst + ' ';
}

for (i = besteWinaars.length - 1; i >= 0; i = i - 1)

winnaars(besteWinaars[i]);
