<?php
$insure = null; // Initialize $insure to avoid errors
if (isset($_POST['insurance_btn'])) {
    $stmt = $pdo->prepare("SELECT * FROM insurance WHERE vechile_number = ?");
    $stmt->execute([$_POST['reg_number']]);
    $insure = $stmt->fetch();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="Assets/CSS/index.css">
    <script src="Assets\JS\toggleTab.js"></script>
    <title>Public</title>
    <style>
          .police .sidebar {
            width: 20%;
            height: 600px;
        }
        .police .sidebar .navbar {
            list-style-type: none;
            display:flex;
            flex-direction:column;
            padding :0;
        }
        .police .sidebar .navbar .nav-item .nav-link {
            color:black;
            width:290px;
        }
        .police .sidebar .navbar .nav-item .nav-link:hover {
            color:white;
            background-color:black;
        }
        .police .content{
            display:none;
        }
        
        .police .content .about img{
            width:400px;
            border: 2px solid black;
        }
        .police .content .about p{
            width:400px;

        }
        .police .content .about p{
            text-align:justify;
        }
        .police .content p{
            text-align:justify;
        }
        .police .content .image img{
            height:100px; 
            width:100px; 
            border:2px solid black;
        }
        .police .content .details{
            justify-content:center;
        }
        .police .content .details form .form-group input[type="text"]{
            width:400px;
        }
        .police .content .details form .form-group select{
            width:400px;
        }
        .police .content .card{
            box-shadow: 0 0 5px;
        }
        .police .content .other_details{
            box-shadow: 0 0 5px;
            width:500px; 
            height:200px;
        }

    </style>
</head>
<body>
    <header>
        <div class="container-fluid text-center p-3 bg-dark">
            <h1 class="text-white">Home</h1>
        </div>
    </header>
    <main>
        <div class="police d-flex">
            <div class="sidebar bg-light">
                <ul class="navbar container-fluid ">
                    <li class="nav-item mt-5">
                        <a href="#" class="nav-link" onclick="toggleTab('about')">About</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a href="#" class="nav-link" onclick="toggleTab('profile')">Analysis Graph</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a href="#" class="nav-link" onclick="toggleTab('syncfit')">Map(Ambulance Tracking)</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a href="#" class="nav-link" onclick="toggleTab('cam')">Camera Footage</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a href="#" class="nav-link" onclick="toggleTab('Insurance')">Insurance</a>
                    </li>
                    <!--<li class="nav-item mt-3">
                        <a href="#" class="nav-link" onclick="toggleTab('ce')">Community Engagement</a>
                    </li>-->
                    <li class="nav-item mt-3">
                        <a href="#" class="nav-link" onclick="toggleTab('gov')">Document</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a href="#" class="nav-link" onclick="toggleTab('help')">Help & Support</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a href="#" class="nav-link" onclick="toggleTab('feedback')">Feedback</a>
                    </li>
                </ul>
            </div>
            <div class="content container-fluid" id="about">
                <center>
                    <h1>About</h1>
                    <div class="about mt-5">
                        <img src="Assets/Images/main_image.jpg" alt="">
                        <p class="mt-5">It is important to express appreciation to people who provide assistance during an accident. People are benefited by the IRADERS system through enhanced road safety, as it detects accidents promptly and enables faster emergency response, ultimately reducing the severity of accidents and potentially saving lives. "Always Gives way to AMBULANCE Empathize, someday it Could be you".</p>
                    </div>
                </center>
            </div>
            <div class="content container-fluid" id="profile">
                <center><h1>Analysis Graph</h1></center>
                <iframe src="https://app.powerbi.com/reportEmbed?reportId=e351ff8f-97d1-41b5-9a51-6e9166e2e836&autoAuth=true&ctid=3e19468b-e065-44a1-9cde-749457855c06" frameborder="0" width="1000px" height="500px"></iframe>
            </div>
            <div class="content container-fluid" id="syncfit">
                <center>
                <iframe src="https://www.google.com/maps/d/u/6/embed?mid=1clZ-T0XfPhpFMWwwm1NIXsCedz2HM2o&ehbc=2E312F"  width="80%" height="480" style="margin-left: 10%;" class="mt-5"></iframe>
                </center>
            
            </div>
            <!--Community Engagement
            <div class="content container-fluid" id="ce">
            <center>
                    <h1>Community Engagement</h1>
                    <p class="mt-5">IRaders is a community-driven initiative encouraging the public to voluntarily capture and upload accident scenes for the purpose of aiding law enforcement in evidence collection. Participants are advised to prioritize their safety and adhere to legal and ethical standards while contributing to this collaborative effort. iRaders assumes no liability for individual actions or the content shared, emphasizing responsible and respectful engagement in support of community well-being."</p>
                    <div class="card p-3 mt-5" style="width:200px; height:200px;text-align:center;align-items:center;">
                        <p>Upload Pic</p>
                    </div>
                    <form action="" method="post" class="mt-3" >
                        <input type="file" name="" id="" class="btnbtn-primary">
                    </form>
                </center>
            </div>-->
            <!--Government Scheme-->
            <div class="content container-fluid" id="gov">
                <center class="mt-5">
                    <h1>Document</h1>
                    <div class="d-flex" style="justify-content:center;">
                        <div class="div1">
                            <div class="card mt-3 me-3" style="width:200px; height:200px; align-items:center;">
                                <p class="text-center">Upload Image</p>
                            </div>
                            <form action="" class="mt-3">
                                <input type="file" name="" id="">
                            </form>
                        </div>
                        <div class="div2">
                            <div class="card mt-3 me-5" style="width:200px; height:200px; align-items:center;">
                                <p class="text-center">FIR Documents</p>
                            </div>
                            <form action="" class="mt-3">
                                <input type="file" name="" id="">
                            </form>
                        </div>
                        <div class="div3">
                            <div class="card mt-3 me-3" style="width:200px; height:200px; align-items:center;">
                                <p class="text-center">Other Documents</p>
                            </div>
                            <form action="" class="mt-3">
                                <input type="file" name="" id="">
                            </form>
                        </div>
                    </div>
                </center>
            </div>
            <div class="content container-fluid" id="cam">
                <br>
                <center class="mt-5">
                    <img src="Assets\Images\alert.png" alt="" style="width:800px">
                </center>
            </div>
            <!--Help&Support-->
            <div class="content container-fluid" id="help">
            <div class="d-flex mt-5" style="justify-content:center;">
                        <div class="card p-3 me-3 bg-primary">
                            <h3>Contact Us</h3>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="name">Name</label>
                                    <input type="text" name="name" id="name" class="form-control">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="phone">Phone</label>
                                    <input type="text" name="phone" id="phone" class="form-control">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="email">Email</label>
                                    <input type="text" name="email" id="email" class="form-control">
                                </div>
                                <br>
                                <div class="form-group">
                                    <label for="message">Message</label>
                                    <textarea name="message" id="message" cols="30" rows="5" class="form-control"></textarea>
                                </div>
                                <div class="form-group mt-3">
                                    <input type="submit" value="Submit" class="btn btn-dark">
                                </div>
                            </form>
                        </div>   
                    </div>
            </div>
            <div class="content container-fluid" id="Insurance">
    <div class="d-flex mt-5" style="align-items:center;justify-content:center;">
        <div class="card d-flex me-4" style="width:550px; ">
            <div class="card-header bg-dark text-white">
                <h4>Know Your Pending eChallan/Blacklist Details</h4>
            </div>
            <div class="card-body">
                <form action="#" method="post">
                    <div class="form-group">
                        <label for="reg_number">Registeration Number:</label>
                        <input type="text" name="reg_number" id="reg_number" class="form-control">
                    </div>
                    <div class="form-group mt-3">
                        <center>
                            <input type="submit" value="Show Details" name="insurance_btn" class="btn btn-dark">
                            <input type="reset" value="Reset" name="insurance_btn" class="btn btn-dark">
                        </center>                            
                    </div>
                </form>
            </div>
        </div>
        <br>
        <div class="display card d-flex" style="width:550px;">
            <?php if ($insure): ?>
                <div class="card-body">
                    <p><b>Name:</b> <?= $insure['name'] ?></p>
                    <p><b>Vehicle Number:</b> <?= $insure['vechile_number'] ?></p>
                </div>
            <?php endif; ?>
        </div>
    </div>
</div>
    
            <div class="content container-fluid mt-5" id="feedback">
            <center>
                <div class="card p-3 bg-primary" >
                    <h3>Help us to improve</h3>
                    <hr>
                    <form action="" method="post" style="text-align:left;">
                    <div class="form-group">
                        <label for="q1" style="font-weight:bold">How often do you use our website?</label>
                        <input type="text" name="q1" id="q1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="q1" style="font-weight:bold">How often do you use our website?</label>
                        <input type="text" name="q1" id="q1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="q1" style="font-weight:bold">How often do you use our website?</label>
                        <input type="text" name="q1" id="q1" class="form-control">
                    </div>
                    <br>
                    <div class="form-group">
                        <label for="q1" style="font-weight:bold">How often do you use our website?</label>
                        <input type="text" name="q1" id="q1" class="form-control">
                    </div>
                    <br>
                    <center>
                    <div class="form-group">
                        <input type="submit" value="Submit Feedback" class="btn btn-dark">
                    </div>
                    </center>
                    </form>
                </div>
                </center>
            </div>
        </div>
    </main>
</body>
</html>
