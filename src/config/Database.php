<?php
namespace App\config;
use mysqli;
use Exception;
class Database{
    public static function getConnection(){
        $envPath = realpath(dirname(__FILE__) . '/env/env.ini');
        $env = parse_ini_file($envPath);
        try{
            $conn = new mysqli($env['host'], $env['username'], $env['password'], $env['database']);
            return $conn;
        }
        catch(Exception $e){
            echo "Erro: " . $e->getMessage();
        }
    }
}