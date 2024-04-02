<?php

   $conn = mysqli_connect("localhost","root","","attendance");
   if($conn==FALSE)
   {
	   echo "Connection Failed";
   }
?>
<html>
<head>
    <title>SKC-HMS</title>
    <link rel="stylesheet" href="dash.css">
</head>
<body>
        <nav>
               <div class="logo-name">
                    <span class="logo_name">SKC-HMS</span>
                </div>
                <div class="menu-items">
                    <ul class="nav-links">
                        <li><a href="dash.php">
                        <span class="link-name">Dashboard</span>
                        </a></li>
                        <li><a href="Batch.php">
                        <span class="link-name">Add Batch</span>
                        </a></li>
                        <li><a href="add.php">
                        <span class="link-name">Add Members</span>
                        </a></li>
                        <li><a href="view.php">
                        <span class="link-name">View details</span>
                        </a></li>
                        <li><a href="attend.php">
                        <span class="link-name">Attendance</span>
                        </a></li>
                        <li><a href="viewattend.php">
                        <span class="link-name">View Attendance</span>
                        </a></li>
                        <li><a href="mess.php">
                        <span class="link-name">Mess Product</span>
                        </a></li>
                        <li><a href="viewmess.php">
                        <span class="link-name">View Mess Product</span>
                        </a></li>
                        </ul>
                        <ul class="logout-mode">
                            <li><a href="login.php">Logout</a></li>
                        </ul>
                </div>
            </nav> 
            <section class="addstu">
            <div class="dash-content">
                <div class="overview">           
                    <div class="title">
                        <span class="text">Add student</span>
                    </div>
                    <div class="form signup">
                    <form action="update.php" method="POST">
                    <div class="field input">
                                <label>Student register number:</label>
                                <input type="text" name="regno" placeholder="Register number" >
                            </div>
                            <div class="field input">
                                <label>Student name:</label>
                                <input type="text" name="name" placeholder="Student name">
                            </div>
                            <div class="field input">
                                <label>Select the Batch</label>
                                <select name="batch"> 
                                    <option>Batch</option>
                                    <?php
                                    $que="select * from batch";
                                    $res=mysqli_query($conn,$que);
                                     while($row=mysqli_fetch_array($res))
                                     {
                                        ?>
                                    <option value="<?php echo $row["batch"]; ?>"><?php echo $row["batch"]; ?></option>
                                    <?php
                                     }
                                    ?>
                                </select>
                                </div>
                            
                            <div class="field input">
                                <label>Parent's Mobile number:</label>
                                <input type="number" name="mobile" placeholder="Mobile number">
                            </div>
                            <div class="field input">
                                <label>Select the programme</label>
                                <select name="prgm"> 
                                    <option>Select programme</option>
                                    <option value="UG">UG</option>
                                    <option value="PG">PG</option>
                                    <option value="MBA">MBA</option>
                                </select>
                                </div>
                            <div class="field input">
                                <label>Student Department:</label>
                                <select name="dept"> 
                                    <option>Select Department</option>
                                    <option value="Tamil">Tamil</option>
                                    <option value="English">English</option>
                                    <option value="Maths">Maths</option>
                                    <option value="Computer Science">Computer Science</option>
                                    <option value="Computer Application">Computer Application</option>
                                    <option value="Information Technology">Information Technology</option>
                                    <option value="Commerce(CA)">Commerce(CA)</option>
                                    <option value="Deparment of Commerce">Deparment of Commerce</option>
                                    <option value="Commerce(cs)">Commerce(cs)</option>
                                    <option value="Chemistry">Chemistry</option>
                                    <option value="Botony">Botony</option>
                                    <option value="Bio Technology">Bio Technology</option>
                                    <option value="BBA">BBA</option>
                                    <option value="BBA(CA)">BBA(CA)</option>
                                    <option value="Physics">Physics</option>
                                    <option value="Catring">Tourism and Hotel Administration</option>
                                    <option value="MBA">MBA</option>
                                </select>
                            </div>
                            <div class="field input">
                            <label>Select the year:</label>
                            <select name="year">
                                <option>Select Year</option>
                                <option value="I">I-year</option>
                                <option value="II">II-year</option>
                                <option value="III">III-year</option>
                            </select>
                            </div>
                         
                            <div class="field input">
                                <label>Room number:</label>
                                <input type="text" name="room" placeholder="Room no" >
                            </div>
                            <div class="field button">
                                <input type="submit" name="add" value="Add student">
                            </div>
                     </div>
                </div>
            </div>
        </section>
    </body>
</html>