<?php
    session_start();
	require_once "connect.php";
	$sql = "SELECT * FROM login where username = :username and pass = :pass";
        $stmt = $pdo->prepare($sql);
        $stmt->execute
        (
            array(
                'username' => $_POST['username'],
                'pass' => $_POST['current-password'],
            )
        );
        $count = $stmt->rowCount();
        if($count > 0)
        {   
            $_SESSION['username'] = $_POST['username'];
           echo'<script language="javascript">alert("Login sucessfully"); window.location="./ryoadmin/admin.php";</script>';
            
        }
        else
        {
            echo'<script language="javascript">alert("Uesername or password incorrect");</script>';
        }
?>