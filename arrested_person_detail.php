<?php
include "Includes/header.php";
?>
<main>
    <div class="container mt-4">
    <div class="heading card">
        <h1>Arrested Person Details</h1>   
    </div>
    <div class="main d-flex mt-3">
        <div class="card container-fluid">
            <form action="" method="post">
                <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control">
                </div>
                <br>
                <div class="form-group">
                <label for="mobilenumber">Mobile Number</label>
                <input type="mobilenumber" name="mobilenumber" id="mobilenumber" class="form-control">
                </div>
                <br>
                <div class="form-group">
                <label for="securitycode">Security Code</label>
                <input type="text" name="securitycode" id="securitycode" class = "form-control">
                <div class="code mt-3">
                        080 121
                </div>
                </div>
                <br>
                <div class="form-group d-flex">
                    <input type="submit" value="Send OTP" class="btn">&nbsp;
                    <input type="submit" value="Clear" class="btn">&nbsp;
                    <input type="submit" value="Resend OTP" class="btn">
                </div>
            </form>
        </div>
    </div>
    </div>
</main>