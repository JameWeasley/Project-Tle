<?php
    include('./shared/header.php')
?>

<div class="container">
    <div class="box-form">
        <div class="form-label">
            <h1>Register</h1>
            <form action="data_signup.php" method="post">
                <label for="">First Name</label>
                <input type="text" name="first_name">
                <label for="">Last name</label>
                <input type="text" name="last_name">
                <label for="">Username</label>
                <input type="text" name="user_name">
                <label for="">Password</label>
                <input type="password" name="password">
                <label for="">Email</label>
                <input type="text" name="email">
                <input type="submit" name="adduser">
            </form>
        </div>
    </div>
</div>


    
    