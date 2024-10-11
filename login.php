<?php
include "Includes/header.php";
if (isset($_POST['loginbtn'])) {
    $stmt = $pdo->prepare('SELECT * FROM users');
    $stmt->execute();
    $users = $stmt->fetchAll(PDO::FETCH_ASSOC);
    foreach($users as $user):
    if ($_POST['options'] == "public") {
        if ($_POST['username'] == $user['username'] && $_POST['password'] == $user['password']) {
            $_SESSION['id'] =0;
            header('Location: index.php?page=public'); // Adjust the redirection location if needed
            exit; // Terminate the script after redirection
        }
    }
    if ($_POST['options'] == "police") {
        if ($_POST['username'] == $user['username'] && $_POST['password'] == $user['password']) {
            $_SESSION['id'] =0;
            header('Location: index.php?page=police'); // Adjust the redirection location if needed
            exit; // Terminate the script after redirection
        }
    }
    if ($_POST['options'] == "ambulance") {
        if ($_POST['username'] == $user['username'] && $_POST['password'] == $user['password']) {
            $_SESSION['id'] =0;
            header('Location: index.php?page=ambulance'); // Adjust the redirection location if needed
            exit; // Terminate the script after redirection
        }
    }
    endforeach;
}
?>
<main>
    <div class="content container d-flex justify-content-center">
        <div class="card p-3 mt-5 bg-dark d-flex">
            <h1 class="text-white">Login</h1>
            <form action="index.php?page=login" method="post">
                <div class="form-group">
                    <label for="usertype" class="text-white">User</label>
                    <div class="d-flex">
                        <select name="options" id="options" class="form-control">
                            <option value="public">Public</option>
                            <option value="police">Police</option>
                            <option value="ambulance">Ambulance</option>
                        </select>
                    </div>
                </div>
                <br>
                <div class="form-group">
                    <label for="username" class="text-white">Username</label>
                    <input type="text" name="username" id="username" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="password" class="text-white">Password</label>
                    <input type="password" name="password" id="password" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <input type="submit" value="Login" name="loginbtn" id="loginbtn" class="btn btn-success">
                </div>
                <br>
                <div class="form-group">
                    <a href="" class="option">Forgot Password</a>
                </div>
                <br>
                <div class="form-group">
                    <a href="register.php" class="option">Register</a>
                </div>
            </form>
        </div>
    </div>
</main>
<script src="Assets/JS/select.js"></script>
