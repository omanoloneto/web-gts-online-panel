<?php

    session_start();

    include "../_functions/_maker.php";
    include "../_functions/_functions.php";
    $maker = new Maker();

    if($_SESSION["gts_id"] == null || $_SESSION["gts_id"] == ""){
      //$msg = "Você precisa estar logado para acessar este painel!";
      $url = "../login";
    }
    ?><script type="text/javascript">
        <?php if($msg != "") { ?>var msg = "<?php echo $msg; ?>";
        alert(msg);<?php }
        if($url != "") { ?>location.href="<?php echo $url; ?>";
        <?php } ?>
    </script><?php

    $mobile = is_mobile();
?>
<html>
  <head>
    <!--Import Google Icon Font-->
    <link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <!--Import materialize.css-->
    <link type="text/css" rel="stylesheet" href="../css/materialize.min.css"  media="screen,projection"/>

    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>

    <meta charset="utf-8"/>

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

  <body style="background-color: #efefef;color:black;">
    <!--Import jQuery before materialize.js-->
    <!--<script type="text/javascript" src="https://code.jquery.com/jquery-2.1.1.min.js"></script>-->
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.7.1.min.js"></script>
    <script type="text/javascript" src="../js/materialize.min.js"></script>


    <script type="text/javascript"> 
    
      $(document).ready(function () { 
        $('select').material_select();
      });
      
    </script>

    <!-- MENU - MODO DESKTOP -->
    <nav>
      <div class="nav-wrapper" style="background-color: #009acd;">
        <a href="../" class="brand-logo"><img src="../images/logo.png" style="margin-left: 15px; margin-top: 8px; height: 50px;" /></a>
        <ul class="right hide-on-med-and-down">

          <?if($_SESSION["gts_lg"] == "2"){?><li><a href="../painel">Painel</a></li><?}else{?><li><a href="../painel">Dashboard</a></li><?}?>

          <?if($_SESSION["gts_lg"] == "2"){?><li><a href="?o=documentation">Documentação</a></li><?}else{?><li><a href="?o=documentation">Documentation</a></li><?}?>

          <?if($_SESSION["gts_lg"] == "2"){?><li><a href="?o=jogos_list">Meus Jogos</a></li><?}else{?><li><a href="?o=jogos_list">My Games</a></li><?}?>

          <?if($_SESSION["gts_lg"] == "2"){?><li><a href="?o=all_list">Todos os Jogos</a></li><?}else{?><li><a href="?o=all_list">All Games</a></li><?}?>

          <?if($_SESSION["gts_lg"] == "2"){?><li><a href="?o=conta_form">Minha Conta</a></li><?}else{?><li><a href="?o=conta_form">My Account</a></li><?}?>

            <?php if($_SESSION["clube_social_adm_tp"] == "3" || $_SESSION["clube_social_adm_tp"] == "4"){ ?>
              
              <li><a href="?o=log_list">LOG DE ATIVIDADES</a></li>

            <?php } ?>

          <?if($_SESSION["gts_lg"] == "2"){?><li><a href="_logout.php">Sair</a></li><?}else{?><li><a href="_logout.php">Logout</a></li><?}?>
        </ul>
      </div>
    </nav>

    <div class="container">
    <?php 

      if(isset($_GET["o"])){
        require_once("modules/".$_GET["o"].".php");
      }else{
        require_once("modules/painel.php");
      }
      
    ?>
    </div>

  </body>
  <script type="text/javascript">
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