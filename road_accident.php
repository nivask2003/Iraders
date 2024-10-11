<?php
include "Includes/header.php";
?>
<main>
    <div class="container mt-3">
    <div class="heading card">
        <h1>Road Accident</h1>   
    </div>
    <div class="main mt-5 p-4" style="height: 700px;">
        <form action="" method="post">
            <div class="form-group">
                <label for="district"><b>District</b></label>
                <select name="district" id="district" class="form-control" style="width:300px">
                    <option value="">Select District</option>
                    <option value="">Madurai</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="police"><b>Police Station</b></label>
                <select name="police" id="police" class="form-control" style="width:300px">
                    <option value="">Select Police Station</option>
                    <option value="">Madurai</option>
                </select>
            </div>
            <br>
            <div class="form-group">
                <label for="fir_number"><b>FIR Number</b></label>
                <input type="text" name="fir_number" id="fir_number" class="form-control" style="width:300px">
            </div>
            <br>
            <div class="form-group">
                <label for="name"><b>Name</b></label>
                <input type="text" name="name" id="name" class="form-control" style="width:300px">
            </div>
            <br>
            <div class="form-group">
                <label for="mobile_number"><b>Mobile Number</b></label>
                <input type="text" name="name" id="name" class="form-control" style="width:300px">
            </div>
            <br>
            <div class="form-group">
                <label for="name"><b>Email Id</b></label>
                <input type="text" name="name" id="name" class="form-control" style="width:300px">
            </div>
            <br>
            <div class="form-group">
                <label for="securitycode"><b>Security Code</b></label>
                <input type="text" name="securitycode" id="securitycode" class = "form-control">
                <div class="code mt-3">
                        080 121
                </div>
                </div>
        </form>
    </div>
    </div>
</main>
<?php
include "Includes/footer.php";
?>