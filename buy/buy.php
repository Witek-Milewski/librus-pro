<?php
    require_once "script.php";
?>

?>
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Librus Pro</title>

    <!-- Scripts -->
    <link rel="stylesheet" href="../css/bootstrap.min.css">
    <link rel="stylesheet" href="../style.css">
    <script src="script.js"></script>
    <script src="https://unpkg.com/scrollreveal@4"></script>

</head>

<body>
    <?php
    list($info) = card($product);
    echo $list['name'];
    ?>
</body>
</html>