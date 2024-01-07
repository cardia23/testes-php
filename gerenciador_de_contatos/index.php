<?php
class Contact{
  public $name;
  public $email;
  public $phone;
  public function getName(){
    return $this->name;
  }

  public function getEmail(){
    return $this->email;
  }
  public function getPhone(){
    return $this->phone;
  }

  public function setEmail($email){
   $this->email = $email;
  
  }
  public function setPhone($phone){
   $this->phone = $phone;
    
  }
public function __construct( $name, $email, $phone ){
  $this->name = $name;
  $this->email = $email;
  $this->phone = $phone;
}
}
$contato = new Contact('João', 'joao@example.com',123456789);
echo $contato->getName(); // Retorna o nome atual
echo $contato->getEmail(); // Retorna o e-mail atual
echo $contato->getPhone(); // Retorna o telefone atual

$contato->setEmail('joao@gmail.com'); // Atualiza o e-mail para 'joao@gmail.com'
$contato->setPhone(987654321); // Atualiza o telefone para 987654321

echo $contato->getEmail(); // Retorna 'joao@gmail.com'
echo $contato->getPhone(); // Retorna 987654321

?>