<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Index Page</title>
    <link href="css/style.css" rel="stylesheet"/>
</head>
<body>
    <header>
        <ul>
          <li><a href="">Page 1</a></li>
          <li><a href="">Page 2</a></li>
          <li><a href="">Page 3</a></li>
          <li><a href="">Page 4</a></li>
        </ul>
    </header>
    <div class="main">
        <div class="left">
            <h1>I am sidebar</h1>
            <ul>
                <li><a href="index.php?page=admin/home">Home</a></li>
                <li><a href="index.php?page=admin/about">About</a></li>
                <li><a href="index.php?page=admin/section">Section</a></li>
                <li><a href="index.php?page=admin/contact">Contact</a></li>
            </ul>
        </div>
        <div class="right" style="padding:15px">
            <?php 
                if (isset($_GET['page'])) {
                    $page = $_GET['page'].".php";
                } else {
                    $page = "admin/home.php";
                }
                if (file_exists($page)) {
                    require_once $page;
                } else {
                    echo "<h1>404</h1><h2>Page Not Found</h2>";
                }
            ?>
       
        </div>
    </div>
    
</body>
</html>