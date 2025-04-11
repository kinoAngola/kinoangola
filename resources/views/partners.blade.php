@extends('layouts.main')

@section('links-head')

    <!-- Scripts -->
    @vite(['resources/scss/partners.scss', 'resources/js/partners.js'])

@endsection
@section('content')



    <section id="benefits">
        <div class="pt-16"></div>
        <h1 class="title pt-14">Vantagens de ser um(a) Kino Partner</h1>
        <div class="benefit-item">
            <img src="{{asset('assets/images/vetc (1).jpg')}}" alt="">
            <div class="content right">
                <h2>Maior visibilidade no mercado</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti laudantium quaerat vitae
                    cumque sit. Modi ex voluptas fugit facilis dolor deserunt. Necessitatibus eveniet provident
                    dolorum fuga enim aspernatur libero maxime.</p>
            </div>
        </div>
        <div class="benefit-item" id="alcance">
            <div class="content left">
                <h2>Alcance clientes ideais com precisão</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti laudantium quaerat vitae
                    cumque sit. Modi ex voluptas fugit facilis dolor deserunt. Necessitatibus eveniet provident
                    dolorum fuga enim aspernatur libero maxime.</p>
            </div>
            <img src="{{asset('/assets/images/vecta.jpg')}}" alt="">
        </div>
        <div class="benefit-item">
            <img src="{{asset('/assets/images/vetc (2).png')}}" alt="">
            <div class="content right">
                <h2>Ferramentas de gestão avançadas</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti laudantium quaerat vitae
                    cumque sit. Modi ex voluptas fugit facilis dolor deserunt. Necessitatibus eveniet provident
                    dolorum fuga enim aspernatur libero maxime.</p>
            </div>
        </div>
        <div class="benefit-item" id="support">
            <div class="content left">
                <h2>Suporte especializado e dedicado</h2>
                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Deleniti laudantium quaerat vitae
                    cumque sit. Modi ex voluptas fugit facilis dolor deserunt. Necessitatibus eveniet provident
                    dolorum fuga enim aspernatur libero maxime.</p>
            </div>
            <img src="{{asset('/assets/images/vetc (3).png')}}" alt="">
        </div>
    </section>

    <section id="testimonials">
        <h1>O que nossos parceiros dizem</h1>
        <!-- Swiper -->
        <div class="swiper testimonials-partners">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="content">
                        <div class="person">
                            <img src="https://swiperjs.com/demos/images/nature-1.jpg" />
                            <div class="details">
                                <h3>Nome Do Parceiro</h3>
                                <p>@username</p>
                            </div>
                        </div>
                        <div class="comments">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt
                            blanditiis optio sunt aliquid suscipit reiciendis recusandae nobis perferendis nemo
                        </div>
                        <div class="avs">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content">
                        <div class="person">
                            <img src="https://swiperjs.com/demos/images/nature-2.jpg" />
                            <div class="details">
                                <h3>Nome Do Parceiro</h3>
                                <p>@username</p>
                            </div>
                        </div>
                        <div class="comments">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt
                            blanditiis optio sunt aliquid suscipit reiciendis recusandae nobis perferendis nemo
                        </div>
                        <div class="avs">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content">
                        <div class="person">
                            <img src="https://swiperjs.com/demos/images/nature-3.jpg" />
                            <div class="details">
                                <h3>Nome Do Parceiro</h3>
                                <p>@username</p>
                            </div>
                        </div>
                        <div class="comments">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt
                            blanditiis optio sunt aliquid suscipit reiciendis recusandae nobis perferendis nemo
                        </div>
                        <div class="avs">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content">
                        <div class="person">
                            <img src="https://swiperjs.com/demos/images/nature-4.jpg" />
                            <div class="details">
                                <h3>Nome Do Parceiro</h3>
                                <p>@username</p>
                            </div>
                        </div>
                        <div class="comments">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt
                            blanditiis optio sunt aliquid suscipit reiciendis recusandae nobis perferendis nemo
                        </div>
                        <div class="avs">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content">
                        <div class="person">
                            <img src="https://swiperjs.com/demos/images/nature-5.jpg" />
                            <div class="details">
                                <h3>Nome Do Parceiro</h3>
                                <p>@username</p>
                            </div>
                        </div>
                        <div class="comments">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt
                            blanditiis optio sunt aliquid suscipit reiciendis recusandae nobis perferendis nemo
                        </div>
                        <div class="avs">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="content">
                        <div class="person">
                            <img src="https://swiperjs.com/demos/images/nature-6.jpg" />
                            <div class="details">
                                <h3>Nome Do Parceiro</h3>
                                <p>@username</p>
                            </div>
                        </div>
                        <div class="comments">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Deserunt
                            blanditiis optio sunt aliquid suscipit reiciendis recusandae nobis perferendis nemo
                        </div>
                        <div class="avs">
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                            <i class='bx bxs-star' ></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </section>

    <section id="signup">
        <h1>Cadastre seu estabelecimento</h1>
        <form id="signup-form">
            <label for="name">Nome do Estabelecimento:</label>
            <input type="text" id="name" required placeholder="Empresa">

            <label for="email">E-mail:</label>
            <input type="email" id="email" required placeholder="Empresa@domínio.com">

            <label for="phone">Telefone:</label>
            <input type="tel" id="phone" required placeholder="9xxxxxxxx">

            <button type="submit" class="btn-principal">Quero ser parceiro</button>
        </form>
    </section>


@endsection
