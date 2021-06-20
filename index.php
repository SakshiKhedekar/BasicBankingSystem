<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link rel="stylesheet" href="css/navbar.css" type="text/css">
    <link rel="stylesheet" href="css/footer.css" type="text/css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <title>Banking System</title>

</head>

<body style="background-color: #d3d3d3;">
    
    <?php
    include 'navbar.php';
    ?>
    

    <div class="container-fluid" style="background-color: #d3d3d3;">
        
        <div class="row intro py-1" style="background-color: #d3d3d3;">
            <div class="col-sm-12 col-md">
                <div class="heading text-center my-5">
                    
                <br>
        <br>
        <br>
        <br>
                    <h1 style="color: #0075be;">THE SPARKS BANK</h1>
                    <p>Your trusted banking partner!!</p>
                    
                </div>
                
            </div>
            <!--<div class="col-sm-12 col-md img text-center">
                <img src="img/bank.jpg" alt="bankimg" class="img-fluid pt-2">
            </div> -->
			

        <div class="row activity text-center">
           <!-- <div class="col-md act">
                <img src="img/user.jpg" alt="userimg" class="img-fluid">
                <br>
                <a href="createuser.php"><button style="background-color: #C86DFB;">Create User</button></a>
            </div> 
            -->
            <div class="col-md act">
                <img src="img/transfer.png" width="300" height= "300" alt="transferimg" class="img-fluid">
                <br>
                <br>
                <p>Individual user details along with the money transfer can be performed here.</p>
                <br>
                <br>
                <a href="transfer.php"><button style="background-color: #0075be;">Details and Transfer</button></a>
                
                <br>
                <br>
            </div>

            <div class="col-md act">
                <img src="img/history.png" width="300" height= "300" alt="historyimg" class="img-fluid">
                
                <br>
                <br>
                <p>All the transaction history will be displayed with time, date and other details.</p>
                <br>
                <br>
                <a href="transactionhistory.php"><button style="background-color: #0075be;">Transaction History</button></a>
                <br>
                <br>
            </div>

        </div>

    </div>

    <footer>
        <div class="footer-content">
            <h3>The Sparks Foundation</h3>
            <p>The bank to every Indian. The Nation banks on us. A bank of common man.</p>
            <ul class="socials">
                <li><a href="#"><i class="fa fa-facebook"></i></a></li>
                <li><a href="#"><i class="fa fa-linkedin-square"></i></a></li>
                <li><a href="#"><i class="fa fa-google"></i></a></li>
                <li><a href="#"><i class="fa fa-youtube"></i></a></li>
                <li><a href="#"><i class="fa fa-github"></i></a></li>
            </ul>
        </div>
        <div class="footer-bottom">
            <p>copyright &copy;GRIPJUN2021. designed by <span>Sakshi Khedekar</span></p>
        </div>
    </footer>
     
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
    

</body>

</html>