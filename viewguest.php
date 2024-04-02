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
        input[type='submit']{
            align-items:center;
            width:100%;
            padding:10px;
            font-weight:600;
        }
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
        <section id="seestu">
        <div class="dash-content">
                <div class="overview">
                    <div class="title">
                        <span class="text">View Guest</span>
                    </div>
                    <div class="form signup">
                        <form action="viewguest.php" method="POST">
                            <div class="field input">
                                <label>ID number:</label>
                                <input type="text" name="idno" placeholder="ID number" required>
                            </div>
                            <div class="field button">
                                <input type="submit" name="search" value="Search guest">
                            </div> 
                        </form>
                        <?php
                        if(isset($_POST['gstdel']))
                        {               
                            $idno=$_POST['idno'];
                                $que="delete from guest where idno=$idno";
                                $res=mysqli_query($conn,$que);
                                if($res)
                                {
                                    echo'<script>alert("deleted successfully")</script>';
                                    echo'<script>location.herf="viewguest.php"</script>';
                                }
                                else
                                {
                                    echo'<script>alert("not deleted successfully")</script>';
                                    echo'<script>location.herf="viewguest.php"</script>';
                                }
                        }
                        if(isset($_POST["search"])){
                                $id=$_POST["idno"];
                                $que="select * from guest where idno=$id";
                                $res=mysqli_query($conn,$que);
                                $g=0;

                                 while($row=mysqli_fetch_array($res))
                                 {
                                    ?>
                          <table border=1>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>ID no</th>
                                <th>Dept</th>
                                <th>Room</th>
                                <th>Purpose</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <form action="viewguest.php" method="POST">
                                <td><?php echo$row["gname"];?></td>
                                <td><?php echo$row["idno"];?></td>
                                <td><?php echo$row["dept"];?></td>
                                <td><?php echo$row["room"];?></td>
                                <td><?php echo$row["purpose"];?></td>
                                <input type="hidden" name="idno" value='<?php echo $row["idno"];?>'>
                                <td style="padding:5px;"><input type="submit" name="gstdel" value="delete"></td>
                                </form>
                            </tr>
                        </tbody>
                        </table>
                        <?php
                                 }
                               }
                               else{
                                ?>
                    <table border=1>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>Reg no</th>
                                <th>Dept</th>
                                <th>Room</th>
                                <th>Purpose</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        
                        <?php
                        
                        $que="select*from guest";
                        $res=mysqli_query($conn,$que);
                        $g=0;

                        while($row=mysqli_fetch_array($res))
                        {
                            $g=$g+1; 
                        ?>
                        <tbody>
                            <tr>
                            <form action="viewguest.php" method="POST">
                                <td><?php echo$row["gname"];?></td>
                                <td><?php echo$row["idno"];?></td>
                                <td><?php echo$row["dept"];?></td>
                                <td><?php echo$row["room"];?></td>
                                <td><?php echo$row["purpose"];?></td>
                                <input type="hidden" name="idno" value='<?php echo $row["idno"];?>'>
                                <td style="padding:5px;"><input type="submit" name="gstdel" value="delete"></td>
                            </tr>
                        </form>
                        </tbody>
                           <?php
                         
                        }
                    }
                        $que="update signup set guest=$g where id=1;";
                        $res=mysqli_query($conn,$que);
                        ?>
                    </table>
                </div>
            </div>
        </section>
    </body>
</html>