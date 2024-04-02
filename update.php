<?php

   $conn = mysqli_connect("localhost","root","","attendance");
   if($conn==FALSE)
   {
	   echo "Connection Failed";
   }
if(isset($_POST['signup']))
{
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $conpass=$_POST['conpass'];
    $que="insert into signup(name,pass,conpass)values('$name','$pass','$conpass')" ;
    $res = mysqli_query($conn,$que);
	if($res)
	  {
		  echo '<script> alert("Record Inserted Successfully.Now Login to your Account"); </script>';
		  echo '<script> location.href="login.php"; </script>';
	  }
	  else{
		echo '<script> alert("Not Record Inserted Successfully.Check Carefully"); </script>';
		echo '<script> location.href="index.php"; </script>';
   }
}
if(isset($_POST['login']))
{
    $name=$_POST['name'];
    $pass=$_POST['pass'];
    $que="select*from signup where name='$name'";
    $res=mysqli_query($conn,$que);
    while($row = mysqli_fetch_array($res))
   {
      $na=$row["name"];
      $pa=$row["pass"]; 
     if($pass==$pa && $name==$na)
     {
        echo '<script> alert("Login Successfully"); </script>';
        echo '<script> location.href="dash.php"; </script>';
    } 
     else{
        echo '<script> alert("Wrong! Please Check Username and Password!!"); </script>';
        echo '<script> location.href="login.php"; </script>';

     }
   }
}
if(isset($_POST['add']))
{
   $regno=$_POST['regno'];
   $name=$_POST['name'];
   $batch=$_POST['batch'];
   $mobile=$_POST['mobile'];
   $prgm=$_POST['prgm'];
   $dept=$_POST['dept'];
   $year=$_POST['year'];
   $room=$_POST['room'];
   
   if(empty($_POST['regno'])) {
    echo '<script> alert("Please Enter Register Number"); </script>';
    echo '<script> location.href="addstd.php"; </script>';
    exit();
}

// Validate name
if (!preg_match("/^[a-zA-Z ]*$/",$_POST['name'])||$name=='') {
    echo '<script> alert("Please Enter a Valid name"); </script>';
    echo '<script> location.href="addstd.php"; </script>';
    exit();
}

// Validate batch
if (empty($_POST['batch'])) {
    echo '<script> alert("Please Enter Batch"); </script>';
    echo '<script> location.href="addstd.php"; </script>';
    exit();
} 

// Validate mobile number
if (empty($_POST['mobile'])) {
    echo '<script> alert("Please Enter Mobile Number"); </script>';
    echo '<script> location.href="addstd.php"; </script>';
    exit();
} elseif (!preg_match('/^\d{10}$/', $_POST['mobile'])) {
    echo '<script> alert("Please Enter a valid Mobile Number"); </script>';
    echo '<script> location.href="addstd.php"; </script>';
    exit();
}

// Validate program
if (empty($_POST['prgm'])) {
    echo '<script> alert("Please Enter a valid Program"); </script>';
    echo '<script> location.href="addstd.php"; </script>';
    exit();
} 

// Validate department
if (empty($_POST['dept'])) {
    echo '<script> alert("Please Enter your department"); </script>';
    echo '<script> location.href="addstd.php"; </script>';
    exit();
} 

// Validate year
if (empty($_POST['year'])) {
    echo '<script> alert("Please Enter your Year"); </script>';
    echo '<script> location.href="addstd.php"; </script>';
    exit();
} 

// Validate room
if (empty($_POST['room'])) {
    echo '<script> alert("Please Enter your room Number"); </script>';
    echo '<script> location.href="addstd.php"; </script>';
    exit();
} 

   $que="insert into student (regno,name,batch,mobile,prgm,dept,year,room)values('$regno','$name','$batch','$mobile','$prgm','$dept','$year','$room')";
   $res=mysqli_query($conn,$que);
   if($res){
       echo '<script> alert("Record inserted,Student added");</script>';
       echo '<script>location.href="add.php";</script>';
   }
   else{
       echo '<script>alert("Record not inserted,check carefully");</script>';
       echo '<script>location.herf="addstd.php";</script>';
   }
}
if(isset($_POST['addb']))
{
   $batch=$_POST['batch'];
   if (empty($_POST['batch'])) {
    echo '<script> alert("Please Enter Batch"); </script>';
    echo '<script> location.href="batch.php"; </script>';
    exit();
}
   $que="insert into Batch(Batch)values('$batch')";
   $res=mysqli_query($conn,$que);
   if($res){
       echo '<script> alert("Record inserted,Batch added");</script>';
       echo '<script>location.href="dash.php";</script>';
   }
   else{
       echo '<script>alert("Record not inserted,check carefully");</script>';
       echo '<script>location.herf="batch.php";</script>';
   }
}
if(isset($_POST['submit']))
{
    $sname=$_POST['sname'];
    $idno=$_POST['idno'];
    $des=$_POST['des'];
    $cell=$_POST['cell'];
    
// Validate name
if (!preg_match("/^[a-zA-Z ]*$/",$_POST['sname'])||$sname=='') {
    echo '<script> alert("Please Enter a Valid name"); </script>';
    echo '<script> location.href="addstaff.php"; </script>';
    exit();
}
if (empty($_POST['idno'])) {
    echo '<script> alert("Please Enter a valid Id no"); </script>';
    echo '<script> location.href="addstaff.php"; </script>';
    exit();
} 
if (empty($_POST['des'])) {
    echo '<script> alert("Please Enter a valid desigination"); </script>';
    echo '<script> location.href="addstaff.php"; </script>';
    exit();
} 
if (empty($_POST['cell'])) {
    echo '<script> alert("Please Enter Mobile Number"); </script>';
    echo '<script> location.href="addstaff.php"; </script>';
    exit();
} elseif (!preg_match('/^\d{10}$/', $_POST['cell'])) {
    echo '<script> alert("Please Enter a valid Mobile Number"); </script>';
    echo '<script> location.href="addstaff.php"; </script>';
    exit();
}
    $que="insert into staff(sname,idno,des,cell)values('$sname','$idno','$des','$cell')";
    $res=mysqli_query($conn,$que);
   if($res){
       echo '<script> alert("Record inserted,Staff added");</script>';
       echo '<script>location.href="dash.php";</script>';
   }
   else{
       echo '<script>alert("Record not inserted,check carefully");</script>';
       echo '<script>location.herf="addstaff.php";</script>';
   }
}
if(isset($_POST['addguest']))
{
    $gname=$_POST['gname'];
    $idno=$_POST['idno'];
    $dept=$_POST['dept'];
    $room=$_POST['room'];
    $purpose=$_POST['purpose'];
    
// Validate name
if (!preg_match("/^[a-zA-Z ]*$/",$gname)||$gname=='') {
    echo '<script> alert("Please Enter a Valid name"); </script>';
    echo '<script> location.href="paid.php"; </script>';
    exit();
}

if (empty($_POST['idno'])) {
    echo '<script> alert("Please Enter a valid Id no"); </script>';
    echo '<script> location.href="paid.php"; </script>';
    exit();
} 

if (empty($_POST['dept'])) {
    echo '<script> alert("Please Enter a valid department"); </script>';
    echo '<script> location.href="paid.php"; </script>';
    exit();
} 
if (empty($_POST['room'])) {
    echo '<script> alert("Please Enter a valid room number"); </script>';
    echo '<script> location.href="paid.php"; </script>';
    exit();
} 
if (empty($_POST['purpose'])) {
    echo '<script> alert("Please Enter a valid purpose"); </script>';
    echo '<script> location.href="paid.php"; </script>';
    exit();
} 
    $que="insert into guest(gname,idno,dept,room,purpose)values('$gname','$idno','$dept','$room','$purpose')";
    $res=mysqli_query($conn,$que);
    if($res){
        echo '<script> alert("Record inserted,guest added");</script>';
        echo '<script>location.href="dash.php";</script>';
    }
    else{
        echo '<script>alert("Record not inserted,check carefully");</script>';
        echo '<script>location.herf="paid.php";</script>';
    }
}
