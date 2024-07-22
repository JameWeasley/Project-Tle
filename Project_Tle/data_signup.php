<?= 
    session_start();
    include('./shared/header.php');
    $error = array();

    if(isset($_POST['adduser'])) {
        $first_name = mysqli_real_escape_string($conn, $_POST['first_name']);
        $last_name =  mysqli_real_escape_string($conn, $_POST['last_name']);
        $user_name =  mysqli_real_escape_string($conn, $_POST['user_name']);
        $password =  mysqli_real_escape_string($conn, $_POST['password']);
        $email =  mysqli_real_escape_string($conn, $_POST['email']);

        if(empty($username)) {
            array_push($error, "Username is required");
        }
        if(empty($password)) {
            array_push($error, "Password is required");
        }
    }


?>


<?= 

    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $user_name = $_POST['user_name'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    
    mysqli_query($conn, "INSERT TO (first_name, last_name, user_name, password, email)
                VALUES ('$first_name', '$last_name', '$user_name', '$password', '$email')");

    m

?>
    


