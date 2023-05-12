'use strict'
$( document ).ready(function() {
    //console.log( "ready!" );
    var myModal = new bootstrap.Modal(document.getElementById('exampleModal'), {});
    myModal.toggle();
});

let baseUrl = 'http://ep.premierpluss.com/loteries/';
//Funcion redirect url
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
    const response = await fetch(`${baseUrl}results3?since='2023-05-10'&product=1`);
    const data = await response.json();
    let loterias = loteries;
    //Crea listado completo para las loterias del dia.
    for (let index = 0; index <= 11; index++) {
        if (data[index])
            loterias[index] = data[index];
    }
    let response_1 = {
        loterias: loterias,
        data: data
    };
    return response_1; 
};
//Mostrar animalitos ganadores
let obtenerLoterias = async () => {
    //Call a la api
    const data = await getLotteries();
    //En caso de no tener animalitos en el listado.
    if (registro.length == 0) {
        document.querySelector(".carouselAnimales").innerHTML = "";
        document.querySelector('.slick-track').innerHTML = "";
        registro = data.data;
        //muestra todos los animalitos en lo que va del dia.
        printAllAnmilas(data.loterias);
    } else if (registro.length !== data.data.length) {
        printLastAnimal(data.data[data.data.length - 1]);
        printLastAnimalSlider(data.data[data.data.length - 1]);
        registro = data.data;
    }
}; 
//Reemplazar e imprimir ultimo resultado en el slider
let printLastAnimalSlider = (data) => {
    //Encuentra los nodos del DOM de todas las loterias
    let alarm = document.querySelector('.alarmImg');
    let DomLot = document.querySelectorAll('.slick-track')[0].children;
    var audioAlarma = new Audio(`assets/sounds/Alarma3.mp3`);
    let horarioLott = data.lottery.name.slice(-8);
    var audio;
    var cod;
    var codAnimal;
    for (const element in DomLot) {
        if(DomLot[element].innerHTML == `<span class="resultImg"></span><span class="mt-3 mb-3">${horarioLott}</span>`){
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
            DomLot[element].innerHTML =  `<img src="assets/img/animalitos/${data.result}.png" onclick="playAudio('${codAnimal}')" class='img-fluid img-animate'/>
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
    //Encuentra los nodos del DOM de todas las loterias
    //console.log(data, 'data');
    let alarm = document.querySelector('.alarmImg');
    let DomLot = document.querySelectorAll('.carouselAnimales')[0].children;
    var audioAlarma = new Audio(`assets/sounds/Alarma2.mp3`);
    let horarioLott = data.lottery.name.slice(-8);
    var audio;
    var cod;
    var codAnimal;
    for (const element in DomLot) {
        if(DomLot[element].innerHTML == `<span class="resultImg"></span><span class="mt-3 mb-3">${horarioLott}</span>`){
            
        //alarm.src = 'assets/img/Alarma_ON_ResultadosDiarios_Carrusel_LG_HD.png';
           // for(let i = 0; i > 3; i++){
               // audioAlarma.play();
          //  }
            setTimeout(() => {
                 //test promesa
            //console.log('entramos al timeout');
            codAnimal = data.result.split("-",1)[0];
            //playAudio(codAnimal);
            //console.log(codAnimal, 'codigo animal');
            cod = codAnimal;
            //console.log(cod);
           /* audio = new Audio(`assets/sounds/${cod}.mp3`);
            audio.play(); */
            }, 60000);
            
            DomLot[element].innerHTML =  `<img src="assets/img/animalitos/${data.result}.png" onclick="playAudio('${codAnimal}')" class='img-fluid img-animate'/>
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
//Imprimir todos los resultados/*
var condition = true;
let printAllAnmilas = (data) => {
    document.querySelector(".carouselAnimales").innerHTML = "";
    document.querySelector('.slick-track').innerHTML = "";
    let alarm = document.querySelector('.alarmImg');
    var audioAlarma = new Audio(`assets/sounds/Alarma3.mp3`);
    var audio;
    var primerAnimal = true;
    //console.log(data, 'data');
    data.forEach(element => {
        let horarioLott = element.lottery.name.slice(-8);
        let template = `<span class='resultImg'></span><span class="mt-3 mb-3">${horarioLott}</span>`;
        let codAnimal = element.result.split("-",1)[0];
        if(element.lottery.id == 2 && element.result !== '') {
            //console.log('primera loteria');
            
            if(data[1].result == '' || data[1].result == undefined){
                //console.log(data[1]);
                //console.log(data[1].result);
                //console.log('tiene una loteria por delante');
                alarm.src = 'assets/img/Alarma_ON_ResultadosDiarios_Carrusel_LG_HD.png';
                alarm.classList.add("test")
                playAlertSound(`assets/sounds/Alarma3.mp3`)
                .then(function() {
                // Automatic playback started!
                alarm.src = 'assets/img/Alarma_OFF_ResultadosDiarios_Carrusel_LG_HD.png';
                alarm.classList.remove("test");  
                //console.log('termina de sonar');
                template = `<img src="assets/img/animalitos/${element.result}.png" onclick="playAudio('${codAnimal}')" class='img-fluid img-animate'/>
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
                template = `<img src="assets/img/animalitos/${element.result}.png" onclick="playAudio('${codAnimal}')" class='img-fluid img-animate'/>
                <span>${horarioLott}</span>`;
                let variable = `<div class='itemResults'>${template}</div>`;
                //document.querySelector(".carouselAnimales").innerHTML += variable;
                $('.carouselAnimalsSlider').slick('slickAdd',variable);
            }
        }else if(element.result !== '' && element.lottery.id > 2 ) {
            //alarm.src = 'assets/img/Alarma_ON_ResultadosDiarios_Carrusel_LG_HD.png';
            //audio = new Audio(`assets/sounds/${codAnimal}.mp3`); 
            //console.log(element.lottery.id, 'posicion');
            template = `<img src="assets/img/animalitos/${element.result}.png" onclick="playAudio('${codAnimal}')" class='img-fluid img-animate'/>
                <span>${horarioLott}</span>`;
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

    if(audio){
        audio.play();
    };
    
}
// itervalo para mostrar animalitos
function startShowingMessage() {
    setInterval(async () => {
        
        obtenerLoterias();
    }, 10000)
  }
//DAtapicker onChange
async function handler(e){

    let url = `${baseUrl}results3?since='2023-05-10'&product=1`;

    if(typeof(e) !== 'string') {
        url = `${baseUrl}results3?since='2023-05-10'&product=1`;
    }
    const response = await fetch(url);
    const data = await response.json();
    for (let index = 0; index <= 10; index++) {
        if (data[index] == undefined)
            data.push({
                result: '',
                lottery: {
                    name: fomartTimeShow(index + 9),
                }
            });
    }
    printAnimalsDate(data);
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
        let template = `<span class='resultImgD resultImg'></span><span>${horarioLott}</span>`;
        let codAnimal = element.result.split("-",1)[0];
        if(element.result !== '' ) 
            template = `<img src="assets/img/animalitos/${element.result}.png" onclick="playAudio('${codAnimal}')" class='img-fluidAnimals'/>
            <span>${horarioLott}</span>`;
        
        let variable = `<div class='itemResultsD'>${template}</div>`;
        document.querySelector(".itemsResultsDay").innerHTML += variable;
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
let now = new Date();
now = now.toISOString().substring(0,10);
let registro = [];
document.querySelector('.dateInput').setAttribute("max", now);
const loteries = [
    {
        "result": "",
        "lottery": {
            "id": 1,
            "name": "LA GRANJITA  9:00 AM",
            "hour": "2022-02-11T09:00:00-04:00",
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
            "name": "LA GRANJITA  10:00 AM",
            "hour": "2022-02-11T10:00:00-04:00",
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
            "name": "LA GRANJITA  11:00 AM",
            "hour": "2022-02-11T11:00:00-04:00",
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
            "name": "LA GRANJITA  12:00 PM",
            "hour": "2022-02-11T12:00:00-04:00",
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
            "name": "LA GRANJITA  1:00 PM",
            "hour": "2022-02-11T13:00:00-04:00",
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
            "name": "LA GRANJITA  2:00 PM",
            "hour": "2022-02-11T14:00:00-04:00",
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
            "name": "LA GRANJITA  3:00 PM",
            "hour": "2022-02-11T15:00:00-04:00",
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
            "name": "LA GRANJITA  4:00 PM",
            "hour": "2022-02-11T16:00:00-04:00",
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
            "name": "LA GRANJITA  5:00 PM",
            "hour": "2022-02-11T17:00:00-04:00",
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
            "name": "LA GRANJITA  6:00 PM",
            "hour": "2022-02-11T18:00:00-04:00",
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
            "id":11,
            "name": "LA GRANJITA  7:00 PM",
            "hour": "2022-02-11T19:00:00-04:00",
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
    }
];
const loteries2 = [
    {
        "result": "",
        "lottery": {
            "id": 2,
            "name": "LA GRANJITA  9:00 AM",
            "hour": "2022-02-11T09:00:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        }
    },
    {
        "result": "",
        "lottery": {
            "id": 2,
            "name": "LA GRANJITA  10:00 AM",
            "hour": "2022-02-11T10:00:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        }
    },
    {
        "result": "",
        "lottery": {
            "id": 2,
            "name": "LA GRANJITA  11:00 AM",
            "hour": "2022-02-11T11:00:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        }
    },
    {
        "result": "",
        "lottery": {
            "id": 2,
            "name": "LA GRANJITA  12:00 PM",
            "hour": "2022-02-11T12:00:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        }
    },
    {
        "result": "",
        "lottery": {
            "id": 2,
            "name": "LA GRANJITA  01:00 PM",
            "hour": "2022-02-11T13:00:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        }
    },
    {
        "result": "",
        "lottery": {
            "id": 2,
            "name": "LA GRANJITA  02:00 PM",
            "hour": "2022-02-11T14:00:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        }
    },
    {
        "result": "",
        "lottery": {
            "id": 2,
            "name": "LA GRANJITA  03:00 PM",
            "hour": "2022-02-11T15:00:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        }
    },
    {
        "result": "",
        "lottery": {
            "id": 2,
            "name": "LA GRANJITA  04:00 PM",
            "hour": "2022-02-11T16:00:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        }
    },
    {
        "result": "",
        "lottery": {
            "id": 2,
            "name": "LA GRANJITA  05:00 PM",
            "hour": "2022-02-11T17:00:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        }
    },
    {
        "result": "",
        "lottery": {
            "id": 2,
            "name": "LA GRANJITA  06:00 PM",
            "hour": "2022-02-11T18:00:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        }
    },
    {
        "result": "",
        "lottery": {
            "id": 2,
            "name": "LA GRANJITA  07:00 PM",
            "hour": "2022-02-11T19:00:00-04:00",
            "type": "ANIMALES"
        },
        "product": {
            "id": 1,
            "name": "LA GRANJITA"
        },
        "brand": {
            "id": 2,
            "name": "LA GRANJITA"
        }
    }
];
let  fileNames = 
['0-DELFIN.png',
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
'9-AGUILA.png'];
obtenerLoterias();
startShowingMessage();
handler(now);


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