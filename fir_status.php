<?php
include "Includes/header.php";
?>
<main>
    <div class="container mt-4">
    <div class="heading card">
        <h1>FIR Status</h1>   
    </div>
    <div class="main d-flex mt-3" style="height:700px;">
        <div class="card container-fluid" style="height:650px;">
            <form action="" method="post">
                <div class="form-group">
                    <label for="select">Select</label>&nbsp;
                    <input type="radio" name="" id="">
                    <label for="reg_date">Registration Date . .</label>
                    <input type="radio" name="" id="">
                    <label for="reg_date">Complaint Ph numnber</label>   
                </div>
                <br>
                <div class="form-group">
                    <label for="district">Select District</label>
                    <select name="district" id="district" class="form-control">
                        <option value="option0">CHOOSE ONE</option>
                        <option value="option1">Madurai</option>
                        <option value="option1">Chennai</option>
                        <option value="option1">Theni</option>
                        <option value="option1">Dindigul</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="district">Select Police Station</label>
                    <select name="district" id="district" class="form-control">
                        <option value="option0">CHOOSE ONE</option>
                    </select>
                </div>
                <br>
                <div class="form-group">
                    <label for="firnumber">FIR Number</label>
                    <input type="text" name="firnumber" id="firnumber" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="reg_date">Registration Date</label>
                    <input type="date" name="reg_date" id="reg_date" class="form-control">
                </div>
                <br>
                <div class="form-group">
                    <label for="reg_time">Time</label>
                    <input type="time" name="reg_date" id="reg_date" class="form-control">
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
                    <input type="submit" value="Submit" class="btn">
                </div>
            </form>
        </div>
    </div>
    </div>
</main>