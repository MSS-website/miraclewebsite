
<?php

require '../../config/general.php';
require '../../config/ConnectionProvider.php';
$resultMessage = '';
$errorMessage = '';
$isValidUser = 'NO';
$validationType = '';
$objId = 7;
session_start();
if (isset($_POST['btnLoginSubmit'])) {
    try {
        $validationType = 'Login';
        $_SESSION["ses_Curr_VideoId"] = '';
        $_SESSION["ses_Curr_Err_Msg"] = '';
        $_SESSION["ses_Curr_AccessType"] = 'I';
        if (!get_magic_quotes_gpc()) {
            $rloginId = addslashes($_POST['loginId']);
            $rpassword = addslashes($_POST['password']);
            $rvideoIdEmp = addslashes($_POST['videoIdEmp']);
            $rphpFileNameEmp = addslashes($_POST['phpFileNameEmp']);
        } else {
            $rloginId = $_POST['loginId'];
            $rpassword = $_POST['password'];
            $rvideoIdEmp = $_POST['videoIdEmp'];
            $rphpFileNameEmp = $_POST['phpFileNameEmp'];
        }

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
        //  echo 'curl_response----'.$curl_response; 
        if (1 !== $curl_response) {

            $myArray = json_decode($curl_response, true);
            echo 'myArray----' . $myArray;
            if ($myArray['IsAuthenticate']) {

                if ($myArray['ResultString'] == 'Valid') {
                    // session_start();
                    //$_SESSION["ses_EmpLoginId"] = $rloginId;
                    //$_SESSION["ses_EmpPassword"] = $rpassword;
                    $tempFirstname = $myArray['FName'];
                    $tempLastname = $myArray['LName'];
                    $tempOrganization = $myArray['OrgId'];
                    $tempDesignation = $myArray['TitleTypeId'];
                    $tempEmail = $myArray['Email1'];
                    $tempWorkPhone = $myArray['WorkPhoneNo'];
                    $sql = "INSERT INTO tblResourceDepotDetails (ObjectId,RefId,FName,LName,Organization,Designation,Email,WorkPhone,AccessType)   " .
                            " VALUES(:rObjectId,:rRefId,:rfirstname,:rlastName,:rorganization," .
                            ":rdesignation,:remail,:rphone,'I')";

                    $stmt = $conn->prepare($sql);

                    $stmt->bindParam(':rObjectId', $objId);
                    $stmt->bindParam(':rRefId', $rvideoIdEmp);
                    $stmt->bindParam(':rfirstname', $tempFirstname);
                    $stmt->bindParam(':rlastName', $tempLastname);
                    $stmt->bindParam(':rorganization', $tempOrganization);
                    $stmt->bindParam(':rdesignation', $tempDesignation);
                    $stmt->bindParam(':remail', $tempEmail);
                    $stmt->bindParam(':rphone', $tempWorkPhone);
                    if ($stmt->execute()) {
                        $checkFlag = $conn->lastInsertId();
                        $_SESSION["ses_Curr_VideoId"] = $rvideoIdEmp;
                        $_SESSION["ses_Curr_Err_Msg"] = 'None';
                        header('Location: ' . $rphpFileNameEmp);
                    } else {
                        $_SESSION["ses_Curr_VideoId"] = '-1';
                        $_SESSION["ses_Curr_Err_Msg"] = 'Please try again.';
                        $signupErrMessage = "Please try again.";
                    }
                    //header('Location: standards_download_page.php');
                } else {

                    if ($myArray['ResultString'] == 'InValidCredentiales') {
                        $_SESSION["ses_Curr_VideoId"] = '-1';
                        $_SESSION["ses_Curr_Err_Msg"] = INVALID_CREDENTIALES_MESSAGE;
                        $errorMessage = INVALID_CREDENTIALES_MESSAGE;
                        header('Location: ' . $rphpFileNameEmp);
                    }
                    // $resultMessage = "<font color=red size=2px>" . INVALID_CREDENTIALES_MESSAGE . " </font>";
                    else {
                        $errorMessage = INACTIVE_MESSAGE;
                        $_SESSION["ses_Curr_VideoId"] = '-1';
                        $_SESSION["ses_Curr_Err_Msg"] = INACTIVE_MESSAGE;
                        header('Location: ' . $rphpFileNameEmp);
                        // $resultMessage = "<font color=red size=2px>" . INACTIVE_MESSAGE . " </font>";
                    }
                }
            } else {
                $errorMessage = UNAUTHORIZED_ACCESS_MESSAGE;
                $_SESSION["ses_Curr_VideoId"] = '-1';
                $_SESSION["ses_Curr_Err_Msg"] = UNAUTHORIZED_ACCESS_MESSAGE;
                //$resultMessage = "<font color=red size=2px>" . UNAUTHORIZED_ACCESS_MESSAGE . "</font>";
                header('Location: ' . $rphpFileNameEmp);
            }
        }
        curl_close($curl);
    } catch (Exception $exc) {


        $exc->getMessage();
        $resultMessage = '<font color=red size=2px>' . $exc . '</font>';
        header('Location: ../../back-end-error.php?resultMessage=' . $resultMessage);
    }
}
?>

