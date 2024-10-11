<?php
include "Includes/header.php";
?>
<main>
    <div class="main container d-flex">
        <div class="card mt-5 me-4">
        <small id="h1" class="mt-5">Notice Board</small>
    <small id="h2">Information related challan payment</small>
    <ul class="mt-5">
        <li>Check Delhi Traffic Challan</li>
        <li>Check Delhi Traffic Notice</li>
        <li>Check Failed Transaction</li>
        <li>Check Pending Transaction</li>
        <li> Check Vahan PGI Transaction Status</li>
    </ul>
        </div>
        <div class="card mt-5">
        <small id="h1" class="mt-5">Challan Detaiks</small>
    <small id="h2">Further online payments</small>  
    <hr>
    <form action="" method="post">
        <input type="radio" name="challan_number" id="challan_number" class="me-2">
        <label for="challan_number" class="me-2">Challan Number</label>
        <input type="radio" name="vechile_number" id="vechile_number" class="me-2">
        <label for="vechile_number" class="me-2">Vechile Number</label>
        <input type="radio" name="dl_number" id="dl_number" class="me-2">
        <label for="dl_number" class="me-2">DL Number</label>
    </form>
        </div>
    </div>
</main>
<?php
include "Includes/footer.php";
?>