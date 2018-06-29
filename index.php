<?php
    session_start();

    if($_SESSION["gts_id"] == null || $_SESSION["gts_id"] == ""){
      exit("<script>location.href='login';</script>");
    }else{
      exit("<script>location.href='painel';</script>");
    }
?>
