<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Contant Management Admin</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>
   <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
    <a class="navbar-brand" href="#">CMS</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>

        <?php
        include("connect.php");
        $query="select * from category";
        $run=mysqli_query($conn,$query);
        while($row=mysqli_fetch_array($run))
        {
        $id=$row['Id'];
        $title=$row['title'];
        echo "<li><a class='nav-link active' aria-current='page' href='#ss' style='text-decoration: none;'>$title</a></li>";

        }
        ?>
        
      </ul>
      <form class="d-flex">
        <input class="form-control me-2"id="ss" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form>
    </div>
  </div>
</nav>
<div class="container" id="home">
  <div class="row mt-2">
    <div class="col-md-7 col-lg-6">
            <img class="w-100" src="image\vibrant-digital-workspace-showcasing-content-management-system-cms-interface-includes-icons-elements-multimedia-370592901.webp">
    </div>
    <div class="col-md-5 col-lg-6 mt-4">
         <div class="py-3 mx-5">
            <a href="post.php" style="text-decoration: none;"><input  type="button" class="form-control btn-info text-white" value="Post"></a>
          </div>
          <div class="py-3 mx-5">
            <a href="index.php"style="text-decoration: none;"><input type="button" class="form-control btn-danger text-white" value="Back to home"></a>
          </div>
          <div class="">
           <p>Lorem ipsum dolor sit, amet consectetur adipisiconem reiciendisovident! Nobis, voluptas.</P>
          </div>
     </div>

   
  </div>
</div>


<div class="row">
  <?php
  $query="select * from post";
  $run=mysqli_query($conn,$query);
  while($row=mysqli_fetch_array($run))
  {
   $post_id=$row['post_id'];
   $post_title=$row['post_title'];
   $post_image=$row['post_image'];
   $post_contant=$row['post_contant']; 
  
  ?>
  
  
  <h3 calss="text-primary" id="ss" style="margin-left: 35px;margin-top: 35px;"><?php echo $post_title; ?></h3>
  <div class="col-lg-3"><img src="image/<?php echo $post_image; ?>"style="margin-left: 35px;" width="250" height="200"/></div>
  <div class="col-lg-9 "><p class="text-justify"style="margin-left: 35px;"><?php echo $post_contant; ?></p><h2 style="font-size:10px;margin-left: 35px;"> Post No.<?php echo $post_id; ?></h2>
  <?php echo "<h5 style='margin-left: 35px;' ><a class='text-danger'style='text-decoration: none;font-size:16px' href='delete.php?id=$row[post_id]' onclick='return checkdelete()'>Delete</a></h5>"?>
  <?php echo "<h5 style='margin-left: 35px;'><a class='text-info'style='text-decoration: none;font-size:16px'href='update.php?id=$row[post_id]'>Update</a></h5>"?>
</div>
  
  <?php }?>
</div>

<section id="" class="footer_wrrper  bg-info text-white">
  <div class="container-fluid mt-4 text-white">
    <div class=" row textall">
      <div class="col-lg-3 col-sm-6 textside mt-3">
        <h5 id="home"><a href="#home" style="text-decoration: none;" class="m-4 text-white ">Contant Management</a></h5>
        
          <ul class="list-unstyled m-4"><li><p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Quam recusandae praesentium quidem est eos odio amet nihil. Odio, eius laudantium!.</p></li></ul>
         <div class="btnfoot">
          <a href="post.php"class="cardbtn m-4 text-white btn btn-success" style="text-decoration: none;">POST NOW</a>
        </div>
      </div>
      <div class="col-lg-3 col-sm-6 textside mt-3">
        <h5 id="home"><a href="#" style="text-decoration: none;" class="m-4 text-white">QUICK LINKS</a></h5>
        <ul class="list-unstyled m-4 text-white">
          <li><a href="#home" style="text-decoration: none;" class="text-white">lorem1</a></li>
          <li><a href="#home" style="text-decoration: none;"class="text-white">lorem1</a></li>
          <li><a href="#home" style="text-decoration: none;"class="text-white">lorem1</a></li>
          <li><a href="#home" style="text-decoration: none;"class="text-white">lorem1</a></li>
          <li><a href="#home" style="text-decoration: none;"class="text-white">lorem1</a></li>
        </ul>
  
        
      </div>
      <div class="col-lg-3 col-sm-6 textside text-white mt-3">
        <h5 id="home"><a href="#about" style="text-decoration: none;" class="m-4 text-white">About Contant</a></h5>
        <ul class="list-unstyled m-4">
          <li><a href="#home" style="text-decoration: none;" class="text-white">Web Developer</a></li>
          <li><a href="#home" style="text-decoration: none;" class="text-white">Full-Stack Developer</a></li>
          <li><a href="#home" style="text-decoration: none;"class="text-white">Web Design</a></li>
         
        </ul>
      </div>
      <div class="col-lg-3 col-sm-6 textside mt-3">
        <h5 id="home"><a href="#about"style="text-decoration: none;" class="m-4 text-white">CONTACT US</a></h5>
        
        <ul class="list-unstyled m-4">
          <li><a href="" style="text-decoration: none;"class="text-white">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Consequuntur, totam?</a></li>
          <li><a href=""style="text-decoration: none;"class="text-white">cms@gmail.com</a></li>
          <li><a href="" style="text-decoration: none;"class="text-white">1010110111</a></li>
        </ul>
        
      </div>

    </div>
  </div>
  <div class="footer_bar text-center">Copyright © 2025 contant management. All rights reserved.</div>

</section>
    



<script>
  function checkdelete(){
    return confirm('Are you sure your post to delete');
  }
</script>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>
