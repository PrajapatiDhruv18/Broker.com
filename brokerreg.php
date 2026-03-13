<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        * {
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background: #f5f7fa;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }

        .container {
            width: 360px;
            background: white;
            border-radius: 10px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .tab {
            display: flex;
            cursor: pointer;
            background: #eee;
        }

        .tab div {
            width: 50%;
            padding: 15px;
            text-align: center;
            transition: background 0.3s;
        }

        .tab div.active {
            background: #2a63ff;
            color: white;
            font-weight: bold;
        }

        .form {
            padding: 20px;
            display: none;
        }

        .form.active {
            display: block;
        }

        .form .logininput input {
            width: 100%;
            padding: 12px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 50px;
        }

        .form p {
            font-size: 14px;
            text-align: center;
            margin-top: 15px;
        }

        .form p a {
            color: #2a63ff;
            text-decoration: none;
        }

        .form p a:hover {
            text-decoration: underline;
        }

        .form .button input {
            width: 100%;
            padding: 10px 25px;
            font-size: 18px;
            border: none;
            background: #007bff;
            color: white;
            border-radius: 50px;
            cursor: pointer;
            transition: 0.2s;
        }

        .form .button input:active {
            transform: scale(0.92);
            background: #005ec2;
            box-shadow: inset 0px 0px 6px rgba(0, 0, 0, 0.4);
        }

        /* Snackbar */
        #snackbar {
            visibility: hidden;
            min-width: 250px;
            background-color: red;
            color: white;
            text-align: center;
            border-radius: 6px;
            padding: 16px;
            position: fixed;
            left: 50%;
            top: 25px;
            transform: translateX(-50%);
            font-size: 17px;
            z-index: 1000;
            opacity: 0;
            transition: visibility 0s, opacity 0.4s ease;
        }

        #snackbar.show {
            visibility: visible;
            opacity: 1;
        }

        /* Optional: Change color for success */
        #snackbar.success {
            background-color: skyblue;
        }

        /* Error Message */
        #error-message {
            color: red;
            font-size: 14px;
            margin-top: 5px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="tab">
            <div id="loginTab" class="active">Login</div>
            <div id="registerTab">Register</div>
        </div>

        <!-- Login Form -->
        <div id="loginForm" class="form active">
            <h2>Login to Broker.com</h2>
            <div class="logininput">
                <input type="email" id="loginEmail" placeholder="Email" required>
                <input type="password" id="loginPassword" placeholder="Password" required>
            </div>
            <div class="button">
                <input type="submit" id="loginBtn" value="Login">
            </div>
            <p>Don't have an account? <a href="#" id="switchToRegister">Register</a></p>
        </div>

        <!-- Register Form -->
        <form id="registrationForm" action="insert.php" method="post">
            <div id="registerForm" class="form">
                <h2>Create Account</h2>
                <div class="logininput">
                    <input type="text" placeholder="FullName" required name="reg_fullname">
                    <input type="email" placeholder="Email" required name="reg_email">
                    <input type="password" placeholder="Password" required name="reg_password" id="password">
                    <input type="password" placeholder="Confirm Password" required name="reg_c_password" id="confirmPassword">
                    <div id="error-message"></div>
                    <div class="button">
                        <input type="submit" value="Register" name="reg_btn">
                    </div>
                </div>
            </div>
        </form>

        <p>Already have an account? <a href="#" id="switchToLogin">Login</a></p>
    </div>

    <!-- Snackbar (Error Message) -->
    <div id="snackbar">🎉 Registration Successful!</div>

    <script src="broker.js"></script>
</body>

</html>
