@extends('layouts.main')

@section('links-head')

    <!-- Scripts -->
    @vite(['resources/scss/whykino.scss', 'resources/js/whykino.js'])

@endsection
@section('content')



<main>
    <section>
        <h2>O que nos torna únicos?</h2>
        <div class="features">
            <div class="feature-item">🌍 Geolocalização em tempo real</div>
            <div class="feature-item">🍽️ Recomendações personalizadas</div>
            <div class="feature-item">📊 Estatísticas e insights para negócios</div>
            <div class="feature-item">💬 Comunidade engajada e ativa</div>
        </div>
    </section>
    
    <section>
        <h2>Nossa Proposta de Valor</h2>
        <div class="values">
            <div class="value-item">🚀 Facilidade na busca de estabelecimentos</div>
            <div class="value-item">📢 Promoção de micro e pequenos negócios</div>
            <div class="value-item">🤝 Conexão direta entre clientes e empresas</div>
            <div class="value-item">⚡ Plataforma intuitiva e moderna</div>
        </div>
    </section>
    
    <section>
        <h2>O que nossos usuários dizem?</h2>
        <div class="testimonials">
            <div class="testimonial-item">“Agora encontro os melhores restaurantes na minha área com facilidade!” – Usuário X</div>
            <div class="testimonial-item">“A Kino Angola ajudou meu negócio a crescer e atrair novos clientes.” – Dono de Restaurante Y</div>
            <div class="testimonial-item">“A plataforma é super intuitiva e cheia de opções incríveis.” – Cliente Z</div>
        </div>
    </section>
    
    <section>
        <h2>Faça Parte Agora!</h2>
        <div class="cta">
            <div class="cta-box">
                <p>📲 Baixe nosso aplicativo e descubra novas experiências!</p>
                <button>Baixar Agora</button>
            </div>
            <div class="cta-box">
                <p>🏪 Tem um estabelecimento? Junte-se a nós e alcance mais clientes!</p>
                <button>Cadastre seu Negócio</button>
            </div>
        </div>
    </section>
</main>



@endsection
