<!DOCTYPE html>
<html>
<meta charset="utf-8" name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
form {
    border: 3px solid #f1f1f1;
}

input[type=text], input[type=password] {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    box-sizing: border-box;
}

button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
}

button:hover {
    opacity: 0.8;
}

.cancelbtn {
    width: auto;
    padding: 10px 18px;
    background-color: #f44336;
}

.imgcontainer {
    text-align: center;
    margin: 24px 0 12px 0;
}

img.avatar {
    width: 40%;
    border-radius: 50%;
}

.container {
    padding: 16px;
}

span.psw {
    float: right;
    padding-top: 16px;
}

/* Change styles for span and cancel button on extra small screens */
@media screen and (max-width: 300px) {
    span.psw {
       display: block;
       float: none;
    }
    .cancelbtn {
       width: 100%;
    }
}
</style>
<body>
<div class="w3-container w3-cell-middle" style="width:30%;margin-right:auto;margin-left:auto;">

<div class="w3-container w3-center" ><h2>Núcleo Pedagógico</h2></div>

<?php echo form_open('Login/Checar_Login'); ?>

<?php

  if (isset($error_login_invalido)) {
  echo "<div class='w3-container w3-center w3-red'>";
  echo $error_login_invalido;
  echo "</div>";
  }
?>

  <div class="container">
    <label><b>Usuário</b></label>
    <input type="text" placeholder="Entre com o usuário" name="login" required>

    <label><b>Senha</b></label>
    <input type="password" placeholder="Entre com a senha" name="senha" required>

    <button type="submit">Entrar</button>
    <input type="checkbox" checked="checked"> Lembrar-me
  </div>

  <div class="container" style="background-color:#f1f1f1">
    <span class="psw">Esqueçeu sua senha?</span>
  </div>
</form>
</div>

</body>
</html>
