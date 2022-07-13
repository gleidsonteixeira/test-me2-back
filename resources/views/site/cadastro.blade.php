@include('layouts.site.head-pagina')
<script>
$("title").text("Cadastro");
</script>

<main style="padding: 0;">
    <section id="cadastro-forms">
        <form id="cadastro">
            <div class="metade">
                <div class="esquerda">
                    <img src="{{ asset('assets/site/images/logo_nillink.png') }}" class="logo" alt="Nillink" />
                    <label>Seu nome</label>
                    <input type="text" name="name" required autofocus>
                    <label>Seu email</label>
                    <input type="text" name="email" required>
                    <label>Sua senha</label>
                    <input type="password" name="password" required>
                    <label>Qual o nome do seu negócio?</label>
                    <input type="text" name="apelido" required>
                    <button type="submit" class="click suave"><span class="suave">Continuar</span></button>
                </div>
                <div class="direita">
                    <div style="width: 100%;height: 450px;background-color: #F29727;border-radius: 10px;box-shadow: 0 5px 10px rgba(0, 0, 0, .15);display: flex;justify-content: center;align-items: center;">
                        <img src="{{ asset('assets/site/images/login.png') }}" alt="Login" />
                    </div>
                </div>
            </div>
            <script>
                $("#cadastro").submit(function(e){
                    e.preventDefault();
                    $("#cadastro button").prop('disabled', true);
                    $("#cadastro button span").text('Aguarde...');
                    salvarCadastro();
                });

                function salvarCadastro(){
                    var form = new FormData($("#cadastro")[0]);
                    request = $.ajax({
                        headers: {
                            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                        },
                        url: '/cadastrar',
                        data: form,
                        type: 'post',
                        contentType: false,
                        processData: false,
                        error: function(){
                            $("#cadastro button").prop('disabled', false);
                            $("#cadastro button span").text('Salvar');
                            alerta("Ocorreu um erro, atualize a página");
                        },
                        success: function(data, textStatus, xhr) {
                            if(data == "1"){
                                $("#cadastro")[0].reset();
                                $("#cadastro button").prop('disabled', false);
                                $("#cadastro button span").text('Salvar');
                                alerta("Cadastro realizado!");
                                window.location.href = "dashboard";
                            }else if(data == "2"){
                                $("#cadastro button").prop('disabled', false);
                                $("#cadastro button span").text('Salvar');
                                alerta("Este email já está em uso");
                            }
                        },
                        complete: function(xhr, textStatus) {} 
                    });
                }
            </script>
        </form>
    </section>
</main>