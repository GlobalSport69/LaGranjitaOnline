'use strict'
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
//Fetch de la api
const getLotteries = () => {
    return fetch(`http://api-preprod.caribeapuesta.com/loteries/results3?since='${now}'&product=1`)
    .then(response => response.json())
    .then(data => {
          var loterias = loteries;
          //agrega data al registro en caso de ser la primera llamada a la api
          /*if (registro.length == 0) {
            registro = data;
            console.log('llenando primer registro ...');
          }
          //comparar arreglo anterior con actual
         /* else if(registro.length !== data.length){
            console.log("Cambio detectado");
            console.log(registro , 'registro');
            console.log(data, 'data');
            console.log(data[data.length -1], 'ultimo');
            registro = data;
              
          }*/
          //crea listado completo para el dia. (no lleno)
          for (let index = 0; index <= 11; index++) {
              if(data[index]) loterias[index] = data[index];
          }
          //console.log(loterias);
          let response = {
            loterias: loterias,
            //registro: registro,
            data: data
          };
          return response;
      });
      
};

//Imprimir animalitos ganadores
let obtenerLoterias = () => {
    return getLotteries().then(data=>{
        //document.querySelector(".slick-list").innerHTML = "";
        console.log(data, 'data');
        //console.log(data.registro.length, 'data.registro.length');
        console.log(data.loterias, 'data.loterias');

        if(registro.length == 0){
            document.querySelector(".carouselAnimales").innerHTML = "";
            registro = data.data;
            console.log('llenando primer registro ...', registro.length, data.data.length);
            //muestra los animalitos
            printAllAnmilas(data.loterias);
        } else if(registro.length == data.data.length){
            document.querySelector(".carouselAnimales").innerHTML = "";
            /* console.log("Cambio detectado");
            console.log(data.registro , 'registro');
            console.log(data.data, 'data');
            console.log(data.data[data.data.length -1], 'ultimo'); */
            printAllAnmilas(data.loterias);
            printLastAnimal(data.data[data.data.length -1]);
            registro = data.data;
        }

    });
}; 
//Reemplazar e imprimir ultimo resultado
let printLastAnimal = (data) => {
    console.log(data, 'Ultimo registro');
    //Encuentra los nodos del DOM de todas las loterias
    let DomLot = document.querySelectorAll('.carouselAnimales')[0].children;
    console.log(DomLot, 'DomLot');

}
//Imprimir todos los resultados
let printAllAnmilas = (data) => {
    document.querySelector(".carouselAnimales").innerHTML = "";
    data.forEach(element => {
        let template = `<span class='resultImg'></span>`;
        if(element.result !== '' ) 
            template = `<img src="assets/img/animalitos/${element.result}.png" class='img-fluid img-animate'/>`;
        
        let variable = `<div class='itemResults'>${template}</div>`;
        document.querySelector(".carouselAnimales").innerHTML += variable;
    });
}
obtenerLoterias();
// itervalo para mostrar animalitos
function startShowingMessage() {
    setInterval(async () => {
        
        obtenerLoterias();
    }, 10000)
  }
startShowingMessage();
 