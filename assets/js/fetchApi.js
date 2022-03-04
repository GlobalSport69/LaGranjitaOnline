'use strict'

//Fetch de la api
const getLotteries = () => {
    return fetch(`http://api-preprod.caribeapuesta.com/loteries/results3?since='${now}'&product=1`)
    .then(response => response.json())
    .then(data => {
          let loterias = loteries;
          //Crea listado completo para las loterias del dia.
          for (let index = 0; index <= 11; index++) {
              if(data[index]) loterias[index] = data[index];
          }
          let response = {
            loterias: loterias,
            data: data
          };
          return response;
      }); 
};
//Mostrar animalitos ganadores
let obtenerLoterias = () => {
    //Call a la api
    return getLotteries().then(data=>{
        //En caso de no tener animalitos en el listado.
        if(registro.length == 0){
            document.querySelector(".carouselAnimales").innerHTML = "";
            registro = data.data;
            //muestra todos los animalitos en lo que va del dia.
            printAllAnmilas(data.loterias);
        //Si encuentra un cambio o una nueva loteria imprime animal individual.
        } else if(registro.length !== data.data.length){
            printLastAnimal(data.data[data.data.length -1]);
            registro = data.data;
        }
    });
}; 
//Reemplazar e imprimir ultimo resultado
let printLastAnimal = (data) => {
    //Encuentra los nodos del DOM de todas las loterias
    let DomLot = document.querySelectorAll('.carouselAnimales')[0].children;
    for (const element in DomLot) {
    console.log(`${element}:${DomLot[element].innerHTML}`);
        if(DomLot[element].innerHTML == `<span class="resultImg"></span>`){
            console.log("Se encontro un espacio reemplazable");
            let horarioLott = data.lottery.name.slice(-8);
            let codAnimal = data.result.split("-",1)[0];
            console.log(DomLot[element], 'buscar gorrsad');
            DomLot[element].innerHTML =  `<img src="assets/img/animalitos/${data.result}.png" onclick='playAudio(${codAnimal})' class='img-fluid img-animate'/>
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
//Imprimir todos los resultados
let printAllAnmilas = (data) => {
    document.querySelector(".carouselAnimales").innerHTML = "";
    data.forEach(element => {
        let horarioLott = element.lottery.name.slice(-8);
        let template = `<span class='resultImg'></span>`;
        let codAnimal = element.result.split("-",1)[0];
        if(element.result !== '' ) 
            template = `<img src="assets/img/animalitos/${element.result}.png" onclick='playAudio(${codAnimal})' class='img-fluid img-animate'/>
            <span>${horarioLott}</span>`;
        
        let variable = `<div class='itemResults'>${template}</div>`;
        document.querySelector(".carouselAnimales").innerHTML += variable;
    });

}
// itervalo para mostrar animalitos
function startShowingMessage() {
    setInterval(async () => {
        
        obtenerLoterias();
    }, 10000)
  }

//DAtapicker onChange
function handler(e){

    let url = `http://api-preprod.caribeapuesta.com/loteries/results3?since='${now}'&product=1`;

    if(typeof(e) !== 'string') {
        url = `http://api-preprod.caribeapuesta.com/loteries/results3?since='${e.target.value}'&product=1`;
    }

    console.log(url, 'url');
    return fetch(url)
    .then(response => response.json())
    .then(data => {
        console.log(data, 'data');
        for (let index = 0; index <= 10; index++) {
            if(data[index] == undefined) data.push({
                result: '',
                lottery: {
                    name: fomartTimeShow(index + 9),                    
                }
            })
        }
        console.log(data, 'format');
        printAnimalsDate(data);
        url = ``;
        console.log(url, 'url');
    }); 
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
            template = `<img src="assets/img/animalitos/${element.result}.png" onclick='playAudio(${codAnimal})' class='img-fluid'/>
            <span>${horarioLott}</span>`;
        
        let variable = `<div class='itemResultsD'>${template}</div>`;
        document.querySelector(".itemsResultsDay").innerHTML += variable;
    });
}

let now = new Date();
now = now.toISOString().substring(0,10);
let registro = [];
const loteries = [
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
            "name": "LA GRANJITA  12:00 AM",
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
            "name": "LA GRANJITA  12:00 AM",
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

obtenerLoterias();
startShowingMessage();
handler(now);