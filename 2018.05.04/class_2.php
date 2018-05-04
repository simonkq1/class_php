<?php
 include_once 'MyOOTest2.php';

 class Bird {

     var $leg;
     function setLeg($leg): void
     {
         if($leg>=0&&$leg<=2){

             $this->leg=$leg;
         }else{
             $e=new Exception('error leg');
             throw $e;
//             throw new Exception('error leg');
         }
     }
 }
try{

    $bird=new Bird();
    $bird->setLeg(2);

    echo $bird->leg;
} catch (Exception $e){
     $bird->setLeg(2);
     echo $e->getMessage();
//    echo $bird->leg;
}
