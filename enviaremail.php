<?php
  $nome = $_POST['nome'];
  $email= $_POST['email'];
  $mensagem= $_POST['mensagem'];
?>
<?php
  $to = "fprocaci@gmail.com";
  $subject = "Mensagem do Site";
  $message = "<p>$mensagem</p>";
  $header = "MIME-Version: 1.0 "."\n";
  $header .= "Content-type:text/html;charset=iso-8859-1"."\n";
  $header .= "From: $email"."\n";
  mail($to,$subject,$mensagem,$header);
  echo "Mensagem enviada com sucesso!";
  echo "<a href='index.html'>Voltar</a>";
?>