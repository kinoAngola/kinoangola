@extends('layouts.main')

@section('links-head')

    <!-- Scripts -->
    @vite(['resources/scss/whykino.scss', 'resources/js/whykino.js'])

@endsection
@section('content')




<main>
    <section class="our-history">
        <h2>Nossa História</h2>
        <div class="content">
            <p>A Kino Angola nasceu com o propósito de facilitar o acesso a restaurantes e experiências gastronômicas únicas em Angola. Criada por uma equipe apaixonada por tecnologia e culinária, nossa plataforma visa conectar clientes a estabelecimentos de forma prática e eficiente.</p>
            <img src="" alt="" class="border border-red-500" width="200px" height="200px">
        </div>
    </section>
    
    <section>
        <div class="values">
            <div class="value-item"><h3>🎯</h3><p> Facilitar a descoberta e acesso a estabelecimentos gastronômicos em Angola.</p></div>
            <div class="value-item"><h3>👁️</h3><p> Ser a principal plataforma gastronômica do país, promovendo negócios locais.</p></div>
            <div class="value-item"><h3>💎</h3><p> Inovação, Qualidade, Transparência e Compromisso com os clientes e parceiros.</p></div>
        </div>
    </section>
    
    <section class="team-section">
        <h2>Nossa Equipe</h2>
        <div class="team">
            <div class="team-member"><div class="photo">🙎🏾</div> <h4>Luis Pitra</h4> <p>CEO & Fundador</p></div>
            <div class="team-member"><div class="photo">👩🏾‍💻</div> <h4>Zélia João</h4> <p>Diretora de Marketing</p></div>
            <div class="team-member"><div class="photo">👨🏾‍💼</div> <h4>Mauro Moisés</h4> <p>Gestor Financeiro</p></div>
            <div class="team-member"><div class="photo">👨🏾‍💻</div> <h4>Hermínio Francisco</h4> <p>CTO & Diretor de Programação</p></div>
            <div class="team-member"><div class="photo">👩🏾‍💼</div> <h4>Engrácia Leite</h4> <p>Gestora Financeira</p></div>
            <div class="team-member"><div class="photo">👨🏾‍🎨</div> <h4>Rui Pisaterra</h4> <p>Designer UX/UI</p></div>
        </div>
    </section>
    
    <section class="contact-section">
        <h2>Entre em Contato</h2>
        <div class="contact">
            <div class="contact-item">
                <p>📍 <strong>Endereço:</strong> Luanda, Angola</p>
                <p>📞 <strong>Telefone:</strong> +244 923 099 031</p>
                <p>📧 <strong>E-mail:</strong> <a href="#">contato@kinoangola.com</a></p>
            </div>
        </div>
    </section>
</main>




@endsection
