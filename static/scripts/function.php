<?php

	function errorHelperRedirect($user_error_message,$system_error_message){
		header("Location: ../profile_error.php?" . "user_error_message={$user_error_message}"."&system_error_message={$system_error_message}");
		exit();

	}





?>