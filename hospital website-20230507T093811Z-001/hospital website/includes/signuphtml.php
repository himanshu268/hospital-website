    <?php
    if(isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
        echo"<p>Fill all the field</p>";"
        }
        else if($_GET["error"]=="invaliduid"){
        echo"<p>Choose a proper username!</p>";
        }
        else if($_GET["error"]=="invalidemail"){
        echo"<p>Choose a proper email!</p>";
        }
        else if($_GET["error"]=="passworddontmatch"){
        echo"<p>Password doesn't match</p>";
        }
        else if($_GET["error"]=="stmtfailed"){
        echo"<p>Somethingswent wrong, try again</p>";
        }
        else if($_GET["error"]=="usernametaken"){
        echo"<p>Username already taken!</p>";
        }
        else if($_GET["error"]=="none"){
        echo"<p>You have signed up!</p>";
        }
    }
?>

