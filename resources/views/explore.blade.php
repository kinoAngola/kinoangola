@extends('layouts.main')

@section('links-head')
    <!-- Scripts -->
    @vite(['resources/scss/explore.scss', 'resources/js/explore.js'])
@endsection
@section('content')
    <section class="hero">
        <img src="{{ asset('/assets/images/qd (2).png') }}" alt="">
        <div class="content">
            <h1>A Pizza Mais Cremosa da Banda</h1>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus quo nihil cupiditate numquam
                recusandae, a quod provident iste veniam, aspernatur totam autem modi quaerat laudantium accusantium
                explicabo labore aliquam inventore?</p>
            <button class="btn-principal">Visitar Local</button>
        </div>
    </section>

    <main class="main">


        <aside class="sidebar">
            <h3>Angola</h3>
        </aside>

        <div class="content-explorar">
            <h3 id="title-explore">Total de Pratos (5.647)</h3>
            <form action="" class="other">

                <div class="filter filtros" onclick="abrirSide()">
                    <p>Filtros</p>
                    <i class='bx bx-slider-alt'></i>
                </div>
                <select class="filter" id="seletar">
                    <option>Ordenar por</option>
                    <option value="1">1</option>
                    <option value="1">1</option>
                    <option value="1">1</option>
                </select>
            </form>
        </div>

        
        <!-- Formulário de Pesquisa com Filtros Responsivo -->
<div class="bg-white shadow-xl rounded-2xl p-6 mb-10">
    <h2 class="text-2xl font-bold mb-4">Pesquisar Estabelecimentos</h2>
    <form class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
        <!-- Localização -->
        <input type="text" placeholder="Localização" class="border rounded px-3 py-2 w-full">
        
        <!-- Categoria -->
        <select class="border rounded px-3 py-2 w-full">
            <option>Categoria</option>
            <option>Restaurante</option>
            <option>Bar</option>
            <option>Roulotes</option>
        </select>

        <!-- Tipo de Cozinha -->
        <select class="border rounded px-3 py-2 w-full">
            <option>Tipo de Cozinha</option>
            <option>Angolana</option>
            <option>Italiana</option>
            <option>Chinesa</option>
        </select>

        <!-- Faixa de Preço -->
        <select class="border rounded px-3 py-2 w-full">
            <option>Faixa de Preço</option>
            <option>Acessível</option>
            <option>Moderado</option>
            <option>Premium</option>
        </select>

        <!-- Avaliações -->
        <select class="border rounded px-3 py-2 w-full">
            <option>Avaliações</option>
            <option>4+ estrelas</option>
            <option>3+ estrelas</option>
        </select>

        <!-- Horário de Funcionamento -->
        <input type="time" class="border rounded px-3 py-2 w-full" placeholder="Horário de Funcionamento">
        
        <!-- Botão de Buscar -->
        <button type="submit" class="bg-orange-600 text-white px-4 py-2 rounded hover:bg-orange-700 w-full sm:col-span-2 md:col-span-3 lg:col-span-1">
            Buscar
        </button>
    </form>
</div>


        <section class="explorartudo">

            <div class="swiper FoodSwiper">

                <h3>Categoria</h3>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="swiper-botoes">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

        </section>

        <section class="explorartudo">

            <div class="swiper FoodSwiper">

                <h3>Categoria</h3>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#" class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="swiper-botoes">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

        </section>

        <section class="explorartudo">

            <div class="swiper FoodSwiper">

                <h3>Categoria</h3>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="swiper-botoes">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

        </section>

        
        <!--==================================== EMPRESAS ==================================== -->
        <section class="empresas w-full bg-white" id="empresas">
            <h2>Os locais mais quentes da banda</h2>
            <div class="swiper EmpresasSwiper">
                <div class="swiper-wrapper">

                    <div class="swiper-slide">
                        <a href="resources/views/profile.html" class="emp-link"><img
                                src="{{ asset('/assets/images/logomarca/logoo.jpg') }}" alt="businesses"></a>
                        <h3>Kino Angola</h3>
                        <div class="info">
                            <p>Restaurante, Luanda</p>
                        </div>
                    </div>


                    <div class="swiper-slide">
                        <a href="resources/views/profile.html" class="emp-link"><img
                                src="{{ asset('/assets/images/logomarca/logoo.jpg') }}" alt="businesses"></a>
                        <h3>Kino Angola</h3>
                        <div class="info">
                            <p>Restaurante, Luanda</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <a href="resources/views/profile.html" class="emp-link"><img
                                src="{{ asset('/assets/images/logomarca/logoo.jpg') }}" alt="businesses"></a>
                        <h3>Kino Angola</h3>
                        <div class="info">
                            <p>Restaurante, Luanda</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <a href="resources/views/profile.html" class="emp-link"><img
                                src="{{ asset('/assets/images/logomarca/logoo.jpg') }}" alt="businesses"></a>
                        <h3>Kino Angola</h3>
                        <div class="info">
                            <p>Restaurante, Luanda</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <a href="resources/views/profile.html" class="emp-link"><img
                                src="{{ asset('/assets/images/logomarca/logoo.jpg') }}" alt="businesses"></a>
                        <h3>Kino Angola</h3>
                        <div class="info">
                            <p>Restaurante, Luanda</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <a href="resources/views/profile.html" class="emp-link"><img
                                src="{{ asset('/assets/images/logomarca/logoo.jpg') }}" alt="businesses"></a>
                        <h3>Kino Angola</h3>
                        <div class="info">
                            <p>Restaurante, Luanda</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <a href="resources/views/profile.html" class="emp-link"><img
                                src="{{ asset('/assets/images/logomarca/logoo.jpg') }}" alt="businesses"></a>
                        <h3>Kino Angola</h3>
                        <div class="info">
                            <p>Restaurante, Luanda</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <a href="resources/views/profile.html" class="emp-link"><img
                                src="{{ asset('/assets/images/logomarca/logoo.jpg') }}" alt="businesses"></a>
                        <h3>Kino Angola</h3>
                        <div class="info">
                            <p>Restaurante, Luanda</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <a href="resources/views/profile.html" class="emp-link"><img
                                src="{{ asset('/assets/images/logomarca/logoo.jpg') }}" alt="businesses"></a>
                        <h3>Kino Angola</h3>
                        <div class="info">
                            <p>Restaurante, Luanda</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <a href="resources/views/profile.html" class="emp-link"><img
                                src="{{ asset('/assets/images/logomarca/logoo.jpg') }}" alt="businesses"></a>
                        <h3>Kino Angola</h3>
                        <div class="info">
                            <p>Restaurante, Luanda</p>
                        </div>
                    </div>

                    <div class="swiper-slide">
                        <a href="resources/views/profile.html" class="emp-link"><img
                                src="{{ asset('/assets/images/logomarca/logoo.jpg') }}" alt="businesses"></a>
                        <h3>Kino Angola</h3>
                        <div class="info">
                            <p>Restaurante, Luanda</p>
                        </div>
                    </div>

                </div>

        </section>

        <section class="explorartudo">

            <div class="swiper FoodSwiper">

                <h3>Categoria</h3>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="swiper-botoes">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

        </section>

        <section class="explorartudo">

            <div class="swiper FoodSwiper">

                <h3>Categoria</h3>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <div class="icons">

                                <i class='bx bx-heart'></i>
                                <i class='bx bx-cart-alt'></i>
                            </div>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <div class="first">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="text-orange-600 text-lg font-bold justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churras na Brasa</h3>
                                    <div class="descs">
                                        <div class="impo">
                                            <a href="#"
                                                class="hover:underline hover:text-orange-600 font-medium">La
                                                Plaza </a>
                                            <p class="ml-1"> - Luanda, Camama</p>
                                        </div>
                                    </div>
                                    <div class="second">
                                        <div class="spans">
                                            <span class='pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='freeshipping'><i class='bx bxs-badge-check'></i> Entrega</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                </div>
                            </div>
                        </div>

                    </div>

                </div>

                <div class="swiper-botoes">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </div>
            </div>

        </section>




    </main>
@endsection
