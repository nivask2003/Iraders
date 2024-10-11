<?php
include "Includes/header.php";
?>
<main>
    <div class="container mt-4">
    <div class="heading card">
        <h1>Vehicle Status</h1>   
    </div>
    <div class="main d-flex mt-3" style="height:600px">
        <div class="card container-fluid" style="height:500px">
            <form action="" method="post">
                <div class="form-group">
                    <label for="reg_number">Register Number</label>
                    <input type="text" name="reg_number" id="reg_number" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="chasis_number">Chasis Number</label>
                    <input type="text" name="chasis_number" id="chasis_number" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="eng_number">Engine Number</label>
                    <input type="text" name="eng_number" id="eng_number" class="form-control">
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
                    <input type="submit" value="Submit" class="btn">&nbsp;
                    <input type="submit" value="Clear" class="btn">
                </div>
            </form>
        </div>
    </div>
    </div>
</main>