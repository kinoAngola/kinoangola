@extends('layouts.main')

@section('links-head')

    <!-- Scripts -->
    @vite(['resources/scss/companyProfile.scss', 'resources/js/companyProfile.js'])

@endsection
@section('content')




{{-- <div>
    <h1>{{ Auth::user()->name }}</h1>
    <a href="{{route('home')}}">Página Inicial</a>
    <form method="POST" action="{{ route('logout') }}">
        @csrf

        <x-dropdown-link :href="route('logout')"
                onclick="event.preventDefault();
                            this.closest('form').submit();">
            {{ __('Log Out') }}
        </x-dropdown-link>
    </form>
</div>
 --}}


 <div class="perfil-business">
    <div class="profile-container">
        <!-- Foto de Capa -->
        <div class="cover-perfil">
            <input type="file" id="cover-perfil-input" accept="image/*" style="display:none"
                onchange="changeCoverPhoto(event)">
            <button class="change-cover-btn" onclick="document.getElementById('cover-perfil-input').click()">Alterar
                Foto de Capa</button>
            <img id="cover-perfil" src="{{asset('/assets/images/food (7).jpg')}}" alt="Foto de Capa">
        </div>

        <!-- Foto de Perfil -->
        <div class="profile-photo-container">
            <input type="file" id="profile-photo-input" accept="image/*" style="display:none"
                onchange="changeProfilePhoto(event)">
            <button class="change-profile-btn"
                onclick="document.getElementById('profile-photo-input').click()">Alterar Foto de Perfil</button>
            <img id="profile-photo" src="{{asset('/assets/images/logomarca/Kino Logo (1).png')}}" alt="Foto de Perfil">
        </div>

        <!-- Detalhes do Perfil -->
        <div class="profile-details">
            <h1 id="user-name">Nome da Empresa</h1>
            <p id="user-gustos">Área de atuação</p>
            <p id="user-followers">Localização</p>
        </div>
    </div>
</div>

<div class="container-profile">

    <aside>
        <nav class="menu">
            <h2>Atividades</h2>
            <ul>
                <li><a href="#menu">Cardápio</a></li>
                <li><a href="#recomendacoes">Favoritos</a></li>
                <li><a href="#recomendacoes">Recomendações</a></li>
                <li><a href="booking.html">Reservas</a></li>
                <li><a href="#testimonials">Testemunhos</a></li>
                <li><a href="#about">Sobre Mim</a></li>
                <li><a href="#contact">Contato</a></li>
                <li><a href="#partners">Parcerias</a></li>
                <li><a href="#blog">Blog</a></li>
                <li><a href="#policies">Políticas</a></li>
            </ul>
        </nav>
    </aside>
    <main>
        <span id="menu"></span>
        <section  class="section">
            <h2>Cardápio</h2>

            <div class="section-item">

                <div class="menu-item">
                    <img src="{{asset('/assets/images/qd (16).png')}}" alt="Prato Exemplo">
                    <div>
                        <h3>Nome do Prato</h3>
                        <p>Preço: 5.000 Kz</p>
                        <p class="lastone">Entrega: Gratuita</p>
                        <p>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </p>
                    </div>
                </div>

                <div class="menu-item">
                    <img src="{{asset('/assets/images/qd (16).png')}}" alt="Prato Exemplo">
                    <div>
                        <h3>Nome do Prato</h3>
                        <p>Preço: 5.000 Kz</p>
                        <p class="lastone">Entrega: Gratuita</p>
                        <p>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </p>
                    </div>
                </div>

                <div class="menu-item">
                    <img src="{{asset('/assets/images/qd (16).png')}}" alt="Prato Exemplo">
                    <div>
                        <h3>Nome do Prato</h3>
                        <p>Preço: 5.000 Kz</p>
                        <p class="lastone">Entrega: Gratuita</p>
                        <p>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </p>
                    </div>
                </div>

                <div class="menu-item">
                    <img src="{{asset('/assets/images/qd (16).png')}}" alt="Prato Exemplo">
                    <div>
                        <h3>Nome do Prato</h3>
                        <p>Preço: 5.000 Kz</p>
                        <p class="lastone">Entrega: Gratuita</p>
                        <p>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </p>
                    </div>
                </div>

                <div class="menu-item">
                    <img src="{{asset('/assets/images/qd (16).png')}}" alt="Prato Exemplo">
                    <div>
                        <h3>Nome do Prato</h3>
                        <p>Preço: 5.000 Kz</p>
                        <p class="lastone">Entrega: Gratuita</p>
                        <p>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </p>
                    </div>
                </div>

                <div class="menu-item">
                    <img src="{{asset('/assets/images/qd (16).png')}}" alt="Prato Exemplo">
                    <div>
                        <h3>Nome do Prato</h3>
                        <p>Preço: 5.000 Kz</p>
                        <p class="lastone">Entrega: Gratuita</p>
                        <p>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </p>
                    </div>
                </div>

                <div class="menu-item">
                    <img src="{{asset('/assets/images/qd (16).png')}}" alt="Prato Exemplo">
                    <div>
                        <h3>Nome do Prato</h3>
                        <p>Preço: 5.000 Kz</p>
                        <p class="lastone">Entrega: Gratuita</p>
                        <p>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </p>
                    </div>
                </div>

                <div class="menu-item">
                    <img src="{{asset('/assets/images/qd (16).png')}}" alt="Prato Exemplo">
                    <div>
                        <h3>Nome do Prato</h3>
                        <p>Preço: 5.000 Kz</p>
                        <p class="lastone">Entrega: Gratuita</p>
                        <p>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star'></i>
                            <i class='bx bxs-star-half'></i>
                        </p>
                    </div>
                </div>

            </div>

        </section>

        <section id="about" class="section">
            <h2>Sobre o Estabelecimento</h2>
            <p>Histórico e descrição detalhada do local.</p>
        </section>

        <section id="testimonials" class="section">
            <h2>Testemunhos</h2>
            <p>"Melhor restaurante da cidade!" - Cliente Feliz</p>
        </section>

        <section id="contact" class="section">
            <h2>Formulário de Contato</h2>
            <form>
                <input type="text" placeholder="Nome" required>
                <input type="email" placeholder="Email" required>
                <textarea placeholder="Mensagem" required></textarea>
                <button type="submit">Enviar</button>
            </form>
        </section>
    </main>


</div>




@endsection
