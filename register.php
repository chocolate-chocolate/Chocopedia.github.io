<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body{
            font-family: "Open Sans";
            color: #fff;
        }
        section{
            background: url("./images/bg2.jpg");
            height: 100vh;
            width: 100%;
            background-size: cover;
            background-position: center center;
        }
        .form-container{
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%,-50%);
            width: 380px;
            padding: 50px 30px;
            border-radius: 10px;
            box-shadow:7px 7px 60px #000;
        }
        h1{
            color: #ffffff;
            font-size: 2em;
            text-transform: uppercase;
            text-align: center;
            margin-bottom: 2rem;
        }
        .control {
            font-size: 21px;
            text-shadow: 2px 2px black;
        }
        .control input{
            padding: 9px;
            font-size: 16px;
            display: block;
            width: 100%;
            color:#000;
            background: white;
            outline: none;
            border: none;
            margin: 1em 0;

        }         

        .control input[type=text]:focus {
            background-color: lightblue;
            opacity: 0.80;
        }


        .control input[type=email]:focus {
            background-color: lightblue;
            opacity: 0.80;
        }

        .control input[type=password]:focus {
            background-color: lightblue;
            opacity: 0.80;
        }
        .control .btn{
            color: #fff;
            text-transform: uppercase;
            background: black;
            opacity: .7;
            transition:opacity .3s ease;
        }

        .btn:focus{
            opacity: 1;
        }
        p{
            text-align: center;
        }
        a{
            text-decoration: none;
            color: #fff;
            opacity: .7;
        }
        a:hover{
            opacity: 1;
        }
    </style>
</head>
<body>
    <section>
        <div class="form-container">
            <h1>Sign Up!</h1>
        <form action="insert.php" method="post">
            <div class="control">
            <label for="firstname">First Name</label>
            <input type="text" id="first_name" name="first_name">
            </div>
            <div class="control">
            <label for="lastname">Last Name</label>
            <input type="text" id="last_name" name="last_name">
            </div>
            <div class="control">
                <label for="emailAddress">Email-Address</label>
                <input type="email" id="email" name="email">
                </div>
                <div class="control">
                    <label for="password">Password</label>
                    <input type="password" id="password" name="password" >
                    </div>
            
            <div class="control">
            <input type="submit" class="btn" value="Submit Here">
            </div>
        </form>
        
        </div>
    </section>
</body>
</html>