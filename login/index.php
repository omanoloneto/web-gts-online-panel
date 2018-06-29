<?php

    session_start();

    date_default_timezone_set('America/Sao_Paulo');

    include "../_functions/_maker.php";
    include "../_functions/_functions.php";
    $maker = new Maker();

    if($_SESSION["gts_id"] != null && $_SESSION["gts_id"] != ""){
      $url = "http://".get_domain()."";
      ?>
        <script type="text/javascript">
          <?php if ($msg != "") { ?> var msg = "<?php echo $msg; ?>"; 
          alert(msg);<?php } ?>
          location.href="<?php echo $url; ?>";
        </script>
      <?php
    }
?>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <title>GTS by hills tech</title>
  </head>

  <style>
    .mobile-menu{
      font-size: 30px;
      margin-left: 10px;
      line-height: 50px;
      color: #ee6e73;
    }
    .mobile-top-bar{
      height: 50px;
    }
    .header {
      color: #ee6e73;
      font-weight: 200;
    }
    .new-account{
      width: 100%;
      background-color: #ee6e73;
    }
  </style>

  <body style="background-color: white;color:black;">
    <!--Import jQuery before materialize.js-->
    <!--<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>


    <script type="text/javascript"> 
    
      $(document).ready(function () { 
        $('select').material_select();
      });
      
    </script>

    <br>
    <br>
    <br>
    <div class="container">
      <div class="row">
          <form class="col s12" id="form" action="_submit.php" method="POST">

          <?php 

            $maker->set_col("4");
            $maker->open_div();
            $maker->close_div();

            $maker->set_col("4");
            $maker->open_div();

              $maker->set_label("GTS <font style=\"font-size:15px;\">by hills tech</font>");
              $maker->title();

              $maker->open_row(); //ABRE UMA LINHA

                $maker->set_col("12");
                $maker->set_name("email");
                $maker->set_label("E-mail");
                $maker->input_text(true); //ENVIAR 'TRUE' PARA CAMPO OBRIGATÓRIO

                $maker->set_col("12");
                $maker->set_name("senha");
                $maker->set_label("Password");
                $maker->input_password(true); //ENVIAR 'TRUE' PARA CAMPO OBRIGATÓRIO

              $maker->divide_row();

                $maker->set_col("12"); //ITEM DE 4 COLUNAS COM ESPAÇO DE 8 COLUNAS
                $maker->set_name("login");
                $maker->set_label("Login");
                $maker->button();

                $maker->set_col("12"); //ITEM DE 4 COLUNAS COM ESPAÇO DE 8 COLUNAS
                $maker->set_href("http://".get_domain()."/create");
                $maker->set_icon("add");
                $maker->set_label("New Account");
                $maker->button();

              $maker->close_row();

            $maker->close_div();

            $maker->set_col("4");
            $maker->open_div();
            $maker->close_div();

          ?>

          </form>
      </div>
    </div>
    <br>

  </body>
  <script type="text/javascript">

    $("#login").click(function (){
      $("#form").submit();
    });

    // Show sideNav
    $('.button-collapse').sideNav('show');
    // Hide sideNav
    $('.button-collapse').sideNav('hide');
    // Destroy sideNav
    $('.button-collapse').sideNav('destroy');

    $('.button-collapse').sideNav({
        menuWidth: 300, // Default is 300
        edge: 'left', // Choose the horizontal origin
        closeOnClick: true, // Closes side-nav on <a> clicks, useful for Angular/Meteor
        draggable: true // Choose whether you can drag to open on touch screens
      }
    );
  </script>
</html>