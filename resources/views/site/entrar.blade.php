@include('layouts.site.head-pagina')
<script>
$("title").text("Acesse sua conta");
</script>

<main style="padding: 0;">
    <section id="cadastro-forms">
        <form id="cadastro">
            <div class="metade">
                <div class="esquerda">
                    <img src="{{ asset('assets/site/images/logo_nillink.png') }}" class="logo" alt="Nillink" />
                    <label>Seu email</label>
                    <input type="text" name="email" required>
                    <label>Sua senha</label>
                    <input type="password" name="password" required>
                    <button type="submit" class="click suave"><span class="suave">Entrar</span></button>
                    <label style="text-align: center;margin: 10px 0;">Não possui conta ainda?</label>
                    <a href="/cadastro" class="click suave"><span class="suave">Cadastre-se</span></a>
                </div>
                <div class="direita">
                    <div style="width: 100%;height: 450px;background-color: #F29727;border-radius: 10px;box-shadow: 0 5px 10px rgba(0, 0, 0, .15);display: flex;justify-content: center;align-items: center;">
                        <img src="{{ asset('assets/site/images/login.png') }}" alt="Login" />
                    </div>
                </div>
            </div>
        </form>
        <script>
            $("#cadastro").submit(function(e){
                e.preventDefault();
                $("#cadastro button").prop('disabled', true);
                $("#cadastro button span").text('Aguarde...');
                logar();
            });

            function logar(){
                var form = new FormData($("#cadastro")[0]);
                request = $.ajax({
                    headers: {
                        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                    },
                    url: '/logar',
                    data: form,
                    type: 'post',
                    contentType: false,
                    processData: false,
                    error: function(){
                        $("#cadastro button").prop('disabled', false);
                        $("#cadastro button span").text('Entrar');
                        alerta("Ocorreu um erro, atualize a página");
                    },
                    success: function(data, textStatus, xhr) {
                        if(data.status == 200){
                            $("#cadastro button").prop('disabled', false);
                            $("#cadastro button span").text('Entrar');
                            alerta(data.message);
                            setTimeout(() => {
                                if(data.usuario.status == 0){
                                    alerta("Você ainda não possui um plano.");
                                    setTimeout(function(){
                                        window.location.href = '/#planos';
                                    },2000);
                                }else{
                                    if(data.usuario.tipo == 1){
                                        window.location.href = '/dashboard';
                                    }else if(data.usuario.tipo == 0){
                                        window.location.href = '/admin';
                                    }
                                }
                            }, 1000);
                        }else if(data.status == 202){
                            $("#cadastro button").prop('disabled', false);
                            $("#cadastro button span").text('Entrar');
                            alerta(data.message);
                            setTimeout(() => {
                                window.location.reload();
                            }, 1000);
                        }
                    },
                    complete: function(xhr, textStatus) {} 
                });
            }
        </script>
    </section>
</main>