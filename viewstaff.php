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
                        <span class="text">View Staff</span>
                    </div>
                    <div class="form signup">
                        <form action="viewstaff.php" method="POST">
                            <div class="field input">
                                <label>Id no:</label>
                                <input type="text" name="idno" placeholder="Id number" required>
                            </div>
                            <div class="field button">
                                <input type="submit" name="search" value="Search staff">
                            </div> 
                        </form>
                        <?php
                        if(isset($_POST['stdel']))
                        {
                                $idno=$_POST['idno'];
                                $que="delete from staff where idno=$idno";
                                $res=mysqli_query($conn,$que);
                                if($res)
                                {
                                    echo'<script>alert("deleted successfully")</script>';
                                    echo'<script>location.herf="viewstaff.php"</script>';
                                }
                                else
                                {
                                    echo'<script>alert("not deleted successfully")</script>';
                                    echo'<script>location.herf="viewstaff.php"</script>';
                                }
                        }
                        
                            if(isset($_POST["search"])){
                                $idno=$_POST["idno"];
                                $que="select * from staff where idno=$idno";
                                $res=mysqli_query($conn,$que);
                                $s=0;

                                 while($row=mysqli_fetch_array($res))
                                 {
                                    
                                
                        ?>
                          <table border=1>
                        <thead>
                            <tr>
                                <th>Name</th>
                                <th>ID no</th>
                                <th>Desigination</th>
                                <th>Mobile no</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <form action="viewstaff.php" method="POST">
                                <td><?php echo$row["sname"];?></td>
                                <td><?php echo$row["idno"];?></td>
                                <td><?php echo$row["des"];?></td>
                                <td><?php echo$row["cell"];?></td>
                                <input type="hidden" name="idno" value='<?php echo $row["idno"];?>'>
                                <td style="padding:5px;"><input type="submit" name="stdel" value="Delete"></td>
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
                                   <th>ID no</th>
                                   <th>Desigination</th>
                                   <th>Mobile no</th>
                                   <th>Delete</th>
                               </tr>
                           </thead>
                           
                           <?php
                           
                           $que="select*from staff";
                           $res=mysqli_query($conn,$que);
                           $s=0;
                           while($row=mysqli_fetch_array($res))
                           {
                               $s=$s+1; 
                           ?>
                           <tbody>
                               <tr>
                               <form action="viewstaff.php" method="POST">
                                   <td><?php echo$row["sname"];?></td>
                                   <td><?php echo$row["idno"];?></td>
                                   <td><?php echo$row["des"];?></td>
                                   <td><?php echo$row["cell"];?></td>
                                   <input type="hidden" name="idno" value='<?php echo $row["idno"];?>'>
                                   <td style="padding:5px;"><input type="submit" name="stdel" value="Delete"></td>
                               </tr>
                           </form>
                           </tbody>
                              <?php
                            
                           }
                       }
                           $que="update signup set warden=$s where id=1;";
                           $res=mysqli_query($conn,$que);
                           ?>
                       </table>
                   </div>
               </div>
           </section>
       </body>
   </html>