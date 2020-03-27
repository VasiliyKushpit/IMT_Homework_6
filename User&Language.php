<?php
class RegisteredUsers{
    public $users = [
        ['login' => 'Vasisualiy', 'password' => '12345', 'lang' => 'ru'],
        ['login' => 'Afanasiy', 'password' => '54321', 'lang' => 'en'],
        ['login' => 'Petro', 'password' => 'EkUC42nzmu', 'lang' => 'ua'],
        ['login' => 'Pedrolus', 'password' => 'Cogito_ergo_sum', 'lang' => 'it'],
        ['login' => 'Sasha', 'password' => 'Ignorantia_non_excusat']
    ];

    public function ifRegistered(){
        foreach ($this -> users as $data_key => $data_value) {
            if ($data_value['login'] == $_POST['name'] && $data_value['password'] == $_POST['password']) {
                $_SESSION['logged_user'] = $_POST['name'];
            }
        }
    }
    public function getLanguage(){
        foreach($this->users as $data_key => $data_value){
            if($_SESSION['logged_user'] == $data_value['login']){
            switch ($data_value['lang']){
                case "ru":
                    $_SESSION['language'] = "ru";
                    break;
                case "en":
                    $_SESSION['language'] = "en";
                    break;
                case "ua":
                    $_SESSION['language'] = "ua";
                    break;
                case "it":
                    $_SESSION['language'] = "it";
                }
            }
        }
    }
    public function sayLanguage(){
            switch ($_SESSION['language']){
                case "ru":
                    echo "Добрый день.";
                    break;
                case "en":
                    echo "Good afternoon.";
                    break;
                case "ua":
                    echo "Добрий день.";
                    break;
                case "it":
                    echo "Ciao.";
            }
    }
}
?>