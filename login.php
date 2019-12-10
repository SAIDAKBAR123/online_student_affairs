<?php 
    session_start();
    $username_security = 'admin';
    $password_security='iutsnap';
    
    $username_affairs = 'affairs';
    $password_affairs = 'iutsnap';
    if($_POST["username"]==$username_security&&$_POST["password"]==$password_security)
    {
        $_SESSION["username"]=$username_security;
        header('Location: index.php');
    }
    else if($_POST["username"]==$username_affairs&&$_POST["password"]==$password_affairs)
    {
        $_SESSION["username"]=$username_security;
        header('Location: affairs/index.php');
    }
    else {
        
?>       

       <?php       
    echo file_get_contents('login.html');       
?>
<script>
document.getElementById("error").style.display="block";
</script> 

<?php
    }
?>
