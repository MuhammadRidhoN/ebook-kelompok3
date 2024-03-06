<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>Do Project</title>
    <link href="style.css" rel="stylesheet" type="text/css" />
    <style>
    body {
        font-family: Arial, sans-serif;
        margin: 0;
        padding: 0;
        background-color: white;
    }

    .hero {
        background-image: url('Muschel-Spaghetti\ in\ Tomatensugo.jpg');
        background-size: fit;
        height: 500px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        color: white;
    }

    .hero h2 {
        font-size: 2.5rem;
        margin-bottom: 20px;
        color: white;
    }

    .hero p {
        font-size: 1.2rem;
        margin-bottom: 40px;
        color: white;
    }

    .hero a {
        color: #01c642;
        text-decoration: none;
        font-size: 1.2rem;
        margin-left: 150px;
    }

    .hero button {
        background-color: #01c642;
        color: white;
        border: black;
        padding: 10px 20px;
        cursor: pointer;
        font-size: 1.2rem;
    }

    .hero button:hover {
        background-color: #2c7001;
    }

    .footer {
        background-color:#01c642;
        padding: 20px;
        text-align: center;
        color: #333;
    }

    .footer a {
        color: #333;
        text-decoration: none;
        margin: 0 5px;
    }
    </style>
</head>

<body>
    <p style="background-image: url('Muschel-Spaghetti\ in\ Tomatensugo.jpg');" </p>
    <div class="hero">
        <div>
            <a href="#">Home</a>
            <a href="#">Most Viral</a>
            <a href="#">Top Of The Week</a>
            <a href="#">Explore</a>
            <a href="#">Log in</a>
            <button>Sign up</button>
        </div>
        <h2><img src="Gripa-logo (1).png" alt="Gripa Digdaya" width="260" height="140"></h2>
        <h2>Get your Dream Book</h2>
        <p>Make yourself happy by reading</p>
        <button>Start exploring</button>
    </div>
    <div class="footer">
        <p>Hmm, it looks like you don't have an account yet. <a href="#">Let's get started!</a></p>
        <p><a href="#">About</a> | <a href="#">Blog</a> | <a href="#">Log in</a> | <a href="#">Sign up</a></p>
    </div>
</body>
