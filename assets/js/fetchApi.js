'use strict'
let now = new Date();
now = now.toISOString().substring(0,10);
const getLotteries = () => {
    return fetch(`http://api.caribeapuesta.com/loteries/results3?since='${now}'&product=1`)
    .then(response => response.json())
    .then(data => {
          var loterias = loteries;
          for (let index = 0; index <= 11; index++) {
              if(data[index]) loterias[index] = data[index];
          }
          return loterias;
      });
      
};
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

let obtenerLoterias = getLotteries().then(data=>{
    let comp = [];
    data.forEach(element => {
        let template = `<span class='resultImg'></span>`;
        if(element.result !== '' ) 
            template = `<img src="assets/img/animalitos/${element.result}.png" class='img-fluid'/>`;
        
        let variable = `<div class='itemResults slick-slide slick-active'>
            ${template}
        </div>`;
        $('.carouselAnimales').slick('slickAdd',variable );
    });
});
 