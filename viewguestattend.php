<html>
    <head>
        <link rel="stylesheet" href="dash.css">
        <title>SKC-HMS</title>
    </head>
    <style>
table {
    width: 95%;
    border-collapse: collapse;
    margin: 20px;
    box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
    overflow: hidden;
    border-radius: 10px;
    background-color: #fff;
}
th, td {
    padding: 15px;
    text-align: left;
}
th {
    background-color: #3498db;
    color: #fff;
}
 .field{
    display: flex;
    margin-bottom: 10px;
    flex-direction: column;
    position: relative;
}
 .field label{
    margin-bottom: 6px;
}
.input input,select{
    height: 40px;
    width: 100%;
    font-size: 16px;
    padding: 0 10px;
    border-radius: 5px;
    border: 1px soild #ccc;
}
 .field input{
    outline: none;
}
.button input{
    height: 45px;
    border: none;
    color: #fff;
    font-size: 17px;
    background: #2124B1;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 13px;
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
                         <li><a href="batch.php">
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
            <section class="viewattend">
                <div class="dash-content">
                    <div class="overview">
                        <div class="title">
                            <span class="text">View attendance</span>
                        </div>
                        <div class="form signup">
                            <form action="viewguestattend.php" method="POST">
                            <div class="field input">
                            <lable> choose date: </lable> <input type="date" name="date" required>
                                </div>
                                <div class="field button">
                             <input type="submit" name="view" id="dd" value="view attendance">
                                    </div>
                             <table>
                                <thead>
                                    <tr>
                                    <th>Name</th>
                                    <th>Id no</th>
                                    <th>Depatment</th>
                                    <th>Attendance</th>
                                    </tr>
                                </thead>
                                <?php
                                  $conn=mysqli_connect("localhost","root","","attendance");
                                  if($conn==FALSE)
                                  {
                                    echo"connection failed";
                                  }
                                if(isset($_POST['view']))
                                {
                                    $date="date_".$_POST['date'];
                                    $que="select gname,idno,dept,`$date` from guest";
                                    $res=mysqli_query($conn,$que);
                                    while($row=mysqli_fetch_array($res))
                                    {
                                        ?>
                                        <tbody>
                                            <tr>
                                                <td><?php echo $row["gname"];?></td>
                                                <td><?php echo $row["idno"];?></td>
                                                <td><?php echo $row["dept"];?></td>
                                                <td><?php echo $row["$date"];?></td>
                                            </tr>
                                        </tbody>
                                        <?php
                                    }
                                }
                                ?>
                             </table>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
    </body>
</html>