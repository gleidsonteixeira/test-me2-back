@include('layouts.site.head')
<script>
$("title").text("Planos");
$('.favicon').attr("href", '{{ asset("assets/admin/images/icone.png") }}');
</script>

@include('layouts.site.menu')

<main>

    <section id="head">
        <h1>Planos</h1>
    </section>

    <section id="planos-intro">
        <p>Nossos planos foram pensados para lhe atender em cada fase do seu projeto.</p>
        <ul>
            <li class="header">
                <div class="info"></div>
                <div class="head gratis">
                    <h6>Grátis</h6>
                    <div class="preco">R$ 0</div>
                    <div class="tempo">/mês</div>
                    <div class="tag">Sempre grátis</div>
                </div>
                <div class="head mensal">
                    <h6>PRO</h6>
                    <div class="preco">R$ 5</div>
                    <div class="tempo">/mês</div>
                    <div class="tag">Mais popular</div>
                </div>
                <div class="head anual">
                    <h6>PRO Anual</h6>
                    <div class="preco">R$ 50</div>
                    <div class="tempo">/ano</div>
                    <div class="tag">17% de desconto</div>
                </div>
            </li>
            <li>
                <div class="info"><b>Links</b></div>
                <div class="gratis"><b>Sem custos</b></div>
                <div class="mensal"><b>PRO</b></div>
                <div class="anual"><b>PRO Anual</b></div>
            </li>
            <li class="stripe">
                <div class="info">Links Ilimitados</div>
                <div class="gratis"><i class="icofont-check-circled"></i></div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li class="stripe">
                <div class="info">Links de Música</div>
                <div class="gratis"><i class="icofont-check-circled"></i></div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li class="stripe">
                <div class="info">Links de Vídeos</div>
                <div class="gratis"><i class="icofont-check-circled"></i></div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li class="stripe">
                <div class="info">Link thumbnails</div>
                <div class="gratis"><i class="icofont-check-circled"></i></div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li class="stripe">
                <div class="info">Ícones de Redes Sociais</div>
                <div class="gratis"><i class="icofont-check-circled"></i></div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li class="stripe">
                <div class="info">Arquivar e restaurar links</div>
                <div class="gratis"><i class="icofont-check-circled"></i></div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li class="stripe">
                <div class="info">Links Ilimitados</div>
                <div class="gratis"><i class="icofont-check-circled"></i></div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li>
                <div class="info"><b>Página</b></div>
                <div class="gratis"><b>Sem custos</b></div>
                <div class="mensal"><b>PRO</b></div>
                <div class="anual"><b>PRO Anual</b></div>
            </li>
            <li class="stripe">
                <div class="info">Componentes Padrão</div>
                <div class="gratis"><i class="icofont-check-circled"></i></div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li class="stripe">
                <div class="info">Temas padrão</div>
                <div class="gratis"><i class="icofont-check-circled"></i></div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li class="stripe">
                <div class="info">Componentes Premium</div>
                <div class="gratis">---</div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li class="stripe">
                <div class="info">Temas Premium</div>
                <div class="gratis">---</div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li class="stripe">
                <div class="info">Fundo personalizado</div>
                <div class="gratis">---</div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li class="stripe">
                <div class="info">Estilos de fonte e botão</div>
                <div class="gratis">---</div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li class="stripe">
                <div class="info">Faça upload do logotipo da própria marca</div>
                <div class="gratis"><i class="icofont-check-circled"></i></div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li>
                <div class="info"><b>Estatísticas</b></div>
                <div class="gratis"><b>Sem custos</b></div>
                <div class="mensal"><b>PRO</b></div>
                <div class="anual"><b>PRO Anual</b></div>
            </li>
            <li class="stripe">
                <div class="info">Estatísticas de vida</div>
                <div class="gratis"><i class="icofont-check-circled"></i></div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li class="stripe">
                <div class="info">Dados do dia a dia</div>
                <div class="gratis">---</div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li class="stripe">
                <div class="info">Análise de link individual</div>
                <div class="gratis">---</div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li class="stripe">
                <div class="info">Google Analytics</div>
                <div class="gratis">---</div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li class="stripe">
                <div class="info">Pixels do Facebook e TikTok</div>
                <div class="gratis">---</div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li class="stripe">
                <div class="info">Integração do Mailchimp</div>
                <div class="gratis">---</div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li class="stripe">
                <div class="info">Favicon mutável</div>
                <div class="gratis">---</div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li class="stripe">
                <div class="info">Suporte rápido</div>
                <div class="gratis"><i class="icofont-check-circled"></i></div>
                <div class="mensal"><i class="icofont-check-circled"></i></div>
                <div class="anual"><i class="icofont-check-circled"></i></div>
            </li>
            <li>
                <div class="info"></div>
                <div class="head gratis">
                    <div class="preco">R$ 0</div>
                    <div class="tempo">/mês</div>
                    <div class="tag">Sempre grátis</div>
                    <a href="#!">Começar<br> grátis</a>
                </div>
                <div class="head mensal">
                    <div class="preco">R$ 5</div>
                    <div class="tempo">/mês</div>
                    <div class="tag">Mais popular</div>
                    <a href="#!">Experimente 14<br> dias grátis</a>
                </div>
                <div class="head anual">
                    <div class="preco">R$ 50</div>
                    <div class="tempo">/ano</div>
                    <div class="tag">17% de desconto</div>
                    <div class="ml-btn"></div>
                </div>
            </li>
        </ul>
    </section>

</main>

<script>
// Adicione as credenciais do SDK
  const mp = new MercadoPago('TEST-37581f4d-a4cb-48fb-b53c-1fbd8797c4c7', {
        locale: 'pt-BR'
  });

  // Inicialize o checkout
  mp.checkout({
      preference: {
          id: '{{ $preference->id }}'
      },
      render: {
            container: '.ml-btn', // Indique o nome da class onde será exibido o botão de pagamento
            label: 'Experimente 14 dias grátis', // Muda o texto do botão de pagamento (opcional)
      }
});
</script>

@include('layouts.site.foot')