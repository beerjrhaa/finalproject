<?php
try{
	 $db = new PDO("mysql:host=localhost;dbname=finalproject_db;charset=utf8;",'root','root');
     $db->setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);

}catch (PDOException $ex) {
    echo $ex->getMessage();
}

?>
