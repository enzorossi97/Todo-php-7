<?php 

require_once("config.php");

echo session_save_path();
echo "<br>";

switch (session_status()) {
	case PHP_SESSION_DISABLED:
		echo "Sessões estão desabilitadas";
		break;

	case PHP_SESSION_NONE:
		echo "Sessão habilitada mas não iniciada";
		break;

	case PHP_SESSION_ACTIVE:
		echo "Sessão estão habiilitadas, e uma existe";
		break;


	default:
		# code...
		break;
}
 ?>