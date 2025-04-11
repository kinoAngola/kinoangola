<div id="map" class="w-full h-[500px] rounded-lg shadow"></div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        var map = L.map('map').setView([-8.8383, 13.2344], 13); // Posição central: Luanda

        // Mapa base (OpenStreetMap)
        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            maxZoom: 18,
            attribution: '&copy; OpenStreetMap'
        }).addTo(map);

        // Exemplo de marcador
        L.marker([-8.8383, 13.2344])
            .addTo(map)
            .bindPopup("<b>Restaurante X</b><br>Melhor muamba da cidade.");

        // Podes adicionar mais marcadores dinamicamente via JS ou Blade (veja abaixo)
    });
</script>
