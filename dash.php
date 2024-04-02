<html>
<head>
    <title>SKC-HMS</title>
    <link rel="stylesheet" href="dash.css">
</head>
<style>
    .header{
        background:#fff;
    }
</style>
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
            <div class="header">
        <img src="banner.png" height=80px;>          
        </div>
                <div class="title">
                    <span class="text">Dashboard</span>
                </div>
                <div class="boxes">
                <?php
                            $conn=mysqli_connect("localhost","root","","attendance");
                            if($conn==FALSE)
                            {
                                echo"connection failed";
                            }
                            $que="select*from signup";
                            $res=mysqli_query($conn,$que);
                            $C=0;
    
                            while($row=mysqli_fetch_array($res))
                            {  
                            ?>
                    <div class="box box1">
                        <span class="text">Total Students</span>
                        <span class="number"><?php echo $row["count"]?></span>
                    </div>
                    <div class="box box2">
                        <span class="text">Total Paying guests</span>
                        <span class="number"><?php echo $row["guest"]?></span>
                    </div>
                    <div class="box box3">
                        <span class="text">Total Staffs</span>
                        <span class="number"><?php echo $row["warden"]?></span>
                    </div>
                    <?php
                        }
                        ?>

                </div>
            </div>
            </div>
    </section>
</body>
</html>