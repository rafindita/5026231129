<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>adamlevine - Linktree</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap">
    <style>
        body {
            background: linear-gradient(to bottom, #c00000 60%, #401010);
            background-attachment: fixed;
            color: white;
            font-family: 'Inter', sans-serif;
            margin: 0;
            padding: 0;
            min-height: 100vh;
        }

        .navbar {
            background-color: transparent;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }

        .nav-links {
            display: flex;
            gap: 15px;
        }

        .nav-item {
            color: white;
            text-decoration: none;
            font-size: 14px;
            padding: 5px 10px;
        }

        .profile-container {
            max-width: 680px;
            margin: 0 auto;
            padding: 20px 15px 40px;
            text-align: center;
            position: relative;
        }

        .profile-pic {
            width: 96px;
            height: 96px;
            border-radius: 50%;
            object-fit: cover;
            object-position: top;
            margin: 25px auto 15px;
            border: 2px solid rgba(255, 255, 255, 0.2);
        }

        .username {
            font-size: 20px;
            font-weight: bold;
            margin-bottom: 5px;
        }

        .description {
            margin-bottom: 30px;
            font-size: 15px;
            color: rgba(255, 255, 255, 0.9);
        }

        .link-button {
            background-color: transparent;
            color: white;
            border-radius: 30px;
            padding: 16px 20px;
            margin-bottom: 12px;
            text-align: left;
            display: flex;
            justify-content: space-between;
            align-items: center;
            text-decoration: none;
            font-weight: 500;
            transition: all 0.2s;
            position: relative;
            font-size: 15px;
            border: 1px solid white;
        }

        .link-button:hover {
            background-color: rgba(255, 255, 255, 0.9);
            transform: translateY(-1px);
            color: #c00000;
            text-decoration: none;
        }

        .link-text {
            flex-grow: 1;
            text-align: center;
        }

        .options-icon {
            color: rgba(255, 255, 255, 0.7);
            font-size: 14px;
            padding: 5px;
        }

        .menu-button {
            position: absolute;
            top: 15px;
            right: 15px;
            background-color: rgba(0, 0, 0, 0.3);
            width: 40px;
            height: 40px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            cursor: pointer;
        }

        .footer {
            text-align: center;
            padding: 20px;
            font-size: 14px;
            color: rgba(255, 255, 255, 0.7);
        }

        .linktree-badge {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 5px;
            margin-top: 30px;
            color: rgba(255, 255, 255, 0.8);
            text-decoration: none;
            font-size: 14px;
        }

        .linktree-badge:hover {
            color: white;
            text-decoration: none;
        }

        .linktree-badge img {
            height: 18px;
            opacity: 0.8;
        }

        .browser-address {
            background-color: #f5f5f5;
            border-radius: 20px;
            padding: 5px 15px;
            display: flex;
            align-items: center;
            margin: 5px 10px;
            font-size: 14px;
            color: #333;
        }

        .join-button {
            display: inline-flex;
            align-items: center;
            justify-content: center;
            background-color: white;
            color: black;
            border-radius: 30px;
            padding: 12px 24px;
            margin: 25px auto 10px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.2s;
            font-size: 14px;
            border: none;
            opacity: 0.8;
        }

        .join-button:hover {
            background-color: white;
            transform: translateY(-1px);
            text-decoration: none;
            color: black;
            opacity: 1;
        }

        .join-button img {
            height: 16px;
            margin-right: 8px;
        }
    </style>
</head>
<body>
    <div class="profile-container">
        <div class="menu-button">
            <i class="fas fa-ellipsis-h"></i>
        </div>

        <img src="{{ asset('img/foto_adamlevine.jpg') }}" alt="Profile Picture" class="profile-pic">

        <div class="username">@adamlevine</div>
        <div class="description">Official Linktr.ee of Adam Levine</div>

        <a href="https://sml.lnk.to/Ojala" class="link-button">
            <div class="link-text">Stream Ojalá (The Rudeboyz x Maluma x Adam Levine)</div>
            <span class="options-icon"><i class="fas fa-ellipsis-v"></i></span>
        </a>

        <a href="https://www.youtube.com/watch?v=dF5amvVZXIM" class="link-button">
            <div class="link-text">Ojalá Official Video</div>
            <span class="options-icon"><i class="fas fa-ellipsis-v"></i></span>
        </a>

        <a href="https://www.youtube.com/watch?v=d6DsH1xlkzw&embeds_referring_euri=https%3A%2F%2Flinktr.ee%2F&embeds_referring_origin=https%3A%2F%2Flinktr.ee&source_ve_path=MjM4NTE" class="link-button">
            <div class="link-text">"Wings Of Stone" - The Original Song from Netflix's "The Bubble"</div>
            <span class="options-icon"><i class="fas fa-ellipsis-v"></i></span>
        </a>

        <a href="https://pawpatrol.lnk.to/GoodMood" class="link-button">
            <div class="link-text">"Good Mood" - The Original Song from Paw Patrol: The Movie</div>
            <span class="options-icon"><i class="fas fa-ellipsis-v"></i></span>
        </a>

        <a href="https://calirosatequila.com/" class="link-button">
            <div class="link-text">Calirosa Tequila</div>
            <span class="options-icon"><i class="fas fa-ellipsis-v"></i></span>
        </a>

        <a href="https://www.friendlyunicorn.com/" class="link-button">
            <div class="link-text">Friendly Unicorn Clothing</div>
            <span class="options-icon"><i class="fas fa-ellipsis-v"></i></span>
        </a>

        <a href="https://maroon5.lnk.to/JordiAlbum" class="link-button">
            <div class="link-text">New Maroon 5 Album 'JORDI' out now</div>
            <span class="options-icon"><i class="fas fa-ellipsis-v"></i></span>
        </a>

        <a href="https://maroon5shop.com/" class="link-button">
            <div class="link-text">Shop Maroon 5</div>
            <span class="options-icon"><i class="fas fa-ellipsis-v"></i></span>
        </a>

        <a href="https://www.youtube.com/watch?v=U05fwua9-D4&feature=youtu.be" class="link-button">
            <div class="link-text">Maroon 5 - "Lost" Music Video</div>
            <span class="options-icon"><i class="fas fa-ellipsis-v"></i></span>
        </a>

        <a href="https://music.apple.com/us/artist/maroon-5/1798556?" class="link-button">
            <div class="link-text">Maroon 5 Spatial Audio on Apple Music</div>
            <span class="options-icon"><i class="fas fa-ellipsis-v"></i></span>
        </a>

        <a href="https://maroon5.lnk.to/BeautifulMistakes" class="link-button">
            <div class="link-text">Maroon 5 - "Beautiful Mistakes" ft. Megan Thee Stallion</div>
            <span class="options-icon"><i class="fas fa-ellipsis-v"></i></span>
        </a>

        <a href="#" class="join-button">
            <img src="{{ asset('img/linktree-logo-icon.png') }}" alt="Linktree" style="height: 18px; margin-right: 5px;"> Join adamlevine on Linktree
        </a>
    </div>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.1/umd/popper.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.6.0/js/bootstrap.min.js"></script>
</body>
</html>