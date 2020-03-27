<?php session_start() ?>
<head></head>
<html>
<body>
<?php

include 'User&Language.php';

$_SESSION['language'] = '';
$_SESSION['logged_user'] = '';

if($_POST['send']) {
    $RegisteredUsers = new RegisteredUsers;
    $RegisteredUsers->ifRegistered();

    if ($_SESSION['logged_user'] == '') {
        echo '<div align="center">
                    Вам нужно заполнить строки, что бы зайди на этот сайт.
                </div>';
        session_destroy();
        echo
        '<form action="RegistrationPage.php" method="post">
            <div align="center">
                <tr>
                    <td><input type = "submit" name="send" value="Return" </td>
                </tr>
            </div>
        </form>';

    } else {

    $RegisteredUsers -> getLanguage();

        echo '<form action="RegistrationPage.php" method="post">
                    <fieldset>
                        <legend align="center"> Account </legend>
                        <div align="center">
                            <tr>
                                <td><input type="submit" name="" value="Sign out"></td>
                            </tr>
                        </div>
                    </fieldset>
                </form>';
        echo '<form action="GreetingsPage.php" method="post">
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