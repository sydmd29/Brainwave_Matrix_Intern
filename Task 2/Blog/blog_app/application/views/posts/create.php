<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <style>
        /* Reset some default styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: Arial, sans-serif;
        }

        /* Body styling */
        body {
            display: flex;
            justify-content: center;
            align-items: center;
            min-height: 100vh;
            background-color: #f3f4f6;
            padding: 1rem;
        }

        /* Form container styling */
        .form-container {
            width: 100%;
            max-width: 600px;
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Heading styling */
        h2 {
            text-align: center;
            margin-bottom: 1.5rem;
            color: #333;
        }

        /* Input and textarea styling */
        input[type="text"], textarea {
            width: 100%;
            padding: 0.75rem;
            margin-bottom: 1rem;
            border: 1px solid #ddd;
            border-radius: 4px;
            outline: none;
            font-size: 1rem;
        }

        /* Button styling */
        button {
            width: 100%;
            padding: 0.75rem;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            font-size: 1rem;
        }

        /* Button hover effect */
        button:hover {
            background-color: #45a049;
        }

        /* Focus effect for inputs and textareas */
        input:focus, textarea:focus {
            border-color: #4CAF50;
        }
    </style>
</head>
<body>

<div class="form-container">
    <h2>Create Post</h2>
    <form action="" method="post">
        <input type="text" name="title" placeholder="Post Title" required>
        <textarea name="content" placeholder="Content" required></textarea>
        <button type="submit">Create</button>
    </form>
</div>

</body>
</html>
