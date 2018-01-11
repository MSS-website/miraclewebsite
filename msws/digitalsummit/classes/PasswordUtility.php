<?php
//define("ENCRYPTION_KEY", "DS17");
class PasswordUtility{
	/**
	 * Returns an encrypted & utf8-encoded
	 */
	/*function encrypt($pure_string) {
		$iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
		$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
		$encrypted_string = mcrypt_encrypt(MCRYPT_BLOWFISH, ENCRYPTION_KEY, utf8_encode($pure_string), MCRYPT_MODE_ECB, $iv);
		return $encrypted_string;
	}
	
	
	function decrypt($encrypted_string) {
		$iv_size = mcrypt_get_iv_size(MCRYPT_BLOWFISH, MCRYPT_MODE_ECB);
		$iv = mcrypt_create_iv($iv_size, MCRYPT_RAND);
		$decrypted_string = mcrypt_decrypt(MCRYPT_BLOWFISH, ENCRYPTION_KEY, $encrypted_string, MCRYPT_MODE_ECB, $iv);
		return $decrypted_string;
	}
	
	
	*/
	
	
	
	
	function encrypt($userPassword)
	{
		$result= '';
		$encrypt="";
		try {
			$result = str_split($userPassword);
			
			
			for( $i = 0; $i<sizeof($result); $i++ ) {
				$asciichar=ord($result[$i])+2;
				$accharmul2=$asciichar*2;
				$encryasciiarr[$i]=$accharmul2;
			}
			$encrypt='';
			for( $j = 0; $j<sizeof($encryasciiarr); $j++ ) {
				$encrypt=$encrypt.'@'.$encryasciiarr[$j];
			}
			
		}catch(Exception $exc){
			$exc->getMessage();
		//	$resultMessage= '<font color=red size=2px>'.$exc.'</font>';
			//header('Location: ../back-end-error.php?resultMessage='.$resultMessage);
			// $conn->closeConnection(); // closing the connection
			
		}
		return $encrypt;
	}
	function decrypt($userPassword)
	{
		$result= '';
		$orval="";
		try {
			$result = explode("@",$userPassword);
			$inval=0;
			$instr=".";
			$instr1="";
			
			for($lk=0;$lk<sizeof($result);$lk++) {
				if(strcmp($result[$lk],"")==0){
					$instr = $result[$lk];
				} else {
					$instr1 = $result[$lk];
					$inval = (int)$instr1;
					$divval = $inval/2;
					$minusval = $divval-2;
					$orval = $orval.chr($minusval);
				}
			}
		}catch(Exception $exc){
			$exc->getMessage();
			//$resultMessage= '<font color=red size=2px>'.$exc.'</font>';
			//header('Location: ../back-end-error.php?resultMessage='.$resultMessage);
		}
		return $orval;
	}
	
}



/*
$string = "Kola@1988";

echo $encrypted = encrypt($string, ENCRYPTION_KEY);
echo "<br />";
echo $decrypted = decrypt($encrypted, ENCRYPTION_KEY);
*/

?>