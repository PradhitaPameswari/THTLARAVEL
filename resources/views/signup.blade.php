<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;600&family=Poppins:wght@400;600&display=swap" rel="stylesheet">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Montserrat', 'Poppins', sans-serif;
        }

        body {
            display: flex;
            height: 100vh;
            background: linear-gradient(135deg, #d1a9f0, #fddbbf);
        }

        .container {
            display: flex;
            margin: auto;
            width: 100%;
            height: 100%;
            overflow: hidden;
        }

        .illustration {
            flex: 1;
            background: white;
            display: flex;
            justify-content: center;
            align-items: center;
            background-size: cover;
        }

        .form-container {
            flex: 1;
            padding: 50px;
            background: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
        }

        .form-container h1 {
            font-size: 2rem;
            margin-bottom: 1rem;
            color: #333;
            font-weight: Bold;
        }

        .form-container form {
            display: flex;
            flex-direction: column;
        }

        .form-container input {
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 1rem;
        }

        .form-container button {
            padding: 10px;
            background-color: #7d59ba;
            color: white;
            border: none;
            border-radius: 5px;
            font-size: 1rem;
            cursor: pointer;
            margin-top: 10px;
        }

        .form-container button:hover {
            background-color: #5b4290;
        }

        .form-container .social-buttons {
            display: flex;
            justify-content: space-between;
            margin-top: 20px;
        }

        .form-container .social-buttons button {
            flex: 1;
            margin: 0 5px;
            padding: 10px;
            border: 1px solid #ccc;
            background: white;
            color: #333;
            border-radius: 5px;
            cursor: pointer;
        }

        .form-container .social-buttons button:hover {
            background: #f0f0f0;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="illustration">
            <img src="{{ asset('images/signup.png') }}" alt="Sign Up Illustration" style="width: 100%; height: 100%; object-fit: cover;">
        </div>
        <div class="form-container">
            <h1>Sign Up</h1>
            <form action="{{ route('signup') }}" method="POST">
                @csrf
                <input type="text" name="name" placeholder="Full Name" required>
                <input type="text" name="username" placeholder="Username" required>
                <input type="email" name="email" placeholder="Email" required>
                <input type="password" name="password" placeholder="Password" required>
                <textarea name="description" placeholder="Tell us about yourself"></textarea>
                <button type="submit">Sign Up</button>
            </form>

            @if(session('error'))
                <p style="color: red; text-align: center;">{{ session('error') }}</p>
            @endif
            <p style="text-align:center; margin: 15px 0px;">-- Or Sign Up with --</p>
            <div class="social-buttons">
                <button>Sign Up with Google</button>
                <button>Sign Up with Facebook</button>
            </div>
        </div>
    </div>
</body>
</html>
