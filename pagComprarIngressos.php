<?php
    session_start();
    $connection = 'safe';
    include("phpsystems/sisConnection.php");
    include("phpsystems/sisFunctions.php");
	$user_data = check_login($consis);
    $g = gmdate('Y-m-d H:i:s');

    if(isset($_POST['filter'])) {
        $fill = json_decode($_POST['filter']);
        $receive = $fill->ope;
    }

    $result = mysqli_query($consis, "SELECT `id`, `nome`, `data`, `arquibancada`, `vagas` FROM `eventos` WHERE id = '1';");
    if(mysqli_num_rows($result) > 0) {
        while($row = mysqli_fetch_array($result)){
            $arrayVagas = json_decode($row['vagas'], true);
            $posicao_parametro = intval($receive); 
            $arrayVagas[$posicao_parametro-1]["usuario"] = $user_data["id"]; // Defina o novo valor aqui
            //$novo_json = '[{"vaga":"01","usuario":"NULL"},{"vaga":"02","usuario":"NULL"},{"vaga":"03","usuario":"NULL"},{"vaga":"04","usuario":"NULL"},{"vaga":"05","usuario":"NULL"},{"vaga":"06","usuario":"NULL"},{"vaga":"07","usuario":"NULL"},{"vaga":"08","usuario":"NULL"},{"vaga":"09","usuario":"NULL"},{"vaga":"10","usuario":"NULL"},{"vaga":"11","usuario":"NULL"},{"vaga":"12","usuario":"NULL"},{"vaga":"13","usuario":"NULL"},{"vaga":"14","usuario":"NULL"},{"vaga":"15","usuario":"NULL"}]';
            $novo_json = json_encode($arrayVagas);
            $result2 = mysqli_query($consis, "UPDATE `eventos` SET `vagas`='".$novo_json."' WHERE id = '1';");
        }
    }

    die;

?>