@include('layouts.site.head')
<script>
$("title").text("Funcionalidades");
$('.favicon').attr("href", '{{ asset("assets/admin/images/icone.png") }}');
</script>

@include('layouts.site.menu')

<main>

    <section id="head">
        <h1>Funcionalidades</h1>
    </section>

    <section id="funcionalidades">
        <ul>
            <li>
                <div class="imagem"></div>
                <h3>Na direção certa</h3>
                <p>Crie links para enviar seus visitantes aonde você quiser.</p>
            </li>
            <li>
                <div class="imagem"></div>
                <h3>Aumente as margens</h3>
                <p>Utilize nossos formulários para captar pessoas interessadas no seu conteúdo ou serviço.</p>
            </li>
            <li>
                <div class="imagem"></div>
                <h3>Com a sua cara</h3>
                <p>Personalize sua página do jeito que quiser, mude seu estilo a qualquer hora.</p>
            </li>
            <li>
                <div class="imagem"></div>
                <h3>Atendimento mais eficiente</h3>
                <p>Deixe respostas prontas para as perguntas mais frequentes dos seus visitantes.</p>
            </li>
            <li>
                <div class="imagem"></div>
                <h3>Análise de dados</h3>
                <p>Acompanhe as métricas da sua página de forma individualizada para cada componente que você adicionar.</p>
            </li>
            <li>
                <div class="imagem"></div>
                <h3>Melhorias constantes</h3>
                <p>Nossa equipe trabalha ativamente na busca de vantagens e facilidades para nossos clientes na utilização de nossos serviços.</p>
            </li>
        </ul>
    </section>


</main>

@include('layouts.site.foot')