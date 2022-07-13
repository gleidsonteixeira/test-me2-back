<nav class="suave">
    <ul>
        <li>
            <h1 class="logo" title="link de bio"><a href="/"><img src="{{ asset('assets/site/images/logo_nillink.png') }}" /></a></h1>
        </li>
        <li>
            <a href="/funcionalidades" class="suave">Funcionalidades</a>
        </li>
        <li>
            <a href="/planos" class="suave">Planos</a>
        </li>
        <li>
            <a href="/ajuda" class="suave">Ajuda</a>
        </li>
    </ul>
    <ul>
        <li>
            <a href="/entrar" class="btn suave"><span class="suave">Entrar</span></a>
        </li>
        <li>
            <a href="/cadastro" class="btn suave"><span class="suave">Cadastre-se</span></a>
        </li>
    </ul>
    <ul class="mobile suave">
        <li>
            <h1 class="logo" title="link de bio"><a href="/"><img src="{{ asset('assets/site/images/logo_nillink.png') }}" /></a></h1>
        </li>
        <li>
            <a href="/funcionalidades">Funcionalidades</a>
        </li>
        <li>
            <a href="/planos">Planos</a>
        </li>
        <li>
            <a href="/ajuda">Ajuda</a>
        </li>
        <li>
            <a href="/entrar" class="btn suave"><span>Entrar</span></a>
        </li>
        <li>
            <a href="/cadastro" class="btn suave"><span>Cadastre-se</span></a>
        </li>
    </ul>
</nav>
<div class="menu click suave">
    <i class="material-icons">menu</i>
</div>
<script>
    $(document).ready(function(){
        $(".menu").on("click", function(){
            $("nav").toggleClass("active");
        });
    });

    $(document).scroll(function(){
        let y = window.pageYOffset;
        let s = $(window).width();
        if(s > 600){
            if(y > 0){
                $("nav").css({"background-color":"#FFFFFF"});
            }else{
                $("nav").css({"background-color":"transparent"});
            }
        }else{
            $("nav").css({"background-color":"rgba(0,0,0,.5)"});
        }
    });
</script>