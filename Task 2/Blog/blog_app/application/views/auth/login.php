<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Center the form on the page */
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
            background-color: #f3f4f6;
        }

        /* Container for the login form */
        .login-container {
            width: 100%;
            max-width: 400px;
            padding: 2rem;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            text-align: center;
        }

        .login-container h2 {
            margin-bottom: 1.5rem;
            color: #333;
        }

        /* Style for the input fields */
        .login-container input[type="text"],
        .login-container input[type="password"] {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            outline: none;
            font-size: 1rem;
        }

        /* Style for the login button */
        .login-container button {
            width: 100%;
            padding: 0.75rem;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        .login-container button:hover {
            background-color: #45a049;
        }

        /* Error message styling */
        .error-message {
            color: red;
            font-size: 1rem;
            margin-bottom: 1rem;
        }

        /* Additional styling */
        .login-container p {
            margin-top: 1rem;
            font-size: 0.9rem;
        }

        .login-container a {
            color: #4CAF50;
            text-decoration: none;
        }

        .login-container a:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h2>Login</h2>

    <!-- Show error message if login fails -->
    <?php if ($this->session->flashdata('error')): ?>
        <div class="error-message">
            <?php echo $this->session->flashdata('error'); ?>
        </div>
    <?php endif; ?>

    <form action="" method="post">
        <input type="text" name="username" placeholder="Username" required>
        <input type="password" name="password" placeholder="Password" required>
        <button type="submit">Login</button>
    </form>
    <p>Don't have an account? <a href="register">Register here</a></p>
</div>

</body>
</html>
