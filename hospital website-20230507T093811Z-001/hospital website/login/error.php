 <?php
    if(isset($_GET["error"])){
        if($_GET["error"]=="emptyinput"){
        echo"<p>Fill all the field</p>";"
        }
        else if($_GET["error"]=="wronglogin"){
        echo"<p>Incorrect login info!</p>";
        }
    }
?>