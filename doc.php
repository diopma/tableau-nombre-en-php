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
     print "<form method=post action=ArrayByUser.php>";
     for($i=0; $i<5; $i++)
     {
         print "<input type=text name=txt$i />";
     }
         print "<input type=submit value=Submit />";
    print "</form>";
    $arr = array();
    if (isset($_POST['txt']))
    for ($i=0; $i<5; $i++)
    {
        $arr[$i] = $_POST['txt'.$i]; 
    }
    ?>
  </body>
</html>
        