
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link href="https://fonts.google.com/specimen/Itim?category=Handwriting" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">
  
</head>
<body>
    <header>
        <nav>
            <div class="logo">
                <h1 class ="animate__animated animate__heartBeat">Choclate Boutique</h1>
            </div>
            <div class="menu">
                <a href ="#"></a>
                <a href ="#"></a>
                <a href ="home.php">Home</a>
                <a href = "aboutus.php">About Us</a>
                <a href ="products.php">Products</a>
                
                
            </div>
        </nav>
            <main> 
                <section>
                <div class="welcome">
                <?php
                    if (isset($_GET['success']) && $_GET['success'] == 1 ) {
                        echo "<h3 class='welcome'>Logged in Successfully!!</h3>";     }           
                ?>              
                </div>
                    <br>
                    <h3>Welcome To Chocolate Boutique</h3>
                    <h1>MAKING LIFE SWEET EVERYDAY<span class="change_content"></span></h1>
                    <p>"Crispety, Crunchety, Peanut Buttery Butterfinger"</p>
                    <a href="register.php" class="btnone">Sign Up!</a>
                    <a href="products.php" class="btntwo">Shop online</a>
                    <a href="aboutus.php" class="btnthree">About Us</a>
                    <h2 class ="we"><span>Bhavesh Kaushik 19CS18 <br>
                    Nitesh Kumawat 19CS65 <br>
                    Sakshi Verma 19CS84<br>
                Bhawana Agrawal 19CS108</span></h2>
                   
                </section>
            </main>
    
    </header>
</body>
</html>
