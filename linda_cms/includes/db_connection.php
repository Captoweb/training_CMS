<?php

/*define("DB_SERVER", "localhost");
define("DB_USER", "root");
define("DB_PASS", "");  
define("DB_NAME", "linda_cms"); */
//дефaйны не работают почемуто, они тут просто напоминают что так тоже можно

$db = mysqli_connect("localhost", "root", "",  "linda_cms");
if(mysqli_connect_errno()) {
    die("DB connect failed: " .  
      mysqli_connect_error() . 
        " ( " . mysqli_connect_errno() . ")"
   );
}

?>
