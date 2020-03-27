<?php session_start() ?>
<head></head>
<html>
<body>
<?php
include 'User&Language.php';

$_SESSION['language'] = '';
$_SESSION['logged_user'] = '';

if($_POST['send']){
    $RegisteredUsers = new RegistereUsers();
    $RegisteredUsers = ifRegistered();

    if ($_SESSION['logged_user'] == '') {
        echo    '<div align="center">
                    Вам нужно заполнить строки, что бы зайди на этот сайт.
                </div>';
        session_destroy();
        echo
        '<form action="index.php" method="post">
            <div align="center">
                <tr>
                    <td><input type = "submit" name="send" value="Return" </td>
                </tr>
            </div>
        </form>';

    }else{
                if ( ($RegisteredUsers = getData() ) == 'ru') {
                    $_SESSION['language'] = "Добрый день.";
                } elseif (($RegisteredUsers = getData() )== 'en') {
                    $_SESSION['language'] = "Good afternoon.";
                } elseif (($RegisteredUsers = getData() ) == 'ua') {
                    $_SESSION['language'] = "Добрий день.";
                } elseif (($RegisteredUsers = getData() ) == 'it') {
                    $_SESSION['language'] = "Ciao.";
                } else {
                    $_SESSION['language'] = "";
                }
            }


        echo '<form action="index.php" method="post">
                    <fieldset>
                        <legend align="center"> Account </legend>
                        <div align="center">
                            <tr>
                                <td><input type="submit" name="" value="Sign out"></td>
                            </tr>
                        </div>
                    </fieldset>
                </form>';
        echo '<form action="index3.php" method="post">
                <div align="center">
                      <tr>
                           <td><input type="submit" name="send" value="Поприветсвовать"></td>
                      </tr>
                </div>';
        }
    }
?>
</body>
</html>

