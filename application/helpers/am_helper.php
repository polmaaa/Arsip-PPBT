<?php
function display($data=null , $break = null){
       if($break == 1){
              echo "<pre>";
                     print_r($data);
              echo  "</pre>";
              die;
       }else{
              echo "<pre>";
                     print_r($data);
              echo  "</pre>";
       }
}


?>