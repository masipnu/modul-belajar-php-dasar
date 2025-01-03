<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Upload</title>
    <style>
        body{
            font-family:arial;
            text-align:center;
        }
    </style>
</head>
<body>
    <h2>Upload File</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <input type="file" name="foto" id="foto">
        <input type="submit" value="Upload">
    </form>

    <?php
        if($_SERVER["REQUEST_METHOD"]=="POST"){
            $namafile = $_FILES['foto']['name'];
            $lokasifile = $_FILES['foto']['tmp_name'];

            if($namafile != ""){
                move_uploaded_file($lokasifile,"file/".$namafile);
                echo "<br>";
                echo "<img src='file/$namafile' width='50%'>";
            }
        }
    ?>
</body>
</html>