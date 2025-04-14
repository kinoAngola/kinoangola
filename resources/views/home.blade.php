@extends('layouts.main')

@section('links-head')
    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
@endsection


@section('content')
    <!--==================================== CORPO ==================================== -->
    <main>
        <!--==================================== HERO - BANNER CARROSSEL ==================================== -->
        <section class="swiper HeroSwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide hero-slide-2">
                    <img src="{{ asset('/assets/images/back-mesa.jpg') }}" alt="">
                    <div class="content">
                        <p class="paragrafito">O seu lugar já está garantido!</p>
                        <h2>Reserve Sua Mesa Agora Mesmo</h2>
                        <p class="desc">Sem espera, sem estresse e sem complicações.</p>
                        <div class="cta">
                            <a href="resources/views/booking.html" class="btn-principal">Reservar Agora</a>
                            <a class="btn-third" href="resources/views/profile.html">Ver Mais</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide hero-slide-1">
                    <img src="{{ asset('/assets/images/back (1).png') }}" alt="">
                    <div class="content">
                        <h1>Deixe a fome por novas experiências te guiar</h1>
                        <p>Pesquise por bares, restaurantes, hamburguerias, risorts e muito mais. Encontre o
                            melhor da gastronomia angolana aqui na <strong>Kino Angola.</strong></p>
                        <form action="#">
                            <button><i class='bx bx-search-alt-2'></i></button>
                            <input type="text" placeholder="Pesquisar">
                        </form>
                    </div>
                </div>
                <div class="swiper-slide hero-slide-3">
                    <img src="{{ asset('/assets/images/back-partner-6.jpg') }}" alt="">
                    <div class="content">
                        <h1>Torne-se <span class="text-orange-500">Nosso Parceiro</span></h1>
                        <p>Tem um Restaurante? Junte-se à <strong>Kino Angola.</strong> Atraia novos clientes todos os dias
                            e
                            aumente seu faturamento, aparecendo nos destaques</p>
                        <a href="resources/views/partners.html" class="btn-third">Cadastre a Sua Empresa</a>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </section>

        <!--==================================== DESTAQUE DA SEMANA ==================================== -->
        <section class="destaque">
            <h2 style="margin:0;">Destaque da Semana</h2>
            <div class="content">
                <img src="{{ asset('assets/images/qd (14).png') }}" alt="">
                <div class="desc">
                    <h3>Camarão Frito com Molho Soquês</h3>
                    <p>Desfrute deste prato incrivelmente saboroso na <a href="#"><strong>Dombaxi
                                Delicious</strong></a>. Um prato digno de 5 estrelas de acordo La Kran Fêrger. O prato
                        tem
                        monopolizado a escolha nos almoços do povo luandanse, por sua
                        combinação luxuosa do marisco e um molho de alecrim, castanhas, ginguba, maionese e azeitonas
                        pretas.</p>

                    {{--  <a href="#" class="readmore">Ver mais
                            <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
                            </svg>
                        </a> --}}
                    <a href="#" class="btn-principal">Encomendar</a>
                </div>
            </div>
        </section>

        <!--==================================== SERVIÇOS ==================================== -->
        <section class="services">
            <h2>Porquê usar a Kino?</h2>
            <div class="content">
                <div class="service-card">
                    <i class='bx bx-bowl-rice'></i>
                    <div class="desc">
                        <h3>Variedade Gastronômica</h3>
                        <p>Desde pratos tradicionais a experiências gastronômicas exclusivas.</p>
                    </div>
                </div>
                <div class="service-card">
                    <i class='bx bx-package'></i>
                    <div class="desc">
                        <h3>Receba em Casa</h3>
                        <p>Faça seus pedidos online e receba no conforto da sua casa.</p>
                    </div>
                </div>
                <div class="service-card">
                    <i class='bx bx-wallet'></i>
                    <div class="desc">
                        <h3>Pagamentos Seguros</h3>
                        <p>Diversas opções de pagamento em um sistema robusto e seguro.</p>
                    </div>
                </div>
            </div>
        </section>


        <!--==================================== FOOD ==================================== -->
        <section class="food">
            <h2>Desfruta do melhor que há na culinária angolana</h2>


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
                        </div> <span></span>

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
                <span class="swiper-botoes">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </span>
            </div>

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
                        </div> <span></span>

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
                <span class="swiper-botoes">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </span>
            </div>

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
                        </div> <span></span>

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
                <span class="swiper-botoes">
                    <div class="swiper-button-prev"></div>
                    <div class="swiper-button-next"></div>
                </span>
            </div>



        </section>


        <!--==================================== EMPRESAS ==================================== -->
        <section class="empresas">
            <h2>Os que dedicam-se, merecem destaque!</h2>
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

        <!--==================================== DESCONTOS ESPECIAIS ==================================== -->
        <section class="descontos-especiais"
            style="background: url('{{ asset('assets/images/food (4).jpg') }}') no-repeat bottom/cover;">
            <div class="content">
                <h3>Quer Descontos Especiais?</h3>
                <p>Descubra promoções de restaurantes parceiros e aproveite descontos incríveis.</p>
                <a href="resources/views/discounts.html" class="btn-principal">Aproveitar Agora</a>
            </div>
        </section>


        <!--==================================== PESQUISA FILTRADA & MAP ==================================== -->
        <section class="filtersearch">
            <h2 style="color: #003789;">Quem procura, acha!</h2>
            <div class="search-map">
                <div id="map" style="height: 400px; border-radius: 8px;"></div>

                <!-- Inputs escondidos para armazenar a lat/lng -->
                <input type="hidden" name="latitude" id="latitude">
                <input type="hidden" name="longitude" id="longitude">
                <input type="hidden" name="endereco" id="endereco">

            </div>
            <div class="content">
                <form class="tools">
                    <button class="btn-lupa" disabled><i class='bx bx-search-alt-2'></i></button>
                    <input class="btn-input-text" type="text" placeholder="Pesquisar...">
                    <button class="btn-close"><i class='bx bx-x'></i></button>
                    <button class="btn-filtro"><i class='bx bx-slider-alt'></i></button>

                    <div class="resultados">
                        <h3>Sem resultados...</h3>
                        <div class="resultado"></div>
                    </div>
                </form>


                <div class="swiper PesquisaSwiper">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">

                            <div class="card-pratos" id="cardone">
                                <img src="{{ asset('assets/images/qd (13).png') }}" alt="">
                                <div class="info">
                                    <div class="acima">
                                        <div class="spans">
                                            <span class='tagincolhe pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='tagincolhe freeshipping'><i class='bx bxs-badge-check'></i>
                                                Entrega</span>
                                        </div>
                                        <div class="cta">
                                            <i class='bx bx-cart-add'></i>
                                            <a href="#" class="btn-principal">Comprar</a>
                                        </div>
                                    </div>
                                    <h3>Churrasco</h3>
                                    <div class="description">
                                        <a href="{{route('companyProfile')}}">La Plaza</a>
                                        <div class="sep"></div>
                                        <p>Luanda, Camama</p>

                                    </div>
                                    <div class="extras">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="price">2.000,00 Kz</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-pratos" id="cardone">
                                <img src="{{ asset('assets/images/qd (13).png') }}" alt="">
                                <div class="info">
                                    <div class="acima">
                                        <div class="spans">
                                            <span class='tagincolhe pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='tagincolhe freeshipping'><i class='bx bxs-badge-check'></i>
                                                Entrega</span>
                                        </div>
                                        <div class="cta">
                                            <i class='bx bx-cart-add'></i>
                                            <a href="#" class="btn-principal">Comprar</a>
                                        </div>
                                    </div>
                                    <h3>Churrasco</h3>
                                    <div class="description">
                                        <a href="{{route('companyProfile')}}">La Plaza</a>
                                        <div class="sep"></div>
                                        <p>Luanda, Camama</p>

                                    </div>
                                    <div class="extras">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="price">2.000,00 Kz</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-pratos" id="cardone">
                                <img src="{{ asset('assets/images/qd (13).png') }}" alt="">
                                <div class="info">
                                    <div class="acima">
                                        <div class="spans">
                                            <span class='tagincolhe pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='tagincolhe freeshipping'><i class='bx bxs-badge-check'></i>
                                                Entrega</span>
                                        </div>
                                        <div class="cta">
                                            <i class='bx bx-cart-add'></i>
                                            <a href="#" class="btn-principal">Comprar</a>
                                        </div>
                                    </div>
                                    <h3>Churrasco</h3>
                                    <div class="description">
                                        <a href="{{route('companyProfile')}}">La Plaza</a>
                                        <div class="sep"></div>
                                        <p>Luanda, Camama</p>

                                    </div>
                                    <div class="extras">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="price">2.000,00 Kz</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="card-pratos" id="cardone">
                                <img src="{{ asset('assets/images/qd (13).png') }}" alt="">
                                <div class="info">
                                    <div class="acima">
                                        <div class="spans">
                                            <span class='tagincolhe pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='tagincolhe freeshipping'><i class='bx bxs-badge-check'></i>
                                                Entrega</span>
                                        </div>
                                        <div class="cta">
                                            <i class='bx bx-cart-add'></i>
                                            <a href="#" class="btn-principal">Comprar</a>
                                        </div>
                                    </div>
                                    <h3>Churrasco</h3>
                                    <div class="description">
                                        <a href="{{route('companyProfile')}}">La Plaza</a>
                                        <div class="sep"></div>
                                        <p>Luanda, Camama</p>

                                    </div>
                                    <div class="extras">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="price">2.000,00 Kz</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-pratos" id="cardone">
                                <img src="{{ asset('assets/images/qd (13).png') }}" alt="">
                                <div class="info">
                                    <div class="acima">
                                        <div class="spans">
                                            <span class='tagincolhe pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='tagincolhe freeshipping'><i class='bx bxs-badge-check'></i>
                                                Entrega</span>
                                        </div>
                                        <div class="cta">
                                            <i class='bx bx-cart-add'></i>
                                            <a href="#" class="btn-principal">Comprar</a>
                                        </div>
                                    </div>
                                    <h3>Churrasco</h3>
                                    <div class="description">
                                        <a href="{{route('companyProfile')}}">La Plaza</a>
                                        <div class="sep"></div>
                                        <p>Luanda, Camama</p>

                                    </div>
                                    <div class="extras">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="price">2.000,00 Kz</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-pratos" id="cardone">
                                <img src="{{ asset('assets/images/qd (13).png') }}" alt="">
                                <div class="info">
                                    <div class="acima">
                                        <div class="spans">
                                            <span class='tagincolhe pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='tagincolhe freeshipping'><i class='bx bxs-badge-check'></i>
                                                Entrega</span>
                                        </div>
                                        <div class="cta">
                                            <i class='bx bx-cart-add'></i>
                                            <a href="#" class="btn-principal">Comprar</a>
                                        </div>
                                    </div>
                                    <h3>Churrasco</h3>
                                    <div class="description">
                                        <a href="{{route('companyProfile')}}">La Plaza</a>
                                        <div class="sep"></div>
                                        <p>Luanda, Camama</p>

                                    </div>
                                    <div class="extras">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="price">2.000,00 Kz</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                        <div class="swiper-slide">

                            <div class="card-pratos" id="cardone">
                                <img src="{{ asset('assets/images/qd (13).png') }}" alt="">
                                <div class="info">
                                    <div class="acima">
                                        <div class="spans">
                                            <span class='tagincolhe pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='tagincolhe freeshipping'><i class='bx bxs-badge-check'></i>
                                                Entrega</span>
                                        </div>
                                        <div class="cta">
                                            <i class='bx bx-cart-add'></i>
                                            <a href="#" class="btn-principal">Comprar</a>
                                        </div>
                                    </div>
                                    <h3>Churrasco</h3>
                                    <div class="description">
                                        <a href="{{route('companyProfile')}}">La Plaza</a>
                                        <div class="sep"></div>
                                        <p>Luanda, Camama</p>

                                    </div>
                                    <div class="extras">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="price">2.000,00 Kz</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-pratos" id="cardone">
                                <img src="{{ asset('assets/images/qd (13).png') }}" alt="">
                                <div class="info">
                                    <div class="acima">
                                        <div class="spans">
                                            <span class='tagincolhe pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='tagincolhe freeshipping'><i class='bx bxs-badge-check'></i>
                                                Entrega</span>
                                        </div>
                                        <div class="cta">
                                            <i class='bx bx-cart-add'></i>
                                            <a href="#" class="btn-principal">Comprar</a>
                                        </div>
                                    </div>
                                    <h3>Churrasco</h3>
                                    <div class="description">
                                        <a href="{{route('companyProfile')}}">La Plaza</a>
                                        <div class="sep"></div>
                                        <p>Luanda, Camama</p>

                                    </div>
                                    <div class="extras">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="price">2.000,00 Kz</p>
                                    </div>
                                </div>
                            </div>

                            <div class="card-pratos" id="cardone">
                                <img src="{{ asset('assets/images/qd (13).png') }}" alt="">
                                <div class="info">
                                    <div class="acima">
                                        <div class="spans">
                                            <span class='tagincolhe pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='tagincolhe freeshipping'><i class='bx bxs-badge-check'></i>
                                                Entrega</span>
                                        </div>
                                        <div class="cta">
                                            <i class='bx bx-cart-add'></i>
                                            <a href="#" class="btn-principal">Comprar</a>
                                        </div>
                                    </div>
                                    <h3>Churrasco</h3>
                                    <div class="description">
                                        <a href="{{route('companyProfile')}}">La Plaza</a>
                                        <div class="sep"></div>
                                        <p>Luanda, Camama</p>

                                    </div>
                                    <div class="extras">
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                        <p class="price">2.000,00 Kz</p>
                                    </div>
                                </div>
                            </div>

                        </div>

                    </div>
                    <span class="swiper-botoes">
                        <div class="swiper-button-prev"></div>
                        <div class="swiper-button-next"></div>
                    </span>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <script>
            mapboxgl.accessToken =
                'pk.eyJ1IjoiaGVybWluaW9vZmljaWFsIiwiYSI6ImNtOWQyNjZvcjBwN3Eya3NhdjF0N2ttcnIifQ.AunZIxwvqCp75A_Ud4BOsw';

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


        <!--==================================== LOCAIS DE LAZER ==================================== -->
        <section class="locais">
            <h2>Toda diversidade gastronômica</h2>
            <div class="content">
                <a href="{{ route('dashboard') }}" class="link-card">
                    <img src="{{ asset('/assets/images/qd new (1).png') }}" alt="Roulote">
                    <h3>Roulotes</h3>
                </a>
                <a href="#" class="link-card">
                    <img src="{{ asset('/assets/images/qd (13).png') }}" alt="Churrascarias">
                    <h3>Churrascarias</h3>
                </a>
                <a href="#" class="link-card">
                    <img src="{{ asset('/assets/images/qd (12).png') }}" alt="Bares">
                    <h3>Bares</h3>
                </a>
                <a href="#" class="link-card">
                    <img src="{{ asset('/assets/images/qd (11).png') }}" alt="Restaurantes">
                    <h3>Restaurantes</h3>
                </a>
            </div>
            <a href="resources/views/explorar.html" class="btn-principal">Explorar Mais</a>
        </section>

        <section class="cadastro-locais">
            <div class="content">
                <h2>Junta-se à Nossa Plataforma</h2>

                <p>Explore uma seleção exclusiva de restaurantes, bares e locais de lazer em Luanda. E para você,
                    empreendedor, encontre o lugar perfeito para o seu <strong>Biolo</strong> aqui na Kino Angola.
                    Inscreva-se agora
                    mesmo e saiba tudo que podemos proporcionar para si!</p>
            </div>

            @if (Route::has('login'))
                @auth
                    <img src="{{ asset('/assets/images/vetc (1).jpg') }}" width="270px" height="270px" alt="Logado">
                @else
                    <form action="{{ route('register') }}" method="POST">
                        @csrf
                        <h3>Registrar-se</h3>
                        <hr>
                        <!-- Name -->
                        <div>
                            <x-text-input placeholder="Nome" id="name" class="block w-full" type="text"
                                name="name" :value="old('name')" required autofocus autocomplete="name" />
                            <x-input-error :messages="$errors->get('name')" class="mt-2" />
                        </div>

                        <!-- Email Address -->
                        <div class="mt-1">
                            <x-text-input placeholder="E-mail" id="email" class="block w-full" type="email"
                                name="email" :value="old('email')" required autocomplete="username" />
                            <x-input-error :messages="$errors->get('email')" class="mt-2" />
                        </div>

                        <!-- Password -->
                        <div class="mt-1">

                            <x-text-input placeholder="Senha" id="password" class="block w-full" type="password"
                                name="password" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div class="mt-1">

                            <x-text-input placeholder="Confirmar senha" id="password_confirmation" class="block w-full"
                                type="password" name="password_confirmation" required autocomplete="new-password" />

                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>
                        <input type="submit" value="Criar Conta" class="btn-principal">

                        <a class="underline text-sm hover:text-oange-600 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-orange-500"
                            href="{{ route('login') }}">
                            {{ __('Already registered?') }}
                        </a>
                    </form>

                ​ @endauth
            @endif

        </section>

    </main>
@endsection

{{-- 

@extends('layouts.main')

@section('links-head')
    <!-- Scripts -->
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
@endsection


@section('content')
@endsection


 --}}
