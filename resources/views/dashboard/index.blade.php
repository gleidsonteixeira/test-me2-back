@include('layouts.dashboard.head')
<script>
    $("title").text("Dashboard");
</script>

<!-- DASHBOARD COM INFORMAÇÕES E MÉTRICAS -->
<main data-title="Dashboard" data-step="3" data-intro='Aqui você pode ver as métricas de sua página'>
    <div class="dashboard">
        <div class="box boas-vindas">
            <h3>Bem-vindo(a) <span class="laranja1">{{ Auth::user()->name }}</span>, vamos configurar sua página?</h3>
        </div>
        <div class="box menus">
            <ul>
                <li position="1" class="click suave active">Minha página</li>
                <li position="3" class="click suave">Redes Sociais</li>
                <li position="2" class="click suave">Aparência</li>
                <!-- <li position="4" class="click suave">Rastreamento</li>
                <li position="5" class="click suave">SEO</li> -->
            </ul>
            <div class="box contents">
                <div position="1" class="content active">
                    <div class="box component">
                        <div class="component-desc">
                            <h6>Componente Perfil</h6>
                            <h6>Título: <span class="perfil-titulo cinza1">{{ Auth::user()->perfil->perfil_titulo }}</span></h6>
                            <h6>Texto: <span class="perfil-descricao cinza1">{{ Auth::user()->perfil->perfil_descricao }}</span></h6>
                        </div>
                        <div class="actions">
                            <i class="material-icons click suave create" modulo="perfil">create</i>
                            <!-- <i class="material-icons click suave delete" modulo="perfil">delete</i> -->
                        </div>
                        <div class="component-form">
                            <form modulo="perfil">
                                <input type="hidden" name="perfil_id" value="{{ Auth::user()->perfil->perfil_id }}">
                                <label>Logo do seu projeto/empresa<br>(recomendado 100px por 100px)</label>
                                <input type="file" name="perfil_imagem">
                                <label>Título</label>
                                <input type="text" name="perfil_titulo" value="{{ Auth::user()->perfil->perfil_titulo }}" required />
                                <label>Texto(max: 150 caracteres)</label>
                                <textarea name="perfil_descricao" maxlength="150" required>{{ Auth::user()->perfil->perfil_descricao }}</textarea>
                                <button type="submit" class="click suave">Atualizar perfil</button>
                            </form>
                        </div>
                    </div>
                    @if(count(Auth::user()->links) > 0)
                    @foreach(Auth::user()->links as $l)
                    <div class="box component">
                        <div class="component-desc">
                            <h6>Componente Link</h6>
                            <h6>Título: <span class="link-titulo cinza1">{{ $l->link_titulo }}</span></h6>
                            <h6>Link: <a href="{{ $l->link_link }}" target="_blank" class="link-link laranja1">{{ $l->link_link }}</a></h6>
                        </div>
                        <div class="actions">
                            <i class="material-icons click suave create" modulo="link">create</i>
                            <i class="material-icons click suave delete" modulo="link" id="{{ $l->link_id }}">delete</i>
                        </div>
                        <div class="component-form">
                            <form modulo="link">
                                <input type="hidden" name="link_id" value="{{ $l->link_id }}">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <!-- <label>Imagem para o link<br>(recomendado 100px por 100px)</label>
                                <input type="file" name="link_imagem"> -->
                                <label>Título</label>
                                <input type="text" name="link_titulo" value="{{ $l->link_titulo }}" required />
                                <label>Texto(max: 150 caracteres)</label>
                                <input type="text" name="link_link" value="{{ $l->link_link }}" required />
                                <button type="submit" class="click suave">Atualizar link</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                    @endif

                    @if(count(Auth::user()->faqs) > 0)
                    @foreach(Auth::user()->faqs as $f)
                    <div class="box component">
                        <div class="component-desc">
                            <h6>Componente FAQ</h6>
                            <h6>Pergunta: <span class="faq-pergunta cinza1">{{ $f->faq_pergunta }}</span></h6>
                            <h6>Resposta: <span class="faq-resposta cinza1">{{ $f->faq_resposta }}</span></h6>
                        </div>
                        <div class="actions">
                            <i class="material-icons click suave create" modulo="faq">create</i>
                            <i class="material-icons click suave delete" modulo="faq" id="{{ $f->faq_id }}">delete</i>
                        </div>
                        <div class="component-form">
                            <form modulo="faq">
                                <input type="hidden" name="faq_id" value="{{ $f->faq_id }}">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <label>Pergunta</label>
                                <input type="text" name="faq_pergunta" value="{{ $f->faq_pergunta }}" required />
                                <label>Resposta</label>
                                <textarea name="faq_resposta" required>{{ $f->faq_resposta }}</textarea>
                                <button type="submit" class="click suave">Atualizar faq</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                    @endif

                    @if(count(Auth::user()->videos) > 0)
                    @foreach(Auth::user()->videos as $v)
                    <div class="box component">
                        <div class="component-desc">
                            <h6>Componente Vídeo</h6>
                            <h6>Link: <a href="{{ $v->video_link }}" target="_blank" class="video-link laranja1">{{ $v->video_link }}</a></h6>
                        </div>
                        <div class="actions">
                            <i class="material-icons click suave create" modulo="video">create</i>
                            <i class="material-icons click suave delete" modulo="video" id="{{ $v->video_id }}">delete</i>
                        </div>
                        <div class="component-form">
                            <form modulo="video">
                                <input type="hidden" name="video_id" value="{{ $v->video_id }}">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <label>Link</label>
                                <input type="text" name="video_link" value="{{ $v->video_link }}" required />
                                <button type="submit" class="click suave">Atualizar vídeo</button>
                            </form>
                        </div>
                    </div>
                    @endforeach
                    @endif
                    <button class="click suave component-btn">Adicionar componentes</button>
                </div>
                <div position="2" class="content">
                    <div class="box component">
                        <div class="component-desc">
                            <h6>Aparência</h6>
                            <h6>Tamanho dos Títulos: <span class="perfil-titulo-tamanho cinza1">{{ Auth::user()->perfil->perfil_titulo_tamanho }}px</span></h6>
                            <h6>Tamanho dos Textos: <span class="perfil-texto-tamanho cinza1">{{ Auth::user()->perfil->perfil_texto_tamanho }}px</span></h6>
                            <h6 style="display:flex;">Cor de Fundo: <span class="perfil-background-cor cinza1" style="display:flex;flex-align: center;"><div class="cor" style="width: 10px;height:10px;margin: 2px 5px 0 5px;border-radius: 5px;background-color: {{ Auth::user()->perfil->perfil_background_cor }}"></div>{{ Auth::user()->perfil->perfil_background_cor }}</span></h6>
                            <h6 style="display:flex;">Cor dos Boxes: <span class="perfil-background-box-cor cinza1" style="display:flex;flex-align: center;"><div class="cor" style="width: 10px;height:10px;margin: 2px 5px 0 5px;border-radius: 5px;background-color: {{ Auth::user()->perfil->perfil_background_box_cor }}"></div>{{ Auth::user()->perfil->perfil_background_box_cor }}</span></h6>
                            <h6 style="display:flex;">Cor dos Títulos: <span class="perfil-titulo-cor cinza1" style="display:flex;flex-align: center;"><div class="cor" style="width: 10px;height:10px;margin: 2px 5px 0 5px;border-radius: 5px;background-color: {{ Auth::user()->perfil->perfil_titulo_cor }}"></div>{{ Auth::user()->perfil->perfil_titulo_cor }}</span></h6>
                            <h6 style="display:flex;">Cor dos Textos: <span class="perfil-texto-cor cinza1" style="display:flex;flex-align: center;"><div class="cor" style="width: 10px;height:10px;margin: 2px 5px 0 5px;border-radius: 5px;background-color: {{ Auth::user()->perfil->perfil_texto_cor }}"></div>{{ Auth::user()->perfil->perfil_texto_cor }}</span></h6>
                        </div>
                        <div class="actions">
                            <i class="material-icons click suave create" modulo="perfil">create</i>
                            <!-- <i class="material-icons click suave delete" modulo="perfil">delete</i> -->
                        </div>
                        <div class="component-form">
                            <form modulo="perfil">
                                <input type="hidden" name="perfil_id" value="{{ Auth::user()->perfil->perfil_id }}">
                                <label>Tamanho dos Títulos</label>
                                <input type="number" name="perfil_titulo_tamanho" value="{{ Auth::user()->perfil->perfil_titulo_tamanho }}" min="8" max="60" required />
                                <label>Tamanho dos Textos</label>
                                <input type="number" name="perfil_texto_tamanho" value="{{ Auth::user()->perfil->perfil_texto_tamanho }}" min="8" max="24" required />
                                <label>Cor de fundo</label>
                                <input type="color" name="perfil_background_cor" value="{{ Auth::user()->perfil->perfil_background_cor }}">
                                <label>Cor dos boxes</label>
                                <input type="color" name="perfil_background_box_cor" value="{{ Auth::user()->perfil->perfil_background_box_cor }}">
                                <label>Cor dos Títulos</label>
                                <input type="color" name="perfil_titulo_cor" value="{{ Auth::user()->perfil->perfil_titulo_cor }}">
                                <label>Cor dos Textos</label>
                                <input type="color" name="perfil_texto_cor" value="{{ Auth::user()->perfil->perfil_texto_cor }}">
                                <button type="submit" class="click suave">Atualizar perfil</button>
                            </form>
                        </div>
                    </div>
                </div>
                <div position="3" class="content">
                    <div class="box component">
                        <div class="component-desc">
                            <h6>Redes Sociais</h6>
                            <h6>Facebook: <a href="{{ isset(Auth::user()->rede->rede_facebook) ? Auth::user()->rede->rede_facebook : '' }}" target="_blank" class="rede-facebook laranja1">{{ isset(Auth::user()->rede->rede_facebook) ? Auth::user()->rede->rede_facebook : 'Adicione seu link' }}</a></h6>
                            <h6>Instagram: <a href="{{ isset(Auth::user()->rede->rede_instagram) ? Auth::user()->rede->rede_instagram : '' }}" target="_blank" class="rede-instagram laranja1">{{ isset(Auth::user()->rede->rede_instagram) ? Auth::user()->rede->rede_instagram : 'Adicione seu link' }}</a></h6>
                            <h6>Whatsapp: <a href="{{ isset(Auth::user()->rede->rede_whatsapp) ? Auth::user()->rede->rede_whatsapp : '' }}" target="_blank" class="rede-whatsapp laranja1">{{ isset(Auth::user()->rede->rede_whatsapp) ? Auth::user()->rede->rede_whatsapp : 'Adicione seu link' }}</a></h6>
                            <h6>Twitter: <a href="{{ isset(Auth::user()->rede->rede_twitter) ? Auth::user()->rede->rede_twitter : '' }}" target="_blank" class="rede-twitter laranja1">{{ isset(Auth::user()->rede->rede_twitter) ? Auth::user()->rede->rede_twitter : 'Adicione seu link' }}</a></h6>
                            <h6>Tiktok: <a href="{{ isset(Auth::user()->rede->rede_tiktok) ? Auth::user()->rede->rede_tiktok : '' }}" target="_blank" class="rede-tiktok laranja1">{{ isset(Auth::user()->rede->rede_tiktok) ? Auth::user()->rede->rede_tiktok : 'Adicione seu link' }}</a></h6>
                            <h6>Linkedin: <a href="{{ isset(Auth::user()->rede->rede_linkedin) ? Auth::user()->rede->rede_linkedin : '' }}" target="_blank" class="rede-linkedin laranja1">{{ isset(Auth::user()->rede->rede_linkedin) ? Auth::user()->rede->rede_linkedin : 'Adicione seu link' }}</a></h6>
                        </div>
                        <div class="actions">
                            <i class="material-icons click suave create" modulo="rede">create</i>
                            <!-- <i class="material-icons click suave delete" modulo="perfil">delete</i> -->
                        </div>
                        <div class="component-form">
                            <form modulo="rede">
                                <input type="hidden" name="rede_id" value="{{ isset(Auth::user()->rede->rede_id) ? Auth::user()->rede->rede_id : '' }}">
                                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
                                <label>Facebook</label>
                                <input type="text" name="rede_facebook" value="{{ isset(Auth::user()->rede->rede_facebook) ? Auth::user()->rede->rede_facebook : '' }}"/>
                                <label>Instagram</label>
                                <input type="text" name="rede_instagram" value="{{ isset(Auth::user()->rede->rede_instagram) ? Auth::user()->rede->rede_instagram : '' }}"/>
                                <label>Whatsapp</label>
                                <input type="text" name="rede_whatsapp" value="{{ isset(Auth::user()->rede->rede_whatsapp) ? Auth::user()->rede->rede_whatsapp : '' }}"/>
                                <label>Twitter</label>
                                <input type="text" name="rede_twitter" value="{{ isset(Auth::user()->rede->rede_twitter) ? Auth::user()->rede->rede_twitter : '' }}"/>
                                <label>Tiktok</label>
                                <input type="text" name="rede_tiktok" value="{{ isset(Auth::user()->rede->rede_tiktok) ? Auth::user()->rede->rede_tiktok : '' }}"/>
                                <label>Linkedin</label>
                                <input type="text" name="rede_linkedin" value="{{ isset(Auth::user()->rede->rede_linkedin) ? Auth::user()->rede->rede_linkedin : '' }}"/>
                                <button type="submit" class="click suave">Atualizar redes sociais</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- <div position="4" class="content">Rastreamento</div>
                <div position="5" class="content">SEO</div> -->
            </div>
        </div>
    </div>

    <div class="dashboard-conteudo">
        <div posicao="1" class="grafico grafico-visualizacoes">
            <h3>Nº de visualizações<span></span></h3>
            <canvas id="visualizacoes"></canvas>
            <script>
                // var dados = ;
                // var labels = [];
                // var data = [];
                // dados.forEach(d => {
                //     labels.push(d.click_data);
                //     data.push(d.click_contagem);
                // });
    
                // var visualizacoes = document.getElementById('visualizacoes').getContext('2d');
                // var graficoVisualizacoes = new Chart(visualizacoes, {
                //     type: 'line',
                //     data: {
                //         labels: labels,
                //         datasets: [{
                //             label: 'Visualizações',
                //             data: data,
                //             backgroundColor: 'rgba(71, 11, 167, .1)',
                //             borderColor: 'rgba(71, 11, 167, 1)',
                //             borderWidth: '2',
                //             pointBackgroundColor: 'rgba(71, 11, 167, 1)'
                //         }]
                //     },
                //     options: {
                //         scales: {
                //             y: {
                //                 beginAtZero: true,
                //             }
                //         }
                //     }
                // });
            </script>
        </div>
        <div posicao="2" class="grafico grafico-links">
            <h3>Clicks nos links</h3>
            <div class="links">
            <?php
                foreach($links as $l){
                    echo '<div class="link">'.$l["clicks"].'<b>'.$l["link"].'</b></div>';
                }
            ?>
            </div>
            <!-- <canvas id="links"></canvas>
            <script>
                var dados = "";
                var dadosKeys = "";
                var matriz = [];
                var labels = [];
                dados.forEach((d, key) => {
                    var data = [];
                    d.forEach(l => {
                        labels.push(l.click_data);
                        data.push(l.click_contagem);
                    });
                    matriz.push({'data': data, 'label': dadosKeys[key]});
                });
                var datasets = [];
                matriz.forEach(m =>{
                    var n = {
                        'label': m.label,
                        'data': m.data,
                        'backgroundColor': 'rgba(71, 11, 167, .1)',
                        'borderColor': 'rgba(71, 11, 167, 1)',
                        'borderWidth': '2',
                        'pointBackgroundColor': 'rgba(71, 11, 167, 1)'
                    }
                    datasets.push(n);
                });
                function onlyUnique(value, index, self) {
                    return self.indexOf(value) === index;
                }
                var unique = labels.filter(onlyUnique);
    
                var links = document.getElementById('links').getContext('2d');
                var graficoLinks = new Chart(links, {
                    type: 'line',
                    data: {
                        labels: unique,
                        datasets: datasets
                    },
                    options: {
                        scales: {
                            y: {
                                beginAtZero: true,
                            }
                        }
                    }
                });
            </script> -->
        </div>
        <div posicao="3" class="grafico grafico-videos">
            <h3>Clicks nos vídeos</h3>
            <div class="videos">
            <?php
                foreach($videos as $v){
                    echo '<div class="video">'.$v["clicks"].'<b class="truncate">'.$v["link"].'</b></div>';
                }
            ?>
            </div>
        </div>
        <div posicao="4" class="grafico grafico-faqs">
            <h3>Clicks nas faqs</h3>
            <div class="faqs">
            <?php
                foreach($faqs as $f){
                    echo '<div class="faq">'.$f["clicks"].'<b class="truncate">'.$f["link"].'</b></div>';
                }
            ?>
            </div>
        </div>
    </div>
    
</main>

<!-- PREVIEW DAS ALTERAÇÕES NA PÁGINA -->
<aside data-title="Preview" data-step="1" data-intro="Aqui você pode ver como sua página aparece para os visitantes.">
    <div class="preview">
        <ul class="smartphone" style="background-color: {{ Auth::user()->perfil->perfil_background_cor }};"></ul>
        <!-- <i class="material-icons preview-menu click" data-title="Adicionar blocos" data-step="2" data-intro="Clique aqui para adicionar novos blocos à sua página.">add</i> -->
        <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
        <script>
            // FUNÇÃO QUE PERMITE O REORDENAMENTO DOS MODULOS
            $(".smartphone").sortable({
                update: function(event, ui){
                    // APOS QUALQUER MUDANCA A ORDEM É SALVA NOVAMENTE
                    salvarOrdem();
                    $(".smartphone").sortable("disable");
                }
            });

            $(".smartphone").disableSelection();

            // FUNÇÃO PARA CARREGAR OS MODULOS NA ORDEM QUE O USUARIO SALVOU POR ULTIMO
            function carregarOrdem(){
                request = $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/dashboard/ordem/carregar',
                    type: 'get',
                    error: function(){
                        alerta("Ocorreu um erro, atualize a página");
                    },
                    success: function(data, textStatus, xhr) {
                        var ordem = data.ordem_itens.split(',');
                        ordem.forEach( o => {
                            switch(parseInt(o)){
                                case 1:
                                    var modulo =    '<li class="boxes modulo" posicao="1" style="background-color: {{ Auth::user()->perfil->perfil_background_box_cor }}">'+
                                                        '<div class="logo">'+
                                                            @if(asset("assets/admin/images/perfis/".Auth::user()->perfil->perfil_imagem) != "")
                                                            '<img src="{{ asset("assets/admin/images/perfis/".Auth::user()->perfil->perfil_imagem) }}" />'+
                                                            @else
                                                            '<i class="material-icons">add_a_photo</i>'+
                                                            '<span>Carregue<br>sua logo</span>'+
                                                            @endif
                                                        '</div>'+
                                                        '<h5 class="perfil-titulo titulo" style="color:{{ Auth::user()->perfil->perfil_titulo_cor }};font-size:{{ Auth::user()->perfil->perfil_titulo_tamanho }}px">{{ Auth::user()->perfil->perfil_titulo }}</h5>'+
                                                        '<p class="perfil-descricao texto" style="color:{{ Auth::user()->perfil->perfil_texto_cor }};font-size:{{ Auth::user()->perfil->perfil_texto_tamanho }}px">{{ Auth::user()->perfil->perfil_descricao }}</p>'+
                                                        '<div class="redes">'+
                                                            '<a href="{{ isset(Auth::user()->rede->rede_facebook) ? Auth::user()->rede->rede_facebook : '' }}" target="_blank" class="{{ isset(Auth::user()->rede->rede_facebook) ? "active" : '' }} rede-facebook"><i class="fab fa-facebook titulo" style="color:{{ Auth::user()->perfil->perfil_titulo_cor }};"></i></a>'+
                                                            '<a href="{{ isset(Auth::user()->rede->rede_instagram) ? Auth::user()->rede->rede_instagram : '' }}" target="_blank" class="{{ isset(Auth::user()->rede->rede_instagram) ? "active" : '' }} rede-instagram"><i class="fab fa-instagram titulo" style="color:{{ Auth::user()->perfil->perfil_titulo_cor }};"></i></a>'+
                                                            '<a href="{{ isset(Auth::user()->rede->rede_whatsapp) ? Auth::user()->rede->rede_whatsapp : '' }}" target="_blank" class="{{ isset(Auth::user()->rede->rede_whatsapp) ? "active" : '' }} rede-whatsapp"><i class="fab fa-whatsapp titulo" style="color:{{ Auth::user()->perfil->perfil_titulo_cor }};"></i></a>'+
                                                            '<a href="{{ isset(Auth::user()->rede->rede_twitter) ? Auth::user()->rede->rede_twitter : '' }}" target="_blank" class="{{ isset(Auth::user()->rede->rede_twitter) ? "active" : '' }} rede-twitter"><i class="fab fa-twitter titulo" style="color:{{ Auth::user()->perfil->perfil_titulo_cor }};"></i></a>'+
                                                            '<a href="{{ isset(Auth::user()->rede->rede_tiktok) ? Auth::user()->rede->rede_tiktok : '' }}" target="_blank" class="{{ isset(Auth::user()->rede->rede_tiktok) ? "active" : '' }} rede-tiktok"><i class="fab fa-tiktok titulo" style="color:{{ Auth::user()->perfil->perfil_titulo_cor }};"></i></a>'+
                                                            '<a href="{{ isset(Auth::user()->rede->rede_linkedin) ? Auth::user()->rede->rede_linkedin : '' }}" target="_blank" class="{{ isset(Auth::user()->rede->rede_linkedin) ? "active" : '' }} rede-linkedin"><i class="fab fa-linkedin titulo" style="color:{{ Auth::user()->perfil->perfil_titulo_cor }};"></i></a>'+
                                                        '</div>'+
                                                    '</li>';
                                    $(".smartphone").append(modulo);
                                break; 
                                case 2:
                                    $(".smartphone").append('<li class="modulo" posicao="2"></li>');
                                    var links = {!! Auth::user()->links !!};
                                    if(links.length > 0){
                                        links.forEach( l => {
                                            var link =  '<div class="link" id="'+l.link_id+'">'+
                                                            '<a href="'+l.link_link+'" target="_blank" class="boxes link-titulo texto" style="color:{{ Auth::user()->perfil->perfil_texto_cor }};font-size:{{ Auth::user()->perfil->perfil_texto_tamanho }}px;background-color: {{ Auth::user()->perfil->perfil_background_box_cor }}">'+l.link_titulo+'</a>'+
                                                        '</div>';
                                            $(".smartphone .modulo[posicao=2]").append(link);
                                        });
                                    }else{
                                        var aviso = '<p class="aviso">Nenhum link cadastrado</p>';
                                        $(".smartphone .modulo[posicao=2]").append(aviso);
                                    }
                                break; 
                                case 3:
                                    $(".smartphone").append('<li class="modulo" posicao="3"></li>');
                                    var faqs = {!! Auth::user()->faqs !!};
                                    if(faqs.length > 0){
                                        faqs.forEach( f => {
                                            var faq =  '<div class="boxes faq" id="'+f.faq_id+'" style="background-color: {{ Auth::user()->perfil->perfil_background_box_cor }}">'+
                                                            '<p class="faq-pergunta texto" style="color:{{ Auth::user()->perfil->perfil_texto_cor }};font-size:{{ Auth::user()->perfil->perfil_texto_tamanho }}px">'+f.faq_pergunta+'</p>'+
                                                            '<p class="faq-resposta texto" style="color:{{ Auth::user()->perfil->perfil_texto_cor }};font-size:{{ Auth::user()->perfil->perfil_texto_tamanho - 2 }}px">'+f.faq_resposta+'</p>'+
                                                        '</div>';
                                            $(".smartphone .modulo[posicao=3]").append(faq);
                                        });
                                        $(document).on("click", ".faq", function(){
                                            $(this).find(".faq-resposta").toggle("fast");
                                        });
                                    }else{
                                        var aviso = '<p class="aviso">Nenhuma faq cadastrada</p>';
                                        $(".smartphone .modulo[posicao=3]").append(aviso);
                                    }
                                break; 
                                case 4:
                                    $(".smartphone").append('<li class="modulo" posicao="4"></li>');
                                    @if(Auth::user()->video)
                                    var link = {!! Auth::user()->video !!};
                                    @else
                                    var link = "";
                                    @endif
                                    if(link != null && link != ""){
                                        if(link.video_link.search("youtube") > 0){
                                            link_parts = link.video_link.split("=");
                                            link_id = link_parts[1].substring(0, 11);
                                            var video =     '<iframe src="https://www.youtube.com/embed/'+link_id+'?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                                            $(".smartphone .modulo[posicao=4]").append(video);
                                        }else if(link.video_link.search("vimeo") > 0){
                                            link_parts = link.video_link.split(".com/");
                                            link_id = link_parts[1].substring(0, 9);
                                            var video =     '<iframe src="https://player.vimeo.com/video/'+link_id+'?h=3ec0c5b893&color=2aef00&title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>';
                                            $(".smartphone .modulo[posicao=4]").append(video);
                                        }else{
                                            var aviso = '<p class="aviso">Link não compatível</p>';
                                            $(".smartphone .modulo[posicao=4]").append(aviso);
                                        }
                                    }else{
                                        var aviso = '<p class="aviso">Nenhum vídeo cadastrado</p>';
                                        $(".smartphone .modulo[posicao=4]").append(aviso);
                                    }
                                break; 
                                case 5:
                                    $(".smartphone").append('<li class="modulo" posicao="5">item5</li>');
                                break; 
                            }
                        });
                    },
                    complete: function(xhr, textStatus) {} 
                });
            } carregarOrdem();
            
            // FUNÇÃO PARA SALVAR A ORDEM DOS MODULOS
            function salvarOrdem(){
                var ordem = [];
                $(".smartphone .modulo").each(function(){
                    ordem.push($(this).attr("posicao"));
                });
                request = $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/dashboard/ordem/'+{{ Auth::user()->id }},
                    data: {"ordem_itens": ordem.toString(), "user_id":{{ Auth::user()->id }}},
                    type: 'post',
                    error: function(){
                        alerta("Ocorreu um erro, atualize a página");
                    },
                    success: function(data, textStatus, xhr) {
                        alerta("Ordem atualizada com sucesso!");
                        $(".smartphone").sortable("enable");
                    },
                    complete: function(xhr, textStatus) {} 
                });
            }
        </script>
    </div>
</aside>
<script>
    // $(".dashboard-conteudo").sortable({
    //     update: function(event, ui){
    //         // APOS QUALQUER MUDANCA A ORDEM É SALVA NOVAMENTE
    //         salvarOrdemDashboard();
    //         $(".dashboard-conteudo").sortable("disable");
    //     }
    // });

    // $(".dashboard-conteudo").disableSelection();

    // function salvarOrdemDashboard(){
    //     var ordem = [];
    //     $(".dashboard-conteudo .grafico").each(function(){
    //         ordem.push($(this).attr("posicao"));
    //     });
    //     request = $.ajax({
    //         headers: {
    //             'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    //         },
    //         url: '/dashboard/ordem-dashboard/'+{{ Auth::user()->id }},
    //         data: {"ordem_itens": ordem.toString(), "user_id":{{ Auth::user()->id }}},
    //         type: 'post',
    //         error: function(){
    //             alerta("Ocorreu um erro, atualize a página");
    //         },
    //         success: function(data, textStatus, xhr) {
    //             alerta("Ordem atualizada com sucesso!");
    //             $(".smartphone").sortable("enable");
    //         },
    //         complete: function(xhr, textStatus) {} 
    //     });
    // }
</script>



<!-- MÓDULOS DISPONÍVEIS -->
<div id="components" class="suave">
    <div class="box">
        <h3>
            <span>Adicione blocos ao seu perfil</span>
            <i class="material-icons click suave fechar">close</i>
        </h3>
        <ul class="box suave modulos">
            <!-- <li modulo="perfil" class="suave click">
                <i class="material-icons suave">account_circle</i>
                <p class="suave">Perfil</p>
            </li> -->
            <li modulo="link" class="suave click">
                <i class="material-icons suave">link</i>
                <p class="suave">Link</p>
            </li>
            <li modulo="faq" class="suave click">
                <i class="material-icons suave">help</i>
                <p class="suave">Faq</p>
            </li>
            <li modulo="video" class="suave click">
                <i class="material-icons suave">play_circle</i>
                <p class="suave">Vídeo</p>
            </li>
            <!-- <li modulo="banner" class="suave click pro">
                <i class="material-icons suave">image</i>
                <p class="suave">Banners</p>
            </li>
            <li modulo="galeria" class="suave click pro">
                <i class="material-icons suave">collections</i>
                <p class="suave">Galeria</p>
            </li>
            <li modulo="musica" class="suave click pro">
                <i class="material-icons suave">music_note</i>
                <p>Música</p>
            </li>
            <li modulo="mapa" class="suave click pro">
                <i class="material-icons suave">map</i>
                <p>Mapa</p>
            </li> -->
        </ul>
    </div>
</div>

<div id="confirmar" class="suave">
    <p>Deseja realmente deletar este item?</p>
    <div class="opcoes right-align">
        <button class="mini-title upper click suave confirmar">sim</button>
        <button class="mini-title upper click suave cancelar">não</button>
    </div>
</div>

<!-- FORMULÁRIOS DOS MÓDULOS -->
<div id="forms" class="suave">
    <div class="fechar click">
        <i class="material-icons suave">close</i>
    </div>

    <!-- FORM PERFIL -->
    <form id="form-perfil" class="suave">
        <h3>Perfil</h3>
        <label>Logo do seu projeto/empresa<br>(recomendado 100px por 100px)</label>
        <input type="file" name="perfil_imagem">
        <label>Nome do seu projeto/empresa</label>
        <input type="text" name="perfil_titulo" class="suave" required>
        <label>Descrição do seu projeto/empresa</label>
        <textarea name="perfil_descricao" class="suave" maxlength="255" required></textarea>
        <div class="textarea-count">(0 / 255)</div>
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <!-- <label>Cor de fundo</label>
        <div class="background-box">
            <input type="color" name="perfil_background">
            <input type="text" name="perfil_background_hex" value="#000000" maxlength="7" disabled>
        </div>
        <label>Bordas</label>
        <div class="border-box">
            <div>
                <label>Espessura</label>
                <select name="borda_espessura">
                    <option value="1px">1px</option>
                    <option value="2px">2px</option>
                    <option value="3px">3px</option>
                    <option value="4px">4px</option>
                    <option value="5px">5px</option>
                </select>
            </div>
            <div>
                <label>Tipo</label>
                <select name="borda_tipo">
                    <option value="none">Nenhum</option>
                    <option value="solid">Solid</option>
                    <option value="dashed">Dashed</option>
                    <option value="dotted">Dotted</option>
                    <option value="inset">Inset</option>
                    <option value="outset">Outset</option>
                </select>
            </div>
            <div>
                <label>Cor</label>
                <input type="color" name="borda_cor">
            </div>
        </div>
        <div class="border-result">Nenhum</div>
        <label>Cantos</label>
        <div class="radius-box">
            <div class="click">5px</div>
            <div class="click">10px</div>
            <div class="click">15px</div>
            <div class="click">25px</div>
        </div> -->
        <button type="submit" class="click suave"><span>Salvar</span></button>
    </form>

    <!-- FORM LINKS -->
    <form id="form-links" class="suave">
        <h3>Links</h3>
        <label>Icone do link<br/>(recomendado 40px por 40px)</label>
        <input type="file" name="link_imagem">
        <label>Título do link</label>
        <input type="text" name="link_titulo" class="suave" required>
        <label>Endereço do link</label>
        <input type="text" name="link_link" class="suave" required>
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <button type="submit" class="click suave"><span>Salvar</span></button>
    </form>

    <!-- FORM FAQS -->
    <form id="form-faq" class="suave">
        <h3>Faqs</h3>
        <label>Pergunta</label>
        <textarea name="faq_pergunta" class="suave" maxlength="255" required></textarea>
        <div class="textarea-count">(0 / 255)</div>
        <label>Resposta</label>
        <textarea name="faq_resposta" class="suave" maxlength="255" required></textarea>
        <div class="textarea-count">(0 / 255)</div>
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <button type="submit" class="click suave"><span>Salvar</span></button>
    </form>

    <!-- FORM VIDEO -->
    <form id="form-video" class="suave">
        <h3>Vídeo</h3>
        <label>Link do vídeo</label>
        <input type="text" name="video_link" class="suave" required>
        <input type="hidden" name="user_id" value="{{ Auth::user()->id }}">
        <button type="submit" class="click suave"><span>Salvar</span></button>
    </form>
</div>
<script>
    // FUNÇÃO QUE ATIVA A EDIÇÃO DO MÓDULO SOLICITADO
    $(document).on("click", ".component i.create", function(){
        // let modulo = $(this).attr("modulo");
        if($(this).hasClass("active")){
            $(this).removeClass("active");
            $(this).text("create");
            $(this).offsetParent().find(".component-form").slideUp("fast");
        }else{
            $(this).addClass("active");
            $(this).text("close");
            $(this).offsetParent().find(".component-form").slideDown("fast");
        }
    });

    // FUNÇÃO QUE DELETA O MÓDULO SOLICITADO
    $(document).on("click", ".component i.delete", function(){
        $(this).offsetParent().attr("delete", 1);
        let modulo = $(this).attr("modulo");
        let id = $(this).attr("id");
        if(id != null && id != undefined){
            $("#confirmar .confirmar").attr("modulo", modulo);
            $("#confirmar .confirmar").attr("id", id);
            $("#confirmar").addClass("active");
        }else{
            $(".component[delete=1]").remove();
        }
    });

    // FUNÇÃO QUE SUBMETE OS DADOS DO MÓDULO COM EDIÇÃO ATIVA
    $(document).on("submit", ".component-form form", function(e){
        e.preventDefault();
        let modulo = $(this).attr("modulo");
        let form = $(this);
        form.find("button").prop('disabled', true);
        form.find("button").text('Aguarde...');
        switch(modulo){
            case "perfil":
                atualizarPerfil(form);
            break;
            case "link":
                if(form.find("input[name='link_id']").val() == ""){
                    salvarLinks(form);
                }else{
                    atualizarLinks(form);
                }
            break;
            case "faq":
                if(form.find("input[name='faq_id']").val() == ""){
                    salvarFaqs(form);
                }else{
                    atualizarFaqs(form);
                }
            break;
            case "video":
                if(form.find("input[name='video_id']").val() == ""){
                    salvarVideos(form);
                }else{
                    atualizarVideos(form);
                }
            break;
            case "rede":
                atualizarRede(form);
            break;
        }
    });

    // FUNÇÃO PARA CONFIRMAR DELETAR
    $("#confirmar .confirmar").click(function(){
        $(this).prop('disabled', true);
        $("#confirmar").removeClass("active");
        switch ($(this).attr("modulo")) {
            case 'link':
                deletarLinks($(this).attr("id"));
                $(this).prop('disabled', false);
            break;
            case 'faq':
                deletarFaqs($(this).attr("id"));
                $(this).prop('disabled', false);
            break;
            case 'video':
                deletarVideos($(this).attr("id"));
                $(this).prop('disabled', false);
            break;
            default:
                $("#confirmar .confirmar").removeAttr("component");
                $("#confirmar .confirmar").removeAttr("modulo");
                $("#confirmar .confirmar").removeAttr("id");
                $(this).prop('disabled', false);
            break;
        }
    });

    // FUNÇÃO PARA DESATIVAR DELETAR
    $("#confirmar .cancelar").click(function(){
        $("#confirmar").removeClass("active");
        $("#confirmar .confirmar").removeAttr("modulo");
        $("#confirmar .confirmar").removeAttr("id");
    });

    // FUNÇÃO ABRE AS OPÇÕES DE MÓDULOS
    $(document).on("click", ".component-btn", function() {
        $("#components").addClass("active");
    });

    //FUNÇÃO QUE FECHA AS OPÇÕES DE MÓDULOS
    $(document).on("click", "#components .fechar", function() {
        $("#components").removeClass("active");
    });

    $(document).on("click", "#components li", function() {
        let modulo = $(this).attr("modulo");
        let contents = $(".contents .content");
        let component;
        switch(modulo){
            case "link":
                component =     '<div class="box component">'+
                                    '<div class="component-desc">'+
                                        '<h6>Componente Link</h6>'+
                                        '<h6>Título: <span class="link-titulo cinza1">Titulo do link</span></h6>'+
                                        '<h6>Link: <a href="#!" target="_blank" class="link-link laranja1">Seu link</a></h6>'+
                                    '</div>'+
                                    '<div class="actions">'+
                                        '<i class="material-icons click suave create active" modulo="link">close</i>'+
                                        '<i class="material-icons click suave delete" modulo="link">delete</i>'+
                                    '</div>'+
                                    '<div class="component-form" style="display: block;">'+
                                        '<form modulo="link">'+
                                            '<input type="hidden" name="link_id" value="">'+
                                            '<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">'+
                                            '<label>Título</label>'+
                                            '<input type="text" name="link_titulo" value="" required />'+
                                            '<label>Link</label>'+
                                            '<input type="text" name="link_link" value="" required />'+
                                            '<button type="submit" class="click suave">Atualizar link</button>'+
                                        '</form>'+
                                    '</div>'+
                                '</div>';
                contents.append(component);
                $("#components").removeClass("active");
            break;
            case "faq":
                component =     '<div class="box component">'+
                                    '<div class="component-desc">'+
                                        '<h6>Componente FAQ</h6>'+
                                        '<h6>Pergunta: <span class="faq-pergunta cinza1">Sua pergunta</span></h6>'+
                                        '<h6>Resposta: <span class="faq-resposta cinza1">Sua resposta</span></h6>'+
                                    '</div>'+
                                    '<div class="actions">'+
                                        '<i class="material-icons click suave create active" modulo="faq">close</i>'+
                                        '<i class="material-icons click suave delete" modulo="faq">delete</i>'+
                                    '</div>'+
                                    '<div class="component-form" style="display: block;">'+
                                        '<form modulo="faq">'+
                                            '<input type="hidden" name="faq_id" value="">'+
                                            '<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">'+
                                            '<label>Pergunta</label>'+
                                            '<input type="text" name="faq_pergunta" value="" required />'+
                                            '<label>Resposta</label>'+
                                            '<textarea name="faq_resposta" required></textarea>'+
                                            '<button type="submit" class="click suave">Atualizar faq</button>'+
                                        '</form>'+
                                    '</div>'+
                                '</div>';
                contents.append(component);
                $("#components").removeClass("active");
            break;
            case "video":
                component =     '<div class="box component">'+
                                    '<div class="component-desc">'+
                                        '<h6>Componente Vídeo</h6>'+
                                        '<h6>Link: <a href="" target="_blank" class="video-link laranja1">link do vídeo</a></h6>'+
                                    '</div>'+
                                    '<div class="actions">'+
                                        '<i class="material-icons click suave create active" modulo="video">close</i>'+
                                        '<i class="material-icons click suave delete" modulo="video">delete</i>'+
                                    '</div>'+
                                    '<div class="component-form" style="display: block;">'+
                                        '<form modulo="video">'+
                                            '<input type="hidden" name="video_id" value="">'+
                                            '<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">'+
                                            '<label>Link</label>'+
                                            '<input type="text" name="video_link" value="" required />'+
                                            '<button type="submit" class="click suave">Atualizar vídeo</button>'+
                                        '</form>'+
                                    '</div>'+
                                '</div>';
                contents.append(component);
                $("#components").removeClass("active");
            break;
            case "banner":
                component =     '<div class="box component">'+
                                    '<div class="component-desc">'+
                                        '<h6>Componente Banner</h6>'+
                                        '<h6>Banner: <span class="banner-imagem cinza1">Imagem</a></h6>'+
                                    '</div>'+
                                    '<div class="actions">'+
                                        '<i class="material-icons click suave create active" modulo="banner">close</i>'+
                                        '<i class="material-icons click suave delete" modulo="banner">delete</i>'+
                                    '</div>'+
                                    '<div class="component-form" style="display: block;">'+
                                        '<form modulo="banner">'+
                                            '<input type="hidden" name="banner_id" value="">'+
                                            '<input type="hidden" name="user_id" value="{{ Auth::user()->id }}">'+
                                            '<div class="row">'+
                                                '<div class="column2">'+
                                                    '<label>Imagem</label>'+
                                                    '<input type="file" name="banner_imagem" required />'+
                                                '</div>'+
                                                '<div class="column2">'+
                                                    '<label>Link(opcional)</label>'+
                                                    '<input type="text" name="banner_link" />'+
                                                '</div>'+
                                            '</div>'+
                                            '<button type="submit" class="click suave">Atualizar banner</button>'+
                                        '</form>'+
                                    '</div>'+
                                '</div>';
                contents.append(component);
                $("#components").removeClass("active");
            break;
        }
    });

    $(document).on("click", ".menus li", function(){
        let position = $(this).attr("position");
        $(".menus li").removeClass("active");
        $(".contents .content").removeClass("active");
        $(this).addClass("active");
        $(".contents .content[position="+position+"]").addClass("active");
    });


    

    // FUNÇÃO QUE CONTA OS CARACTERES DE QUALQUER TEXTAREA NOS FORMULÁRIOS
    $("#forms form textarea").keyup(function(){
        var count = $(this).val().length;
        $(this).next(".textarea-count").text("(" + count + " / 255)");
    });

    // FUNÇÃO QUE SUBMETE OS DADOS DAS FAQS
    $("#form-faq").submit(function(e){
        e.preventDefault();
        $("#form-faq button").prop('disabled', true);
        $("#form-faq button span").text('Aguarde...');
        if($("#form-faq").has('input[name="faq_id"]').length > 0){
            atualizarFaqs($('#form-faq input[name="faq_id"]').val());
        }else{
            salvarFaqs();
        }
    });

    // FUNÇÃO QUE SUBMETE OS DADOS DO VÍDEO
    $("#form-video").submit(function(e){
        e.preventDefault();
        $("#form-video button").prop('disabled', true);
        $("#form-video button span").text('Aguarde...');
        if($("#form-video").has('input[name="video_id"]').length > 0){
            atualizarVideo($('#form-video input[name="video_id"]').val());
        }else{
            salvarVideo();
        }
    });

    // FUNÇÃO PARA ATUALIZAR OS DADOS DO PERFIL
    function atualizarPerfil(f){
        var form = new FormData(f[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/dashboard/perfis/'+form.get("perfil_id"),
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                f.find("button").text('Atualizar perfil');
                alerta("Ocorreu um erro, atualize a página");
                setTimeout(() => {
                    window.location.reload();
                }, 2000);
            },
            success: function(data, textStatus, xhr) {
                f[0].reset();
                f.find("button").prop('disabled', false);
                f.find("button").text('Atualizar perfil');
                f.find("input[name='perfil_titulo']").val(data.perfil_titulo);
                f.find("textarea[name='perfil_descricao']").val(data.perfil_descricao);
                f.find("input[name='perfil_titulo_tamanho']").val(data.perfil_titulo_tamanho);
                f.find("input[name='perfil_texto_tamanho']").val(data.perfil_texto_tamanho);
                f.find("input[name='perfil_background_cor']").val(data.perfil_background_cor);
                f.find("input[name='perfil_background_box_cor']").val(data.perfil_background_box_cor);
                f.find("input[name='perfil_titulo_cor']").val(data.perfil_titulo_cor);
                f.find("input[name='perfil_texto_cor']").val(data.perfil_texto_cor);
                $(".perfil-titulo").text(data.perfil_titulo);
                $(".perfil-descricao").text(data.perfil_descricao);
                $(".perfil-titulo-tamanho").text(data.perfil_titulo_tamanho+"px");
                $(".perfil-texto-tamanho").text(data.perfil_texto_tamanho+"px");
                $(".perfil-background-cor").text(data.perfil_background_cor);
                $(".perfil-background-box-cor").text(data.perfil_background_box_cor);
                $(".perfil-titulo-cor").text(data.perfil_titulo_cor);
                $(".perfil-texto-cor").text(data.perfil_texto_cor);
                $(".perfil-background-cor .cor").css({"background-color": data.perfil_background_cor});
                $(".perfil-background-box-cor .cor").css({"background-color": data.perfil_background_box_cor});
                $(".perfil-titulo-cor .cor").css({"background-color": data.perfil_titulo_cor});
                $(".perfil-texto-cor .cor").css({"background-color": data.perfil_texto_cor});
                $(".smartphone").css({"background-color": data.perfil_background_cor});
                $(".smartphone .titulo").css({"color": data.perfil_titulo_cor});
                $(".smartphone .texto").css({"color": data.perfil_texto_cor});
                $(".smartphone .boxes").css({"background-color": data.perfil_background_box_cor});
                alerta("Registro atualizado com sucesso!");
            },
            complete: function(xhr, textStatus) {} 
            
        });
    }

    // FUNÇÃO PARA SALVAR OS DADOS DO LINK
    function salvarLinks(f){
        var form = new FormData(f[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/dashboard/links',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                f.find("button").text('Atualizar link');
                alerta("Ocorreu um erro, atualize a página");
                // setTimeout(() => {
                //     window.location.reload();
                // }, 2000);
            },
            success: function(data, textStatus, xhr) {
                f[0].reset();
                f.find("button").prop('disabled', false);
                f.find("button").text('Atualizar link');
                f.find("input[name='link_id']").val(data.link_id);
                f.find("input[name='link_titulo']").val(data.link_titulo);
                f.find("input[name='link_link']").val(data.link_link);
                f.offsetParent().find(".delete").attr("id", data.link_id);
                f.offsetParent().find(".link-titulo").text(data.link_titulo);
                f.offsetParent().find(".link-link").text(data.link_link);
                alerta("Registro atualizado com sucesso!");
            },
            complete: function(xhr, textStatus) {} 
        });
    }

    // FUNÇÃO PARA ATUALIZAR OS DADOS DO LINK
    function atualizarLinks(f){
        var form = new FormData(f[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/dashboard/links/'+form.get("link_id"),
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                f.find("button").text('Atualizar link');
                alerta("Ocorreu um erro, atualize a página");
                // setTimeout(() => {
                //     window.location.reload();
                // }, 2000);
            },
            success: function(data, textStatus, xhr) {
                f[0].reset();
                f.find("button").prop('disabled', false);
                f.find("button").text('Atualizar link');
                f.find("input[name='link_id']").val(data.link_id);
                f.find("input[name='link_titulo']").val(data.link_titulo);
                f.find("input[name='link_link']").val(data.link_link);
                f.offsetParent().find(".delete").attr("id", data.link_id);
                f.offsetParent().find(".link-titulo").text(data.link_titulo);
                f.offsetParent().find(".link-link").text(data.link_link);
                $('.link[id='+data.link_id+'] a').attr("href", data.link_link).text(data.link_titulo);
                alerta("Registro atualizado com sucesso!");
            },
            complete: function(xhr, textStatus) {} 
        });
    }

    // FUNÇÃO PARA DELETAR OS DADOS DO LINK
    function deletarLinks(id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/dashboard/links/'+id,
            type: 'delete',
            error: function(){
                f.find("button").text('Atualizar link');
                alerta("Ocorreu um erro, atualize a página");
                // setTimeout(() => {
                //     window.location.reload();
                // }, 2000);
            },
            success: function(data, textStatus, xhr) {
                alerta("Registro deletado com sucesso!");
                $(".component[delete=1]").remove();
            },
            complete: function(xhr, textStatus) {} 
        });
    }

    // FUNÇÃO PARA SALVAR OS DADOS DA FAQ
    function salvarFaqs(f){
        var form = new FormData(f[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/dashboard/faqs',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                f.find("button").text('Atualizar faq');
                alerta("Ocorreu um erro, atualize a página");
                // setTimeout(() => {
                //     window.location.reload();
                // }, 2000);
            },
            success: function(data, textStatus, xhr) {
                f[0].reset();
                f.find("button").prop('disabled', false);
                f.find("button").text('Atualizar faq');
                f.find("input[name='faq_id']").val(data.faq_id);
                f.find("input[name='faq_pergunta']").val(data.faq_pergunta);
                f.find("textarea[name='faq_resposta']").val(data.faq_resposta);
                f.offsetParent().find(".delete").attr("id", data.faq_id);
                f.offsetParent().find(".faq-pergunta").text(data.faq_pergunta);
                f.offsetParent().find(".faq-resposta").text(data.faq_resposta);
                alerta("Registro atualizado com sucesso!");
            },
            complete: function(xhr, textStatus) {} 
        });
    }

    // FUNÇÃO PARA ATUALIZAR OS DADOS DA FAQ
    function atualizarFaqs(f){
        var form = new FormData(f[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/dashboard/faqs/'+form.get("faq_id"),
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                f.find("button").text('Atualizar faq');
                alerta("Ocorreu um erro, atualize a página");
                // setTimeout(() => {
                //     window.location.reload();
                // }, 2000);
            },
            success: function(data, textStatus, xhr) {
                f[0].reset();
                f.find("button").prop('disabled', false);
                f.find("button").text('Atualizar link');
                f.find("input[name='faq_id']").val(data.faq_id);
                f.find("input[name='faq_pergunta']").val(data.faq_pergunta);
                f.find("textarea[name='faq_resposta']").val(data.faq_resposta);
                f.offsetParent().find(".delete").attr("id", data.faq_id);
                f.offsetParent().find(".faq-pergunta").text(data.faq_pergunta);
                f.offsetParent().find(".faq-resposta").text(data.faq_resposta);
                $('.faq[id='+data.faq_id+'] .faq-pergunta').text(data.faq_pergunta);
                $('.faq[id='+data.faq_id+'] .faq-resposta').text(data.faq_resposta);
                alerta("Registro atualizado com sucesso!");
            },
            complete: function(xhr, textStatus) {} 
        });
    }

    // FUNÇÃO PARA DELETAR OS DADOS DA FAQ
    function deletarFaqs(id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/dashboard/faqs/'+id,
            type: 'delete',
            error: function(){
                f.find("button").text('Atualizar faq');
                alerta("Ocorreu um erro, atualize a página");
                // setTimeout(() => {
                //     window.location.reload();
                // }, 2000);
            },
            success: function(data, textStatus, xhr) {
                alerta("Registro deletado com sucesso!");
                $(".component[delete=1]").remove();
            },
            complete: function(xhr, textStatus) {} 
        });
    }

    // FUNÇÃO PARA SALVAR OS DADOS DO VÍDEO
    function salvarVideos(f){
        var form = new FormData(f[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/dashboard/videos',
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                f.find("button").text('Atualizar faq');
                alerta("Ocorreu um erro, atualize a página");
                // setTimeout(() => {
                //     window.location.reload();
                // }, 2000);
            },
            success: function(data, textStatus, xhr) {
                f[0].reset();
                f.find("button").prop('disabled', false);
                f.find("button").text('Atualizar vídeo');
                f.find("input[name='video_id']").val(data.video_id);
                f.find("input[name='video_link']").val(data.video_link);
                f.offsetParent().find(".delete").attr("id", data.video_id);
                f.offsetParent().find(".video-link").text(data.video_link);
                alerta("Registro atualizado com sucesso!");
            },
            complete: function(xhr, textStatus) {} 
        });
    }

    // FUNÇÃO PARA ATUALIZAR OS DADOS DA FAQ
    function atualizarVideos(f){
        var form = new FormData(f[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/dashboard/videos/'+form.get("video_id"),
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                f.find("button").text('Atualizar faq');
                alerta("Ocorreu um erro, atualize a página");
                // setTimeout(() => {
                //     window.location.reload();
                // }, 2000);
            },
            success: function(data, textStatus, xhr) {
                f[0].reset();
                f.find("button").prop('disabled', false);
                f.find("button").text('Atualizar vídeo');
                f.find("input[name='video_id']").val(data.video_id);
                f.find("input[name='video_link']").val(data.video_link);
                f.offsetParent().find(".delete").attr("id", data.video_id);
                f.offsetParent().find(".video-link").attr("href", data.video_link).text(data.video_link);
                // $('.video[id='+data.video_id+'] .video-link').attr("href", data.video_link).text(data.video_link);
                alerta("Registro atualizado com sucesso!");
            },
            complete: function(xhr, textStatus) {} 
        });
    }

    // FUNÇÃO PARA DELETAR OS DADOS DA FAQ
    function deletarVideos(id){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/dashboard/videos/'+id,
            type: 'delete',
            error: function(){
                f.find("button").text('Atualizar faq');
                alerta("Ocorreu um erro, atualize a página");
                // setTimeout(() => {
                //     window.location.reload();
                // }, 2000);
            },
            success: function(data, textStatus, xhr) {
                alerta("Registro deletado com sucesso!");
                $(".component[delete=1]").remove();
            },
            complete: function(xhr, textStatus) {} 
        });
    }

    // FUNÇÃO PARA ATUALIZAR OS DADOS DO PERFIL
    function atualizarRede(f){
        var form = new FormData(f[0]);
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/dashboard/rede/'+form.get("rede_id"),
            data: form,
            type: 'post',
            contentType: false,
            processData: false,
            error: function(){
                f.find("button").text('Atualizar redes sociais');
                alerta("Ocorreu um erro, atualize a página");
                setTimeout(() => {
                    window.location.reload();
                }, 2000);
            },
            success: function(data, textStatus, xhr) {
                console.log(data);
                f[0].reset();
                f.find("button").prop('disabled', false);
                f.find("button").text('Atualizar redes sociais');
                f.find("input[name='rede_facebook']").val(data.rede_facebook);
                f.find("input[name='rede_instagram']").val(data.rede_instagram);
                f.find("input[name='rede_whatsapp']").val(data.rede_whatsapp);
                f.find("input[name='rede_twitter']").val(data.rede_twitter);
                f.find("input[name='rede_tiktok']").val(data.rede_tiktok);
                f.find("input[name='rede_linkedin']").val(data.rede_linkedin);
                $(".component-desc .rede-facebook").text(data.rede_facebook ? data.rede_facebook : "Adicione seu link");
                $(".component-desc .rede-instagram").text(data.rede_instagram ? data.rede_instagram : "Adicione seu link");
                $(".component-desc .rede-whatsapp").text(data.rede_whatsapp ? data.rede_whatsapp : "Adicione seu link");
                $(".component-desc .rede-twitter").text(data.rede_twitter ? data.rede_twitter : "Adicione seu link");
                $(".component-desc .rede-tiktok").text(data.rede_tiktok ? data.rede_tiktok : "Adicione seu link");
                $(".component-desc .rede-linkedin").text(data.rede_linkedin ? data.rede_linkedin : "Adicione seu link");
                if(data.rede_facebook !== null){
                    $(".redes .rede-facebook").addClass("active");
                }else{
                    $(".redes .rede-facebook").removeClass("active");
                }
                if(data.rede_instagram !== null){
                    $(".redes .rede-instagram").addClass("active");
                }else{
                    $(".redes .rede-instagram").removeClass("active");
                }
                if(data.rede_whatsapp !== null){
                    $(".redes .rede-whatsapp").addClass("active");
                }else{
                    $(".redes .rede-whatsapp").removeClass("active");
                }
                if(data.rede_twitter !== null){
                    $(".redes .rede-twitter").addClass("active");
                }else{
                    $(".redes .rede-twitter").removeClass("active");
                }
                if(data.rede_tiktok !== null){
                    $(".redes .rede-tiktok").addClass("active");
                }else{
                    $(".redes .rede-tiktok").removeClass("active");
                }
                if(data.rede_linkedin !== null){
                    $(".redes .rede-linkedin").addClass("active");
                }else{
                    $(".redes .rede-linkedin").removeClass("active");
                }
                alerta("Registro atualizado com sucesso!");
            },
            complete: function(xhr, textStatus) {} 
            
        });
    }

    // $('#forms form input[type="color"]').focusout(function(){
    //     var color = $(this).val();
    //     $(this).next('input[type="text"]').val(color);
    // });

    // $('#forms form.active .border-box input[name="borda_cor"]').focusout(function(){
    //     var color = $(this).val();
    //     $('#forms form.active .border-result').css({"border-color": color});
    // });

    // $('#forms form.active .border-box select[name="borda_tipo"], #forms form.active .border-box select[name="borda_espessura"]').change(function(){
    //     var espessura = $('#forms form.active .border-box select[name="borda_espessura"]').val();
    //     var color = $('#forms form.active .border-box input[name="borda_cor"]').val();
    //     var tipo = $(this).val();
    //     $('#forms form.active .border-result').css({"border-style": tipo});
    //     $('#forms form.active .border-result').css({"border-width": espessura});
    //     $('#forms form.active .border-result').css({"border-color": color});
    // });

    // $('#forms form.active .radius-box div').click(function(){
    //     var radius = $(this).text();
    //     $('#forms form.active .radius-box div').css({"border-radius": radius});
    // });

</script>

<!-- BOAS VINDAS -->
@if(Auth::user()->boas_vindas == 0)
<div id="boas-vindas" class="suave active">
    <div class="conteudo">
        <h3>Seja bem-vindo(a) <b>{{ Auth::user()->name }}</b></h3>
        <p>Estamos felizes em termos você aqui conosco, preparamos algumas dicas rápidas para ajudar você a conhecer nossa plataforma, deseja iniciar?</p>
        <div class="nao suave click">Agora não...</div>
        <div class="sim suave click">Vamos lá</div>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/intro.js/4.2.2/intro.min.js"></script>
<script>
    $("#boas-vindas .sim").click(function(){
        $("#boas-vindas").removeClass("active");
        introJs().oncomplete(function() {
            alerta("Tutorial concluído!");
            atualizarBoasVindas();
        }).start();
    });

    $("#boas-vindas .nao").click(function(){
        $("#boas-vindas").removeClass("active");
        atualizarBoasVindas();
    });

    function atualizarBoasVindas(){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/dashboard/tutorial-completo',
            type: 'get',
            error: function(){
                alerta("Ocorreu um erro, atualize a página");
            },
            success: function(data, textStatus, xhr) {
                setTimeout(function(){
                    alerta("Este tutorial ficará disponível sempre que precisar!");
                }, 3000);
            },
            complete: function(xhr, textStatus) {} 
        });
    }
</script>
@endif

@include('layouts.dashboard.foot')