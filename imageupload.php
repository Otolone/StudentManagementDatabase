<!DOCTYPE html>
<html>
    <body>
        <header> 
            <div class="menu">
            <?php  include "menu.php" ?>
            <?php include "acookie.php" ?> 
            </div>
                     
        </header>
        <h1>File Upload</h1>
        <form action="uploadfile.php" method="POST" enctype="multipart/form-data">
            Select image to upload:
            <input type="file" name="fileToUpload" id="fileToUpload">
            <input type="submit" value="Upload Image" name="submit">
        </form>
       
    </body>
</html>