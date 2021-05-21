<html>

    <head> 

         <meta charset="UTF-8">

    </head>

    <body>

         <form action="" method="get">

          Informe uma frase 

          <input type="text" name="text"  />

          <input type="submit" value="enviar" name="enviar"   / >

         </form>



    <?php

          $n = $_GET['text'];

           

           $str = 'lmcrn';

           echo strlen ($n);

     ?>

    </body>

</html>