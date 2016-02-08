<?php 
	session_start();
    include('config/functions.php');
    

    if($est_connecte){
        redirect("index.php?page=logged.php");
    }

	if(isset($_POST["btn-login"]))
	{
        extract($_POST);
        
        if(not_empty([$N_etudiant,$password]))
        {
            if($N_etudiant == USER && $password == PASSWD)
            {
                $_SESSION['user'] = $N_etudiant;
                $est_connecte = true;
                redirect("index.php?page=logged.php");
            }
            
            
        }
	}
    include('views/login.view.php'); ?>
?>