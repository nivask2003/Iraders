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
          .public .sidebar {
            width: 20%;
            height: 600px;
        }
        .public .sidebar .navbar {
            list-style-type: none;
            display:flex;
            flex-direction:column;
            padding :0;
        }
        .public .sidebar .navbar .nav-item .nav-link {
            color:black;
            width:290px;
        }
        .public .sidebar .navbar .nav-item .nav-link:hover {
            color:white;
            background-color:black;
        }
        .public .content{
            display:none;
        }
        
        .public .container-fluid .about img{
            width:400px;
            border: 2px solid black;
        }
        .public .content .about p{
            width:400px;

        }
        .public .content .about p{
            text-align:justify;
        }
        .public .content p{
            text-align:justify;
        }
        .public .content .image img{
            height:100px; 
            width:100px; 
            border:2px solid black;
        }
        .public .content .details{
            justify-content:center;
        }
        .public .content .details form .form-group input[type="text"]{
            width:400px;
        }
        .public .content .details form .form-group select{
            width:400px;
        }
        .public .content .card{
            box-shadow: 0 0 5px;
        }
        .public .content .other_details{
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
        <div class="public d-flex">
            <div class="sidebar bg-light">
                <ul class="navbar container-fluid ">
                    <li class="nav-item mt-5">
                        <a href="#" class="nav-link" onclick="toggleTab('about')">About</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a href="#" class="nav-link" onclick="toggleTab('profile')">Profile</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a href="#" class="nav-link" onclick="toggleTab('syncfit')">Sync Fit</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a href="#" class="nav-link" onclick="toggleTab('ce')">Community Engagement</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a href="#" class="nav-link" onclick="toggleTab('gov')">Government Scheme</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a href="#" class="nav-link" onclick="toggleTab('blood_grp')">Blood Group</a>
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
                    <div class="about mt-5">
                        <img src="Assets/Images/main_image.jpg" alt="">
                        <p class="mt-5">It is important to express appreciation to people who provide assistance during an accident. People are benefited by the IRADERS system through enhanced road safety, as it detects accidents promptly and enables faster emergency response, ultimately reducing the severity of accidents and potentially saving lives. "Always Gives way to AMBULANCE Empathize, someday it Could be you".</p>
                    </div>
                </center>
            </div>
            <div class="content container-fluid" id="profile">
                <center>
                    <div class="image mt-5">
                        <h4>Profile Photo</h4>
                        <img src="Assets/Images/download.png" alt="" class="img-fluid rounded-circle border-circle mt-2">
                    </div>
                </center>
                <hr>
                <div class="details mt-5 d-flex" style="">
                    <form action="" method="post">
                        <div class="d-flex">
                            <div class="form-group me-5">
                                <label for="firstname">First Name</label>
                                <input type="text" name="firstname" id="firstname" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="lastname">Last Name</label>
                                <input type="text" name="lastname" id="lastname" class="form-control">
                            </div>
                        </div>
                        <div class="d-flex mt-2">
                            <div class="form-group me-5 ">
                                <label for="age">Age</label>
                                <input type="text" name="age" id="age" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="Gender">Gender</label>
                                <select name="gender" id="gender" class="form-control">
                                    <option value="1">Choose Gender</option>
                                    <option value="2">Male</option>
                                    <option value="3">Female</option>
                                    <option value="4">Other</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex mt-2">
                            <div class="form-group me-5 ">
                                <label for="ph">Phone Number</label>
                                <input type="text" name="ph" id="ph" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="blood">Blood Group</label>
                                <select name="blood" id="blood" class="form-control">
                                    <option value="1">Choose any one</option>
                                    <option value="2">O+ve</option>
                                    <option value="3">B+ve</option>
                                    <option value="4">A+ve</option>
                                </select>
                            </div>
                        </div>
                        <div class="d-flex mt-2">
                            <div class="form-group me-5 ">
                                <label for="ph">Emergency Contact</label>
                                <input type="text" name="ec" id="ec" class="form-control">
                            </div>
                            <div class="form-group">
                                <label for="blood">Blood Group</label>
                                <select name="blood" id="blood" class="form-control" >
                                    <option value="1">Choose any one</option>
                                    <option value="2">O+ve</option>
                                    <option value="3">B+ve</option>
                                    <option value="4">A+ve</option>
                                </select>
                            </div>
                        </div>
                        <div class="button mt-5 d-flex" style="justify-content:center">
                            <input type="submit" value="Update" class="btn btn-dark">
                        </div>
                    </form>
                </div>
            </div>
            <div class="content container-fluid" id="syncfit">
                <div class="container d-flex mt-5" style="justify-content:center">
                    <div class="card p-3" style="width:500px; box-shadow: 0 0 5px;">
                        <div class="d-flex">
                            <div class="c1 me-3" style="width:300px;">
                                <h1>Smart Watch</h1>
                                <div class="button d-flex" style="justify-content:center;">
                                    <a href="" class="btn btn-dark mt-4" style="width:250px;">Connect</a>
                                </div>
                                <p class="text-danger mt-3">Ensure that wheather the bluthooth is turned on</p>
                            </div>
                            <div class="c2" style="width:200px">
                                <img src="Assets/Images/shopping.png" alt="Watch" style="width:200px; height:200px;">
                            </div>
                        </div>   
                    </div>
                </div>
                <hr>
                <div class=" container display mt-4">
                    <div class="d-flex ">
                        <div class="card bg-success p-2 text-center me-5" style="height: 270px; width:250px; box-shadow: 0 0 5px; align-item:normal; text-align:left; justify-content:start;">
                            <h3 class="text-white">Steps</h3>
                            <div class="img d-flex" style="justify-content:center;">
                                <div class="count text-center img-fluid rounded-circle border-circle mt-2" style="border:2px solid white; width:100px; height:100px; justify-content:center; text-align:center; align-item:center;">
                                    <h1 class="text-white mt-3">0</h1>
                                </div>
                            </div>
                            <div class="opt d-flex mt-5" style="justify-content:center;">
                                <small class="text-white me-3" style="font-weight:bold; font-size:20px;">--m</small>
                                <small class="text-white me-3" style="font-weight:bold; font-size:20px;">--kcal</small>
                                <small class="text-white me-3" style="font-weight:bold; font-size:20px;">--min</small>
                            </div>
                        </div>
                        <div class="c2 mt-5">
                            <div class="d-flex">
                                <div class="card me-3 container-fluid bg-danger" style="box-shadow: 0 0 5px; width:300px; height:80px;">
                                    <div class="d-flex">
                                        <div class="icon d-flex" style="width: 250px;">
                                            <img src="Assets/Images/fire-burn-calories-icon-flat-style-vector-27466823.jpg" alt="" style="width:50px;height:50px;" class="me-2">
                                            <h4 style="color:white;">Calories</h4>
                                        </div>
                                        <div class="number mt-2">
                                            <h4 class="text-white">123</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-primary container-fluid" style="box-shadow: 0 0 5px; width:300px; height:80px;">
                                    <div class="d-flex">
                                        <div class="icon d-flex" style="width: 250px;">
                                            <img src="Assets/Images/download (1).png" alt="" style="width:50px;height:50px;" class="me-2">
                                            <h4 style="color:white;">Distances</h4>
                                        </div>
                                        <div class="number mt-2">
                                            <h4 class="text-white">123</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="d-flex mt-3">
                                <div class="card me-3 container-fluid" style="box-shadow: 0 0 5px; width:300px; height:80px; background-color:violet">
                                    <div class="d-flex">
                                        <div class="icon d-flex" style="width: 250px;">
                                            <img src="Assets/Images/download (3).png" alt="" style="width:50px;height:50px;" class="me-2">
                                            <h4 style="color:white;">Heart Rate</h4>
                                        </div>
                                        <div class="number mt-2">
                                            <h4 class="text-white">123</h4>
                                        </div>
                                    </div>
                                </div>
                                <div class="card bg-warning container-fluid" style="box-shadow: 0 0 5px; width:300px; height:80px;">
                                    <div class="d-flex">
                                        <div class="icon d-flex" style="width: 250px;">
                                            <img src="Assets/Images/images.png" alt="" style="width:50px;height:50px;" class="me-2">
                                            <h4 style="color:white;">Exercise</h4>
                                        </div>
                                        <div class="number mt-2">
                                            <h4 class="text-white">123</h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Community Engagement-->
            <div class="content container-fluid mt-5" id="ce">
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
            </div>
            <!--Government Scheme-->
            <div class="content container-fluid" id="gov">
                <center>
                    <h1>Government Scheme</h1>
                    <iframe src="https://cmchistn.com/NK48hosp.php" frameborder="0" height="500px" width="1000px"></iframe>
                </center>
            </div>
            <!--Blood Group-->
            <div class="content container-fluid" id="blood_grp">
                <center>
                    <h1>Blood Group</h1>
                    <iframe src="https://friends2support.org/" frameborder="0" height="500px" width="1000px"></iframe>
                </center>
            </div>
            <!--Help&Support-->
            <div class="content container-fluid" id="help">
                    <!--<h1>Help & Support</h1>-->
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
