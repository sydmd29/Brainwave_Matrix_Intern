<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>All Posts</title>
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
            background-color: #f3f4f6;
            padding: 1rem;
        }

        /* Container for the posts */
        .post-container {
            width: 100%;
            max-width: 700px;
            background-color: #fff;
            padding: 2rem;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        /* Title styling */
        h2 {
            margin-bottom: 1.5rem;
            text-align: center;
            color: #333;
        }

        /* Styling for each post */
        .post {
            padding: 1.5rem;
            border: 1px solid #ddd;
            border-radius: 8px;
            margin-bottom: 1.5rem;
            background-color: #fafafa;
            transition: transform 0.2s;
        }

        .post:hover {
            transform: scale(1.02);
        }

        /* Post title */
        .post h3 {
            margin-bottom: 0.5rem;
            color: #4CAF50;
        }

        /* Post content */
        .post p {
            color: #555;
            line-height: 1.6;
        }

        /* Links for edit and delete (same line) */
        .post .links {
            display: flex;
            align-items: center;
            margin-top: 1rem;
        }

        .post .links a {
            text-decoration: none;
            color: #4CAF50;
            margin-right: 1rem;
            font-weight: bold;
        }

        .post .links a:hover {
            color: #45a049;
        }

        /* Create new post button */
        .create-post {
            display: block;
            width: fit-content;
            margin: 0 auto;
            padding: 0.75rem 1.5rem;
            background-color: #4CAF50;
            color: #fff;
            border-radius: 4px;
            text-decoration: none;
            font-weight: bold;
            text-align: center;
            transition: background-color 0.3s;
        }

        .create-post:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="post-container">
    <h2>All Posts</h2>
    <?php foreach ($posts as $post): ?>
        <div class="post">
            <h3><?= $post['title']; ?></h3>
            <p><?= $post['content']; ?></p>
            <div class="links">
                <a href="<?= site_url('posts/edit/' . $post['id']); ?>">Edit</a>
                <a href="<?= site_url('posts/delete/' . $post['id']); ?>">Delete</a>
            </div>
        </div>
    <?php endforeach; ?>
    <a class="create-post" href="<?= site_url('posts/create'); ?>">Create New Post</a>
</div>

</body>
</html>
