<!DOCTYPE html>
<html>
   <head>
   <meta charset="utf-8">
   <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
   <title></title>
   <link rel="stylesheet" href="css/bootstrap.min.css" />
   <link rel="stylesheet" href="css/font-awesome.min.css" />
   <link rel="stylesheet" href="css/contact.css" />
   <!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>


 </head>
 <body>
          <!--start form-->
          <div class="container">
           <h1 class="text-center">Register form</h1>
           <div class="errors">
         <?php

               ?>
           </div>
           <form class="" action="login.php" method="post">
           UserName:<input class="form-control" type="text" name="UserName" placeholder="ex:omarpero"><br><br>
           Phone Number:<input class="form-control" type="text" name="phone_num" placeholder="+20012340000"><br><br>
           Email : <input class="form-control" type="email" name="email" placeholder="email"><br><br>
           Password:<input class="form-control" type="password" name="password" placeholder="**********"><br><br>
           confirm password:<input class="form-control" type="password" name="confirm_password" placeholder="**********"><br>
           login : <input type="submit" name="login" >
           </form>

          </div>
          <!--end form-->
     <script src="js/jquery-1.12.4.js"></script>
     <script src="js/bootstrap.min.js"></script>
 </<body>
</html>
