<?php



define("DEBUG_MODE", false);
//Костанты подключения к БД
define ("DATABASE_HOST", "127.0.0.1");
define ("DATABASE_USERNAME", "root");
define ("DATABASE_PASSWORD", "5");
define ("DATABASE_NAME", "animal_db");

function debug_print($massage){
    if (DEBUG_MODE){
        echo $massage;
    }
}
function handle_error($user_error_message, $system_error_message){
    header("Location: /profile_error.php?error_message={$user_error_message}&system_error_message={$system_error_message}");
    exit();
}