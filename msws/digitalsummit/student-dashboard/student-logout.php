<!--
To change this template, choose Tools | Templates
and open the template in the editor.
-->
<!DOCTYPE html>
<html>
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
        <title></title>
    </head>
    <body>
        <?php
        // put your code here
        
        
        session_start();
        if (isset($_SESSION['ses_DS17_USER_EMAIL']) && $_SESSION['ses_DS17_USER_EMAIL'] != "") {
            session_unset();
            session_destroy();
        }
        header('Location: login.php');
        ?>
    </body>
</html>
