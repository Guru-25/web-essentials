<!DOCTYPE html>
<html>
<head>
    <style>
        
        nav {
  background-color: #f2f2f2;
}

nav ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  display: flex; /* Add flex display */
  justify-content: space-between; /* Align items correctly */
}

nav ul li {
  display: inline;
}

nav ul li a {
  display: block;
  padding: 10px 20px;
  text-decoration: none;
  color: #333;
}

nav ul li a:hover {
  background-color: #ddd;
}


        #proceedButton {
            padding: 12px 24px;
            font-size: 14px; 
        }

        #payButton {
            padding: 12px 24px; 
            font-size: 14px;
        }

        #enteredUpiId {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        * {
            box-sizing: border-box;
            font-family: Cambria, Cochin, Georgia, Times, 'Times New Roman', serif;
        }
        footer {
            background-color: #003366;
            color: #fff;
            padding: 10px;
            text-align: center;
        }

        body {
            background-color: #8fb4be;
            margin: 0;
            padding: 0;
            background-image: url('bg.jpg');
            background-size: cover;
            background-attachment: fixed;
            background-repeat: no-repeat;
        }

        section {
            background-color: #ffffff;
            width: 700px;
            margin: 150px auto;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input[type="text"],
        input[type="number"],
        input[type="submit"] {
            width: 100%;
            height: 40px;
            padding: 12px;
            margin-bottom: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 20px;
        }

        #confirmationMessage {
            font-weight: bold;
            margin-top: 20px;
        }
    </style>
    <title>Your Bank</title>
</head>
<body>
    <h1 style="text-align: center;padding:15px;color:white;font-family:Montserrat;">Your Bank</h1>
    <nav>
    <ul>
      <li><a href="#">Home</a></li>
      <li><a href="#">About</a></li>
      <li><a href="#">Services</a></li>
      <li><a href="#">Contact</a></li>
    </ul>
  </nav>
    <section>
        <h2>Send Money</h2>
        <div id="upiContainer">
            <label for="upiId">Enter UPI ID:</label>
            <input type="text" id="upiId" required>
            <button id="proceedButton" onclick="validateUPI()">Proceed</button>
        </div>
        <div id="amountContainer" style="display: none;">
            <div id="enteredUpiId"></div>
            <button id="changeButton" onclick="changeUPI()" style="display: none;">Change</button>
            <br> <br> <br>
            <label for="amount">Enter Amount in ₹:</label>
            <input type="number" id="amount" required>
            <label for="message"></label>
            <textarea id="message" placeholder="What is this for?"></textarea>
            <br> <br>
            <button id="payButton" onclick="promptUPIPin()">Pay now</button>
        </div>
    </section>

    <footer>
    <p>&copy; 2023 Your Bank. All rights reserved.</p>
  </footer>

    <script>
        function validateUPI() {
            var upiId = document.getElementById("upiId").value;
            var upiIdPattern = /^[A-Za-z0-9._%+-]+@upi$/;

            if (!upiIdPattern.test(upiId)) {
                alert("Invalid UPI ID. Please enter a valid UPI ID.");
                return;
            }

            document.getElementById("upiContainer").style.display = "none";
            document.getElementById("amountContainer").style.display = "block";
            document.getElementById("enteredUpiId").textContent = "UPI ID: " + upiId;
            document.getElementById("changeButton").style.display = "inline-block";
        }

        function changeUPI() {
            document.getElementById("upiContainer").style.display = "block";
            document.getElementById("amountContainer").style.display = "none";
            document.getElementById("enteredUpiId").textContent = "";
            document.getElementById("changeButton").style.display = "none";
        }

        function promptUPIPin() {
            var amount = parseInt(document.getElementById("amount").value);

            if (isNaN(amount) || amount < 1 || amount > 100000) {
                alert("Please Enter amount between 1 - 100000");
                return;
            }

            var message = document.getElementById("message").value;

            var enteredUpiId = document.getElementById("enteredUpiId").textContent.replace("UPI ID: ", "");

            document.getElementById("amountContainer").style.display = "none";

            var upiPin = prompt("Please enter your 6-digit UPI PIN:");

            if (upiPin === "123456") {
                               window.location.href = "store_transaction.php?upiId=" + encodeURIComponent(enteredUpiId) + "&amount=" + encodeURIComponent(amount) + "&message=" + encodeURIComponent(message);
                            } else {
                                alert("Incorrect UPI PIN. Please try again.");

                                document.getElementById("amountContainer").style.display = "block";
            }
        }
    </script>
</body>
</html>
