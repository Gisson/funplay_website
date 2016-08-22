<?php
require_once("php/src/Controller.php");
require_once("php/src/Model.php");
require_once("php/src/View.php");
require_once("php/src/HomeView.php");

$template = "Template.html";



if( isset($_POST['screen'] )){

}
else{

  $view = new HomeView($template);
}
echo ($view->show());

 ?>
