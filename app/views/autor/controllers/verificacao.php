<?php 
  session_start();
  if(isset($_SESSION['Perfil']) && $_SESSION['autor'] == true){

      return null;
  }
  else{
    echo "<script>alert('Não existe conta cadastratada, por favor cadastre-se novamente');
    window.location.href='../../../../index.php';<script>";
  }

?>