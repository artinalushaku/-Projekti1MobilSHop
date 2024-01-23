<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="sign-in.css">
</head>
<body>
    <h1>Welcome Back</h1>
    <div class="new">
        <div class="container">
            <form onsubmit="validateLogin(); return false;">
                <label for="username"><b>Username</b></label>
                <input type="text" placeholder="Enter Username" id="username" required>

                <label for="password"><b>Password</b></label>
                <input type="password" placeholder="Enter Password" id="password" required>

                <button type="submit">Login</button>
                <label>
                    <input type="checkbox" checked="checked" name="remember"> Remember me
                </label>
                <p>Don't have an account <span><a href="sign-up.html">Register</a></span></p>
            </form>
        </div>
        <div class="close">
            <a href="index.html"><img src="close.png" alt=""></a>
        </div>
    </div>
    <script>
        function validateLogin() {
            var username = document.getElementById('username').value;
            var password = document.getElementById('password').value;

            var nameRegex = /^[A-Z]/;
            if (!nameRegex.test(username)) {
                alert('Username should start with a capital letter.');
                return;
            }

            if (password.length < 6) {
                alert('Password must have at least 6 characters.');
                return;
            }

            if (username !== '' && password !== '') {
                alert('Login successful!');
            } else {
                alert('Please enter both username and password.');
            }
        }
    </script>
</body>
</html>
