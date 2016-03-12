   <html>
   <head>
   <title>upload</title>
   </head>
   <body>
   
    <form action='test upload.php' method='POST' enctype='multipart/form-data' ></br>
            File: <input type="file" name= "image" >
            <input type="button" value="upload">
    </form>
    
    <?php
	include("../config2.php");
	
	echo $file = $_FILES['image']['tmp_name'];
	
	if(!isset($file)){
	    echo "Please select image";
	}
	else
	{
	echo $image = $_FILES['image']['tmp_name'];
	$image_name=$_FILES['image']['name'];
	$image_size=getimagesize($_FILES['image']['tmp_name']);
	
	if($image_size==FALSE){
	    echo "this is not image";
	}
	else {
	}
		}
   ?>
    </body>
    </html>