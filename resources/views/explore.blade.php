@extends('layouts.main')

@section('links-head')

    <!-- Scripts -->
    @vite(['resources/scss/explore.scss', 'resources/js/explore.js'])

@endsection
@section('content')



<section class="hero">
    <img src="{{asset('/assets/images/qd (2).png')}}" alt="">
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
        <h3>Total de Pratos (5.647)</h3>
            <form action="" class="other">
                
            <div class="filter filtros" onclick="abrirSide()">
                <p>Filtros</p>
                <i class='bx bx-slider-alt'></i>
            </div>
            <select class="filter" id="seletar">
            <option >Ordenar por</option>
            <option value="1">1</option>
            <option value="1">1</option>
            <option value="1">1</option>
            </select>
            </form>
    </div>

    <section class="explorartudo">

        <div class="swiper FoodSwiper">
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
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </section>
    

    <section class="explorartudo">

        <div class="swiper FoodSwiper">
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
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </section>

    <section class="explorartudo">

        <div class="swiper FoodSwiper">
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
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </section>

    <section class="explorartudo">

        <div class="swiper FoodSwiper">
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
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </section>

    <section class="explorartudo">

        <div class="swiper FoodSwiper">
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
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </section>

    <section class="explorartudo">

        <div class="swiper FoodSwiper">
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
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </section>

</main>

@endsection
