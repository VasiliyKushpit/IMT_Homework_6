<?php
class RegisteredUsers
{
    public $users = [
        ['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],
        ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],
        ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],
        ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],
        ['login' => 'Sasha', 'password' => 'Ignorantia_non_excusat']
    ];

    public function ifRegistered(){
        foreach ($this->users as $data_key => $data_value) {
            foreach ($data_value as $key => $value) {
                if ($value == $_POST['name']) {
                    foreach ($data_value as $key => $value) {
                        if ($value == $_POST['password']) {
                            $_SESSION['logged_user'] = $_POST['name'];
                        }
                    }
                }
            }
        }
    }
    public function getData(){
        foreach($this->users as $data_key => $data_value){
            return $_SESSION['logged_user'] == $data_value['login'];
            }
        }
    public function getLanguage(){
        if($_SESSION['language'] != '') {
            if ($_SESSION['language'] == 'ru') {
                $_SESSION['language'] = "Добрый день.";
            } elseif ($_SESSION['language'] == 'en') {
                $_SESSION['language'] = "Good afternoon.";
            } elseif ($_SESSION['language'] == 'ua') {
                $_SESSION['language'] = "Добрий день.";
            } elseif ($_SESSION['language'] == 'it') {
                $_SESSION['language'] = "Ciao.";
            }
            echo $_SESSION['language'];
        }
    }
}



?>