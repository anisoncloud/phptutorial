<?php
class DataService{
    //public $members = array();
    public $username;
    public $password;
    public $fullname;
    public $email;
    private $Data;
    public $memberss;


    function __construct(){



    }

    public function User()
    {

        $members []= array(
            'username' => 'anis',
            'password' => 'password',
            'fullname' => 'Anisur Rahman',
            'email' => 'anisoncloud@gmail.com'
        );
        return $members;
    }

    public function setUser($a, $b, $c, $d){
            $this->fullname=$a;
            $this->username=$b;
            $this->password = $c;
            $this->email = $d;
    }

    public function getMembers(){
        $memberss = array(
        'userName' => $this->username,
        'password'=> $this->password,
        'fullName' => $this->fullname,
        'eMail' =>$this->email
       );

        return $memberss;

    }

}

?>