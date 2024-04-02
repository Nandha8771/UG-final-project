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
                <span class="text">Staff Attendance </span>
            </div>
            <form action="staffattend.php" method="POST">
                <div class="field input">
                    <label>Id no</label>
                    <input type="text" name="idno" placeholder="Id No" required>
                </div>
                <div class="field button">
                    <input type="submit" name="search" value="View Staff">
                </div> 
            </form>
            <?php
        if(isset($_POST["search"])) {
            $idno = $_POST["idno"];
            $que = "SELECT * FROM staff WHERE idno='$idno'";
            $res = mysqli_query($conn, $que);
        
            if (mysqli_num_rows($res) > 0) {
                ?>
                <form action="staffattend.php" method="POST">
                    <div class="field input">
                        <label>Choose date:</label> 
                        <input type="date" name="date" required>
                    </div>
                    <table border="1">
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Id no</th>
                                <th>Designation</th>
                                <th>Attendance</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php while($row = mysqli_fetch_array($res)) { ?>
                                <tr>
                                    <td><?php echo $row["sname"];?></td>
                                    <td><?php echo $row["idno"];?></td>
                                    <td><?php echo $row["des"];?></td>
                                    <input type="hidden" name="idno[]" value="<?php echo $row["idno"];?>">
                                    <td>
                                        <select name="att[]" id="att">
                                            <option value="P">Present</option>
                                            <option value="A">Absent</option>
                                        </select>
                                    </td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                    <div class="field button">
                        <input type="submit" name="attend" value="Submit">
                    </div>
                </form>
            <?php 
            } else {
                echo "No staff found with ID: " . $idno;
            }
        }
        ?>        
</body>

<?php
if(isset($_POST["attend"]))
{
        $selectedDate = $_POST['date'];
    $columnName = "date_" . $selectedDate;
    $checkColumnQuery = "SHOW COLUMNS FROM guest LIKE '$columnName'";
    $checkColumnResult = mysqli_query($conn, $checkColumnQuery);
        if(mysqli_num_rows($checkColumnResult) == 0) {
        $addColumnQuery = "ALTER TABLE `staff` ADD `$columnName` VARCHAR(255)";
        mysqli_query($conn, $addColumnQuery);
    }
    $idnos = $_POST['idno']; 
    $attendanceValues = $_POST['att'];
    for($i = 0; $i < count($idnos); $i++)
    {
        $idno = $conn->real_escape_string($idnos[$i]);
        $attendanceValue = $conn->real_escape_string($attendanceValues[$i]);
        $updateQuery = "UPDATE `staff` SET `$columnName` = '$attendanceValue' WHERE idno='$idno'";
        mysqli_query($conn, $updateQuery);
    }
    echo '<script>alert("Attendance submitted successfully");</script>';
}
?>
</html> 