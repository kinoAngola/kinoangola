<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Testes</title>

    <!-- Mapbox CSS -->
<link href="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.css" rel="stylesheet">
<style>
    #map {
        width: 100%;
        height: 400px;
        border-radius: 8px;
        position: absolute;
        top: 0;left: 0;
        z-index: 100;

    }
</style>
</head>
<body>

    <h1>MAPA DA KINO</h1>

    <form action="" method="POST">
    @csrf

    <input type="button" value="Enviar" onclick="document.getElementById('map').style.display='none';">
    <input type="button" value="Mostrar Mapa" onclick="document.getElementById('map').style.display='block';">
    <input type="button" value="Limpar" onclick="document.getElementById('map').style.display='none'; document.getElementById('latitude').value=''; document.getElementById('longitude').value=''; document.getElementById('endereco').value='';">
    <input type="button" value="Mostrar Coordenadas" onclick="alert('Latitude: ' + document.getElementById('latitude').value + ', Longitude: ' + document.getElementById('longitude').value);">
    <input type="button" value="Mostrar Endereço" onclick="alert('Endereço: ' + document.getElementById('endereco').value);">
    <input type="button" value="Mostrar Coordenadas e Endereço" onclick="alert('Latitude: ' + document.getElementById('latitude').value + ', Longitude: ' + document.getElementById('longitude').value + ', Endereço: ' + document.getElementById('endereco').value);">
    <div id="map"></div>

    <!-- Inputs escondidos para armazenar a lat/lng -->
    <input type="hidden" name="latitude" id="latitude">
    <input type="hidden" name="longitude" id="longitude">
    <input type="hidden" name="endereco" id="endereco">
    </form>

    <script>
        mapboxgl.accessToken = 'pk.eyJ1IjoiaGVybWluaW9vZmljaWFsIiwiYSI6ImNtOWQxdWU4YjB0bmEyanM3ZzE3a28xN2UifQ.OI4ntmpRyHLiQwHph_t5rw';
    
        const map = new mapboxgl.Map({
            container: 'map',
            style: 'mapbox://styles/mapbox/streets-v11',
            center: [13.2343, -8.8383], // Ponto inicial: Luanda
            zoom: 12
        });
    
        const marker = new mapboxgl.Marker({
            draggable: true
        })
        .setLngLat([13.2343, -8.8383]) // Mesmo ponto
        .addTo(map);
    
        function updateInputs(lngLat) {
            document.getElementById('latitude').value = lngLat.lat;
            document.getElementById('longitude').value = lngLat.lng;
    
            // Usar API de geocodificação reversa do Mapbox
            fetch(`https://api.mapbox.com/geocoding/v5/mapbox.places/${lngLat.lng},${lngLat.lat}.json?access_token=${mapboxgl.accessToken}`)
                .then(response => response.json())
                .then(data => {
                    const address = data.features[0]?.place_name || '';
                    document.getElementById('endereco').value = address;
                });
        }
    
        marker.on('dragend', () => {
            const lngLat = marker.getLngLat();
            updateInputs(lngLat);
        });
    
        map.on('click', (e) => {
            const lngLat = e.lngLat;
            marker.setLngLat(lngLat);
            updateInputs(lngLat);
        });
    </script>
    


<!-- Mapbox JS -->
<script src="https://api.mapbox.com/mapbox-gl-js/v2.14.1/mapbox-gl.js"></script>

</body>
</html>