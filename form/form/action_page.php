<?php

Class Form {
    
    private $postData;
    
    function __construct($postData){
        $this->postData = $postData;
    }
    
    
    public function displayPostArray(){
        
        echo "<pre>";
        print_r($this->postData);
        echo "</pre>";
        
    }
    
}


$newForm = new Form($_POST);

 $newForm->displayPostArray();



?>