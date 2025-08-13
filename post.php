<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Post Contant</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/media.css">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
</head>
<body>
    <h2 class="text-primery text-center">Insert Post Here</h2>
    <div class="row">
        
        <div class="col-sm-1"></div>
        <div class="col-sm-8">
            <form action="" method="post" enctype="multipart/form-data">
                <div class="form-group mt-1">
                    <label class="text-info">Post Title:</label>
                    <input name="title" type="text" class="form-control" placeholder="Enter Title" />
                </div>

                <div class="form-group mt-1">
                    <label class="text-info">Post Category:</label>
                    <select class="form-select" name="cat">
                        <option>Select Category</option>
                        <?php 
                        include("connect.php");
                        $query="select * from category";
                        $run=mysqli_query($conn,$query);
                        while($row=mysqli_fetch_array($run))
                        {
                        $id=$row['Id'];
                        $title=$row['title'];
                        echo "<option value='$id'>$title</option>";
                        }
                        ?>

                    </select>
                </div>

                <div class="form-group mt-1">
                    <label class="text-info">Post Image:</label>
                    <input name="image" type="file" class="form-control" placeholder="Enter Title"/>
                </div>

                <div class="form-group mt-1">
                    <label class="text-info">Post Contant:</label>
                    <textarea class="form-control" cols="5" rows="10" name="contant"></textarea>
                </div>

                <input name="insert" type="submit" value="Post" class="form-control btn btn-primary"/>
                
            </form>
        </div>
        <div class="col-sm-3"></div>
    </div>
</body>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</html>

<?php
include("connect.php");

if(isset($_POST['insert']))
{
    $title=$_POST['title'];
    $category=$_POST['cat'];
    $images=$_FILES['image']['name'];
    $image_temp=$_FILES['image']['tem_name'];
    move_uploaded_file($image_temp,"image/$images");
    $contant=$_POST['contant'];
    $insert="insert into post(post_title,post_category,post_image,post_contant)values('$title','$category','$images',' $contant')";
    $run=mysqli_query($conn,$insert);
    if($run)
    {
        echo "<script>alert ('Product has been inserted')</script>";
         echo "<script>window.open('confirm.php','_self')</script>";

    }
}
?>