<?php
     require_once("routing/base_url.php");

   /*  require_once("lib/config.php");
     require_once("lib/class.inputfilter.php");
     require_once("lib/class.phpmailer.php");

     $clear = new InputFilter();
     $mailSend = new PHPMailer();*/


     /**
      * [$_GET matar las etiquetas via GEt]
      * @var [type]
      */
    # $_GET = $clear->process($_GET);

   #$viewCatMenu=$objCatMenu->getCategory();

    /**
     * [$_POST matar las etiquetas via POST objeto instanciado en el index.php llamando la clase inputfilter]
     * @var [type]
     */
    #$_POST = $clear->process($_POST);

     if (!empty($_GET["action"])) {
     	$action = $_GET["action"];
     }else{
     	$action = "index";
     }

     if (is_file("controllers/".$action."Controller.php")) {
     	require_once("controllers/".$action."Controller.php");
     }else{
     	require_once("controllers/errorController.php");
     }


 ?>