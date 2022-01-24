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

        fetch("../ubicacion", {
            headers: {
                'X-CSRF-TOKEN': window.CSRF_TOKEN
            },
            method: "POST",
            body: JSON.stringify(ultubicacion)
        })
        .then(respuesta => {
          console.log(respuesta);
        });
        
    };

};


funcionInit();

function initMap(){
    const ultlong = document.getElementById('ultubicacionlongitud').value;
    const ultlat = document.getElementById('ultubicacionlatitud').value;

    console.log(ultlat,ultlong)

    var coord = {lat: parseFloat(ultlat) ,lng: parseFloat(ultlong)};
    var map = new google.maps.Map(document.getElementById('map'),{
      zoom: 15,
      center: coord
    });
    var marker = new google.maps.Marker({
      position: coord,
      map: map
    });
}
