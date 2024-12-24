<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile Page</title>
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
        }

        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 50px;
            background-color: #2a2a40;
            color: white;
        }

        header .logo {
            font-size: 1.5rem;
            font-weight: 600;
        }

        header nav a {
            margin: 0 15px;
            text-decoration: none;
            color: white;
            font-weight: 400;
        }

        header nav a:hover {
            text-decoration: underline;
        }

        header .subscribe {
            padding: 10px 20px;
            background-color: #ffcc00;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .profile-header {
            text-align: center;
            padding: 20px;
            background: #2a2a40;
            color: white;
        }

        .profile-header img {
            border-radius: 50%;
            width: 150px;
            height: 150px;
            border: 5px solid white;
        }

        .profile-header h1 {
            font-size: 1.8rem;
            margin-top: 10px;
        }

        .profile-header h2 {
            font-size: 1rem;
            margin-top: 5px;
            font-weight: 400;
        }

        .profile-header p {
            margin: 5px 0;
            font-size: 0.9rem;
        }

        .main-content {
            text-align: center;
            padding: 50px;
        }

        .main-content button {
            padding: 15px 30px;
            background-color: #ffcc00;
            border: none;
            border-radius: 5px;
            color: black;
            font-size: 1rem;
            font-weight: 600;
            cursor: pointer;
        }

        .main-content button:hover {
            background-color: #e6b800;
        }

        footer {
            background-color: #2a2a40;
            color: white;
            padding: 30px 50px;
        }

        footer .footer-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
        }

        footer .subscribe-section {
            text-align: left;
            max-width: 60%;
        }

        footer .subscribe-section input {
            padding: 10px;
            width: 60%;
            border: none;
            border-radius: 5px;
            margin-right: 10px;
        }

        footer .subscribe-section button {
            padding: 10px 20px;
            background-color: #ffcc00;
            color: black;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        footer .footer-links {
            text-align: right;
        }

        footer .footer-links a {
            margin: 0 10px;
            text-decoration: none;
            color: white;
        }

        footer .footer-links a:hover {
            text-decoration: underline;
        }

        footer .footer-bottom {
            margin-top: 20px;
            text-align: center;
            font-size: 0.8rem;
        }
    </style>
</head>
<body>
    <header>
        <div class="logo">Finsweet</div>
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
    <img src="{{ asset('images/profile-picture.png') }}" alt="profile pict"style=  object-fit: cover;">
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
        <p>Create some post! You don't have any posts yet.</p>
        <button>Create Post</button>
    </div>

    <footer>
        <div class="footer-content">
            <div class="subscribe-section">
                <p>Subscribe to our newsletter to get the latest updates and news</p>
                <input type="email" placeholder="Enter your email">
                <button>Subscribe</button>
            </div>
            <div class="footer-links">
                <a href="#">Profile</a>
                <a href="#">Home</a>
                <a href="#">Blog</a>
                <a href="#">About Us</a>
                <a href="#">Contact Us</a>
                <a href="#">Privacy Policy</a>
            </div>
        </div>
        <div class="footer-bottom">
            <p>Finstreet 118 2561 Fintown | Hello@finsweet.com | 020 7993 2905</p>
        </div>
    </footer>
</body>
</html>
