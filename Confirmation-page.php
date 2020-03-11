<?php 
session_start();
$chk=$_SESSION['x1'];
$cnsn=$_SESSION['x2'];
$str;
$clr;
if($chk==1)
{
    $str="Your Suggestion is recorded.";
    $clr=1;
}
else if($chk==2)
{
    $str="Enter the correct Email address or credentials.";
    $clr=2;
}
else
{
    $str="Something went wrong!";
    $clr=2;
}

?>
<html>
    <head>
        <meta charset="UTF-8">
        <title>Confirmation Page</title>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
    </head>
    <body>
        <div class="container-fluid" style="padding: 10%;">
            <center>
            <h5 class="display-5">This is a computer generated message.</h5>
            <?php 
            if($clr==1)
                {                
                echo '<h2 class="display-2 text-success">'.$str.'</h2>';
                }
                else if($clr==2)
                {
                  echo '<h2 class="display-2 text-danger">'.$str.'</h2>';  
                }
            ?>
            <h5 class="display-5" style="margin-top: 2%;">Please Note down your CNS Number, which is : <u><?php echo $cnsn; ?></u>.</h5>
            <h6 class="display-6" style="margin-top: 2%;">Now you can close this tab.</h6>
            </center>
        </div>   
    </body>
</html>
<?php
session_destroy();
?>
