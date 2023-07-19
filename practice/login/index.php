<!DOCTYPE html>
<html>
    <head>
        <title>Login Page</title>
        <style>
        body {
            /* font-family: Arial, sans-serif; 8*/
            background-color: #76b1e0;
            margin: 0;
            /* padding: 0; */
        }

        .header {
            background-color: #333;
            color: #fff;
            padding: 1px;
            text-align: center;
        }

        .footer {
            background-color: #333;
            color: #fff;
            padding: 1px;
            margin-top: 145px;
            text-align: center;
        }

        .navbar {
            background-color: #4CAF50;
            overflow: hidden;
            /* margin-bottom: 50px; */
        }

        .navbar a {
            float: left;
            color: #fff;
            text-align: center;
            padding: 14px 16px;
            text-decoration: none;
            /* font-size: 16px; */
        }

        /* .navbar a:hover {
            background-color: #45a049;
        } */

        h1 {
            text-align: center;
            color: #333;
        }

        form {
            max-width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 25px;
            /* box-shadow: 0 0 10px rgba(0, 0, 0, 0.2); */
        }

        input[type="text"], input[type="password"] {
            width: 90%;
            padding: 10px;
            /* margin-bottom: 10px; */
            border: 1px solid #ccc;
            border-radius: 25px;
        }

        input[type="submit"] {
            width: 100%;
            padding: 10px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 25px;
            /* cursor: pointer; */
        }

        span {
            color: red;
        }
    </style>
    </head>
    <body>
    <div class="header">
        <h2>Login Page</h2>
    </div>

    <div class="navbar">
        <a href="#1">Home</a>
        <a href="#2">About</a>
        <a href="#3">Contact</a>
    </div>
        <h1>Sign Up</h1>
        <form action="store.php" method="POST" onsubmit="return validPannu();">
            Username: <input type="text" name="uname" id="uname"><br>
            <span id="unameerr"></span><br><br>
            Password: <input type="password" name="pass" id="pass"><br>
            <span id="passerr"></span><br><br>
            <input type="submit" value="Signup"><br>
        </form>

        <div class="footer">
        <p>&copy; 2023 Your Website. All rights reserved.</p>
    </div>
        <script>
            function validPannu() {
                let uname = document.getElementById("uname").value;
                let pass = document.getElementById("pass").value;
                let unameCheck = isunameValid(uname);
                let passCheck = ispassValid(pass);
                let dispunameErr = document.getElementById("unameerr");
                let disppassErr = document.getElementById("passerr");
                let debug = document.getElementById("debug");
                if (!unameCheck) {
                    dispunameErr.textContent = "Invalid Username";
                    return false;
                }
                if (!passCheck) {
                    disppassErr.textContent = "Invalid Password";
                    return false;
                }
                if(unameCheck && passCheck) {
                    return true;
                }

                function isunameValid(uname) {
                    return /^[a-zA-Z0-9]+$/.test(uname);
                }
                function ispassValid(pass) {
                    return /^(?=.*[a-z])(?=.*[0-9]).{1,5}$/.test(pass);
                }
                
            }
            
            
        </script>

    </body>
</html>