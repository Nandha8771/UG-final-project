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
select{
    width:20%;
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

            const by = document.createElement("select");
            by.id = `subjectby${i}`;
            by.name = `subjectby${i}`;
            const nulllOption = document.createElement("option");
            nulllOption.value = "";
            nulllOption.text = "select";
            by.appendChild(nulllOption);

            const ourOption = document.createElement("option");
            ourOption.value = "Kilogram";
            ourOption.text = "Kilogram";
            by.appendChild(ourOption);

            const otOption = document.createElement("option");
            otOption.value = "Liters";
            otOption.text = "Liters";
            by.appendChild(otOption);

            const noOption = document.createElement("option");
            noOption.value = "Numbers";
            noOption.text = "Numbers";
            by.appendChild(noOption);

            const inputtt=document.createElement("input");
            inputtt.type="text";
            inputtt.id='item'+i;
            inputtt.name='item'+i;
            inputtt.placeholder="Price";
            inputtt.required=true;
           
            itemContainer.appendChild(label);
            itemContainer.appendChild(input);
            itemContainer.appendChild(inputt);
            itemContainer.appendChild(by);
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
                            <span class="text">Mess Product</span>
                        </div>
                        <div class="form signup">
                        <form action="messback.php" method="POST">
                        <input type="text" name="numitems" id="numitems" required>
                        <br>
                        <br><br>
                        <div class="field button">
                        <input type="submit" name="asign" value="Add Item" onclick="additemInput()">
                             </div>
                         <input type="date" name="dates" required>
                            <br><br>
                         <div id="itemNamesContainer"></div>
                         <div class="field button"> 
                             <input type="submit" name="submit" value="Add product">
                       
                             </div> 
                        </form>
                    </div>
                </div>
            </div>
            </section>
        </body>
</html>