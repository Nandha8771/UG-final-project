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
                    <span class="text">Add Staff</span>
                </div>
                <div class="form signup">
            <form action="update.php" method="POST">
                <div class="field input">
                    <label>Staff name:</label>
                    <input type="text" name="sname" placeholder="Staff name" required>
                </div>
                <div class="field input">
                    <label>Id number:</label>
                    <input type="text" name="idno" placeholder="Id number" required>
                </div>
                <div class="field input">
                <label>Select the Designation:</label>
                <select name="des">
                    <option>Select</option>
                    <option value="warden">warden</option>
                    <option value="cook">Cook</option>
                    <option value="sweeper">Sweeper</option>
                    <option value="helper">Helper</option>
                </select>
                <div class="field input">
                    <label>Mobile number:</label>
                    <input type="number" name="cell" placeholder="Mobile number" required>
                </div>
                <div class="field button">
                    <input type="submit" name="submit" value="Add staff">
                </div>
       
</div>
</div>
</section>
</body>
</html>