<?php 
session_start(); 
error_reporting(0);
$count1=0;
$count=0;
session_start();
include('dashboard/db.php');
if (!$_SESSION['username']) {
  header("Location: ./login.php");
}
?>
<!DOCTYPE html>
<html lang="en">

<head><meta http-equiv="Content-Type" content="text/html; charset=utf-8">

  
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Placement Assistant | Test </title>

  <!-- Font Awesome Icons -->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Merriweather+Sans:400,700" rel="stylesheet">
  <link href='https://fonts.googleapis.com/css?family=Merriweather:400,300,300italic,400italic,700,700italic' rel='stylesheet' type='text/css'>



  <!-- Theme CSS - Includes Bootstrap -->
  <link href="css/creative.css" rel="stylesheet">
<style type="text/css">
  #clockdiv{ 
    font-family: sans-serif; 
    color: #fff; 
    display: inline-block; 
    font-weight: 100; 
    text-align: center; 
    font-size: 30px; 
} 
#clockdiv > div{ 
    padding: 10px; 
    border-radius: 3px; 
    background: #00BF96; 
    display: inline-block; 
} 
#clockdiv div > span{ 
    padding: 15px; 
    border-radius: 3px; 
    background: #00816A; 
    display: inline-block; 
} 
smalltext{ 
    padding-top: 5px; 
    font-size: 16px; 

} 
.reserve-button {
  position: relative;
  background-color: #FFC;
  padding: 2rem;
  text-align: center;
  max-width: 200px;
}

.reserve-button::before {
  content: "";

  position : absolute;
  z-index  : -1;
  bottom   : 15px;
  right    : 5px;
  width    : 50%;
  top      : 80%;
  max-width: 200px;

  box-shadow: 0px 13px 10px black;
  transform: rotate(4deg);
}
</style>
</head>

<body>

  <!-- Navigation -->
  <nav class="navbar navbar-expand-lg navbar-light fixed-top py-3" id="mainNav">
    <div class="container">
      <a class="navbar-brand js-scroll-trigger" href="#">Placement Assistant</a>
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto my-2 my-lg-0">
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Aptitute</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Practice</a>
          </li>
          <li class="nav-item">
            <a class="nav-link active js-scroll-trigger" href="#">Online Test</a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Interview</a>
             <div class="dropdown-menu" aria-labelledby="navbarDropdown">
               <a class="dropdown-item dd js-scroll-trigger" href="#">HR Interview</a>
               <a class="dropdown-item dd js-scroll-trigger" href="#">Group Discussion</a>
             </div>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Company</a>
          </li>
           <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">About</a>
          </li>
          <li class="nav-item">
            <a class="nav-link js-scroll-trigger" href="#">Contact</a>
          </li>
         
        </ul>
      </div>
    </div>
  </nav>



  <!-- Masthead -->
  <header class="mastheader">
    <div class="container h-100">
      <div class="row h-100 align-items-center justify-content-center text-center">
        <div class="col-lg-10 align-self-end">
          <h1 class="text-uppercase text-white font-weight-bold">Online Test</h1>
        </div>
        <div class="col-lg-8 align-self-baseline">
          <p class="text-white-75 font-weight-light mb-5">In the history of modern astronomy, there is probably no one greater leap forward than the building and launch of the space telescope.</p>
         
        </div>
      </div>
    </div>
  </header>



  <div class="container testsection">
    <div class="row">
      
     <div class="col-md-8 left-side">

     
   
     <?php
     $id=$_GET['id'];
   
     $q="select * from subject where dept_id='$id'";
     $result=mysqli_query($connection,$q);
    

while($rows=mysqli_fetch_array($result))
 {

 ?>
 <div class="reserve-button" id="<?php echo $rows['department'] ;?>">
        <?php echo $rows['department']; ?>
      </div>
      <br><br><br>
    <?php }?>



     
      
    
  </div>

     <div class="col-md-4 sidebar">
      <form method="POST" action="test_temp.php" id="totest">
     <div id=bodybody></div>
     </form>

  
     

    
    </div>

     

  </div>
</div>


  <!-- Footer -->
  <footer class="bg-light py-5">
    <div class="container">
      <div class="small text-center text-muted">Copyright &copy; 2019 - Placement Assistant</div>
    </div>
  </footer>

  <!-- Bootstrap core JavaScript -->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>


  <!-- Custom scripts for this template -->
  <script src="js/creative.js"></script>

</body>

<script type="text/javascript">


    $(".reserve-button").click(function(){
 var id = ($(this).attr('id'));

        $.ajax({
            url: 'fil.php',
            type: 'get',
            data: {depart:id},
            dataType: 'text',
            success:function(data){

               
               $('#bodybody').html(data);
            }
        });
    });


</script>
</html>