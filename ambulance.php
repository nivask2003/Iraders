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
                        <a href="#" class="nav-link" onclick="toggleTab('profile')">My Profile</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a href="#" class="nav-link" onclick="toggleTab('syncfit')">Map</a>
                    </li>
                    <li class="nav-item mt-3">
                        <a href="#" class="nav-link" onclick="toggleTab('gov')">Riders History</a>
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
            <iframe src="https://www.google.com/maps/d/u/6/embed?mid=1clZ-T0XfPhpFMWwwm1NIXsCedz2HM2o&ehbc=2E312F"  width="80%" height="480" style="margin-left: 10%;"></iframe>
            </div>
            <!--Government Scheme-->
            <div class="content container-fluid" id="gov">
                <h1 class="text-center">No Rider </h1>
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
