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
<section class="dashboard">
         <div class="dash-content">
            <div class="overview">
                <div class="title">
                    <span class="text">Add Paying Guest</span>
                </div>
                <div class="form signup">
                        <form action="update.php" method="POST">
                        <div class="field input">
                                <label>Name of the Staff:</label>
                                <input type="text" name="gname" placeholder="Name" required>
                    </div>   
                <div class="field input">
                        <label>Id number:</label>
                        <input type="text" name="idno" placeholder="Id number" required>
                    </div>
                    <div class="field input">
                                <label>Staff Department:</label>
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
                                <label>Room number:</label>
                                <input type="text" name="room" placeholder="Room no" required>
                    </div>
                    <div class="field input">
                        <label>Purpose of staying</label>
                        <select name="purpose">
                            <option>Purpose of staying</option>
                            <option value="Exam">Exam</option>
                            <option value="Student accomodation">Student Accomodation</option>
                            <option value="resource person">Resource Person</option>
                            <option value="cheif guest">Cheif Guest</option>
                            <option value="others">Others</option>
                        </select>
                    </div>
                    <div class="field button">
                                <input type="submit" name="addguest" value="Add Guest">
                    </div>
</form>
</div>
</div>
</div>
</section>
</body>
</html>
