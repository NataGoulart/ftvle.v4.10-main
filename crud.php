
        <?php
        $id=$_POST["id"];
        $nome=$_POST["produto"];
        $email=$_POST["codigo"];
        include("conecta.php");
        
        
        if (isset($_POST["excluir"])) {
            $comando = $pdo->prepare("DELETE FROM codigos WHERE id='$id'");
            $resultado = $comando->execute();
            header("Location: salvar_imagem.php");
        }
        
        if (isset($_POST["alterar"])) {
            $comando = $pdo->prepare("UPDATE codigos SET produto='$nome',codigo='$email' WHERE id='$id'");
            $resultado = $comando->execute();
            header("Location: salvar_imagem.php");
        }
        
        if (isset($_POST["listar"])) {
            header("Location: salvar_imagem.php?email=$email");
        }
        
        ?>