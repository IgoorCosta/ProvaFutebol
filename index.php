<?php 
    session_start();
    $connection = 'safe';
	include("phpsystems/sisConnection.php");
    include("phpsystems/sisFunctions.php"); 

    if(!isset($_SESSION['id'])) {
        header("Location: login");
        die;
    }
    [$user_data, $vers] = check_login_index($consis);

    $name = str_replace('.','', $user_data['email']);
    $fotoperfil = "static/img/avatarm.jpeg";
    if (file_exists("./static/img/".$name.".png")){
        $fotoperfil = "static/img/".$name.".png";
    }
    elseif (file_exists("./static/img/".$name.".jpg")){
        $fotoperfil = "static/img/".$name.".jpg";
    }
    elseif (file_exists("./static/img/".$name.".jpeg")){
        $fotoperfil = "static/img/".$name.".jpeg";
    }
?>

<!DOCTYPE html>
<html lang="pt-BR">
    <head>
        <meta charset="UTF-8">
        <title>Comprar ingressos</title>
        <link rel="icon" href="static/img/logo1.svg" size="32x32">
        <link rel="stylesheet" type="text/css" href="static/css/index.css?v=<?php echo $vers?>">
        <link rel="stylesheet" type="text/css" href="static/font/font-awesome-4.7.0/css/font-awesome.min.css">    
    </head>

    <body>
        <!----------------------- TopBar --------------------------->
        <!-- TopBar -->
        <div id="topBar">
            <div class='logo-Green'>
                    FutIgressos
            </div>
            <div class="perfil">
                <div class='itemperfil'>
                    <div class="ptopco2">
                        <div class='topco2-text2 f-13' style='border-bottom: 1px solid #fff;font-family: Poppins-SemiBold, Arial, Helvetica, sans-serif;'><div id="conteudohora"></div></div>
                        <div class='topco2-text2 f-13'><div id="conteudodata"></div></div>
                    </div>
                </div>
                <a class="itemperfil" onclick="toggleAba('menus')" style="text-decoration: none;">
                    <div class="pperfil">
                        <div class="seta-perfil"></div>
                        <img class="icone-perfil" src="static/img/avatarm.jpeg?v=1">
                    </div>   
                </a>
            </div>
        </div>

        <!-- Box -->
        <div id="menus">
            <a class="btn-open" style="text-decoration: none;">
                <div class="flex0">
                    <i class="action_icon fa fa-user-circle-o" style="font-size: 14px;" aria-hidden="true"></i>
                    <span class='f-13' style="padding-left: 13%;">Perfil</span>
                </div>
            </a>
            <a style="text-decoration: none;" href="phpsystems/sisLogout.php">
                <div class="flex1">
                    <i class="action_icon fa fa-sign-out" style="font-size: 14px; "aria-hidden="true"></i>
                    <span class='f-13' style="padding-left: 13%;">Sair</span>
                </div>
            </a>
        </div>

        <!-- Perfil -->
        <section class="modal1 hidden">
            <div class="flex">
                <div class='f-21' style="margin-bottom: 20px; font-family: Poppins-SemiBold, Arial, Helvetica, sans-serif;color:#1B244C;">Informações do usuário</div>
                <button class="btn-close">⨉</button>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="placeholdl">
                    <p>Nome</p>
                    <input type="text" name="nome" class="placehold" placeholder="Nome" value="<?php echo $user_data['nome']; ?>"/>
                </div>
                <div class="placeholdr">
                    <p>E-mail</p>
                    <input type="email" readonly class="placehold"  placeholder="E-mail" value="<?php echo $user_data['email']; ?>"/>
                </div>
                <div class="placeholdl">
                    <p>Criação da Conta</p>
                    <input type="email" readonly class="placehold"  placeholder="Data" value="13/03/2024"/>
                </div>
                <div class="placeholdr">
                    <p>Celular</p>
                    <input type="text" class="placehold" name="number" placeholder="Celular" value="<?php echo $user_data['celular']; ?>"/>
                </div>
                <div class="placeholdt">
                    <p style="margin-bottom: 3px;">Alterar foto de perfil</p>
                    <input type="hidden" name="MAX_FILE_SIZE" value="300000">
                    <input name="userfile" type="file" accept="image/png, image/jpeg, image/jpg" placeholder="Escolha nova foto: ">
                </div>
                <div class="placeholdt">
                    <p style=" margin-bottom: 5px;">Alterar senha</p>
                    <div class="placeholdl">
                        <input type="password" class="placehold" name="senha_nova1" placeholder="Digite a nova senha" minLength="8"/>
                    </div>
                    <div class="placeholdr">
                        <input type="password" class="placehold" name="senha_nova2" placeholder="Confirme a nova senha" minLength="8"/>
                    </div>
                    <input type="password" class="placehold" style="margin-top: 5px;" name="senha_atual" placeholder="Digite a senha atual" />
                </div>
                <button class="btn22" type="submit" name="perfil" value="go">Alterar</button>
            </form>
        </section>

                <!-- Perfil -->
        <section class="modalagendamento hidden">
            <div class="flex">
                <div class='f-21' style="margin-bottom: 20px; font-family: Poppins-SemiBold, Arial, Helvetica, sans-serif;color:#1B244C;">Agendamento</div>
                <button class="btn-closeagend">⨉</button>
            </div>
            <form method="post" enctype="multipart/form-data">
                <div class="placeholdl">
                    <p>Médico</p>
                    <input type="text" name="nome" class="placehold"/>
                </div>
                <div class="placeholdr">
                    <p>Data</p>
                    <input type="date" name="data" class="placehold"/>
                </div>

                <div style='overflow-y:scroll; width: 100%; max-height: 350px;'>
                    <table class='dadoscadastros2'>
                        <thead class='dadoscadastros2'>
                            <tr class='dadoscadastros2' style='background-color:transparent'>
                                <th colspan='1' style='padding-left:4px;'>Profissional</th>
                                <th >Local</th>
                                <th >Data</th>
                                <th >Hora</th>
                                <th >Agendar</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class='dadoscadastros2'>
                                <td class='gestaocadastros-table-qtd2'>Dr. Carlos Alberto</td>
                                <td class='gestaocadastros-table-qtd2'>Av. Faria Lima 1432</td>
                                <td class='gestaocadastros-table-qtd2'>14/04/2024</td>
                                <td class='gestaocadastros-table-qtd2'>14:00</td>
                                <td class='gestaocadastros-table-celular2 btn-closeagend'>
                                    <i class='fa fa-calendar-plus-o' aria-hidden='true'></i>
                                </td>
                            </tr>
                            <tr class='dadoscadastros2'>
                                <td class='gestaocadastros-table-qtd2'>Dr. Carlos Alberto</td>
                                <td class='gestaocadastros-table-qtd2'>Av. Faria Lima 1432</td>
                                <td class='gestaocadastros-table-qtd2'>14/04/2024</td>
                                <td class='gestaocadastros-table-qtd2'>14:00</td>
                                <td class='gestaocadastros-table-celular2 btn-closeagend'>
                                    <i class='fa fa-calendar-plus-o' aria-hidden='true'></i>
                                </td>
                            </tr>
                            <tr class='dadoscadastros2'>
                                <td class='gestaocadastros-table-qtd2'>Dr. Carlos Alberto</td>
                                <td class='gestaocadastros-table-qtd2'>Av. Faria Lima 1432</td>
                                <td class='gestaocadastros-table-qtd2'>14/04/2024</td>
                                <td class='gestaocadastros-table-qtd2'>14:00</td>
                                <td class='gestaocadastros-table-celular2 btn-closeagend'>
                                    <i class='fa fa-calendar-plus-o' aria-hidden='true'></i>
                                </td>
                            </tr>
                            <tr class='dadoscadastros2'>
                                <td class='gestaocadastros-table-qtd2'>Dr. Carlos Alberto</td>
                                <td class='gestaocadastros-table-qtd2'>Av. Faria Lima 1432</td>
                                <td class='gestaocadastros-table-qtd2'>14/04/2024</td>
                                <td class='gestaocadastros-table-qtd2'>14:00</td>
                                <td class='gestaocadastros-table-celular2 btn-closeagend'>
                                    <i class='fa fa-calendar-plus-o' aria-hidden='true'></i>
                                </td>
                            </tr>
                            <tr class='dadoscadastros2'>
                                <td class='gestaocadastros-table-qtd2'>Dr. Carlos Alberto</td>
                                <td class='gestaocadastros-table-qtd2'>Av. Faria Lima 1432</td>
                                <td class='gestaocadastros-table-qtd2'>14/04/2024</td>
                                <td class='gestaocadastros-table-qtd2'>14:00</td>
                                <td class='gestaocadastros-table-celular2 btn-closeagend'>
                                    <i class='fa fa-calendar-plus-o' aria-hidden='true'></i>
                                </td>
                            </tr>
                            <tr class='dadoscadastros2'>
                                <td class='gestaocadastros-table-qtd2'>Dr. Carlos Alberto</td>
                                <td class='gestaocadastros-table-qtd2'>Av. Faria Lima 1432</td>
                                <td class='gestaocadastros-table-qtd2'>14/04/2024</td>
                                <td class='gestaocadastros-table-qtd2'>14:00</td>
                                <td class='gestaocadastros-table-celular2 btn-closeagend'>
                                    <i class='fa fa-calendar-plus-o' aria-hidden='true'></i>
                                </td>
                            </tr>
                            <tr class='dadoscadastros2'>
                                <td class='gestaocadastros-table-qtd2'>Dr. Carlos Alberto</td>
                                <td class='gestaocadastros-table-qtd2'>Av. Faria Lima 1432</td>
                                <td class='gestaocadastros-table-qtd2'>14/04/2024</td>
                                <td class='gestaocadastros-table-qtd2'>14:00</td>
                                <td class='gestaocadastros-table-celular2 btn-closeagend'>
                                    <i class='fa fa-calendar-plus-o' aria-hidden='true'></i>
                                </td>
                            </tr>
                            <tr class='dadoscadastros2'>
                                <td class='gestaocadastros-table-qtd2'>Dr. Carlos Alberto</td>
                                <td class='gestaocadastros-table-qtd2'>Av. Faria Lima 1432</td>
                                <td class='gestaocadastros-table-qtd2'>14/04/2024</td>
                                <td class='gestaocadastros-table-qtd2'>14:00</td>
                                <td class='gestaocadastros-table-celular2 btn-closeagend'>
                                    <i class='fa fa-calendar-plus-o' aria-hidden='true'></i>
                                </td>
                            </tr>
                            <tr class='dadoscadastros2'>
                                <td class='gestaocadastros-table-qtd2'>Dr. Carlos Alberto</td>
                                <td class='gestaocadastros-table-qtd2'>Av. Faria Lima 1432</td>
                                <td class='gestaocadastros-table-qtd2'>14/04/2024</td>
                                <td class='gestaocadastros-table-qtd2'>14:00</td>
                                <td class='gestaocadastros-table-celular2 btn-closeagend'>
                                    <i class='fa fa-calendar-plus-o' aria-hidden='true'></i>
                                </td>
                            </tr>
                            <tr class='dadoscadastros2'>
                                <td class='gestaocadastros-table-qtd2'>Dr. Carlos Alberto</td>
                                <td class='gestaocadastros-table-qtd2'>Av. Faria Lima 1432</td>
                                <td class='gestaocadastros-table-qtd2'>14/04/2024</td>
                                <td class='gestaocadastros-table-qtd2'>14:00</td>
                                <td class='gestaocadastros-table-celular2 btn-closeagend'>
                                    <i class='fa fa-calendar-plus-o' aria-hidden='true'></i>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </form>
        </section>

        <!----------------------------------------------------------->

        <!------------------------- Main ---------------------------->
        <div id="main">
            <!-- Conteudo -->
            <div class='conteudo'>
                <!-- Cabeçalho -->
                <div class='conteudoCabecalho'>
                    <div class='conteudoCabecalhoBem'>
                        Bem Vindo, <?php echo $user_data['nome']; ?>.
                    </div>
                    <div class='conteudoCabecalhoBem2'>
                        
                    </div>
                </div>
                <!-- Tokens -->
                <div class='conteudoTokens'>
                    <div class='conteudoTokensCards'>
                        <div class='conteudoTokensCardsCabecalho'>
                            <div class='conteudoTokensCardsCabecalhoContent'>
                                Meus Ingressos
                            </div>
                        </div>
                        <div class='conteudoTokensCardsImg'>
                            <i class="fa fa-ticket" aria-hidden="true"></i>
                        </div>
                        <div class='conteudoTokensCardsConteudo'>
                            <div class='conteudoTokensCardsConteudoContent'>
                                0 Ingressos
                            </div>
                        </div>
                        <div class='conteudoTokensCardsSeta'>
                            <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
                        </div>
                    </div>
                    <div class='conteudoTokensCards'>
                        <div class='conteudoTokensCardsCabecalho'>
                            <div class='conteudoTokensCardsCabecalhoContent'>
                                Comprar Ingressos
                            </div>
                        </div>
                        <div class='conteudoTokensCardsImg'>
                            <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                        </div>
                        <div class='conteudoTokensCardsConteudo'>
                            <div class='conteudoTokensCardsConteudoContent'>
                                
                            </div>
                        </div>
                        <div class='conteudoTokensCardsSeta'>
                            <i class="fa fa-arrow-circle-down" aria-hidden="true"></i>
                        </div>
                    </div>
                </div>
            </div>
            <div class='conteudoEvolucao'>
                <!-- Cabeçalho -->
                <div class='conteudoCabecalho'>
                    <div class='conteudoCabecalhoBem'>
                        Meus Ingressos
                    </div>
                    <div class='conteudoCabecalhoBem2'>
                        Você possui o total de 1 ingresso
                    </div>
                    <div class='conteudoCabecalhoVoltar'>
                        <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                        <span style="padding-left: 5px;">Menu</span>
                    </div>
                </div>
                <div class='conteudoTokens'>
                    <div class='conteudoChatContent'>
                        <div class='conteudoAcompanhanteContentCabecalho'>
                            <div class='conteudoTokensCardsCabecalhoContent'>
                                Conversas
                            </div>
                        </div>
                        <div style='overflow-y:scroll; width: 100%; height: 80%'>
                            <table class='dadoscadastros'>
                                <thead class='dadoscadastros'>
                                    <tr class='dadoscadastros' style='background-color:transparent'>
                                        <th colspan='1' style='padding-left:4px;'>Profissional</th>
                                        <th colspan='1' style='padding-left:4px;'>Especialidade</th>
                                        <th >Data</th>
                                        <th >Comentários</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr class='dadoscadastros'>
                                        <td class='gestaocadastros-table-prof'>Maria Helena Scomparim</td>
                                        <td class='gestaocadastros-table-esp'>Geriatria</td>
                                        <td class='gestaocadastros-table-datpr'>01/04/2024 09:20:36</td>
                                        <td class='gestaocadastros-table-com'>O paciente apresentou aumento nas atividades físicas nas últimas 2 semanas, isso contribuiu com uma redução de 2 kg.</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
            <div class='conteudoAcompanhante'>
                <!-- Cabeçalho -->
                <div class='conteudoCabecalho'>
                    <div class='conteudoCabecalhoBem'>
                        Comprar ingressos disponíveis
                    </div>
                    <div class='conteudoCabecalhoBem2'>
                    </div>
                    <div class='conteudoCabecalhoVoltar'>
                        <i class="fa fa-arrow-circle-up" aria-hidden="true"></i>
                        <span style="padding-left: 5px;">Menu</span>
                    </div>
                </div>
                <div class='conteudoTokens'>
                    <div class='conteudoChatContent'>
                        <div class='conteudoAcompanhanteContentCabecalho'>
                            <div class='conteudoTokensCardsCabecalhoContent'>
                                Jogos disponíveis
                            </div>
                        </div>
                        <div id='disponibilizardados'>
                        </div>
                    </div>
                </div>
            </div>
        </div>

            <!-- Perfil -->


        <!-- Layer cinza -->
        <div class='mensagem hidden'>
            <div class="mensagemtext">
                <i class="fa fa-exclamation-triangle" style="color: #81B902;padding-right:7px;" aria-hidden="true"></i>
                <span class='msg'></span>
            </div>
            <div class="mensagem-btno">Fechar</div>
        </div>
        <div class='overlay hidden'></div>
    </body>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="static/js/index.js?v=<?php echo $vers?>"></script>
    <script>ajaxDisponibilizar();</script>
    <script>
        const modalagendamento = document.querySelector('.modalagendamento');
        const omodalagendamentoBtns = document.querySelectorAll('.btn-openagend');
        const cmodalagendamentoBtns = document.querySelectorAll('.btn-closeagend');
        omodalagendamentoBtns.forEach((btn, index) => {
            btn.addEventListener('click', () => {
                openmodalagendamento(index);
            });
        });
        cmodalagendamentoBtns.forEach((btn, index) => {
            btn.addEventListener('click', () => {
                closemodalagendamento(index);
            });
        });

        const modal1 = document.querySelector('.modal1');
        const openmodal1Btn = document.querySelector('.btn-open');
        const closemodal1Btn = document.querySelector('.btn-close');
        const overlay = document.querySelector('.overlay');
        const closemensagem = document.querySelector('.mensagem-btno');
        openmodal1Btn.addEventListener('click', openmodal1);
        closemodal1Btn.addEventListener('click', closemodal1);
        overlay.addEventListener('click', closemodal1);
        overlay.addEventListener('click', closemodalagendamento);
        closemensagem.addEventListener('click', closemodal1);

        document.addEventListener('keydown', function (e) {
            if (e.key === 'Escape' && !modal1.classList.contains('hidden')) {
                modal1Close();
        }});

        var elements = document.getElementsByClassName('conteudoTokensCards');
        var conteudoCabecalhoVoltar = document.getElementsByClassName('conteudoCabecalhoVoltar');
        var conteudo = document.querySelector('.conteudo');
        var conteudoEvolucao = document.querySelector('.conteudoEvolucao');
        var conteudoAcompanhante = document.querySelector('.conteudoAcompanhante');

        conteudo.style.top = '0%';
        conteudoEvolucao.style.top = '100%';
        conteudoAcompanhante.style.top = '100%';

        for (var i = 0; i < conteudoCabecalhoVoltar.length; i++) {
            conteudoCabecalhoVoltar[i].addEventListener('click', function() {
                conteudo.style.top = '0%';
                conteudoEvolucao.style.top = '100%';
                conteudoAcompanhante.style.top = '100%';
            });
        }
        for (var i = 0; i < elements.length; i++) {
            elements[i].addEventListener('click', function() {
                conteudo.style.top = '-100%';
                conteudoEvolucao.style.top = '100%';
                conteudoAcompanhante.style.top = '100%';
                if (Array.from(elements).indexOf(this) === 0) {
                    conteudoEvolucao.style.top = '0%';
                }
                else if (Array.from(elements).indexOf(this) === 1) {
                    conteudoAcompanhante.style.top = '0%';
                }
            });
        }
    </script>
    
</html>
</html>