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
}    </style>
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
        <section id="seestu">
        <div class="dash-content">
                <div class="overview">
                    <div class="title">
                        <span class="text">view batch</span>
                    </div>
                    <div class="form signup">
                    <form action="viewbatch.php" method="POST">
                    <div class="field input">
                                <label>Batch:</label>
                                <input type="text" name="batch" placeholder="Batch" required>
                            </div>
                            <div class="field button">
                                <input type="submit" name="search" value="View">
                            </div> 
                        </form>
                        
                    <table border=1>
                        <thead>
                            <tr>
                                <th>Batch</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                        if(isset($_POST['stdel']))
                        {
                                $batch=$_POST['batch'];
                                $que="delete from batch where batch=$batch";
                                $res=mysqli_query($conn,$que);
                                if($res)
                                {
                                    echo'<script>alert("deleted successfully")</script>';
                                    echo'<script>location.herf="viewbatch.php"</script>';
                                }
                                else
                                {
                                    echo'<script>alert("not deleted successfully")</script>';
                                    echo'<script>location.herf="viewbatch.php"</script>';
                                }
                            }
                            
                            if(isset($_POST["search"])){
                                $batch=$_POST["batch"];
                                $que="select * from batch where batch='$batch'";
                                $res=mysqli_query($conn,$que);
                                $C=0;

                                 while($row=mysqli_fetch_array($res))
                                 { 
                        ?>
                            <?php
                                 }}
                                 ?>
                                 <tr>
                                <form action="viewbatch.php" method="POST">
                                <td><?php echo$row["batch"];?></td>
                                <input type="hidden" name="batch" value='<?php echo $row["batch"];?>'>
                                <td style="padding:5px;"><input type="submit" name="stdel" value="delete"></td>
                        </form> 
                        </tbody>
                        </table>
                    </div>
                        </div>
                        </div>
                        </body>
                        </html>
