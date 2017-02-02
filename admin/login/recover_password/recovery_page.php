<?PHP
    //Credits must stay intact
    //Script by Samiuddin. Samiuddin phpdevsami@gmail.com | samiun_@hotmail.com
    //For more scripts or tutorials visit http://www.webdevtown.com
    //If this script is uploaded on any website without credits, it will be taken down.
	
	include("../connection.php");
	include("recover_password_class.php");
	$RecoverPassword = new RecoverPassword($dbh);
	$RecoverPassword->generate_new_password();






?>