<?php
         $conn=mysqli_connect("localhost","root","","attendance");
         if($conn==FALSE)
         {
             echo"connection failed";
         }
?>
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
                        <span class="link-name">Batch</span>
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
        <section class="attend">
                    <div class="dash-content">
                        <div class="overview">
                            <div class="title">
                               <span class="text"> Attendance </span>
                            </div>
                            <form action="stdattend.php" method="POST">
                           
                            <div class="field input">
                                <label>Batch:</label>
                                <input type="text" name="batch" placeholder="Batch" required>
                            </div>
                            <div class="field button">
                                <input type="submit" name="search" value="View Students">
                            </div> 
                        </form>
                        <table border=1>
                                        <thead>
                                            <tr>
                                                <th>Name</th>
                                                <th>Regno</th>
                                                <th>Dept</th>
                                                <th>year</th>
                                                <th>Program</th>
                                                <th>Attendance</th>
                                            </tr>
                                        </thead>
                                                <tbody>
                                                <div class="form signup">
                                <form action="stdattend.php" method="POST">
                                <div class="field input">
                                <lable> choose date: </lable> 
                                <input type="date" name="date" required>
                            </div>
                            
                                    
                        <?php
                            if(isset($_POST["search"])){
                                $batch=$_POST["batch"];
                                $que="select * from student where batch='$batch'";
                                $res=mysqli_query($conn,$que);
                                $C=0;

                                 while($row=mysqli_fetch_array($res))
                                 {
                        ?>
                                                    <tr>
                                                        <td><?php echo $row["name"];?></td>
                                                        <td><?php echo $row["regno"];?></td>
                                                        <td><?php echo $row["dept"];?></td>
                                                        <td><?php echo $row["year"];?></td>
                                                        <td><?php echo $row["prgm"];?></td>
                                                        <input type="hidden" name="regno[]" value = "<?php echo $row["regno"];?>">
                                                        
                                                        <td><select name="att[]" id="att">
                                                            <option value="P">Present</option>
                                                            <option value="A">Absent</option>
                                                        </select></td>
                                                    </tr>
                                          
                                                <?php
                                            }
                                 }
                                        ?>
                                                </tbody>
                                    </table>
                                 
                                    <div class="field button">
                                        <input type="submit" name="attend" value="Submit">
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
            </section>
</body>
<?php
if(isset($_POST["attend"]))
{
    $columnName = "date_" . $_POST['date'];
    $columnType = "varchar(255)";
    $que = "ALTER TABLE `student` ADD `$columnName` $columnType;";
    $res = mysqli_query($conn, $que);
    $regnos = $_POST['regno']; // Change variable name to $regnos
    $cc = $_POST['att'];
    for($i = 0; $i < count($regnos); $i++)
    {
        $regno = $conn->real_escape_string($regnos[$i]);
        $attendancevalue = $conn->real_escape_string($cc[$i]);
        $updateQuery = "UPDATE `student` SET  `$columnName` = '$attendancevalue' WHERE regno='$regno'";
        $updateResult = mysqli_query($conn, $updateQuery);
    }
    echo '<script>alert("Attendance submitted successfully");</script>';
}
?>
</html> 