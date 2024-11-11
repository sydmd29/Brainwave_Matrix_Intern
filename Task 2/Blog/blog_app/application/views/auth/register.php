<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Page background and layout */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f4f7fa;
            padding: 1rem;
        }

        /* Container for the form */
        .form-container {
            width: 100%;
            max-width: 400px;
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Title styling */
        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333;
        }

        /* Form fields styling */
        input {
            width: 100%;
            padding: 0.8rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            font-size: 1rem;
        }

        input:focus {
            border-color: #4CAF50;
            outline: none;
        }

        /* Submit button styling */
        button {
            width: 100%;
            padding: 1rem;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            font-size: 1.1rem;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        button:hover {
            background-color: #45a049;
        }

        /* Responsive form */
        @media (max-width: 600px) {
            .form-container {
                padding: 1.5rem;
            }
        }
    </style>
</head>

<body>
    <div class="form-container">
        <h2>Register</h2>
        <form action="" method="post">
            <input type="text" name="username" placeholder="Username" required>
            <input type="email" name="email" placeholder="Email" required>
            <input type="password" name="password" placeholder="Password" required>
            <button type="submit">Register</button>
        </form>
    </div>
</body>

</html>
