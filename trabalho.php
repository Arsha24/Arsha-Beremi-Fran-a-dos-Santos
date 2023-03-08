<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="trabalho.css">
    <title>Tela de Login </title>
</head>

<body>

    <?php
    
    $login = "Arsha";
    $senha = "123";

    if(isset($_POST["login"])){
    //        echo $_POST["login"] . "<br>";
    //        echo $_POST["senha"];
        if($_POST["login"] == $login and $_POST["senha"] == $senha){
            header("Location: trabalho p2.php");
            
        }else{
            echo "Login ou senha inválido";
        }
    }

    ?>
   
    <div id="login">

    <form method="post" class="quadro" > 
    <div class="quadro-cabeçario">

         <h2>Login</h2>

    </div>
    
    <div class="quadro-dados">
        <div class="dados">
        <label for="login">Usuário</label>
        <input type="text" name="login"><br>
    </div>
    <div class="dados">
        <label for="senha">Senha</label>
        <input type="password" name="senha">
    </div> 
    </div>  

    <div class="botão">
        <input type="submit" value="login" class="submit">
    </div>   
    </form>
</div>
</body>


</html>