<?php
    /**
     * Author: Bora
     * Contact: manasijevic.bora@gmail.com
     * Date: 11/13/2015
     * Project name: RegistrationLoginSystem_oop
     * File name: init.php
     * Desc: Auto load function, and including database class
     */

    require_once 'classes/Database.php';

    function __autoload($class)
    {
        $className = ucfirst($class);

        require_once "classes/{$className}.php";
    }