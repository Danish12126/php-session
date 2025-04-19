<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" 
    rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
</head>
<body>
   <h1 class = ' row justify-content-center'>$_FILES Work </h1>
   <section class = "files">
   <div class="row">
   <div class="col-6">
   <h2 class = mb-4>Uploaded Files</h2>
   <form method="post"  enctype="multipart/form-data">
   <input type="file" class="form-control mb-4" name="file">
                <button class="btn btn-danger mb-4" name="btn_files">File upload</button>
            </form>
        </div>
    </div>
</section>
   </form>



   <?php
   if(isset($_POST['btn_files'])){
    $file_name = $_FILES['file']['name'];
    $tmp_name = $_FILES['file']['tmp_name'];
    $file_size = $_FILES['file']['size'];
    $file_type = $_FILES['file']['type'];



$allow_type = ['image/png' , 'image/jpg' , 'image/jpeg'];
if(in_array($file_type,$allow_type)){
    $location = "images/";
    if(move_uploaded_file($tmp_name,$location.$file_name)){
        echo "<p>File uploaded Successfully</p>";

        echo "<img src='images/".$file_name."' width='50%'>";
    }
    else{
        echo "file Not Found";
    }
}
else{
    echo "Error: upload only this type of files (png, jpg and jpeg)";
}
echo   $file_name;
    echo '<hr>';
    echo   $tmp_name;
    echo '<hr>';
    echo   $file_size;
    echo '<hr>';
    echo   $file_type;
    echo '<hr>';
}



    

  
   ?>
</body>
</html>