<?php
try{
	 $db2 = new PDO("mysql:host=localhost;dbname=finalproject_db;charset=utf8;",'root','root');
     $db2->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch (PDOException $ex) {
    echo $ex->getMessage();
}

?>
