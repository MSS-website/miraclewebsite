<?php

include '../config/general.php';
$resultMessage = '';

try {
    session_start();

    if (!get_magic_quotes_gpc()) {
        $rloginId = addslashes($_GET['loginId']);
        $rpassword = addslashes($_GET['password']);
        $rexisted = addslashes($_GET['existed']);
    } else {
        $rloginId = $_GET['loginId'];
        $rpassword = $_GET['password'];
        $rexisted = $_GET['existed'];
    }

    /*
      ini_set('user_agent', "PHP"); // github requires this
      //$api = 'http://localhost:8084/EmployeeService';
      $api =SERVICE_URL;
      $url = $api . '/es/general/' .$rloginId .'/' .$rpassword;
      // make the request
      $response = file_get_contents($url);

     */


//$api =SERVICE_URL;
    //  $serviceUrl = 'http://172.17.11.250:8080/HubbleWS/general/webLoginCheck/';
    /* $serviceUrl = SERVICE_URL . '/webLoginCheck/';
      $curl = curl_init($serviceUrl);
      curl_setopt($curl, CURLOPT_POST, true);
      curl_setopt($curl, CURLOPT_RETURNTRANSFER, TRUE);
      curl_setopt($curl, CURLOPT_POSTFIELDS, "loginId=" . $rloginId . "&password=" . $rpassword);
      // $curl_response = curl_exec($curl);
      //http://www.codeproject.com/Articles/524228/REST-tutorial-Call-a-REST-Webservice-from-Wordpres

      $curl_response = curl_exec($curl);
      //echo 'response-->'.$curl_response;
      if (1 !== $curl_response) {

      $myArray = json_decode($curl_response, true);
      //echo 'code-->'.$myArray['code'];

      if ($myArray['code'] == '200') {
      $_SESSION["ses_EmpLoginId"] = $rloginId;
      $sesLoginId = $_SESSION["ses_EmpLoginId"];
      // echo '<script type="text/javascript"> hideModal();</script>';
      // echo 'code--<';
      if ($rexisted == 0)
      echo $myArray['code'];
      else
      echo $myArray['message'];

      //   location.reload();
      // header('Location: internal-webinar-modal.php');
      }
      //$resultMessage = $myArray['message'];
      else {
      echo $myArray['message'];
      // $resultMessage = "<font color=red size=2px>".$myArray['message']."</font>";
      }
      } */
    $data = array("LoginId" => "$rloginId", "Password" => "$rpassword", "Authorization" => base64_encode(SERVICE_AUTHORIZATION));
    $data_string = json_encode($data);
    $curl = curl_init(SERVICE_URL . "websiteServices/getEmployeeInformation");
    curl_setopt($curl, CURLOPT_CUSTOMREQUEST, "POST");
    curl_setopt($curl, CURLOPT_POSTFIELDS, $data_string);
    curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
    curl_setopt($curl, CURLOPT_HTTPHEADER, array(
        'Content-Type: application/json',
        'Content-Length: ' . strlen($data_string))
    );
    curl_setopt($curl, CURLOPT_TIMEOUT, 500);
    curl_setopt($curl, CURLOPT_CONNECTTIMEOUT, 500);
    $curl_response = curl_exec($curl);

    if (1 !== $curl_response) {

        $myArray = json_decode($curl_response, true);
        if ($myArray['IsAuthenticate']) {

            if ($myArray['ResultString'] == 'Valid') {
                // session_start();
                $_SESSION["ses_EmpLoginId"] = $rloginId;
                $sesLoginId = $_SESSION["ses_EmpLoginId"];
                if ($rexisted == 0){
				
				echo json_encode($myArray);
				}
                    
                else
                    echo json_encode($myArray);
            } else {

                if ($myArray['ResultString'] == 'InValidCredentiales'){
                    $resultMessage =  INVALID_CREDENTIALES_MESSAGE;
                    $myArray['ResultString'] = $resultMessage;
                }
                    
                else{
                    $resultMessage =  INACTIVE_MESSAGE ;
                    $myArray['ResultString'] = $resultMessage;
                }
                    
                
                echo json_encode($myArray);
            }
        }else {
            $resultMessage =  UNAUTHORIZED_ACCESS_MESSAGE ;
			$myArray['ResultString'] = $resultMessage;
             echo json_encode($myArray);
        }
    }
    curl_close($curl);






    /*
      // check we got something back before decoding
      if(false !== $response) {
      echo $response;
      $gists = json_decode($response, true);
      //  echo $gists['message'];
      if($gists['message']=='success'){
      //  echo $gists['name'];
      //  echo $gists['email'];
      //  echo $gists['phone'];
      //   echo $response;
      session_start();
      // Set session variables
      //$_SESSION["ses_EmpName"] = $gists['name'];
      //$_SESSION["ses_EmpEmail"] = $gists['email'];
      //$_SESSION["ses_EmpWorkPhone"] = $gists['phone'];
      $_SESSION["ses_EmpLoginId"] = $rloginId;
      //echo "Employee Name is " . $_SESSION["ses_EmpName"] . ".<br>";
      // remove all session variables
      //session_unset();

      // destroy the session
      //session_destroy();
      //echo "Employee Name is " . $_SESSION["ses_EmpName"] . ".<br>";

      //if($gists['email'] )
      if(strripos($gists['email'],"@")>0){
      //header('Location: employee-referrals.php');
      header('Location: employee-referral-form.php');

      }
      }else {
      $resultMessage = '<font color=red size=2px>'.$gists['message'].'</font>';
      }
      } // otherwise something went wrong
     */
} catch (Exception $exc) {


    $exc->getMessage();
    $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
    header('Location: ../back-end-error.php?resultMessage=' . $resultMessage);
}
?>
   


