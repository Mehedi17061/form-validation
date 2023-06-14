<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="assets/style.css">
    <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.2/dist/css/bootstrap.min.css" integrity="sha384-xOolHFLEh07PJGoPkLv1IbcEPTNtaed2xpHsD9ESMhqIYd0nLMwNLD69Npy4HI+N" crossorigin="anonymous"> -->
  </head>
  <body>



  <?php 
/**
 * Student Data form
 */



  if (isset($_POST['submit'])) {

     $name = $_POST['name'];
     $email = $_POST['email'];
     $cell = $_POST['cell'];
     $roll = $_POST['roll'];


     if(empty($name))
     {
        $err['name'] = "<p style='color:red;'>*Required</p>";
     }
     if(empty($email))
     {
        $err['email'] = "<p style='color:red;'>*Required</p>";
     }
     if(empty($cell))
     {
        $err['cell'] = "<p style='color:red;'>*Required</p>";
     }

     /**
      * form validation 
      */

     if(empty($name)||empty($email)||empty($roll)|| empty($cell))
     {
        $msg =  "<p class='alert alert-warning alert-dismissible'> All field are require. <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button> </p>";
     }
     else
     {
      
        $msg =  "<p class='alert alert-info alert-dismissible'> Data Stable <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"alert\" aria-label=\"Close\"></button> </p>";
     }
    
  }
  
  ?>



<div class="container">


   <div class="wrap shadow w-50 mx-auto">
   <div class="card ">
        <div class="card-body">
            <h2>Add New Student </h2>

            <?php 
            if(isset($msg))
            {
                echo $msg;
            }
            ?>

            <form action="" method="POST">

               <div class="mb-3">
                <label for="">Name</label>
                <input class="form-control"type="text" name="name" id="">
                <?php 
                if(isset($err['name']))
                {
                    echo $err['name'];
                }
                
                ?>
               </div>
              
               <div class="mb-3">
                <label for="">Email</label>
                <input class="form-control"type="text" name="email" id="">
                <?php 
                if(isset($err['email']))
                {
                    echo $err['email'];
                }
                
                ?>
               </div>
               <div class="mb-3">
                <label for="">Cell</label>
                <input class="form-control"type="text" name="cell" id="">
                <?php 
                if(isset($err['cell']))
                {
                    echo $err['cell'];
                }
                
                ?>
               </div>
               <div class="mb-3">
                <label for="">Roll</label>
                <input class="form-control"type="text" name="roll" id="">
               </div>

               <div class="mb-3">
                <input class="btn btn-primary" type="submit" name="submit" value="Insert ">

               </div>



            </form>
        </div>
    </div>
   </div>



</div>







    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
  </body>
</html>