<?php session_start() ?>
<head></head>
<body>
<?php
include 'User&Language.php';
$RegisteredUsers = new RegisteredUsers;
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

if(empty($_SESSION['language'])){
    $_SESSION['language'] = $_POST['language'];
}

$RegisteredUsers = getLanguage();

if($_SESSION['language'] ==  ""){
    echo '<form  method="post">
        <input type=submit name="language" value="ru"> Русский <h1></h1>
        <input type=submit name="language" value="en"> Английский <h1></h1>
        <input type=submit name="language" value="ua"> Украинский <h1></h1>
        <input type=submit name="language" value="it"> Итальянский <h1></h1>
    </form>';
}

?>
</body>
