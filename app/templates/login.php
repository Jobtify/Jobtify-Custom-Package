<br><br><br>

<div class="wrapper fadeInDown">
  <div id="formContent">
	<?php 
		
		if(isset($_POST['email']) && isset($_POST['password'])){
			$this->candidato->login($_POST['email'], $_POST['password']);
		}
		

	 ?>

    <!-- Tabs Titles -->

    <!-- Icon -->
    <div class="fadeIn first">
      <i class="far fa-user"></i>
    </div>

    <!-- Login Form -->
    <form method="post" action="">
      <input type="email" id="login" class="fadeIn second loginInput" name="email" placeholder="Email">
      <input type="password" id="password" class="fadeIn third loginInput" max="10" name="password" placeholder="password">
      <input type="submit" class="fadeIn fourth" value="Entrar">
    </form>

    <!-- Remind Passowrd -->
    <div id="formFooter">
      <a class="underlineHover" href="#">¿Olvidaste tu contraseña?</a>
      <a class="underlineHover" href="#">¿No tienes cuenta?</a>
    </div>

  </div>
</div>