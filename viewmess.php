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
    <style>
         input[type='text']{
         padding: 10px;
        }
input[type='date']{
    height: 40px;
    width: 100%;
    font-size: 16px;
    padding: 0 10px;
    border-radius: 5px;
    border: 1px soild #ccc;
    outline: none;
}
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
.header{
    background:#fff;
}
    </style>
    </head>
    <script>
        function additemInput()
        {
            const numitems=document.getElementById("numitems").value;
            const itemNamesContainer=document.getElementById("itemNamesContainer");
            for(let i=1;i<=numitems;i++)
         {
            const itemContainer=document.createElement("div");
            const label = document.createElement("label");
            label.for ='goods'+i;
            label.innerText='Product '+i+' Name:';
           
            const input=document.createElement("input");
            input.type="text";
            input.id='items'+i;
            input.name='items'+i;
            input.placeholder="Item Name";
            input.required=true;
            
            const inputt=document.createElement("input");
            inputt.type="text";
            inputt.id='product'+i;
            inputt.name='product'+i;
            inputt.placeholder="Quantity/Weight";
            inputt.required=true;

            const inputtt=document.createElement("input");
            inputtt.type="text";
            inputtt.id='item'+i;
            inputtt.name='item'+i;
            inputtt.placeholder="Price";
            inputtt.required=true;
           
            itemContainer.appendChild(label);
            itemContainer.appendChild(input);
            itemContainer.appendChild(inputt);
            itemContainer.appendChild(inputtt);
         
         
            itemNamesContainer.appendChild(itemContainer);
           
        }
    }
    </script>
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
            <section id="dashboard">
            <div class="dash-content">
                <div class="overview">
                    <div class="header">
                        <img src="banner.png" height=80px;>
                    </div>
                    <div class="title">
                        <span class="text">View Mess Product</span>
                    </div>
                    <div class="form signup">
                        <form action="viewmess.php" method="POST">
                            <div class="field input">
                                <label>Date</label>
                                <input type="date" name="date" required>
                            </div>
                            <div class="field button">
                                <input type="submit" name="search" value="Fetch Product">
                            </div> 
                        </form>
                        <table border=1>
                        <thead>
                            <tr>
                                <th>S.No</th>
                                <th>Name</th>
                                <th>Quantity/Weight</th>
                                <th>Measure</th>
                                <th>Price</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php
                            if(isset($_POST["search"])){
                                $idno=$_POST["date"];
                                $que="select * from mess where dates='$idno'";
                                $res=mysqli_query($conn,$que);
                                $s=1;

                                 while($row=mysqli_fetch_array($res))
                                 {
                        ?>
                            <tr>
                                <form action="viewstaff.php" method="POST">
                                <td><?php echo $s;?></td>
                                <td><?php echo$row["items"];?></td>
                                <td><?php echo$row["product"];?></td>
                                <td><?php echo$row["byy"];?></td>
                                <td><?php echo$row["item"];?></td>
                                </form>
                            </tr>
                        <?php
                        $s=$s+1;
                                 }
                            }  
                                ?>
                                    </tbody>
                        </table>
                   </div>
               </div>
            </section>
        </body>
</html>