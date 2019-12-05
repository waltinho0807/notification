<?php 
 require __DIR__. '/lib_ext/autoload.php';

 
 use Notification\Email;

 

 $novoEmail = new Email;



 $novoEmail->sendEmail("Assunto de test", "<p>Esse é um test</p>", "waltinhocalegari@hotmail.com", "waltinhoandluis@yahoo.com", "waltinhoandluis@yahoo.com", "walter");

 ?>