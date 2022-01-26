//enviar la ubicacion
const funcionInit = () => {
    if (!"geolocation" in navigator) {
        return alert("Tu navegador no soporta el acceso a la ubicación. Intenta con otro");
    }

    let idWatcher = null;

    const onUbicacionConcedida = ubicacion => {
        enviarAServidor(ubicacion);
    }

    const onErrorDeUbicacion = err => {
        $console.log("Error obteniendo ubicación: " + err.message);
    }

    const opcionesDeSolicitud = {
        enableHighAccuracy: true, // Alta precisión
        maximumAge: 0, // No queremos caché
        timeout: 5000 // Esperar solo 5 segundos
    };

    idWatcher = navigator.geolocation.watchPosition(onUbicacionConcedida, onErrorDeUbicacion, opcionesDeSolicitud);

    const enviarAServidor = ubicacion => {
        const iduser = document.getElementById('iduser').value;
        const idmascota = document.getElementById('idmascota').value;



        // Debemos crear otro objeto porque el que nos mandan no se puede codificar
        const ultubicacion = {
            coordenadas: {
                latitud: ubicacion.coords.latitude,
                longitud: ubicacion.coords.longitude,
            },
            timestamp: ubicacion.timestamp,
            iduser: iduser,
            idmascota: idmascota,
        };
        const long = document.getElementById('longitud');
        long.value = ubicacion.coords.longitude;
        const lat = document.getElementById('latitud');
        lat.value = ubicacion.coords.latitude;

        const token = document.getElementsByName('_token');
        window.CSRF_TOKEN = token[0].value;


        formulario = document.getElementById('formu');                                      //traer el formulario para enviar la ultima ubicacion

        var currentDate = new Date();                                                       //fecha y hora actual
        var ultimaUbicacionFecha = new Date(localStorage.getItem('ubicacionEnviada'));      //ultima ubicacion enviada
        var proxEnvioDeUbicacion = new Date(ultimaUbicacionFecha.getTime() + (10 * 60000));            //ultima ubicacion enviada sumado 10 minutos

        if (currentDate > proxEnvioDeUbicacion) {                                                      //calcular el envio del formulario si pasaron mas de 10 minutos desde la ultima vez
            formulario.submit();
            localStorage.setItem('ubicacionEnviada', new Date());
        }

        console.log(proxEnvioDeUbicacion);

    };

};

const userlogin = document.getElementById('userlogin').value; //usuario logueado actualmente
const userid = document.getElementById('iduser').value;       //usuario dueño de la mascota
if(userlogin != userid){                                      //si el usuario actual no es dueño de la mascota enviar la ubicacion
    funcionInit();
}


//inicializar el mapa
function initMap() {
    const ultlong = document.getElementById('ultubicacionlongitud').value;
    const ultlat = document.getElementById('ultubicacionlatitud').value;

    var coord = { lat: parseFloat(ultlat), lng: parseFloat(ultlong) };
    var map = new google.maps.Map(document.getElementById('map'), {
        zoom: 15,
        center: coord
    });
    var marker = new google.maps.Marker({
        position: coord,
        map: map
    });
}
