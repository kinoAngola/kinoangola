@extends('layouts.main')

@section('links-head')

    <!-- Scripts -->
    @vite(['resources/scss/aboutus.scss', 'resources/js/aboutus.js'])

@endsection
@section('content')




<main>
    <section>
        <h2>Nossa História</h2>
        <p>A Kino Angola nasceu com o propósito de facilitar o acesso a restaurantes e experiências gastronômicas únicas em Angola. Criada por uma equipe apaixonada por tecnologia e culinária, nossa plataforma visa conectar clientes a estabelecimentos de forma prática e eficiente.</p>
    </section>
    
    <section>
        <h2>Missão, Visão e Valores</h2>
        <div class="values">
            <div class="value-item">🎯 <strong>Missão:</strong> Facilitar a descoberta e acesso a estabelecimentos gastronômicos em Angola.</div>
            <div class="value-item">🌍 <strong>Visão:</strong> Ser a principal plataforma gastronômica do país, promovendo negócios locais.</div>
            <div class="value-item">🤝 <strong>Valores:</strong> Inovação, Qualidade, Transparência e Compromisso com os clientes e parceiros.</div>
        </div>
    </section>
    
    <section>
        <h2>Nossa Equipe</h2>
        <div class="team">
            <div class="team-member">👨‍💻 João Silva - CEO & Fundador</div>
            <div class="team-member">👩‍💼 Maria Santos - Diretora de Operações</div>
            <div class="team-member">👨‍🎨 Pedro Almeida - Designer UX/UI</div>
        </div>
    </section>
    
    <section>
        <h2>Entre em Contato</h2>
        <div class="contact">
            <div class="contact-item">📧 Email: contato@kinoangola.com</div>
            <div class="contact-item">📍 Endereço: Luanda, Angola</div>
            <div class="contact-item">📞 Telefone: +244 900 000 000</div>
        </div>
    </section>
</main>




@endsection
