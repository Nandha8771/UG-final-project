<html>
<head>
    <title>SKC-HMS</title>
    <link rel="stylesheet" href="dash.css">
</head>

<style>
    a{
        text-decoration:none;
    }
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
            <br>
                  </div>
                <div class="title">
                    <span class="text">View Members</span>
                </div>
                <div class="boxes">
                            <div class="box box1">
                                <a href="viewstd.php">View Student</a>
                            </div>
                            <div class="box box2">
                                <a href="viewguest.php">View Paying Guest</a>
                            </div>
                            <div class="box box3">
                                <a href="viewstaff.php">View Staff</a>
                            </div>
       
            </div>
            </div>
    </section>
</body>
</html>