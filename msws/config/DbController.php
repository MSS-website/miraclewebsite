<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of DbController
 *
 * @author miracle
 */
class DbController {
    //put your code here
   /*Local environment */
  /*  var $host="172.17.0.150:3306";
    var $username="AppAdmin";
    Var $password="lokam001";
    var $database="mswcm"; */
	/*production environment */
  /*  var $host="127.0.0.1:3306";
    var $username="mswcm";
    var $password="Gr@^dr1v3r@S3c";
    var $database="mswcm";
    */
	var $host="192.168.1.131:3306";
    var $username="AppAdmin";
    var $password="lokam001";
    var $database="mswcm";
    var $myconn;

function connectToDatabase()
    {
    
    
        $conn= mysql_connect($this->host,$this->username,$this->password);
        if(!$conn)
        {
           // die ("Cannot connect to the database");
           //  throw new Exception(mysqli_connect_error());
              $resultMessage = '<font color=red size=2px>Unable to connect DB.</font>';
             header('Location: ../back-end-error.php?resultMessage='.$resultMessage); 
        }
        else
        {
          
            $this->myconn = $conn;
        }
     //   echo serialize($this->myconn) . "\n";
        return $this->myconn;
    }

 function selectDatabase()
    {
        $conn=mysql_select_db($this->database);
        if(mysql_error())
        {
            //echo "Cannot find the database ".$this->database;
             throw new Exception(mysqli_connect_error());
        }
         else
        {
          
            $this->myconn = $conn;
        }
         return $this->myconn;
    }
    function closeConnection()
    {
        if($this->myconn){
             mysql_close($this->myconn);
        }
       
    }
    

}

?>
