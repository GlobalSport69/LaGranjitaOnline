'use strict'
$( document ).ready(function() {
    //console.log( "ready!" );
    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {});
    myModal.toggle();
});

let baseUrl = 'https://webservice.premierpluss.com/loteries/';
let baseUrlS3 = 'https://dryjjfcsfgp14.cloudfront.net/';
//Funcion redirect url prod
function changeLink(url){
    window.open(url, '_blank');
}
//funcion ancla para el menu
function ancla(element) {
    document.getElementById('burguerCheck').checked = false;
    document.getElementById(element).scrollIntoView({
        behavior: 'smooth'
    });
}
//Fetch de la api
const getLotteries = async () => {
    const response = await fetch(`${baseUrl}results3?since='${now}'&product=1`);
    const data = await response.json();
    let loterias = loteries;
    //Crea listado completo para las loterias del dia.
    for (let index = 0; index <= 112; index++) {
        if (data[index]) loterias[index] = data[index];
    }
    let loteriesArr = {
        loterias: loterias,
        data: data
    };
    return loteriesArr;
};

const getTerminales = async () => {
    const response = await fetch(`${baseUrl}results3?since='${now}'&product=25`);
    const data = await response.json();
    let terminales = consTerminales;
    //Crea listado completo para las loterias del dia.
    for (let index = 0; index <= 112; index++) {
        if (data[index]) terminales[index] = data[index];
    }
    let terminalsArr = {
        terminales: terminales,
        data: data
    };
    return terminalsArr;
}
let obtenerLoterias = async () => {
    const data = await getLotteries();
    if (registro.length == 0) {
        document.querySelector(".carouselAnimales").innerHTML = "";
        document.querySelector('.carouselAnimalsSlider .slick-track').innerHTML = "";
        registro = data.data;
        printAllAnmilas(data.loterias);
    } else if (registro.length !== data.data.length) {
        printLastAnimal(data.data[data.data.length - 1]);
        printLastAnimalSlider(data.data[data.data.length - 1]);
        registro = data.data;
    }
};

let obtenerTerminales = async () => {
    const data = await getTerminales();
    if (registro_1.length == 0) {
        document.querySelector(".carouselTerminales").innerHTML = "";
        document.querySelector('.carouselTerminalSlider .slick-track').innerHTML = "";
        registro_1 = data.data;
        printAllTerminales(data.terminales);
    } else if (registro_1.length !== data.data.length) {
        printLastTerminal(data.data[data.data.length - 1]);
        printLastTerminalSlider(data.data[data.data.length - 1]);
        registro_1 = data.data;
    }
}; 
let printLastAnimalSlider = (data) => {
    let alarm = document.querySelector('.alarmImg');
    let DomLot = document.querySelectorAll('.carouselAnimalsSlider .slick-track')[0].children;
    var audioAlarma = new Audio(`${baseUrlS3}ruleta.mp3`);
    let horarioLott = data.lottery.name.slice(-8);
    var audio;
    var cod;
    for (const element in DomLot) {
        if(DomLot[element].innerHTML == `<img loading="lazy" src="assets/img/circulo.png" class="img-fluid img-animate-no-results"><span class="mt-3 mb-3">${horarioLott}</span>`){
            let horarioLott = data.lottery.name.slice(-8);
            let codAnimal = data.result.split("-",1)[0];
            alarm.src = 'assets/img/Alarma_ON_ResultadosDiarios_Carrusel_LG_HD.png';
            alarm.classList.add("test")
            audioAlarma.play();
            setTimeout(() => {
                codAnimal = data.result.split("-",1)[0];
                cod = codAnimal;
                alarm.src = 'assets/img/Alarma_OFF_ResultadosDiarios_Carrusel_LG_HD.png';
                alarm.classList.remove("test");
                DomLot[element].innerHTML =  `<img loading="lazy" src="assets/img/animalitos/${data.result}.png" onclick="playAudio('${codAnimal}')" class='img-fluid img-animate'/>
                <span class="mt-3 mb-3">${horarioLott}</span>`;
                audio = new Audio(`assets/sounds/${cod}.mp3`);
                audio.play(); 
            }, 11000);
            break;
        }
    }
}


let printLastTerminalSlider = (data) => {
    //Encuentra los nodos del DOM de todas las loterias
    let alarm = document.querySelector('.alarmImg');
    let DomLot = document.querySelectorAll('.carouselTerminalSlider .slick-track')[0].children;
    var audioAlarma = new Audio(`${baseUrlS3}ruleta.mp3`);
    let horarioLott = data.lottery.name.slice(-8);
    var audio;
    var cod;
    var codAnimal;
    for (const element in DomLot) {
        if(DomLot[element].innerHTML == `<img loading="lazy" src="assets/img/circulo.png" class="img-fluid img-animate-no-results"><span class="mt-3 mb-3">${horarioLott}</span>`){
            let horarioLott = data.lottery.name.slice(-8);
            let codAnimal = data.result.split("-",1)[0];
            alarm.src = 'assets/img/Alarma_ON_ResultadosDiarios_Carrusel_LG_HD.png';
            alarm.classList.add("test")
            audioAlarma.play();

            setTimeout(() => {

            //test promesa
            //console.log('entramos al timeout');
            codAnimal = data.result.split("-",1)[0];
            //playAudio(codAnimal);
            //console.log(codAnimal, 'codigo animal');
            cod = codAnimal;
            //console.log(cod);
            alarm.src = 'assets/img/Alarma_OFF_ResultadosDiarios_Carrusel_LG_HD.png';
            alarm.classList.remove("test");
            DomLot[element].innerHTML =  `<img loading="lazy" src="${baseUrlS3}${data.result}.png" onclick="playAudio('${codAnimal}')" class='img-fluid img-animate'/>
            <span class="mt-3 mb-3">${horarioLott}</span>`;
            audio = new Audio(`assets/sounds/${cod}.mp3`);
            audio.play(); 
            }, 11000);
            
            break;
        }
    }

}

//Reemplazar e imprimir ultimo resultado 
let printLastAnimal = (data) => {
    let alarm = document.querySelector('.alarmImg');
    let DomLot = document.querySelectorAll('.carouselAnimales')[0].children;
    var audioAlarma = new Audio(`assets/sounds/Alarma2.mp3`);
    let horarioLott = data.lottery.name.slice(-8);
    var audio;
    var cod;
    var codAnimal;
    for (const element in DomLot) {
        if(DomLot[element].innerHTML == `<img loading="lazy" src="assets/img/circulo.png" class="img-fluid img-animate-no-results"><span class="mt-3 mb-3">${horarioLott}</span>`){
            setTimeout(() => {
            codAnimal = data.result.split("-",1)[0];
            cod = codAnimal;
            }, 60000);
            
            DomLot[element].innerHTML =  `<img loading="lazy" src="assets/img/animalitos/${data.result}.png" onclick="playAudio('${codAnimal}')" class='img-fluid img-animate'/>
            <span class="mt-3 mb-3">${horarioLott}</span>`;
            break;
        }
    }

}

let printLastTerminal = (data) => {
    let alarm = document.querySelector('.alarmImg');
    let DomLot = document.querySelectorAll('.carouselTerminales')[0].children;
    let horarioLott = data.lottery.name.slice(-8);
    var audio;
    var cod;
    var codAnimal;
    for (const element in DomLot) {
        if(DomLot[element].innerHTML == `<img loading="lazy" src="assets/img/circulo.png" class="img-fluid img-animate-no-results"><span class="mt-3 mb-3">${horarioLott}</span>`){
            setTimeout(() => {
            codAnimal = data.result.split("-",1)[0];
            cod = codAnimal;
            }, 60000);
            
            DomLot[element].innerHTML =  `<img loading="lazy" src="${baseUrlS3}${data.result}.png" onclick="playAudio('${codAnimal}')" class='img-fluid img-animate'/>
            <span class="mt-3 mb-3">${horarioLott}</span>`;
            break;
        }
    }

}
//Play animal Audio
function playAudio(audioName) {
    var audio = new Audio(`assets/sounds/${audioName}.mp3`);
    audio.play();
}

function playAlertSound(url){
    return new Promise(function(resolve, reject) { // return a promise
        var audio = new Audio();                     // create audio wo/ src
        audio.preload = "auto";                      // intend to play through
        audio.autoplay = true;                       // autoplay when loaded
        audio.onerror = reject;                      // on error, reject
        audio.onended = resolve;                     // when done, resolve
    
        audio.src = url
      });
}
let printAllAnmilas = (data) => {
    document.querySelector(".carouselAnimales").innerHTML = "";
    document.querySelector('.carouselAnimalsSlider .slick-track').innerHTML = "";
    let alarm = document.querySelector('.alarmImg');
    var audioAlarma = new Audio(`${baseUrlS3}ruleta.mp3`);
    var audio;
    var primerAnimal = true;
    //console.log(data, 'data');
    data.forEach(element => {
        let horarioLott = element.lottery.name.slice(-8);
        let template = `<img loading="lazy" src="assets/img/circulo.png" class="img-fluid img-animate-no-results"><span class="mt-3 mb-3">${horarioLott}</span>`;
        let codAnimal = element.result.split("-",1)[0];
        if(element.lottery.id == 2 && element.result !== '') {
            //console.log('primera loteria');
            
            if(data[1].result == '' || data[1].result == undefined){
                //console.log(data[1]);
                //console.log(data[1].result);
                //console.log('tiene una loteria por delante');
                alarm.src = 'assets/img/Alarma_ON_ResultadosDiarios_Carrusel_LG_HD.png';
                alarm.classList.add("test")
                playAlertSound(`${baseUrlS3}ruleta.mp3`)
                .then(function() {
                // Automatic playback started!
                alarm.src = 'assets/img/Alarma_OFF_ResultadosDiarios_Carrusel_LG_HD.png';
                alarm.classList.remove("test");  
                //console.log('termina de sonar');
                template = `<img loading="lazy" src="assets/img/animalitos/${element.result}.png" onclick="playAudio('${codAnimal}')" class='img-fluid img-animate'/>
                <span>${horarioLott}</span>`;
                let variable = `<div class='itemResults'>${template}</div>`;
                $('.carouselAnimalsSlider').slick('slickAdd',variable, 0 ,  'addBefore');
                audio = new Audio(`assets/sounds/${codAnimal}.mp3`);
                audio.play();
                }).catch(function(error) {
                // Automatic playback failed.
                // Show a UI element to let the user manually start playback.
                //console.log('error');
                })
            }else if(data[1].result !== '' ){
                //console.log(data[1], '1');
                //console.log(data[1].result);
                //console.log('No tiene loteria por delante');
                template = `<img loading="lazy" src="assets/img/animalitos/${element.result}.png" onclick="playAudio('${codAnimal}')" class='img-fluid img-animate'/>
                <span class="mt-3 mb-3">${horarioLott}</span>`;
                let variable = `<div class='itemResults'>${template}</div>`;
                //document.querySelector(".carouselAnimales").innerHTML += variable;
                $('.carouselAnimalsSlider').slick('slickAdd',variable);
            }
        }else if(element.result !== '' && element.lottery.id > 2 ) {
            //alarm.src = 'assets/img/Alarma_ON_ResultadosDiarios_Carrusel_LG_HD.png';
            //audio = new Audio(`assets/sounds/${codAnimal}.mp3`); 
            //console.log(element.lottery.id, 'posicion');
            template = `<img loading="lazy" src="assets/img/animalitos/${element.result}.png" onclick="playAudio('${codAnimal}')" class='img-fluid img-animate'/>
                <span class="mt-3 mb-3">${horarioLott}</span>`;
            let variable = `<div class='itemResults'>${template}</div>`;
                //document.querySelector(".carouselAnimales").innerHTML += variable;
            $('.carouselAnimalsSlider').slick('slickAdd',variable);
            audio = new Audio(`assets/sounds/${codAnimal}.mp3`); 
        }else if(element.result == '' ){
            //https://admin-dev.caribeapuesta.com/loteries/results/2/2022-04-18
            // //console.log(template, 'template final');
            let variable = `<div class='itemResults'>${template}</div>`;
            //document.querySelector(".carouselAnimales").innerHTML += variable;
            $('.carouselAnimalsSlider').slick('slickAdd',variable);
        }
    });
    
}


let printAllTerminales = (data) => {
    document.querySelector(".carouselTerminales").innerHTML = "";
    document.querySelector('.carouselTerminalSlider .slick-track').innerHTML = "";
    let alarm = document.querySelector('.alarmImg');
    var audio;
    data.forEach(element => {
        let horarioLott = element.lottery.name.slice(-8);
        let template = `<img loading="lazy" src="assets/img/circulo.png" class="img-fluid img-animate-no-results"><span class="mt-3 mb-3">${horarioLott}</span>`;
        let codAnimal = element.result;
        if(element.lottery.id == 240 && element.result !== '') {
            if(data[1].result == '' || data[1].result == undefined){
                playAlertSound(`${baseUrlS3}ruleta.mp3`).then(function() {
                    alarm.classList.remove("test");  
                    template = `<img loading="lazy" src="${baseUrlS3}${element.result}.png" onclick="playAudio('${codAnimal}')" class='img-fluid img-animate'/>
                    <span>${horarioLott}</span>`;
                    let variable = `<div class='itemResults'>${template}</div>`;
                    $('.carouselTerminalSlider').slick('slickAdd',variable, 0 ,  'addBefore');
                }).catch(function(error) {
                    console.error('printAllTerminales', error)
                })
            }else if(data[1].result !== '' ){
                template = `<img loading="lazy" src="${baseUrlS3}${element.result}.png" onclick="playAudio('${codAnimal}')" class='img-fluid img-animate'/>
                <span class="mt-3 mb-3">${horarioLott}</span>`;
                let variable = `<div class='itemResults'>${template}</div>`;
                $('.carouselTerminalSlider').slick('slickAdd',variable);
            }
        }else if(element.result !== '' && element.lottery.id > 240 ) {
            template = `<img loading="lazy" src="${baseUrlS3}${element.result}.png" onclick="playAudio('${codAnimal}')" class='img-fluid img-animate'/>
                <span class="mt-3 mb-3">${horarioLott}</span>`;
            let variable = `<div class='itemResults'>${template}</div>`;
            $('.carouselTerminalSlider').slick('slickAdd',variable);
        }else if(element.result == '' ){
            let variable = `<div class='itemResults'>${template}</div>`;
            $('.carouselTerminalSlider').slick('slickAdd',variable);
        }
    });

    if(audio){
        audio.play();
    };
    
}
// itervalo para mostrar animalitos
function startShowingMessage() {
    setInterval(async () => {
        
        obtenerLoterias();
        obtenerTerminales();
    }, 60000)
  }
//DAtapicker onChange
async function handler(e){

    let url = `${baseUrl}results3?since='${now}'&product=1`;

    if(typeof(e) !== 'string') {
        url = `${baseUrl}results3?since='${e.target.value}'&product=1`;
    }
    const response = await fetch(url);
    const data = await response.json();
    for (let index = 0; index <= 11; index++) {
        if (data[index] == undefined) data.push({
            result: '',
            lottery: {
                name: fomartTimeShow(index + 8),
            }
        });
    }
    printAnimalsDate(data);
    url = ``; 
}

async function handlerTerminal(e){

    let url = `${baseUrl}results3?since='${now}'&product=25`;

    if(typeof(e) !== 'string') {
        url = `${baseUrl}results3?since='${e.target.value}'&product=25`;
    }
    const response = await fetch(url);
    const data = await response.json();
    for (let index = 0; index <= 11; index++) {
        if (data[index] == undefined) data.push({
            result: '',
            lottery: {
                name: fomartTimeShow(index + 8),
            }
        });
    }
    printTerminalsDate(data);
    url = ``; 
}
//Format hour 12h w AM/PM
function fomartTimeShow(h_24) {
    var h = ((h_24 + 11) % 12)+1;
    let formatedHour12 = (h < 10 ? '0' : '') + h + ':00' + (h_24 < 12 ? ' AM' : ' PM');
    return `LA GRANJITA  ${formatedHour12}`
}
//imprimir resultados por fecha
function printAnimalsDate(data){
    
    document.querySelector(".itemsResultsDay").innerHTML = "";
    data.forEach(element => {
        let horarioLott = element.lottery.name.slice(-8);
        let template = `<img loading="lazy" src="assets/img/circulo.png" class="img-fluid img-animate-no-resultsD"><span>${horarioLott}</span>`;
        let codAnimal = element.result.split("-",1)[0];
        if(element.result !== '' ) 
            template = `<img loading="lazy" src="assets/img/animalitos/${element.result}.png" onclick="playAudio('${codAnimal}')" class='img-fluidAnimals'/>
            <span>${horarioLott}</span>`;
        
        let variable = `<div class='itemResultsD'>${template}</div>`;
        document.querySelector(".itemsResultsDay").innerHTML += variable;
    });
}

function printTerminalsDate(data){
    
    document.querySelector(".itemsResultsDayTerminal").innerHTML = "";
    data.forEach(element => {
        let horarioLott = element.lottery.name.slice(-8);
        let template = `<img loading="lazy" src="assets/img/circulo.png" class="img-fluid img-animate-no-resultsD"><span>${horarioLott}</span>`;
        let codAnimal = element.result.split("-",1)[0];
        if(element.result !== '' ) 
            template = `<img loading="lazy" src="${baseUrlS3}${element.result}.png" class='img-fluidAnimals'/>
            <span>${horarioLott}</span>`;
        
        let variable = `<div class='itemResultsDTerminal'>${template}</div>`;
        document.querySelector(".itemsResultsDayTerminal").innerHTML += variable;
    });
}
//recorrer nombres 
function getNameFiles(){
    const aleatorio = fileNames[Math.floor(Math.random() * fileNames.length)];
    printRandomAnimal(aleatorio);
}

let printRandomAnimal = (animalName) => {
    let divRandomAnimal = document.querySelector('.pronosticosDiv');
    let ElementoOriginal = document.querySelectorAll('.pronosticosDiv')[0].childNodes[1];
    let randomAnimalDOM = document.createElement('img');
    randomAnimalDOM.setAttribute('src', `assets/img/animalitos/${animalName}`);
    randomAnimalDOM.classList.add('pronosticoImgAnimal','img-animate');
    divRandomAnimal.replaceChild(randomAnimalDOM, ElementoOriginal);
}

function generateRandomNumber() {
    var randomNumber = Math.floor(Math.random() * 100);
    const randomNumber_1 = (randomNumber == 0 || randomNumber < 10) ? '0' + randomNumber : randomNumber;
    printRandomTerminal(randomNumber_1)
}

let printRandomTerminal = (terminalName) => {
    let divRandomAnimal = document.querySelector('.pronosticosDivTerminal');
    let ElementoOriginal = document.querySelectorAll('.pronosticosDivTerminal')[0].childNodes[1];
    let randomAnimalDOM = document.createElement('img');
    randomAnimalDOM.setAttribute('src', `${baseUrlS3}${terminalName}.png`);
    randomAnimalDOM.classList.add('pronosticoImgAnimal','img-animate');
    divRandomAnimal.replaceChild(randomAnimalDOM, ElementoOriginal);
}
let now = new Date();
now = now.toISOString().substring(0,10);
let registro = [];
let registro_1 = [];

document.querySelector('.dateInput').setAttribute("max", now);

const loteries = [
    {
        "result": "",
        "lottery": {
            "id": 1,
            "name": "LA GRANJITA  08:00 AM",
            "hour": "2022-02-11T08:02:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        },
        "puesto": 1,
    },
    {
        "result": "",
        "lottery": {
            "id": 2,
            "name": "LA GRANJITA  09:00 AM",
            "hour": "2022-02-11T09:02:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        },
        "puesto": 2,
    },
    {
        "result": "",
        "lottery": {
            "id": 3,
            "name": "LA GRANJITA  10:00 AM",
            "hour": "2022-02-11T10:02:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        },
        "puesto": 3,
    },
    {
        "result": "",
        "lottery": {
            "id": 4,
            "name": "LA GRANJITA  11:00 AM",
            "hour": "2022-02-11T11:02:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        },
        "puesto": 4,
    },
    {
        "result": "",
        "lottery": {
            "id": 5,
            "name": "LA GRANJITA  12:00 PM",
            "hour": "2022-02-11T12:02:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        },
        "puesto": 5,
    },
    {
        "result": "",
        "lottery": {
            "id": 6,
            "name": "LA GRANJITA  1:00 PM",
            "hour": "2022-02-11T13:02:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        },
        "puesto": 6,
    },
    {
        "result": "",
        "lottery": {
            "id": 7,
            "name": "LA GRANJITA  2:00 PM",
            "hour": "2022-02-11T14:02:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        },
        "puesto": 7,
    },
    {
        "result": "",
        "lottery": {
            "id": 8,
            "name": "LA GRANJITA  3:00 PM",
            "hour": "2022-02-11T15:02:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        },
        "puesto": 8,
    },
    {
        "result": "",
        "lottery": {
            "id": 9,
            "name": "LA GRANJITA  4:00 PM",
            "hour": "2022-02-11T16:02:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        },
        "puesto": 9,
    },
    {
        "result": "",
        "lottery": {
            "id": 10,
            "name": "LA GRANJITA  5:00 PM",
            "hour": "2022-02-11T17:02:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        },
        "puesto": 10,
    },
    {
        "result": "",
        "lottery": {
            "id": 11,
            "name": "LA GRANJITA  6:00 PM",
            "hour": "2022-02-11T18:02:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        },
        "puesto": 11,
    },
    {
        "result": "",
        "lottery": {
            "id":12,
            "name": "LA GRANJITA  7:00 PM",
            "hour": "2022-02-11T19:02:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        },
        "puesto": 12,
    }
];

const consTerminales = [
    {
        "result": "",
        "lottery": {
            "id": 240,
            "name": "TERMINAL LA GRANJITA 08:00 AM",
            "hour": "2023-08-02T08:00:00-04:00",
            "type": "TERMINALES"
        },
        "product": {
            "id": 25,
            "name": "TERMINAL LA GRANJITA"
        },
        "brand": {
            "id": 0,
            "name": 0
        }
    },
    {
        "result": "",
        "lottery": {
            "id": 241,
            "name": "TERMINAL LA GRANJITA 09:00 AM",
            "hour": "2023-08-02T09:00:00-04:00",
            "type": "TERMINALES"
        },
        "product": {
            "id": 25,
            "name": "TERMINAL LA GRANJITA"
        },
        "brand": {
            "id": 0,
            "name": 0
        }
    },
    {
        "result": "",
        "lottery": {
            "id": 242,
            "name": "TERMINAL LA GRANJITA 10:00 AM",
            "hour": "2023-08-02T10:00:00-04:00",
            "type": "TERMINALES"
        },
        "product": {
            "id": 25,
            "name": "TERMINAL LA GRANJITA"
        },
        "brand": {
            "id": 0,
            "name": 0
        }
    },
    {
        "result": "",
        "lottery": {
            "id": 243,
            "name": "TERMINAL LA GRANJITA 11:00 AM",
            "hour": "2023-08-02T11:00:00-04:00",
            "type": "TERMINALES"
        },
        "product": {
            "id": 25,
            "name": "TERMINAL LA GRANJITA"
        },
        "brand": {
            "id": 0,
            "name": 0
        }
    },
    {
        "result": "",
        "lottery": {
            "id": 244,
            "name": "TERMINAL LA GRANJITA 12:00 PM",
            "hour": "2023-08-02T12:00:00-04:00",
            "type": "TERMINALES"
        },
        "product": {
            "id": 25,
            "name": "TERMINAL LA GRANJITA"
        },
        "brand": {
            "id": 0,
            "name": 0
        }
    },
    {
        "result": "",
        "lottery": {
            "id": 245,
            "name": "TERMINAL LA GRANJITA 01:00 PM",
            "hour": "2023-08-02T13:00:00-04:00",
            "type": "TERMINALES"
        },
        "product": {
            "id": 25,
            "name": "TERMINAL LA GRANJITA"
        },
        "brand": {
            "id": 0,
            "name": 0
        }
    },
    {
        "result": "",
        "lottery": {
            "id": 246,
            "name": "TERMINAL LA GRANJITA 02:00 PM",
            "hour": "2023-08-02T14:00:00-04:00",
            "type": "TERMINALES"
        },
        "product": {
            "id": 25,
            "name": "TERMINAL LA GRANJITA"
        },
        "brand": {
            "id": 0,
            "name": 0
        }
    },
    {
        "result": "",
        "lottery": {
            "id": 247,
            "name": "TERMINAL LA GRANJITA 03:00 PM",
            "hour": "2023-08-02T15:00:00-04:00",
            "type": "TERMINALES"
        },
        "product": {
            "id": 25,
            "name": "TERMINAL LA GRANJITA"
        },
        "brand": {
            "id": 0,
            "name": 0
        }
    },
    {
        "result": "",
        "lottery": {
            "id": 248,
            "name": "TERMINAL LA GRANJITA 04:00 PM",
            "hour": "2023-08-02T16:00:00-04:00",
            "type": "TERMINALES"
        },
        "product": {
            "id": 25,
            "name": "TERMINAL LA GRANJITA"
        },
        "brand": {
            "id": 0,
            "name": 0
        }
    },
    {
        "result": "",
        "lottery": {
            "id": 249,
            "name": "TERMINAL LA GRANJITA 05:00 PM",
            "hour": "2023-08-02T17:00:00-04:00",
            "type": "TERMINALES"
        },
        "product": {
            "id": 25,
            "name": "TERMINAL LA GRANJITA"
        },
        "brand": {
            "id": 0,
            "name": 0
        }
    },
    {
        "result": "",
        "lottery": {
            "id": 250,
            "name": "TERMINAL LA GRANJITA 06:00 PM",
            "hour": "2023-08-02T18:00:00-04:00",
            "type": "TERMINALES"
        },
        "product": {
            "id": 25,
            "name": "TERMINAL LA GRANJITA"
        },
        "brand": {
            "id": 0,
            "name": 0
        }
    },
    {
        "result": "",
        "lottery": {
            "id": 251,
            "name": "TERMINAL LA GRANJITA 07:00 PM",
            "hour": "2023-08-02T19:00:00-04:00",
            "type": "TERMINALES"
        },
        "product": {
            "id": 25,
            "name": "TERMINAL LA GRANJITA"
        },
        "brand": {
            "id": 0,
            "name": 0
        }
    }
];

let  fileNames = 
[
    '0-DELFIN.png',
    '00-BALLENA.png',
    '1-CARNERO.png',
    '10-TIGRE.png',
    '11-GATO.png',
    '12-CABALLO.png',
    '13-MONO.png',
    '14-PALOMA.png',
    '15-ZORRO.png',
    '16-OSO.png',
    '17-PAVO.png',
    '18-BURRO.png',
    '19-CHIVO.png',
    '2-TORO.png',
    '20-COCHINO.png',
    '21-GALLO.png',
    '22-CAMELLO.png',
    '23-CEBRA.png',
    '24-IGUANA.png',
    '25-GALLINA.png',
    '26-VACA.png',
    '27-PERRO.png',
    '28-ZAMURO.png',
    '29-ELEFANTE.png',
    '3-CIEMPIES.png',
    '30-CAIMAN.png',
    '31-LAPA.png',
    '32-ARDILLA.png',
    '33-PESCADO.png',
    '34-VENADO.png',
    '35-JIRAFA.png',
    '36-CULEBRA.png',
    '4-ALACRAN.png',
    '5-LEON.png',
    '6-RANA.png',
    '7-PERICO.png',
    '8-RATON.png',
    '9-AGUILA.png'
];

obtenerLoterias();
obtenerTerminales();
startShowingMessage();
handler(now);
handlerTerminal(now);


function imprimir(url) {
    window.open(url, '_blank');
}/*
function zoom(option){
    var text =  document.querySelector('.text-rules').style.fontSize;
    if(option === 'in'){
        text  = document.querySelector('.text-rules').style.fontSize ;
        //console.log(text);
    }
}*/
      document.querySelector('#btn-submit-contact').addEventListener('click', () => {
          let dirFile = '../controller/mailerContact.php';
          //console.log('hola');
          fetch(dirFile, {
            method: 'post',
            body: new FormData(document.getElementById("form-contact")),
        })
      });
      document.querySelector('#btn-submit-job').addEventListener('click', () => {
        let dirFile = '../controller/mailerJob.php';
        fetch(dirFile, {
          method: 'post',
          body: new FormData(document.getElementById("form-job")),
      })
    });
    
    var classes = ["f0", "f1", "f2", "f3", "f4"];
    var classIndex = 2;

    document.getElementById('aumentar').addEventListener('click', function() {
        let previousClass = classIndex;
        classIndex++;
        classIndex = (classIndex == classes.length) ? classes.length - 1 : classIndex;
        changeClass(previousClass, classIndex);
    });
    document.getElementById('disminuir').addEventListener('click', function () {
        let previousClass = classIndex;
        classIndex--;
        classIndex = (classIndex < 0) ? 0 : classIndex;
        changeClass(previousClass, classIndex);
    });
    function changeClass(previous, next) {
        if(previous != next) {
          var htmlElement = document.querySelector('.text-rules')
          htmlElement.classList.remove(classes[previous]);
          htmlElement.classList.add(classes[next]);
        }
    }