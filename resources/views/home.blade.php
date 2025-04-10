@extends('layouts.main')

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
                    <h3>Variedade Gastronômica</h3>
                    <p>Desde pratos tradicionais a experiências gastronômicas exclusivas.</p>
                </div>
                <div class="service-card">
                    <i class='bx bx-package'></i>
                    <h3>Receba em Casa</h3>
                    <p>Faça seus pedidos online e receba no conforto da sua casa.</p>
                </div>
                <div class="service-card">
                    <i class='bx bx-wallet'></i>
                    <h3>Pagamentos Seguros</h3>
                    <p>Diversas opções de pagamento em um sistema robusto e seguro.</p>
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
                            <i class='bx bx-heart'></i>
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
                                        <p class="text-orange-600 font-semibold text-xl justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churrasco na Brasa</h3>
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
                            <i class='bx bx-heart'></i>
                            <img src="{{ asset('/assets/images/qd (13).png') }}" alt="">
                            <div class="info">
                                <div class="part-above">
                                    <h3>Churrasco na Brasa</h3>
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
                                        <div class="avaliacoes">
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                            <i class='bx bxs-star'></i>
                                        </div>
                                    </div>
                                    <div class="first1">
                                    </div>
                                </div>
                                <div class="cta">
                                    <a href="#" class="btn-principal">Comprar</a>
                                    <p class="text-orange-600 font-semibold text-xl justify-self-end p-1 border rounded-md border-orange-600">2.000,00 Kz</p>
                                </div>
                            </div>
                        </div>

                    </div>

                    <div class="swiper-slide">

                        <div class="card-pratos">
                            <i class='bx bx-heart'></i>
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
                                        <p class="text-orange-600 font-semibold text-xl justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churrasco na Brasa</h3>
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
                            <i class='bx bx-heart'></i>
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
                                        <p class="text-orange-600 font-semibold text-xl justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churrasco na Brasa</h3>
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
                            <i class='bx bx-heart'></i>
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
                                        <p class="text-orange-600 font-semibold text-xl justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churrasco na Brasa</h3>
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
                            <i class='bx bx-heart'></i>
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
                                        <p class="text-orange-600 font-semibold text-xl justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churrasco na Brasa</h3>
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
                            <i class='bx bx-heart'></i>
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
                                        <p class="text-orange-600 font-semibold text-xl justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churrasco na Brasa</h3>
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
                            <i class='bx bx-heart'></i>
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
                                        <p class="text-orange-600 font-semibold text-xl justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churrasco na Brasa</h3>
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
                            <i class='bx bx-heart'></i>
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
                                        <p class="text-orange-600 font-semibold text-xl justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churrasco na Brasa</h3>
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
                            <i class='bx bx-heart'></i>
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
                                        <p class="text-orange-600 font-semibold text-xl justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churrasco na Brasa</h3>
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
                            <i class='bx bx-heart'></i>
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
                                        <p class="text-orange-600 font-semibold text-xl justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churrasco na Brasa</h3>
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
                            <i class='bx bx-heart'></i>
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
                                        <p class="text-orange-600 font-semibold text-xl justify-self-end">2.000,00 Kz</p>
                                    </div>
                                    <h3>Churrasco na Brasa</h3>
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
            <div class="swiper EmpresasSwiper">
                <h2>Os que dedicam-se, merecem destaque!</h2>
                <div class="swiper-wrapper">
                    <div class="swiper-slide">
                        <div class="swiper-slide">
                            <a href="resources/views/profile.html" class="emp-link"><img
                                    src="{{ asset('/assets/images/logomarca/logoo.jpg') }}" alt="businesses"></a>
                            <h3>Kino Angola</h3>
                            <div class="info">
                                <p>Restaurante</p>
                                <p>, Luanda</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <a href="resources/views/profile.html" class="emp-link"><img
                                    src="{{ asset('/assets/images/logomarca/logoo.jpg') }}" alt="businesses"></a>
                            <h3>Kino Angola</h3>
                            <div class="info">
                                <p>Restaurante</p>
                                <p>, Luanda</p>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="swiper-slide">
                                <a href="resources/views/profile.html" class="emp-link"><img
                                        src="{{ asset('/assets/images/logomarca/logoo.jpg') }}" alt="businesses"></a>
                                <h3>Kino Angola</h3>
                                <div class="info">
                                    <p>Restaurante</p>
                                    <p>, Luanda</p>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="swiper-slide">
                                    <a href="resources/views/profile.html" class="emp-link"><img
                                            src="{{ asset('/assets/images/logomarca/logoo.jpg') }}" alt="businesses"></a>
                                    <h3>Kino Angola</h3>
                                    <div class="info">
                                        <p>Restaurante</p>
                                        <p>, Luanda</p>
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="swiper-slide">
                                        <a href="resources/views/profile.html" class="emp-link"><img
                                                src="{{ asset('/assets/images/logomarca/logoo.jpg') }}"
                                                alt="businesses"></a>
                                        <h3>Kino Angola</h3>
                                        <div class="info">
                                            <p>Restaurante</p>
                                            <p>, Luanda</p>
                                        </div>
                                    </div>
                                    <div class="swiper-slide">
                                        <div class="swiper-slide">
                                            <a href="resources/views/profile.html" class="emp-link"><img
                                                    src="{{ asset('/assets/images/logomarca/logoo.jpg') }}"
                                                    alt="businesses"></a>
                                            <h3>Kino Angola</h3>
                                            <div class="info">
                                                <p>Restaurante</p>
                                                <p>, Luanda</p>
                                            </div>
                                        </div>
                                        <div class="swiper-slide">
                                            <div class="swiper-slide">
                                                <a href="resources/views/profile.html" class="emp-link"><img
                                                        src="{{ asset('/assets/images/logomarca/logoo.jpg') }}"
                                                        alt="businesses"></a>
                                                <h3>Kino Angola</h3>
                                                <div class="info">
                                                    <p>Restaurante</p>
                                                    <p>, Luanda</p>
                                                </div>
                                            </div>
                                            <div class="swiper-slide">
                                                <div class="swiper-slide">
                                                    <a href="resources/views/profile.html" class="emp-link"><img
                                                            src="{{ asset('/assets/images/logomarca/logoo.jpg') }}"
                                                            alt="businesses"></a>
                                                    <h3>Kino Angola</h3>
                                                    <div class="info">
                                                        <p>Restaurante</p>
                                                        <p>, Luanda</p>
                                                    </div>
                                                </div>
                                                <div class="swiper-slide">
                                                    <div class="swiper-slide">
                                                        <a href="resources/views/profile.html" class="emp-link"><img
                                                                src="{{ asset('/assets/images/logomarca/logoo.jpg') }}"
                                                                alt="businesses"></a>
                                                        <h3>Kino Angola</h3>
                                                        <div class="info">
                                                            <p>Restaurante</p>
                                                            <p>, Luanda</p>
                                                        </div>
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
                                <img src="public/assets/images/qd (13).png" alt="">
                                <div class="info">
                                    <div class="acima">
                                        <div class="spans">
                                            <span class='tagincolhe pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='tagincolhe freeshipping'><i class='bx bxs-badge-check'></i>
                                                Entrega</span>
                                        </div>
                                        <div class="cta">
                                            <i class='bx bx-cart-add'></i>
                                            <a href="#" class="btn-p-2">Comprar</a>
                                        </div>
                                    </div>
                                    <h3>Churrasco</h3>
                                    <div class="description">
                                        <p>La Plaza</p>
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
                                <img src="public/assets/images/qd (13).png" alt="">
                                <div class="info">
                                    <div class="acima">
                                        <div class="spans">
                                            <span class='tagincolhe pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='tagincolhe freeshipping'><i class='bx bxs-badge-check'></i>
                                                Entrega</span>
                                        </div>
                                        <div class="cta">
                                            <i class='bx bx-cart-add'></i>
                                            <a href="#" class="btn-p-2">Comprar</a>
                                        </div>
                                    </div>
                                    <h3>Churrasco</h3>
                                    <div class="description">
                                        <p>La Plaza</p>
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
                                <img src="public/assets/images/qd (13).png" alt="">
                                <div class="info">
                                    <div class="acima">
                                        <div class="spans">
                                            <span class='tagincolhe pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='tagincolhe freeshipping'><i class='bx bxs-badge-check'></i>
                                                Entrega</span>
                                        </div>
                                        <div class="cta">
                                            <i class='bx bx-cart-add'></i>
                                            <a href="#" class="btn-p-2">Comprar</a>
                                        </div>
                                    </div>
                                    <h3>Churrasco</h3>
                                    <div class="description">
                                        <p>La Plaza</p>
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
                                <img src="public/assets/images/qd (13).png" alt="">
                                <div class="info">
                                    <div class="acima">
                                        <div class="spans">
                                            <span class='tagincolhe pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='tagincolhe freeshipping'><i class='bx bxs-badge-check'></i>
                                                Entrega</span>
                                        </div>
                                        <div class="cta">
                                            <i class='bx bx-cart-add'></i>
                                            <a href="#" class="btn-p-2">Comprar</a>
                                        </div>
                                    </div>
                                    <h3>Churrasco</h3>
                                    <div class="description">
                                        <p>La Plaza</p>
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
                                <img src="public/assets/images/qd (13).png" alt="">
                                <div class="info">
                                    <div class="acima">
                                        <div class="spans">
                                            <span class='tagincolhe pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='tagincolhe freeshipping'><i class='bx bxs-badge-check'></i>
                                                Entrega</span>
                                        </div>
                                        <div class="cta">
                                            <i class='bx bx-cart-add'></i>
                                            <a href="#" class="btn-p-2">Comprar</a>
                                        </div>
                                    </div>
                                    <h3>Churrasco</h3>
                                    <div class="description">
                                        <p>La Plaza</p>
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
                                <img src="public/assets/images/qd (13).png" alt="">
                                <div class="info">
                                    <div class="acima">
                                        <div class="spans">
                                            <span class='tagincolhe pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='tagincolhe freeshipping'><i class='bx bxs-badge-check'></i>
                                                Entrega</span>
                                        </div>
                                        <div class="cta">
                                            <i class='bx bx-cart-add'></i>
                                            <a href="#" class="btn-p-2">Comprar</a>
                                        </div>
                                    </div>
                                    <h3>Churrasco</h3>
                                    <div class="description">
                                        <p>La Plaza</p>
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
                                <img src="public/assets/images/qd (13).png" alt="">
                                <div class="info">
                                    <div class="acima">
                                        <div class="spans">
                                            <span class='tagincolhe pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='tagincolhe freeshipping'><i class='bx bxs-badge-check'></i>
                                                Entrega</span>
                                        </div>
                                        <div class="cta">
                                            <i class='bx bx-cart-add'></i>
                                            <a href="#" class="btn-p-2">Comprar</a>
                                        </div>
                                    </div>
                                    <h3>Churrasco</h3>
                                    <div class="description">
                                        <p>La Plaza</p>
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
                                <img src="public/assets/images/qd (13).png" alt="">
                                <div class="info">
                                    <div class="acima">
                                        <div class="spans">
                                            <span class='tagincolhe pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='tagincolhe freeshipping'><i class='bx bxs-badge-check'></i>
                                                Entrega</span>
                                        </div>
                                        <div class="cta">
                                            <i class='bx bx-cart-add'></i>
                                            <a href="#" class="btn-p-2">Comprar</a>
                                        </div>
                                    </div>
                                    <h3>Churrasco</h3>
                                    <div class="description">
                                        <p>La Plaza</p>
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
                                <img src="public/assets/images/qd (13).png" alt="">
                                <div class="info">
                                    <div class="acima">
                                        <div class="spans">
                                            <span class='tagincolhe pop'><i class='bx bxs-crown'></i> Popular</span>
                                            <span class='tagincolhe freeshipping'><i class='bx bxs-badge-check'></i>
                                                Entrega</span>
                                        </div>
                                        <div class="cta">
                                            <i class='bx bx-cart-add'></i>
                                            <a href="#" class="btn-p-2">Comprar</a>
                                        </div>
                                    </div>
                                    <h3>Churrasco</h3>
                                    <div class="description">
                                        <p>La Plaza</p>
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

        <!--==================================== LOCAIS DE LAZER ==================================== -->
        <section class="locais">
            <h2>Toda diversidade gastronômica</h2>
            <div class="content">
                <a href="#" class="link-card">
                    <img src="public/assets/images/qd new (1).png" alt="Roulote">
                    <h3>Roulotes</h3>
                </a>
                <a href="#" class="link-card">
                    <img src="public/assets/images/qd (13).png" alt="Churrascarias">
                    <h3>Churrascarias</h3>
                </a>
                <a href="#" class="link-card">
                    <img src="public/assets/images/qd (12).png" alt="Bares">
                    <h3>Bares</h3>
                </a>
                <a href="#" class="link-card">
                    <img src="public/assets/images/qd (11).png" alt="Restaurantes">
                    <h3>Restaurantes</h3>
                </a>
            </div>
            <a href="resources/views/explorar.html" class="btn-p-2">Explorar Mais</a>
        </section>

        <section class="cadastro-locais">
            <div class="content">
                <h2>Junta-se à Nossa Plataforma</h2>

                <p>Explore uma seleção exclusiva de restaurantes, bares e locais de lazer em Luanda. E para você,
                    empreendedor, encontre o lugar perfeito para o seu <strong>Biolo</strong> aqui na Kino Angola.
                    Inscreva-se agora
                    mesmo e saiba tudo que podemos proporcionar para si!</p>
            </div>
            <form action="#">
                <h3>Registrar-se</h3>
                <hr>
                <input type="text" required placeholder="Nome da Empresa">
                <input type="text" required placeholder="Telefone">
                <input type="email" required placeholder="E-mail">
                <input type="password" required placeholder="Senha">
                <input type="submit" value="Criar Conta" class="btn-p-2">
                <div class="lembrar">
                    <input type="checkbox" name="remember" id="remember">
                    <label for="remember">Lembrar Senha</label>
                </div>

                <a href="resources/views/sign.html">Já tenho uma conta</a>
            </form>
        </section>

    </main>
@endsection
