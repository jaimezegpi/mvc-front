<?php
if(SETUP_SHOW_PATH){ developMode(__FILE__);}
//MANUAL ACTION DETECTION
if (isset($_GET['action']))
{
  switch ($_GET['action']) {
    case 'demo':
      if (isset($_GET['param'])){
        $template_var_demo = "Action detected: ".$_GET['action']." <br> Value: ".$_GET['param'];
      }
       break;

    default:
      # code...
      break;
  }
}