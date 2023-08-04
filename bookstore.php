<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bookstore Application</title>

 
<style>
    body{
        font-family:'Montserrat', sans-serif;
        background-color:#8AC7DB;
    }
    .wrapper{
        background:white;
        width: 30rem;
        padding: 3rem;
        border-radius: var(--radius);
        margin: 3rem auto;
    }

    .title{
        text-align:center;
        margin-bottom: 1rem;
    }
    
    .form1{
        display: flex;
        flex-direction:column;
        margin: 1px 0;
    }
    h2{
        text-align: center;
        padding-bottom:1px;
    }

    .form-input{
        background-color: var(--clr-graylight); 
        border-radius: blue;
        padding: var(--radius);
        font-family:inherit;
        color:inherit;
        outline:none;
        border:1px solid gray;
        transition:250ms all ease-in;
    }

    /* .form-input:hover{
        border: 1px solid var(--clr-primaryhover);
        box-shadow: 0 0 5px var(--clr-primaryhover);
        background: white;
    }

    .form-input:focus{
        border: 1px solid var(--clr-primaryfocus);
        box-shadow: 0 0 5px var(--clr-primaryhover);
        background: black; 
    } */

    .form-input::placeholder{
        color:var(--clr-graymed);
        
    }

    .form-input[type=text]{
    width:100%;
    border:2px solid #aaa;
    border-radius:4px;
    margin:8px 0;
    outline:none;
    padding:8px;
    box-sizing:border-box;
    transition:.3s;
  }

   
  input[type=text]:focus{
    border-color:black;
    box-shadow:0 0 8px 0 black;
  }
    

    .btn-primary{
        border:none;
        background:black;
        color: white;
        border-radius:20%;
        padding:5px;
        margin-top:1rem;
        font-family: 'Times new roman';
        font-weight: bold;
        width: 20%;
        cursor: pointer;
    }

    .btn-primary:hover{
        background-color:#8AC7DB;
    }

</style>

</head>

<body>
 <h2>Bookstore SignUp Form</h2>
<div class="wrapper" >
   
    <form  method="POST" action="process.php">
     
     <!-- <div class="imgcontainer" >
         <img src="publishing-resources-center-tile_tcm7-281269_w640_n.jpg" alt="Avatar" class="avatar">
    </div> -->

    <div class="container">
    <div class="form1"> First Name: <input type = "text"  name="FirstName" class="form-input" placeholder="Enter First Name" required>
     <br><br>
    </div>

    <div class="form1"> Surname: <input type = "text" name="Surname" size="15" class="form-input" placeholder="Enter Your Surname" required >
     <br><br>
    </div>
     
    <div class="form1"> Roll Number: <input type = "text" name="RollNumber" class="form-input" placeholder="Enter Your Roll number" size="30" required>
     <br><br>
    </div>

    <div class="form1"> 
         Age: <input type = "text" name="Age" class="form-input" placeholder="Enter Your Age" required>
     <br><br>
    </div>

    <div class="form1"> Program: <input type = "text" name="Program" class="form-input" placeholder="Enter Your Program" required>
     <br><br>
    </div>
    
    <div class="form1"> 
       Course: <input type = "text" name="Course" class="form-input" placeholder="Enter Your Course" required>
     <br><br> 
    </div>
    
     
     <button class="btn-primary" type="submit" name = "insert">Login</button>
     <!-- <button type="submit" value="delete" name = "delete"> -->
      <!-- <label>
      <input type="checkbox" checked="checked" name="remember"> Remember me
    </label> -->
   
    </div>

    
     <!-- <input type="submit" value="read"   name = "read" >  -->
     <!-- <div class="container" style="background-color:#f1f1f1">
    <button type="button" class="cancelbtn">Cancel</button>
  </div> -->

 </form>  
    </div>  
</div>
         

       
</body>
</html>