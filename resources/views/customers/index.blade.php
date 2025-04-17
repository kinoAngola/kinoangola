@extends('layouts.main')

@section('links-head')
    <!-- Scripts -->
    @vite(['resources/scss/customerProfile.scss', 'resources/js/customerProfile.js'])
@endsection

@section('content')
    <section class="customerProfile">

        <div class="info-profile">
            <div class="text-center flex justify-center">
                @if (Auth::user()->image)
                    <img src="{{ asset('storage/' . Auth::user()->image) }}" alt="Foto de Perfil"
                        class="w-60 h-60 border border-2 rounded-full object-cover border-4 border-white shadow-xl">
                @else
                    <img src="{{ asset('storage/images/profiles/userdefault.png') }}" alt="Imagem de Perfil Padrão"
                        class="w-60 h-60 rounded-full">
                @endif
            </div>

            <!-- Informações do Usuário -->
            <div class="mt-6 text-center">
                <h2 class="text-2xl font-bold text-gray-800">{{ Auth::user()->name }}</h2>
                <p class="text-gray-600">{{ Auth::user()->email }}</p>
                <p class="text-gray-600">Telefone: (11) 98765-4321</p>
                <p class="text-gray-600">Localização: São Paulo, SP</p>
            </div>


            <div class="mt-6 flex justify-center gap-6">
                <a href="{{ route('customer.edit') }}"
                    class="bg-orange-600 text-white px-6 py-2 rounded-full hover:bg-orange-700">Editar Perfil</a>
                <button class="bg-red-600 text-white px-6 py-2 rounded-full hover:bg-red-700">Eliminar Conta</button>
            </div>



        </div>


        <!-- Seção de Pratos Favoritos -->
        <div class="pratos-section">
            <h2>Pratos Favoritos</h2>
            <div class="content">
                <div class="card">
                    <img src="{{ asset('/assets/images/qd (22).png') }}" alt="">
                    <div class="info">

                        <h3 class="font-semibold">Calulu de Peixe</h3>
                        <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
                            commodi quae natus.</p>
                        <p>Luanda, Ilha, <a href="#">Grill</a></p>
                        <p>AOA 5.000</p>
                        <button>Ver Prato</button>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('/assets/images/qd (22).png') }}" alt="">
                    <div class="info">

                        <h3 class="font-semibold">Calulu de Peixe</h3>
                        <p class=" mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
                            commodi quae natus.</p>
                        <p>Luanda, Ilha, <a href="#">Grill</a></p>
                        <p>AOA 5.000</p>
                        <button>Ver Prato</button>
                    </div>
                </div>
                <div class="card">
                    <img src="{{ asset('/assets/images/qd (22).png') }}" alt="">
                    <div class="info">

                        <h3 class="font-semibold">Calulu de Peixe</h3>
                        <p class="mb-2">Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolores
                            commodi quae natus.</p>
                        <p>Luanda, Ilha, <a href="#">Grill</a></p>
                        <p>AOA 5.000</p>
                        <button>Ver Prato</button>
                    </div>
                </div>
            </div>
        </div>

        <!-- Lista de Pedidos -->
        <div class="pedidos-section">
            <h2>Meus Pedidos</h2>
            <div class="content">

                <div class="card">
                    <div class="info">
                        <div class="desc">
                            <img src="{{ asset('/assets/images/qd (6).png') }}" alt="">
                            <div class="details">
                                <p><strong>Pedido #00123</strong> — Calulu de Peixe</p>
                                <p class="title-company">Estabelecimento: <a href="{{ route('companyProfile') }}">La
                                        Plaza</a></p>
                                <p class="status">Status: <span class="bugde confirmed">Confirmado</span>
                                </p>
                            </div>
                        </div>
                        <div class="actions">
                            <button class="text-blue-600 hover:underline">Editar</button>
                            <button class="text-red-600 hover:underline">Apagar</button>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="info">
                        <div class="desc">
                            <img src="{{ asset('/assets/images/qd (6).png') }}" alt="">
                            <div class="details">
                                <p><strong>Pedido #00123</strong> — Calulu de Peixe</p>
                                <p class="title-company">Estabelecimento: <a href="{{ route('companyProfile') }}">La
                                        Plaza</a></p>
                                <p class="status">Status: <span class="bugde pendent">Pendente</span>
                                </p>
                            </div>
                        </div>
                        <div class="actions">
                            <button class="text-blue-600 hover:underline">Editar</button>
                            <button class="text-red-600 hover:underline">Apagar</button>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="info">
                        <div class="desc">
                            <img src="{{ asset('/assets/images/qd (6).png') }}" alt="">
                            <div class="details">
                                <p><strong>Pedido #00123</strong> — Calulu de Peixe</p>
                                <p class="title-company">Estabelecimento: <a href="{{ route('companyProfile') }}">La
                                        Plaza</a></p>
                                <p class="status">Status: <span class="bugde confirmed">Confirmado</span>
                                </p>
                            </div>
                        </div>
                        <div class="actions">
                            <button class="text-blue-600 hover:underline">Editar</button>
                            <button class="text-red-600 hover:underline">Apagar</button>
                        </div>
                    </div>
                </div>


                <div class="card">
                    <div class="info">
                        <div class="desc">
                            <img src="{{ asset('/assets/images/qd (6).png') }}" alt="">
                            <div class="details">
                                <p><strong>Pedido #00123</strong> — Calulu de Peixe Seco com Maanga</p>
                                <p class="title-company">Estabelecimento: <a href="{{ route('companyProfile') }}">La
                                        Plaza</a></p>
                                <p class="status">Status: <span class="bugde canceled">Cancelado</span>
                                </p>
                            </div>
                        </div>
                        <div class="actions">
                            <button class="text-blue-600 hover:underline">Editar</button>
                            <button class="text-red-600 hover:underline">Apagar</button>
                        </div>
                    </div>
                </div>
            </div>

            <a href="#" class="more">Ver Mais</a>
        </div>

        <!-- Recomendações Personalizadas -->
        <div class="recomendacoes-section">
            <h2>Recomendações para Você</h2>
            <div class="content">
                <a href="#" class="card">
                    <h3>Funge com Carne Seca</h3>
                    <p>Baseado nas suas avaliações</p>
                </a>
                <a href="#" class="card">
                    <h3>Churrasco Luandense</h3>
                    <p>Baseado nos seus pedidos recentes</p>
                </a>
            </div>
        </div>

        <!-- Minhas Avaliações -->
        <div class="avaliacoes-section">
            <h2>Minhas Avaliações</h2>

            <div class="content">

                <div class="card">
                    <div class="company-info">
                        <img src="{{ asset('/assets/images/qd (22).png') }}" alt="Foto do usuário">
                        <div class="personal-info">
                            <h3 class="title">Calawenda Bar</h3>
                            <p class="email">calawenda.bar@email.com</p>
                        </div>
                    </div>
                    <div class="avaliacao">
                        <p class="comment">"Muito saboroso, recomendo!"</p>
                        <div class="stars">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                    </div>
                    <h3 class="prato">Calulu</h3>
                </div>

                <div class="card">
                    <div class="company-info">
                        <img src="{{ asset('/assets/images/qd (22).png') }}" alt="Foto do usuário">
                        <div class="personal-info">
                            <h3 class="title">Calawenda Bar</h3>
                            <p class="email">calawenda.bar@email.com</p>
                        </div>
                    </div>
                    <div class="avaliacao">
                        <p class="comment">"Muito saboroso, recomendo!"</p>
                        <div class="stars">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                    </div>
                    <h3 class="prato">Calulu</h3>
                </div>

                <div class="card">
                    <div class="company-info">
                        <img src="{{ asset('/assets/images/qd (22).png') }}" alt="Foto do usuário">
                        <div class="personal-info">
                            <h3 class="title">Calawenda Bar</h3>
                            <p class="email">calawenda.bar@email.com</p>
                        </div>
                    </div>
                    <div class="avaliacao">
                        <p class="comment">"Muito saboroso, recomendo!"</p>
                        <div class="stars">
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                            <i class="bx bxs-star"></i>
                        </div>
                    </div>
                    <h3 class="prato">Calulu</h3>
                </div>

                {{-- <!-- Avaliação 2 -->
                <div class="border p-4 rounded-lg shadow-lg flex flex-col items-center">
                    <img src="https://via.placeholder.com/80" alt="Foto do usuário" class="w-20 h-20 rounded-full mb-4">
                    <div class="text-center">
                        <h3 class="font-semibold text-lg">Maria Oliveira</h3>
                        <p class="text-sm text-gray-600">maria.oliveira@email.com</p>
                    </div>
                    <p class="text-sm text-gray-800 mt-4">"Bom, mas demorou para chegar."</p>
                    <div class="flex mt-2">
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-gray-400"></i>
                        <i class="bx bxs-star text-gray-400"></i>
                    </div>
                    <p class="text-xs text-gray-500 mt-2">Muamba de Galinha</p>
                </div>

                <!-- Avaliação 3 -->
                <div class="border p-4 rounded-lg shadow-lg flex flex-col items-center">
                    <img src="https://via.placeholder.com/80" alt="Foto do usuário" class="w-20 h-20 rounded-full mb-4">
                    <div class="text-center">
                        <h3 class="font-semibold text-lg">Carlos Souza</h3>
                        <p class="text-sm text-gray-600">carlos.souza@email.com</p>
                    </div>
                    <p class="text-sm text-gray-800 mt-4">"Excelente! Superou minhas expectativas!"</p>
                    <div class="flex mt-2">
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-yellow-500"></i>
                        <i class="bx bxs-star text-yellow-500"></i>
                    </div>
                    <p class="text-xs text-gray-500 mt-2">Funge de Carne</p>
                </div> --}}
            </div>
        </div>



        <!-- Sidebar do Carrinho -->
        <div id="cart-sidebar" class="fixed inset-0 bg-black bg-opacity-50 z-40 hidden">
            <div class="absolute top-0 right-0 w-80 bg-white h-full p-6 shadow-xl">
                <h3 class="text-2xl font-bold mb-6 mt-7">Carrinho de Compras</h3>

                <!-- Lista de Itens no Carrinho -->
                <div id="cart-items" class="space-y-4">
                    <!-- Item 1 -->
                    <div class="flex gap-4">
                        <img src="https://via.placeholder.com/100" alt="Prato 1"
                            class="w-20 h-20 object-cover rounded-lg">
                        <div>
                            <h4 class="font-semibold text-lg">Calulu de Peixe</h4>
                            <p class="text-gray-600">Restaurante X</p>
                            <p class="text-gray-800">R$ 30,00</p>
                        </div>
                    </div>
                    <!-- Item 2 -->
                    <div class="flex gap-4">
                        <img src="https://via.placeholder.com/100" alt="Prato 2"
                            class="w-20 h-20 object-cover rounded-lg">
                        <div>
                            <h4 class="font-semibold text-lg">Muamba de Galinha</h4>
                            <p class="text-gray-600">Restaurante Y</p>
                            <p class="text-gray-800">R$ 25,00</p>
                        </div>
                    </div>
                </div>

                <!-- Valor Total -->
                <div class="mt-6">
                    <div class="flex justify-between">
                        <span class="font-semibold text-lg">Total:</span>
                        <span class="font-semibold text-xl text-green-600">R$ 55,00</span>
                    </div>
                </div>

                <!-- Botão Fechar -->
                <button id="close-cart"
                    class="absolute top-4 right-4 text-white bg-red-600 p-2 rounded-full hover:bg-red-700">
                    <i class="bx bx-x"></i>
                </button>
            </div>
        </div>

    </section>

    <section class="cta">

        <div class="container" id="baixar-app">
            <h5>Faça Parte Agora!</h5>
            <p class="text-above">Baixe nosso aplicativo e descubra novas experiências.
            </p>
            <div class="cta-item">
                <a href="#" class="cta-link">
                    <svg class="icon" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="apple"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512">
                        <path fill="currentColor"
                            d="M318.7 268.7c-.2-36.7 16.4-64.4 50-84.8-18.8-26.9-47.2-41.7-84.7-44.6-35.5-2.8-74.3 20.7-88.5 20.7-15 0-49.4-19.7-76.4-19.7C63.3 141.2 4 184.8 4 273.5q0 39.3 14.4 81.2c12.8 36.7 59 126.7 107.2 125.2 25.2-.6 43-17.9 75.8-17.9 31.8 0 48.3 17.9 76.4 17.9 48.6-.7 90.4-82.5 102.6-119.3-65.2-30.7-61.7-90-61.7-91.9zm-56.6-164.2c27.3-32.4 24.8-61.9 24-72.5-24.1 1.4-52 16.4-67.9 34.9-17.5 19.8-27.8 44.3-25.6 71.9 26.1 2 49.9-11.4 69.5-34.3z">
                        </path>
                    </svg>
                    <div class="content">
                        <div class="mb-1 text-xs">Baixar no</div>
                        <div class="cta-app">Mac App Store</div>
                    </div>
                </a>
                <a href="#" class="cta-link">
                    <svg class="icon" aria-hidden="true" focusable="false" data-prefix="fab" data-icon="google-play"
                        role="img" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                        <path fill="currentColor"
                            d="M325.3 234.3L104.6 13l280.8 161.2-60.1 60.1zM47 0C34 6.8 25.3 19.2 25.3 35.3v441.3c0 16.1 8.7 28.5 21.7 35.3l256.6-256L47 0zm425.2 225.6l-58.9-34.1-65.7 64.5 65.7 64.5 60.1-34.1c18-14.3 18-46.5-1.2-60.8zM104.6 499l280.8-161.2-60.1-60.1L104.6 499z">
                        </path>
                    </svg>
                    <div class="content">
                        <div class="mb-1 text-xs">Baixe no</div>
                        <div class="-mt-1 font-sans text-sm font-semibold">Google Play</div>
                    </div>
                </a>
            </div>
        </div>

    </section>
@endsection
