@include('layouts.site.head-pagina')
<script>
$("title").text("{{ $pagina->perfil->perfil_titulo }}");
@if(asset("assets/admin/images/perfis/".$pagina->perfil->perfil_imagem) != "")
$('.favicon').attr("href", '{{ asset("assets/admin/images/perfis/".$pagina->perfil->perfil_imagem) }}');
@else
$('.favicon').attr("href", '{{ asset("assets/admin/images/icone.png") }}');
@endif
</script>

<main style="padding-top: 0;background-color: {{ $pagina->perfil->perfil_background_cor }};">
    <section id="pagina"></section>
    <script>
    function carregarOrdem() {
        var data = {!! $pagina->ordem !!};
        var ordem = data.ordem_itens.split(',');
        ordem.forEach(o => {
            switch (parseInt(o)) {
                case 1:
                    var modulo =    '<li class="modulo" posicao="1">' +
                                        '<div class="logo">' +
                                            @if(asset("assets/admin/images/perfis/".$pagina->perfil->perfil_imagem) != "")
                                            '<img src="{{ asset("assets/admin/images/perfis/".$pagina->perfil->perfil_imagem) }}" />'+
                                            @else
                                            '<i class="material-icons">add_a_photo</i>'+
                                            '<span>Carregue<br>sua logo</span>'+
                                            @endif
                                        '</div>' +
                                        '<h5 class="titulo">{{ $pagina->perfil->perfil_titulo }}</h5>' +
                                        '<p class="descricao">{{ $pagina->perfil->perfil_descricao }}</p>' +
                                    '</li>';
                    $("#pagina").append(modulo);
                    break;
                case 2:
                    $("#pagina").append('<li class="modulo" posicao="2"></li>');
                    var links = {!! $pagina->links!!};
                    if (links.length > 0) {
                        links.forEach(l => {
                            var link =  '<div class="link" link_id="'+l.link_id+'">' +
                                            '<a href="' + l.link_link + '" target="_blank">' + l.link_titulo + '</a>' +
                                        '</div>';
                            $("#pagina .modulo[posicao=2]").append(link);
                        });
                    }
                    break;
                case 3:
                    $("#pagina").append('<li class="modulo" posicao="3"></li>');
                    var faqs = {!! $pagina->faqs !!};
                    if (faqs.length > 0) {
                        faqs.forEach(f => {
                            var faq =   '<div class="faq" faq_id="'+f.faq_id+'">' +
                                            '<p class="faq-pergunta">' + f.faq_pergunta +'</p>' +
                                            '<p class="faq-resposta">' + f.faq_resposta +'</p>' +
                                        '</div>';
                            $("#pagina .modulo[posicao=3]").append(faq);
                        });
                        $(document).on("click", ".faq", function() {
                            $(this).find(".faq-resposta").toggle("fast");
                        });
                    }
                    break;
                case 4:
                    $("#pagina").append('<li class="modulo video" posicao="4"></li>');
                    @if($pagina->video)
                    var link = {!! $pagina->video !!};
                    @else
                    var link = "";
                    @endif
                    if(link != null && link != ""){
                        if (link.video_link.search("youtube") > 0) {
                            link_parts = link.video_link.split("=");
                            link_id = link_parts[1].substring(0, 11);
                            var video = '<iframe src="https://www.youtube.com/embed/'+link_id+'?controls=0" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>';
                            $("#pagina .modulo[posicao=4]").append(video);
                        } else if (link.video_link.search("vimeo") > 0) {
                            link_parts = link.video_link.split(".com/");
                            link_id = link_parts[1].substring(0, 9);
                            var video = '<iframe src="https://player.vimeo.com/video/'+link_id+'?h=3ec0c5b893&color=2aef00&title=0&byline=0&portrait=0" frameborder="0" allow="autoplay; fullscreen; picture-in-picture" allowfullscreen></iframe>';
                            $("#pagina .modulo[posicao=4]").attr("video_id", link.video_id);
                            $("#pagina .modulo[posicao=4]").append(video);
                        } else {
                            var aviso = '<p class="aviso">Link não compatível</p>';
                            $("#pagina .modulo[posicao=4]").append(aviso);
                        }
                    }
                    break;
                case 5:
                    $("#pagina").append('<li class="modulo" posicao="5">item5</li>');
                    break;
            }
        });
    }
    carregarOrdem();

    function salvarClick(modulo){
        request = $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: '/clicks',
            type: 'get',
            data: {"click_modulo": modulo, "pagina": "{{$pagina->id}}" },
            error: function(){
                alerta("Ocorreu um erro, atualize a página");
            },
            success: function(data, textStatus, xhr) {},
            complete: function(xhr, textStatus) {} 
        });
    }

    setTimeout(function(){
        salvarClick("visualizacoes");
    }, 3000);

    $(document).on("click", ".link", function(){
        salvarClick("link-"+$(this).attr("link_id"));
    });

    window.focus()

    window.addEventListener("blur", () => {
    setTimeout(() => {
        if (document.activeElement.tagName === "IFRAME") {
        salvarClick("video-"+$(".video").attr("video_id"));
        }
    });
    }, { once: true });

    $(document).on("click", ".faq", function(){
        salvarClick("faq-"+$(this).attr("faq_id"));
    });
    </script>
</main>