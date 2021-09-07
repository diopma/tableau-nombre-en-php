<!DOCTYPE html>
<html>
    <head>
        <title>Cours PHP & MySQL</title>
        <meta charset="utf-8">
        <link rel="stylesheet" href="cours.css">
    </head>  
    <body>
    <h1>titre principal</h1>
    <?php
    $arr = array();
    for ($i=0; $i<5; $i++)
    {
        $arr[$i] = $_POST['txt'.$i]; 
    }
    asort($arr);
    print "<pre>";
    print_r($arr);
    print "</pre>";
    ?>
  </body>
</html>
        