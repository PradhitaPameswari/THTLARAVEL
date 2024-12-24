<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Montserrat', 'Poppins', sans-serif;
            color: #333;
            background-color: #ffff;
            line-height: 1.6;
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px 50px;
            background-color: #1e293b;
            color: white;
        }

        .logo {
            font-size: 1.8rem;
            font-weight: 600;
        }

        header nav a {
            margin: 0 15px;
            text-decoration: none;
            color: #ccc;
            font-weight: 500;
            margin-left: 10px;
            transition: color 0.3s ease;
        }

        header nav a:hover {
            color: white;
        }

        .subscribe {
            padding: 10px 20px;
            background-color: #FFD050;
            color: black;
            border: none;
            border-radius: 5px;
            font-weight: bold;
            cursor: pointer;
            transition: background-color 0.3s ease;
        }

        .subscribe:hover {
            background-color: #FFCA39;
        }

        .profile-header {
            text-align: center;
            padding: 50px 20px;
            background:  url('{{ asset('images/uts pemweb.png') }}') no-repeat center center/cover;
            color: white;
            border-radius: 15px;
            margin: 50px 50px;
            padding: 15px 30px;
            opacity: 0.9;
        }

        .profile-header img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            object-fit: cover;
            border: 5px solid white;
        }

        .profile-header h1 {
            font-size: 2rem;
            margin-top: 15px;
        }

        .profile-header h2 {
            font-size: 1.2rem;
            margin-top: 10px;
            font-weight: 400;
        }

        .profile-header p {
            margin-top: 5px;
            font-size: 1rem;
        }

        .main-content {
            text-align: center;
            padding: 200px 20px;
            margin: 20px auto;
            border-radius: 10px;
        }

        .main-content p {
            font-size: 1.2rem;
            margin-bottom: 20px;
        }

        .main-content button {
            padding: 15px 30px;
            background-color: #FFD050;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
            transition: background-color 0.3s ease, transform 0.2s ease;
        }

        .main-content button:hover {
            background-color: #FFCA39;
            transform: scale(1.05);
        }

        footer {
            background-color: #1e293b;
            color: white;
            padding: 40px 20px;
            text-align: center;
        }

        footer p {
            margin-bottom: 15px;
            font-size: 1rem;
        }

        footer a {
            color: #ccc;
            margin: 0 10px;
            text-decoration: none;
            font-size: 1rem;
            transition: color 0.3s ease;
        }

        footer a:hover {
            color: white;
        }

        .footer-bottom {
            margin-top: 20px;
            font-size: 0.9rem;
            opacity: 0.8;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo"> {Finsweet</div>
        <nav>
            <a href="#">Profile</a>
            <a href="#">Home</a>
            <a href="#">Blog</a>
            <a href="#">About Us</a>
            <a href="#">Contact Us</a>
        </nav>
        <button class="subscribe">Subscribe</button>
    </header>

    <div class="profile-header">
    <img src="{{ asset('images/download.png') }}" alt="Profile Picture">
        <h1>{{ $user['name'] ?? 'User Name' }}</h1>
        <h2>{{ '@' . $user['username'] ?? '@username' }}</h2>
        <p>{{ $user['description'] ?? 'No description available' }}</p>
        <p>300 Followers &bull; 10 Following</p>
        @if(session('success'))
            <p style="color: green; text-align: center;">{{ session('success') }}</p>
        @endif
        @if($errors->any())
            <ul style="color: red;">
                @foreach($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        @endif
    </div>

    <div class="main-content">
        <p>You don’t have any posts yet. Start creating now!</p>
        <button>Create Post</button>
    </div>

    <footer>
        <p>Subscribe to our newsletter for updates:</p>
        <input type="email" placeholder="Enter your email" style="padding: 10px; border-radius: 8px; border: none; margin-right: 10px;">
        <button style="padding: 10px 20px; background-color: #FFD050; border: none; border-radius: 8px; cursor: pointer;">Subscribe</button>

        <div class="footer-bottom">
            <p>&copy; 2024 Finsweet | All Rights Reserved</p>
        </div>
    </footer>
</body>
</html>
