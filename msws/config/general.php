<?php

/*
 * To change this template, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of general
 *
 * @author miracle
 */

/*Mail flag for to enable mails if EMAILFLAG is 1 the mails will sent or else 0 the no emails will be sent */
if (!defined('EMAILFLAG')) define('EMAILFLAG', '1');
/* Webservice URL For Production */
//if (!defined('SERVICE_URL')) define('SERVICE_URL', 'http://www.miraclesoft.com/HubbleWS/general');
//if (!defined('SERVICE_URL')) define('SERVICE_URL', 'http://192.168.1.203:9999/HubbleServices/hubbleresources/');
if (!defined('SERVICE_URL')) define('SERVICE_URL', 'http://172.17.12.79:8080/HubbleServices/hubbleresources/');
/*Webservice URL For local */
//if (!defined('SERVICE_URL')) define('SERVICE_URL', 'http://172.17.0.150:8080/HubbleWS/general');
if (!defined('RSCVP_CODE_ATLANTA')) define('RSCVP_CODE_ATLANTA', 'M01ATL');

if (!defined('SERVICE_AUTHORIZATION')) define('SERVICE_AUTHORIZATION', 'admin:admin');
if (!defined('INVALID_CREDENTIALES_MESSAGE')) define('INVALID_CREDENTIALES_MESSAGE', 'Wrong credentials. Try again.');
if (!defined('INACTIVE_MESSAGE')) define('INACTIVE_MESSAGE', 'Please contact Hr team to activate your profile!');
if (!defined('UNAUTHORIZED_ACCESS_MESSAGE')) define('UNAUTHORIZED_ACCESS_MESSAGE', 'Unauthorized access!');

if (!defined('EMP_VERIFICATION_LOGIN_ACCESS')) define("EMP_VERIFICATION_LOGIN_ACCESS", "skola2,pkanuri,gdurgam");
if (!defined('EMP_VERIFICATION_APROVAL_ACCESS')) define("EMP_VERIFICATION_APROVAL_ACCESS", "vkandregula");
?>
