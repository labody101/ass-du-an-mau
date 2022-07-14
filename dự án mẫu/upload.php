<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="upload.css">
    <title>Document</title>
</head>
<body>
    <div id="content"> 
        <form method="POST" action="upload.php" enctype="multipart/form-data"> 
            <input type="hidden" name="size" value="1000000"> 
            <input type="file" name="image"> 
            <button type="submit" name="upload">POST</button>
        <?php require "xulyanh.php"?>
        </form> 
    </div> 
</body>
</html>