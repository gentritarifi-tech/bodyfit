<!DOCTYPE html>
<html>
    <head>
        <title>BodyFit</title>
        <link rel="stylesheet" type="text/css" href="css/style.css">
    </head>
   
        <header>
          <?php include 'includes/header.php' ?>
</header>

<!---BODY-->

<body>

<?php
    switch (@$_GET['page']) {
        case 'home':
            include 'include/content.php';
            break;
        case 'contact':
            include 'include/contact.php';
            break;
        case 'about':
            include 'include/about.php';
            break;
        case 'posts':
            include 'include/posts.php';
            break;

        default:
            include 'includes/content.php';
    }
    ?>
    


</body>


<!---FOOTER-->

<footer>
<?php include 'include/footer.php' ?>
</footer>
    
</html>