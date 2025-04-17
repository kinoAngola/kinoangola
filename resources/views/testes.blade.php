@extends('layouts.main')

@section('links-head')

    <!-- Scripts -->
    @vite(['resources/scss/partners.scss', 'resources/js/partners.js'])

@endsection
@section('content')

<section class="flex justify-center items-center">
    @if (session('SUCESSO'))
        <h5 class="p-4 bg-gray-100 font-semibold text-green-600">{{session('SUCESSO')}}</h5>

        @elseif (session('error'))

        <h5 class="p-4 bg-gray-100 font-semibold text-green-600">{{session('error')}}</h5>
    @endif
    <form class="p-8" method="post" action="{{ route('testes.edit') }}">
        @csrf
    
        <div class="mb-4">
            <label for="image" class="block text-sm font-medium text-gray-700">Imagem de Perfil</label>
            <input type="file" name="image" id="image" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm">
        </div>
    
        <div class="mb-4">
            <button type="submit" class="px-4 py-2 bg-indigo-600 text-white rounded-md">Salvar</button>
        </div>
    </form>
</section>



<section class="max-w-5xl mx-auto p-6">
    <div class="bg-white shadow-xl rounded-2xl p-6 mb-10">
        <h2 class="text-2xl font-bold mb-4">Perfil do Usuário</h2>
        <div class="grid md:grid-cols-2 gap-4">
            <div>
                <label class="block text-sm font-medium mb-1">Nome</label>
                <input type="text" value="João Silva" class="w-full border rounded px-3 py-2">
            </div>
            <div>
                <label class="block text-sm font-medium mb-1">Email</label>
                <input type="email" value="joao@email.com" class="w-full border rounded px-3 py-2">
            </div>
        </div>
        <button class="mt-4 bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">Salvar Alterações</button>
    </div>




    <div class="bg-white shadow-xl rounded-2xl p-6 mb-10">
        <h2 class="text-2xl font-bold mb-4">Histórico</h2>
        <ul>
            <li class="flex justify-between items-center border-b py-2">
                <span>Prato: Calulu</span>
                <span>AOA 5.000</span>
            </li>
            <li class="flex justify-between items-center border-b py-2">
                <span>Prato: Moamba de Galinha</span>
                <span>AOA 4.500</span>
            </li>
        </ul>
        <div class="flex justify-between mt-4 font-bold">
            <span>Total</span>
            <span>AOA 9.500</span>
        </div>
        <a href="#checkout"
            class="block text-center mt-4 bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">Ir para o
            Checkout</a>
    </div>


    <div id="checkout" class="bg-white shadow-xl rounded-2xl p-6 mb-10">
        <h2 class="text-2xl font-bold mb-4">Finalizar Pedido</h2>
        <form class="grid md:grid-cols-2 gap-4">
            <input type="text" placeholder="Nome Completo" class="border rounded px-3 py-2">
            <input type="text" placeholder="Endereço de Entrega" class="border rounded px-3 py-2">
            <input type="tel" placeholder="Telefone" class="border rounded px-3 py-2">
            <select class="border rounded px-3 py-2">
                <option>Método de Pagamento</option>
                <option>Multicaixa</option>
                <option>Transferência</option>
                <option>Dinheiro na Entrega</option>
            </select>
            <textarea placeholder="Observações" class="md:col-span-2 border rounded px-3 py-2"></textarea>
        </form>
        <button class="mt-4 bg-green-600 text-white px-4 py-2 rounded hover:bg-green-700">Confirmar Pedido</button>
    </div>


    <div class="bg-white shadow-xl rounded-2xl p-6 mb-10">
        <div class="md:flex gap-6">
            <img src="/imagens/calulu.jpg" alt="Calulu de peixe" class="rounded-2xl w-full md:w-1/2">
            <div class="flex-1">
                <h2 class="text-3xl font-bold mb-2">Calulu de Peixe</h2>
                <p class="text-gray-600 mb-2">Prato tradicional angolano com peixe seco, quiabo e óleo de palma.</p>
                <p class="text-lg font-bold text-purple-600 mb-4">AOA 5.000</p>
                <button class="bg-purple-600 text-white px-4 py-2 rounded hover:bg-purple-700">Adicionar ao
                    Carrinho</button>
                <div class="mt-6">
                    <h3 class="font-semibold mb-2">Detalhes do Prato</h3>
                    <ul class="list-disc list-inside text-sm text-gray-700">
                        <li>Serve: 1 pessoa</li>
                        <li>Tempo estimado: 30-40 minutos</li>
                        <li>Contém: peixe seco, quiabo, cebola, óleo de palma</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>



@endsection












{{-- <!DOCTYPE html>
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
            top: 0;
            left: 0;
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
        <input type="button" value="Limpar"
            onclick="document.getElementById('map').style.display='none'; document.getElementById('latitude').value=''; document.getElementById('longitude').value=''; document.getElementById('endereco').value='';">
        <input type="button" value="Mostrar Coordenadas"
            onclick="alert('Latitude: ' + document.getElementById('latitude').value + ', Longitude: ' + document.getElementById('longitude').value);">
        <input type="button" value="Mostrar Endereço"
            onclick="alert('Endereço: ' + document.getElementById('endereco').value);">
        <input type="button" value="Mostrar Coordenadas e Endereço"
            onclick="alert('Latitude: ' + document.getElementById('latitude').value + ', Longitude: ' + document.getElementById('longitude').value + ', Endereço: ' + document.getElementById('endereco').value);">
        <div id="map"></div>

        <!-- Inputs escondidos para armazenar a lat/lng -->
        <input type="hidden" name="latitude" id="latitude">
        <input type="hidden" name="longitude" id="longitude">
        <input type="hidden" name="endereco" id="endereco">
    </form>

    <script>
        mapboxgl.accessToken =
            'pk.eyJ1IjoiaGVybWluaW9vZmljaWFsIiwiYSI6ImNtOWQxdWU4YjB0bmEyanM3ZzE3a28xN2UifQ.OI4ntmpRyHLiQwHph_t5rw';

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
            fetch(
                    `https://api.mapbox.com/geocoding/v5/mapbox.places/${lngLat.lng},${lngLat.lat}.json?access_token=${mapboxgl.accessToken}`)
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
 --}}