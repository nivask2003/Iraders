<?php
include "Includes/header.php";
?>
</style>
<main>
    <div class="container mt-4">
    <div class="heading card">
        <h1>Complaint Registeration Form</h1>
    </div>
    <div class="mt-3">
    <h5>Point to remember</h5>
    <h6>You can use this form to register your complaints.</h6>
    <h6>False Complaints are subject to prosecution under IPC.</h6>
    <h6>Fields given in <i class = "text-danger">Red Color</i> are <i class="text-danger">Mandatory</i></h6>
    </div>
    <br>
    <div class="detail card">
        <div class="card mt-2">
            <div class="card-header d-flex">
                <b><i class = "text-danger me-2">City / District</i></b>
                <form action="" method="post">
                    <select name="" id="" class="form-control">
                        <option value="">SELECT DISTRICT</option>
                    </select>
                </form>
            </div>
            <div class="card-body d-flex">
                <div class="col1 text-center container-fluid">
                    <b>DETAILS OF COMPLAINMENTS</b>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="name">Name</label>
                            <input type="text" name="name" id="name" class="form-control">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="gender">Gender</label>
                            <select name="gender" id="gender" class="form-control">
                                <option value="selectanygender">SELECT ANY GENDER</option>
                                <option value="male">MALE</option>
                                <option value="female">FEMALE</option>
                            </select>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="address">Address</label>
                            <textarea name="address" id="address" cols="10" rows="5" class="form-control"></textarea>
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="dateofbirth">Date of Birth</label>
                            <input type="date" name="dateofbirth" id="dateofbirth" class="form-control">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="mobilenumber">Mobile Number</label>
                            <input type="text" name="mobilenumber" id="mobilenumber" class="form-control">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="email">Email Id</label>
                            <input type="email" name="email" id="email" class="form-control">
                        </div>
                        <br>
                    </form>
                </div>
                <div class="col2 container-fluid text-center">
                    <b>DETAILS OF COMPLAINT</b>
                    <form action="" method="post">
                        <div class="form-group">
                            <label for="subject">Subject</label>
                            <input type="text" name="subject" id="subject" class="form-control">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="dateofoccastion">Date of Occastion</label>
                            <input type="date" name="dateofoccastion" id="dateofoccastion" class="form-control">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="subject">Place of Occastion</label>
                            <input type="text" name="subject" id="subject" class="form-control">
                        </div>
                        <br>
                        <div class="form-group">
                            <label for="subject">Description</label>
                            <input type="text" name="subject" id="subject" class="form-control">
                        </div>
                        <br>
                    </form>
                </div> 
            </div>
            <div class="securitycode text-center">
                <div class="label">Security Code</div>
                <div class="code container">080 102</div>
            </div>
                <br>
        </div>
        <br>
    </div>
    </div>
</main>
<?php
include "Includes/footer.php";
?>