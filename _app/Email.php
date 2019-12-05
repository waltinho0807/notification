<?php 
  namespace Notification;

  use PHPMailer\PHPMailer\PHPMailer;
  use PHPMailer\PHPMailer\Exception;

  
  class Email{

  	private $mail = \stdClass::class;


  	public function __construct(){
    $this->mail = new PHPMailer(true);
  		
    $this->mail->SMTPDebug = 2;                      // Enable verbose debug output
    $this->mail->isSMTP();                                            // Send using SMTP
    $this->mail->Host       = 'smtp.live.com';                    // Set the SMTP server to send through
    $this->mail->SMTPAuth   = true;                                   // Enable SMTP authentication
    $this->mail->Username   = 'waltinhoacalegari@hotmail.com.com';                     // SMTP username
    $this->mail->Password   = 'fodaboa';                               // SMTP password
    $this->mail->SMTPSecure = 'tsl';         
    $this->mail->Port       = 587; 
    $this->mail->Charset = 'utf-8';
    $this->mail->setLanguage('br');
    $this->mail->isHTML(true);
    $this->mail->setFrom('waltinhoandluis@yahoo.com', 'Waltinhocalegari');

  	}

  	public function sendEmail($subject, $body, $replyEmail, $replyName, $addressEmail, $addressName){
  		$this->mail->Subject = (string)$subject;
  		$this->mail->Body = $body;

  		$this->mail->addReplyTo($replyEmail, $replyName);  //remetente
        $this->mail->addAddress($addressEmail, $addressName); //


        try{
        	$this->mail->send();
        }catch(Exeption $e){
            echo "erro ao enviar: {$this->mail->ErrorInfo} {$e->getMessage}";
        }

  	}

  }
  


 ?>