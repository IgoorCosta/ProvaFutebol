<?php
    session_start();
    $connection = 'safe';
    include("phpsystems/sisConnection.php");
    include("phpsystems/sisFunctions.php");
	$user_data = check_login($consis);
    $g = gmdate('Y-m-d H:i:s');

    $vagashtml = '';
    $result = mysqli_query($consis, "SELECT `id`, `nome`, `data`, `arquibancada`, `vagas` FROM `eventos` WHERE 1");
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)){
            $nome = $row['nome'];
            $data = $row['data'];
            $arquibancada = $row['arquibancada'];
            
            # Ler vagas
            $vagas = [];
            $arrayVagas = json_decode($row['vagas'], true);
            for ($i = 0; $i < 15; $i++) {
                if ($arrayVagas[$i]['usuario'] != "NULL") {
                    $vagas[$arrayVagas[$i]['vaga']] = '1';
                    $vagashtml = $vagashtml."<div class='lugarOcupado'>".$arrayVagas[$i]['vaga']."</div>";
                }
                else {
                    $vagas[$arrayVagas[$i]['vaga']] = '0';
                    $vagashtml = $vagashtml."<div class='lugarLivre' onclick=ajaxComprar('".$arrayVagas[$i]['vaga']."')>".$arrayVagas[$i]['vaga']."</div>";
                }
            }
        }
    }


    $html = "
                <div style='overflow-y:scroll; width: 100%; height: 80%'>
                    <table class='dadoscadastros'>
                        <thead class='dadoscadastros'>
                            <tr class='dadoscadastros' style='background-color:transparent'>
                                <th colspan='1' style='padding-left:4px;'>Evento</th>
                                <th colspan='1' style='padding-left:4px;'>Data</th>
                                <th >Arquibancada</th>
                                <th >Lugares</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class='dadoscadastros'>
                                <td class='gestaocadastros-table-prof'>".$nome."</td>
                                <td class='gestaocadastros-table-esp'>".$data."</td>
                                <td class='gestaocadastros-table-datpr'>".$arquibancada."</td>
                                <td class='gestaocadastros-table-com'>
            ";


    $html = $html.$vagashtml."
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>";
    
    $dados['html'] = $html;

    $send = json_encode($dados);   
    echo $send;
    die;

?>