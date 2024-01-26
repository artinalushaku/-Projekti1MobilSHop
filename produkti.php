<?php

class User{
    private $id;
    private $name;
    private $price;
    private $image;
    


    function __construct($id,$name,$price,$image){
            $this->id = $id;
            $this->name = $name;
            $this->surname = $price;
            $this->email = $image;
          
    }


    function getId(){
        return $this->id;
    }
    function getName(){
        return $this->name;
    }
    function getPrice(){
        return $this->price;
    }
    function getImage(){
        return $this->image;
    }
   
}

?> 