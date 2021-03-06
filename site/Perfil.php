<?php  
    include_once("../autenticate/autenticacao.php");      
    include_once("conexao.php");

    $id = $_GET["id"];
    $sql = "SELECT * FROM post where id_usuario = $id";
    $result = $conexao->query($sql);
    $imagens = array();
    $imagens = $result->fetch_all(MYSQLI_ASSOC);
    $usuario = $imagens[0];
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ECArts - Perfil</title>

    <script src="https://kit.fontawesome.com/f6d182f726.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="../styles/styles.css">
    <link rel="stylesheet" href="../styles/profile.css">
</head>

<body>

<?php  include("nav.php"); ?>

    <?php  include("aside.php"); ?>
<!-- -------------------------------------------------------------------------------------------- -->
    <div class="LayoutProfile">
        

    <img class="img-profile" src="../uploads/users/<?php echo $usuario["foto_perfil"]; ?>" alt="perfil">
    <!-- <label class="imgProfile">
        <input type="file" name="image" required />
    </label> -->

    

    <label class="indProfile">
    <h1><?php echo $usuario["nome"]; ?></h1>

    </label>

    <footer>
            <form method="POST" action="avalia_user.php" enctype="multipart/form-data" class="star">
              <div class="estrelas">
                <input type="radio" id="vazio" name="estrela" value="" checked>

                <label for="estrela_um"><i class="fa"></i></label>
                <input type="radio" id="estrela_um" name="estrela" value="1">

                <label for="estrela_dois"><i class="fa"></i></label>
                <input type="radio" id="estrela_dois" name="estrela" value="2">

                <label for="estrela_tres"><i class="fa"></i></label>
                <input type="radio" id="estrela_tres" name="estrela" value="3">

                <label for="estrela_quatro"><i class="fa"></i></label>
                <input type="radio" id="estrela_quatro" name="estrela" value="4">

                <label for="estrela_cinco"><i class="fa"></i></label>
                <input type="radio" id="estrela_cinco" name="estrela" value="5">

                <input type="hidden" name="id" value="<?php echo $usuario['id_usuario'] ?>" />
                <input type="hidden" name="estrelas" value="<?php echo $usuario['avaliacao_user'] ?>" />

                <input type="submit" value="Avaliar" class="btn-avaliar">
                </div>
              </form>

              <h1 class="star-rating"><i class="fas fa-star"></i><?php echo $usuario['avaliacao_user'] ?></h1>
          </footer>

        </form>

    <a target="_blank" href="https://wa.me/<?php echo $usuario["telefone"]; ?>"  type="button"  class="btn-whatsapp"><i class="fab fa-whatsapp"></i>Entrar em contato</a>

    </div>

    <div class="LayoutProfile-2">

        <label class="SocialMidia">

        <h1 class="profissao">Profissão: <?php echo $usuario["profissao"]; ?></h1>
        <h1 class="telefone">Whatsapp: <?php echo $usuario["telefone"]; ?></h1>

        </label>

<div class="layout-img">
  <?php 
        if(sizeof($imagens) == 0) {
        echo "Sem fotos no momento";
        }
        foreach($imagens as $imagem) {
        echo'
        <div class="post">
            <img class="img-posted" src="../uploads/posts/'.$imagem['imagem'].'" alt="">
        </div>';
        }

    ?>
</div>

    </div>


    <?php 
        if(isset($_GET["sucesso"])) {
            echo  "<script>alert('Avaliação enviada com sucesso!');</script>";
          } else if (isset($_GET["erroEstrela"])) {
            echo  "<script>alert('Erro ao enviar avaliação! Selecione pelo menos uma estrela');</script>";
        }
    ?>

</body>

<script src="../styles/main.js"></script>

</html>