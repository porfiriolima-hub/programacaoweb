<link rel="stylesheet" href="style.css">
      <?php 
        $nome = $_POST['nome'];
        $idade = $_POST['idade'];

        if($idade>=18){
            echo"Olá, $nome. Bem vindo!";
        }else{
          echo"Oi, $nome. Mal vindo";
        }

       //echo"<p> É um prazer te conhecer, $nome você tem $idade anos? Este é o meu site.</p>";//
      
      ?>
     

