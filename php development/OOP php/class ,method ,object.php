<?php
class person{
public $name="shamim sorkar";
public $age;
public function personname(){
echo "Person Name is:".$this->name."<br/>"; 
}
public function personage($k){
    echo "Person Age is:".$this->age=$k; 
}
}
$person1=new person;
$person1->name;
$person1->personname();
$person1->personage("23");
?>