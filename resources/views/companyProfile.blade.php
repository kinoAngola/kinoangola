@extends('layouts.main')

@section('links-head')
    <!-- Scripts -->
    @vite(['resources/scss/companyProfile.scss', 'resources/js/companyProfile.js'])
@endsection
@section('content')

    <div class="perfil-business">
        <div class="profile-container">
            <!-- Foto de Capa -->
            <div class="cover-perfil">
                <input type="file" id="cover-perfil-input" accept="image/*" style="display:none"
                    onchange="changeCoverPhoto(event)">
                <button class="change-cover-btn" onclick="document.getElementById('cover-perfil-input').click()">Alterar
                    Foto de Capa</button>
                <img id="cover-perfil" src="{{ asset('/assets/images/food (7).jpg') }}" alt="Foto de Capa">
            </div>

            <!-- Foto de Perfil -->
            <div class="profile-photo-container">
                <input type="file" id="profile-photo-input" accept="image/*" style="display:none"
                    onchange="changeProfilePhoto(event)">
                <button class="change-profile-btn" onclick="document.getElementById('profile-photo-input').click()">Alterar
                    Foto de Perfil</button>
                <img id="profile-photo" src="{{ asset('/assets/images/logomarca/domb.jpg') }}" alt="Foto de Perfil">
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
            <section class="section">
                <h2>Cardápio</h2>

                <div class="section-item">

                    <div class="menu-item">
                        <img src="{{ asset('/assets/images/qd (16).png') }}" alt="Prato Exemplo">
                        <div>
                            <h3>Miojo dos Pais Grande</h3>
                            <p>Preço: 5.000 Kz</p>

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
                        <img src="{{ asset('/assets/images/qd (16).png') }}" alt="Prato Exemplo">
                        <div>
                            <h3>Nome do Prato</h3>
                            <p>Preço: 5.000 Kz</p>

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
                        <img src="{{ asset('/assets/images/qd (16).png') }}" alt="Prato Exemplo">
                        <div>
                            <h3>Nome do Prato</h3>
                            <p>Preço: 5.000 Kz</p>

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
                        <img src="{{ asset('/assets/images/qd (16).png') }}" alt="Prato Exemplo">
                        <div>
                            <h3>Frango na Brasa da Tia Celeste</h3>
                            <p>Preço: 5.000 Kz</p>

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
                        <img src="{{ asset('/assets/images/qd (16).png') }}" alt="Prato Exemplo">
                        <div>
                            <h3>Nome do Prato</h3>
                            <p>Preço: 5.000 Kz</p>

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
                        <img src="{{ asset('/assets/images/qd (16).png') }}" alt="Prato Exemplo">
                        <div>
                            <h3>Nome do Prato</h3>
                            <p>Preço: 5.000 Kz</p>

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
                        <img src="{{ asset('/assets/images/qd (16).png') }}" alt="Prato Exemplo">
                        <div>
                            <h3>Nome do Prato</h3>
                            <p>Preço: 5.000 Kz</p>

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
                        <img src="{{ asset('/assets/images/qd (16).png') }}" alt="Prato Exemplo">
                        <div>
                            <h3>Nome do Prato</h3>
                            <p>Preço: 5.000 Kz</p>

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
                <p>
                    Criado com paixão pela cultura angolana e dedicação à excelência, nosso restaurante se tornou muito mais
                    que um espaço para refeições – somos o destino preferido para momentos inesquecíveis.
                    <br>
                    <br>
                    <strong>🍴Venha saborear, relaxar e celebrar</strong>
                    <br>
                    Estamos aqui para oferecer a você momentos de pura alegria, seja com amigos, família ou uma experiência
                    solo.
                    <br> <br>
                    Não esqueça de compartilhar sua visita!
                    
                    Use a hashtag <span class="text-blue-800 font-semibold cursor-pointer hover:underline">#dombaxidelicious</span> e mostre ao mundo como se diverte no melhor ponto de lazer de
                    Angola.
                    <br>
                    🌐 www.dombaxidelicious.ao
                    <br>
                    📍 Luanda, Belas, Topo do Camama 1.

                </p>
            </section>

            <section id="testimonials" class="section">
                <h2>Testemunhos</h2>

                <div class="swiper testmonials">
                    <div class="swiper-wrapper">

                        <div class="swiper-slide">
                            <div class="card">
                                <div class="avs">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <div class="comment">
                                    <p>
                                        “A Kino Angola ajudou meu negócio a crescer e atrair novos clientes.”</p>
                                </div>
                                <div class="profile-user">
                                    <img src="{{ asset('/assets/images/qd (21).png') }}" alt="User Photo">
                                    <div class="desc">
                                        <p class="name">Nome do User</p>
                                        <p class="username">@username</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="card">
                                <div class="avs">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                </div>
                                <div class="comment">
                                    <p>
                                        “A plataforma é super intuitiva e cheia de opções incríveis. Principalmente a
                                        Dombaxi Delicious que nos enche de felcidade com os seus pratos maravilhosos”</p>
                                </div>
                                <div class="profile-user">
                                    <img src="{{ asset('/assets/images/qd (21).png') }}" alt="User Photo">
                                    <div class="desc">
                                        <p class="name">Nome do User</p>
                                        <p class="username">@username</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="card">
                                <div class="avs">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <div class="comment">
                                    <p>
                                        “Eu era das barracas... Até conhecer a Kino Angola, e dentro dela a Dombaxi
                                        Delicious😭. Agora eu sou uma novo homem, transformado com o camarão incrível que
                                        esse estabelecmento tem à oferecer ao mundo”</p>
                                </div>
                                <div class="profile-user">
                                    <img src="{{ asset('/assets/images/qd (21).png') }}" alt="User Photo">
                                    <div class="desc">
                                        <p class="name">Nome do User</p>
                                        <p class="username">@username</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="card">
                                <div class="avs">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                </div>
                                <div class="comment">
                                    <p>
                                        “Este tal Camarão com Molho Soquês me fez perder a fala😭! É muita gostosura para um
                                        só prato😍. Mana Dombaxi vem só pra te meter no colo😭👌”</p>
                                </div>
                                <div class="profile-user">
                                    <img src="{{ asset('/assets/images/qd (21).png') }}" alt="User Photo">
                                    <div class="desc">
                                        <p class="name">Nome do User</p>
                                        <p class="username">@username</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="card">
                                <div class="avs">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                                <div class="comment">
                                    <p>
                                        “Adorei❤️ Tava incrível!”</p>
                                </div>
                                <div class="profile-user">
                                    <img src="{{ asset('/assets/images/qd (21).png') }}" alt="User Photo">
                                    <div class="desc">
                                        <p class="name">Nome do User</p>
                                        <p class="username">@username</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="card">
                                <div class="avs">
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star'></i>
                                    <i class='bx bxs-star-half'></i>
                                </div>
                                <div class="comment">
                                    <p>
                                        Educados, simpáticos, local organizado, bonito e bem cheiroso. Tanto com o cheiro da
                                        comida quanto com o difusor. Da comida nem se fala, estava uma maravilha. O folar
                                        estava no pooooooooooooooooooooonto!❤️‍🔥”</p>
                                </div>
                                <div class="profile-user">
                                    <img src="{{ asset('/assets/images/qd (21).png') }}" alt="User Photo">
                                    <div class="desc">
                                        <p class="name">Nome do User</p>
                                        <p class="username">@username</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="card">
                                <div class="avs">
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                                <div class="comment">
                                    <p>
                                        “Agora encontro os melhores restaurantes na minha área com facilidade!”</p>
                                </div>
                                <div class="profile-user">
                                    <img src="{{ asset('/assets/images/qd (21).png') }}" alt="User Photo">
                                    <div class="desc">
                                        <p class="name">Nome do User</p>
                                        <p class="username">@username</p>
                                    </div>
                                </div>
                            </div>
                        </div>


                        <div class="swiper-slide">
                            <div class="card">
                                <div class="avs">
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                    <i class='bx bx-star'></i>
                                </div>
                                <div class="comment">
                                    <p>
                                        "Lorem ipsum dolor sit amet consectetur adipisicing elit. Recusandae, dolore at
                                        voluptas accusantium tempora Laborum, ratione ut."</p>
                                </div>
                                <div class="profile-user">
                                    <img src="{{ asset('/assets/images/qd (21).png') }}" alt="User Photo">
                                    <div class="desc">
                                        <p class="name">Nome do User</p>
                                        <p class="username">@username</p>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </section>

            <section id="contact" class="section">
                <h2>Formulário de Contato</h2>
                <form>
                    <input type="text" placeholder="Nome" required>
                    <input type="email" placeholder="Email" required>
                    <textarea placeholder="Mensagem" required></textarea>
                    <button type="submit" class="btn-principal">Enviar</button>
                </form>
            </section>
        </main>


    </div>
@endsection
