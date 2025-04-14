@extends('layouts.main')

@section('links-head')
    <!-- Scripts -->
    @vite(['resources/scss/about.scss', 'resources/js/about.js'])
@endsection
@section('content')
    <main>
        <!-- Seção Perguntas Frequentes -->
        <section class="why-section">
            <div class="container">
                <h2>Por que escolher a Kino?</h2>
                <div class="answers">

                    <h3>Facilidade na busca de estabelecimentos</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus repellat error eaque ratione
                        ea ex, eum quasi eos atque, nisi animi placeat magni maiores quia? Natus provident ipsum ea
                        beatae.</p>
                    <hr>
                    <h3>Promoção de micro e pequenos negócios</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus repellat error eaque ratione
                        ea ex, eum quasi eos atque, nisi animi placeat magni maiores quia? Natus provident ipsum ea
                        beatae.</p>

                    <hr>
                    <h3>Conexão direta entre clientes e empresas</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus repellat error eaque ratione
                        ea ex, eum quasi eos atque, nisi animi placeat magni maiores quia? Natus provident ipsum ea
                        beatae.</p>

                    <hr>
                    <h3>Plataforma intuitiva e moderna</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus repellat error eaque ratione
                        ea ex, eum quasi eos atque, nisi animi placeat magni maiores quia? Natus provident ipsum ea
                        beatae.</p>

                    <hr>
                    <h3>Geolocalização em tempo real</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus repellat error eaque ratione
                        ea ex, eum quasi eos atque, nisi animi placeat magni maiores quia? Natus provident ipsum ea
                        beatae.</p>

                    <hr>
                    <h3>Recomendações personalizadas</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus repellat error eaque ratione
                        ea ex, eum quasi eos atque, nisi animi placeat magni maiores quia? Natus provident ipsum ea
                        beatae.</p>

                    <hr>
                    <h3>Estatísticas e insights para negócios</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus repellat error eaque ratione
                        ea ex, eum quasi eos atque, nisi animi placeat magni maiores quia? Natus provident ipsum ea
                        beatae.</p>

                    <hr>
                    <h3>Comunidade engajada e ativa</h3>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus repellat error eaque ratione
                        ea ex, eum quasi eos atque, nisi animi placeat magni maiores quia? Natus provident ipsum ea
                        beatae.</p>
                </div>
            </div>
        </section>


        <section class="faq-section">
            <div class="container">
                <h2>Perguntas Frequentes</h2>
                
                <ul class="faq-list">
                    <li>
                        <input type="checkbox" name="acordeon" id="first">
                        <label for="first">
                            <span>1</span>
                            Nossa Proposta de Valor
                        </label>
                        <div class="resposta">

                            <h3>Facilidade na busca de estabelecimentos</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus repellat error eaque ratione
                                ea ex, eum quasi eos atque, nisi animi placeat magni maiores quia? Natus provident ipsum ea
                                beatae.</p>
                            <hr>
                            <h3>Promoção de micro e pequenos negócios</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus repellat error eaque ratione
                                ea ex, eum quasi eos atque, nisi animi placeat magni maiores quia? Natus provident ipsum ea
                                beatae.</p>

                            <hr>
                            <h3>Conexão direta entre clientes e empresas</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus repellat error eaque ratione
                                ea ex, eum quasi eos atque, nisi animi placeat magni maiores quia? Natus provident ipsum ea
                                beatae.</p>

                            <hr>
                            <h3>Plataforma intuitiva e moderna</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus repellat error eaque ratione
                                ea ex, eum quasi eos atque, nisi animi placeat magni maiores quia? Natus provident ipsum ea
                                beatae.</p>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" name="acordeon" id="second">
                        <label for="second">
                            <span>2</span>
                            O que nos torna únicos?
                        </label>
                        <div class="resposta">

                            <h3>Geolocalização em tempo real</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus repellat error eaque ratione
                                ea ex, eum quasi eos atque, nisi animi placeat magni maiores quia? Natus provident ipsum ea
                                beatae.</p>

                            <hr>
                            <h3>Recomendações personalizadas</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus repellat error eaque ratione
                                ea ex, eum quasi eos atque, nisi animi placeat magni maiores quia? Natus provident ipsum ea
                                beatae.</p>

                            <hr>
                            <h3>Estatísticas e insights para negócios</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus repellat error eaque ratione
                                ea ex, eum quasi eos atque, nisi animi placeat magni maiores quia? Natus provident ipsum ea
                                beatae.</p>

                            <hr>
                            <h3>Comunidade engajada e ativa</h3>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Minus repellat error eaque ratione
                                ea ex, eum quasi eos atque, nisi animi placeat magni maiores quia? Natus provident ipsum ea
                                beatae.</p>
                        </div>
                    </li>


                    <li>
                        <input type="checkbox" name="acordeon" id="third">
                        <label for="third">
                            <span>3</span>
                            Sobre a Empresa
                        </label>
                        <div class="resposta">
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem nesciunt ab
                                quibusdam eum
                                corporis architecto atque molestias ipsam ullam, necessitatibus eos non cumque voluptatem in
                                tenetur
                                facilis itaque repellat commodi.
                            </p>
                            <hr>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" name="acordeon" id="fourth">
                        <label for="fourth">
                            <span>4</span>
                            Sobre a Empresa
                        </label>
                        <div class="resposta">
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem nesciunt ab
                                quibusdam eum
                                corporis architecto atque molestias ipsam ullam, necessitatibus eos non cumque voluptatem in
                                tenetur
                                facilis itaque repellat commodi.
                            </p>
                            <hr>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" name="acordeon" id="fiveth">
                        <label for="fiveth">
                            <span>5</span>
                            Sobre a Empresa
                        </label>
                        <div class="resposta">
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem nesciunt ab
                                quibusdam eum
                                corporis architecto atque molestias ipsam ullam, necessitatibus eos non cumque voluptatem in
                                tenetur
                                facilis itaque repellat commodi.
                            </p>
                            <hr>
                        </div>
                    </li>

                    <li>
                        <input type="checkbox" name="acordeon" id="sixth">
                        <label for="sixth">
                            <span>6</span>
                            Sobre a Empresa
                        </label>
                        <div class="resposta">
                            <p>
                                Lorem, ipsum dolor sit amet consectetur adipisicing elit. Exercitationem nesciunt ab
                                quibusdam eum
                                corporis architecto atque molestias ipsam ullam, necessitatibus eos non cumque voluptatem in
                                tenetur
                                facilis itaque repellat commodi.
                            </p>
                            <hr>
                        </div>
                    </li>
                </ul>
                
            </div>
        </section>

        <!-- Seção Guia do Usuário -->
        <section class="guide-section">
            <div class="container">
                <h2>Guia do Usuário</h2>
                <p>Cliente:</p>
                <ol>
                    <li><a href="{{route('register')}}">Crie uma conta</a> para começar a explorar.</li>
                    <li><a href="{{route('login')}}">Faça Login</a> na sua conta.</li>
                    <li><a href="{{route('explore')}}">Explore</a> os pratos disponíveis.</li>
                    <li>Use a barra de pesquisa para localizar <a href="{{url('explorar/#empresas')}}">estabelecimentos</a> perto de você.</li>
                    <li>Filtre os resultados por categoria, tipo de cozinha, faixa de preço e muito mais!</li>
                    <li>Encomende um prato gostoso à seu critério.</li>
                    <li>Ou reserve sua mesa e desfrute da gastronomia.</li>
                </ol>
                <p>Estabelecimento:</p>
                <ol>
                    <li><a href="{{route('register')}}">Crie uma conta normal</a></li>
                    <li><a href="{{route('login')}}">Faça Login</a> na sua conta.</li>
                    <li><a href="{{url('parcerias/#signup')}}">Cadastra o seu Estabelecimento</a> na plataforma.</li>
                    <li><a href="{{route('companyProfile')}}">Vá no perfil</a> preencha todos dados do estabelecimento.</li>
                    <li>Após o cadastro, o estabelecimento será exibido para os usuários conforme o plano ativo.</li>
                    <li>Acesse o <a href="{{route('explore')}}">painel de controlo</a> para gerir o menu.</li>
                    <li><a href="{{url('explorar/#empresas')}}">Publicar</a> pratos com as informações de nome, descrição, foto, etc.</li>
                    <li>Posta nas mídias o link do seu perfil para que os teus seguidores possam encontrar-te na <a href="{{route('whykino')}}">Kino Angola</a></li>
                </ol>
            </div>
        </section>


        <!-- Seção Suporte ao Cliente -->
        <section class="support-section">
            <div class="container">
                <h2>Suporte ao Cliente</h2>
                <p>Se você tiver alguma dúvida ou precisar de ajuda, preencha o formulário abaixo e nossa equipe entrará em
                    contato.</p>
                <div class="content">
                    <img src="{{asset('/assets/images/vect-support.png')}}" alt="Foto support">
                    <form action="/send-support-request" method="POST">
                        @csrf
                        <label for="name">Nome:</label>
                        <input type="text" id="name" name="name" required>
    
                        <label for="email">E-mail:</label>
                        <input type="email" id="email" name="email" required>
    
                        <label for="message">Mensagem:</label>
                        <textarea id="message" name="message" required></textarea>
    
                        <button type="submit">Enviar</button>
                    </form>
                </div>
            </div>
        </section>


        <!-- Seção Termos e Privacidade -->
        <section class="terms-section">
            <div class="container">
                <h2>Termos e Privacidade</h2>
                <p>Leia nossos termos de uso e política de privacidade para entender como protegemos seus dados pessoais e
                    garantimos uma experiência segura.</p>
                <a href="/terms">Leia os Termos de Uso</a><br>
                <a href="/privacy-policy">Leia nossa Política de Privacidade</a>
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


    </main>
@endsection
