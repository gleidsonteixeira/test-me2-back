@include('layouts.site.head')
<script>
$("title").text("Nillink, conectando você com seu público");
$('.favicon').attr("href", '{{ asset("assets/admin/images/icone.png") }}');
</script>

@include('layouts.site.menu')

<main>
    <section id="banner">
        <div class="item conteudo">
            <h2 class="title">Um único link, infinitas <br><span class="typer title" id="main" data-words="possibilidades, oportunidades" data-delay="100" data-deleteDelay="1000"></span></h2>
            <p>Conecte todos os seus canais em apenas um link!, <br/>Recebimento de contribuições e análise de público mais fáceis.</p>
            <a href="/cadastro" class="btn"><span class="suave">Começe grátis agora</span></a>
            <div class="sub">Já possuí conta?, <a href="/entrar"><div class="suave">Entrar</div></a></div>
        </div>
        <div class="item">
            <div class="imagem">
                <img src="{{ asset('assets/site/images/cliente1.png') }}" alt="cliente 1" />
            </div>
        </div>
    </section>

    <section id="como">
        <h3 class="title">Muito mais que um <span class="title">link de Bio</span>, uma página para todas as suas mídias</h3>
        <ul>
            <li class="suave">
                <div class="item">
                    <div class="imagem">
                        <i class="icofont-id-card"></i>
                    </div>
                </div>
                <div class="item">
                    <span>Passo 1</span>
                    <h6>Crie sua conta</h6>
                    <p>Após seu cadastro uma nova página será adicionada para seu negócio</p>
                </div>
            </li>
            <li class="suave">
                <div class="item">
                    <div class="imagem">
                        <i class="icofont-magic"></i>
                    </div>
                </div>
                <div class="item">
                    <span>Passo 2</span>
                    <h6>Personalize</h6>
                    <p>Escolha o modelo que melhor se encaixar em seu negócio e deixe-o com a sua cara</p>
                </div>
            </li>
            <li class="suave">
                <div class="item">
                    <div class="imagem">
                        <i class="icofont-mega-phone"></i>
                    </div>
                </div>
                <div class="item">
                    <span>Passo 3</span>
                    <h6>Compartilhe sua página</h6>
                    <p>Insira sua página e acompanhe o desempenho de seus links dentro de nossa plataforma</p>
                </div>
            </li>
        </ul>
    </section>

    <section id="funcionalidades">
        <div class="item conteudo">
            <h3 class="title">Plataforma <span class="title">simplificada</span></h3>
            <p>Projetamos nossa plataforma para que você tenha o mínimo de esforço possível na hora de criar ou ajustar sua página.</p>
        </div>
        <div class="item">
            <img src="{{ asset('assets/site/images/funcionalidades.png'); }}" />
        </div>
    </section>

    <section id="planos">
        <h3 class="title">Escolha um dos planos</h3>
        <p>Faça seu negócio lucrar mais pela internet. Assine agora ou comece com o plano grátis.</p>
        <ul>
            <li class="suave">
                <div class="item">
                    <h3>Grátis</h3>
                    <h4>Para sempre</h4>
                    <h6>R$ <span>0</span></h6>
                    <a href="/cadastro"><span class="suave">Crie uma conta grátis</span></a>
                </div>
                <div class="item">
                    <p>Links ilimitados</p>
                    <p>Customize as cores e fundos dos botões</p>
                    <p>Adicione efeitos nos botões</p>
                    <p>Emojis</p>
                    <p>Suporte apenas por e-mail</p>
                </div>
            </li>
            <li class="suave active">
                <div class="item">
                    <h3>PRO Mensal</h3>
                    <h4>Por apenas</h4>
                    <h6>R$ <span>5</span></h6>
                    <a href="/cadastro/pro-anual"><span class="suave">Começar Agora</span></a>
                </div>
                <div class="item">
                    <p>Todos do Grátis</p>
                    <p>Personalizações PRO</p>
                    <p>Ferramentas de captura no seu BIO</p>
                    <p>Contador de cliques por link</p>
                    <p>Incorpore vídeos do Youtube, Vimeo ou playlists do Spotify</p>
                    <p>Pixel do facebook</p>
                    <p>Google Tag Manager</p>
                    <p>Google Analytics</p>
                    <p>Suporte por Whatsapp</p>
                    <p><span>*Cobrança recorrente.</span></p>
                </div>
            </li>
            <li class="suave">
                <div class="item">
                    <h3>PRO Anual</h3>
                    <h4>com 17% de desconto</h4>
                    <h6>R$ <span>50</span></h6>
                    <a href="/cadastro/pro-mensal"><span class="suave">Começar Economizando</span></a>
                </div>
                <div class="item">
                    <p>Todos do Grátis</p>
                    <p>Personalizações PRO</p>
                    <p>Ferramentas de captura no seu BIO</p>
                    <p>Contador de cliques por link</p>
                    <p>Incorpore vídeos do Youtube, Vimeo ou playlists do Spotify</p>
                    <p>Pixel do facebook</p>
                    <p>Google Tag Manager</p>
                    <p>Google Analytics</p>
                    <p>Suporte por Whatsapp</p>
                    <p><span>*Cobrança recorrente.</span></p>
                </div>
            </li>
        </ul>
    </section>

</main>

@include('layouts.site.foot')