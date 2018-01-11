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
        if (isset($_SESSION['ses_Email']) && $_SESSION['ses_Email'] != "") {
            session_unset();
            session_destroy();
        }
        header('Location: AdminLogin.php');
        ?>
    </body>
</html>
