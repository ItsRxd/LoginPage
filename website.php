<?php
    if(isset($_POST['submitButton'])) { // this asks if the submit button was pressed
        if(($_POST['username'] != "Username") || ($_POST['password'] != "Password")){
            echo "Wrong Username/Password";
        } else {
            echo "Logged in successfully";
        }
    }