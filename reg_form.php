<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<style>
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
</style>

<body>
    <h1>Registration form</h1>
    <!-- <form id="registrationForm" action="insert.php" method="POST"> -->
        <label for="full_name">Full Name</label>
        <input type="text" name="full_name" required><br><br>

        <label for="email">Email</label>
        <input type="email" name="email" required><br><br>

        <label for="password">Password</label>
        <input type="password" name="password" required><br><br>

        <label for="c_password">Confirm Password</label>
        <input type="password" name="c_password" required><br><br>

        <input type="submit" name="reg_btn" value="Register">
    </form>

    <div id="snackbar">Enter same password</div>  <!-- Default message; updated dynamically -->
</body>

<script>
    function showSnackbar(message = "Enter same password", isSuccess = false) {
        let x = document.getElementById("snackbar");
        x.textContent = message;
        if (isSuccess) {
            x.classList.add("success");
        } else {
            x.classList.remove("success");
        }
        x.classList.add("show");
        setTimeout(() => {
            x.classList.remove("show");
        }, 3000);
    }

    // Check if there's a mismatch error stored in localStorage
    if (localStorage.getItem("passwordMismatch")) {
        showSnackbar("Passwords do not match. Please try again.");
        localStorage.removeItem("passwordMismatch"); // Remove the error after showing the snackbar
    }

    // Handle form submission with JavaScript validation
    document.getElementById("registrationForm").addEventListener("submit", function(event) {
        event.preventDefault();  // Prevent form from submitting by default

        const password = document.querySelector("input[name='password']").value;
        const confirmPassword = document.querySelector("input[name='c_password']").value;

        if (password !== confirmPassword) {
            // Store error in localStorage
            localStorage.setItem("passwordMismatch", "true");

            // Redirect to the same page to trigger the validation error
            window.location.href = "reg_form.php";
        } else {
            // If passwords match, proceed with the form submission
            this.submit();  // Manually submit the form if validation passes
        }
    });
</script>

</html>
