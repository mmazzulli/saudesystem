<?php
    include 'class/Especial.php';

    $especialidade = new Especialidade();

    $especialidade->setIdEspecialidade($_GET['idEspecialidade']);

    $resultado = $especialidade->excluirEspecialidade();

    if ($resultado != 0) {
        echo '
        <center>
            <div class="alert alert-success" style="width: 455px;">
                <strong>SUCESSO!</strong> Registro excluído com sucesso!
            </div>
        </center>';
        echo "
        <script type=\"text/javascript\">
        alert(\"Especialidade excluída com sucesso!\");
        </script>
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=
        http://localhost/sis-clinica/index.php?pagina=elenca_especial.php'
        ";
    } else {
        echo '
        <center>
            <div class="alert alert-danger" style="width: 455px;">
                <strong>ERRO!</strong> Não foi possível excluir o registro!
            </div>
        </center>';
        echo "
        <script type=\"text/javascript\">
        alert(\"Erro ao excluir especialidade!\");
        </script>
        <META HTTP-EQUIV=REFRESH CONTENT = '0;URL=
        http://localhost/sis-clinica/index.php?pagina=elenca_especial.php'
        ";
    }
