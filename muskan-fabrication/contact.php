<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Muskan Fabrication</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
    <!-- Google Fonts -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap">
    <!-- Bootstrap core CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/css/bootstrap.min.css" rel="stylesheet">
    <!-- Material Design Bootstrap -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdbootstrap/4.19.1/css/mdb.min.css" rel="stylesheet">
    <!-- JQuery -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <!-- Bootstrap tooltips -->
    <!-- Bootstrap core JavaScript -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.5.0/js/bootstrap.min.js"></script>
   <!-- MDB core JavaScript --> 
  </head>
<body>
  <?php include 'menu.php'; ?>
  <br><br>
  <section class="bg-primary">
    <article class="py-5 text-center">
      <div>
        <marquee direction="right"behaviour="alternate">
          <a href="tel:919820687395"><h2 class="text-white">For Our Best Service Call Us Now <i class="fas fa-phone mr-3"><u>+91-9820687395</u></h2></i></a>
        </marquee>
      </div>
    </article>
  </section>
  <section class="my-5">
    <div class="py-5">
      <h1 class="text_effects text-center pt-5">Contact Us</h1>
      <hr class="w-25 mx-auto pt-5">
    </div>
    <div class="w-50 m-auto">
      <form action="userinfo.php" method="POST">
        <div class="form-group">
          <label>Username</label>
          <input type="text" name="user" autocomplete="off" class="form-control"> 
        </div>
        <div class="form-group">
          <label>Email-Id</label>
          <input type="text" name="email" autocomplete="off" class="form-control"> 
        </div>
        <div class="form-group">
         <label>Mobile No.</label>
         <input type="text" name="mobile" autocomplete="off" class="form-control"> 
        </div>
        <div class="form-group">
          <label>Comments</label>
          <textarea class="form-control" name="comments"></textarea>
        </div>
        <button type="submit" class="my-btn btn-primary">Submit</button>
      </form>
    </div>  
  </section>
  <!--fotter-->
  <?php include 'footer.php';?>
</body>
</html>