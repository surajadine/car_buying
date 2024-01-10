<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            if(isset($_POST['t1'])){
                $nm=$_POST['a'];
                $em=$_POST['b'];
                $tel=$_POST['c'];
                $msg=$_POST['d'];
                $con=new mysqli("localhost","root","","carsale");
                if($con==true){
                    $cmd="insert into contact values('$nm','$em','$tel','$msg')";
                    if($con->query($cmd)==true)
                    {
                        echo "Data inserted in database";
                    }
                    else{
                        echo "Query problem in insert";
                    }
                }
                else{
                    echo "Connection problem";
                }
                $con->close();

            }
    
    ?>
</body>
</html>