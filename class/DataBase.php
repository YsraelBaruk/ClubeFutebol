<?php
class DataBase{
    public function __construct(){
        $this->host = 'localhost';
        $this->db = 'campeonato_futbol';
        $this->user = 'root';
        $this->pass = '';
    }
    public function conectar(){
        return new PDO("mysql:host=$this->host;dbname=$this->db", $this->user, $this->pass);
    }
}