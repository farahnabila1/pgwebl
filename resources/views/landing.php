<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ShopSpot Surabaya: Jejak Mall Melalui Lensa WebGIS</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/leaflet/1.7.1/leaflet.css" />
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background: linear-gradient(135deg, #fdfbfb, #ebedee);
            color: #333;
        }

        header {
            background: linear-gradient(90deg, #ff9966 0%, #ff5e62 100%);
            color: #fff;
            padding: 20px 0;
            text-align: center;
            position: relative;
            overflow: hidden;
        }

        nav {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 0 50px;
        }

        .logo {
            font-size: 24px;
            font-weight: bold;
        }

        .hero {
            padding: 100px 0;
            text-align: center;
            background: linear-gradient(135deg, #ff9966 0%, #ff5e62 100%);
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            animation: fadeIn 1.5s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .hero h1 {
            font-size: 48px;
            margin-bottom: 20px;
            animation: slideInDown 1.5s ease-in-out;
        }

        @keyframes slideInDown {
            from {
                transform: translateY(-50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .hero p {
            font-size: 24px;
            margin-bottom: 30px;
            animation: slideInUp 1.5s ease-in-out;
        }

        @keyframes slideInUp {
            from {
                transform: translateY(50px);
                opacity: 0;
            }

            to {
                transform: translateY(0);
                opacity: 1;
            }
        }

        .hero .btn {
            padding: 10px 30px;
            background: #fff;
            color: #ff5e62;
            text-decoration: none;
            border-radius: 5px;
            font-size: 18px;
            animation: fadeIn 2s ease-in-out;
            transition: background-color 0.3s ease;
        }

        .hero .btn:hover {
            background-color: #ff5e62;
            color: #fff;
        }

        .features {
            padding: 50px 0;
            background: #fff;
            text-align: center;
        }

        .features h2 {
            font-size: 36px;
            margin-bottom: 30px;
            color: #ff5e62;
        }

        .feature-container {
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }

        .feature {
            flex: 1;
            max-width: 300px;
            margin: 20px;
            padding: 20px;
            background: linear-gradient(135deg, #ffffff, #f1f1f1);
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            animation: fadeInUp 1.5s ease-in-out;
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(50px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .feature i {
            font-size: 48px;
            color: #ff5e62;
            margin-bottom: 20px;
        }

        .feature h3 {
            font-size: 24px;
            margin-bottom: 10px;
            color: #ff5e62;
        }

        .map-section {
            padding: 50px 0;
            background: #fdfbfb;
            text-align: center;
        }

        #map {
            width: 100%;
            height: 500px;
        }

        .contact {
            padding: 50px 0;
            background: #fff;
            text-align: center;
        }

        .contact form {
            max-width: 600px;
            margin: 0 auto;
        }

        .contact input,
        .contact textarea {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        .contact button {
            padding: 10px 30px;
            background: #ff5e62;
            color: #fff;
            border: none;
            border-radius: 5px;
            cursor: pointer
        }

        footer {
            padding: 20px 0;
            background: #333;
            color: #fff;
            text-align: center;
        }

        .social-links a {
            display: inline-block;
            margin: 0 20px;
            text-decoration: none;
            color: #fff;
            font-size: 14px;
            font-family: Arial, sans-serif;
            transition: transform 0.3s ease;
        }

        .social-links a i {
            font-size: 30px;
            margin-right: 8px;
            vertical-align: middle;
        }

        .social-links a span {
            vertical-align: middle;
            text-transform: uppercase;
            letter-spacing: 1px;
        }

        .social-links a:hover {
            transform: scale(1.2);
        }

        .social-links-warp .container {
            text-align: center;
        }
    </style>
</head>

<body>
    <header>
        <nav>
            <div class="logo">WebGIS</div>
        </nav>
        <div class="hero">
            <h1>ShopSpot Surabaya: Jejak Mall Melalui Lensa WebGIS</h1>
            <p>Your go-to solution for geographical data visualization</p>
            <a href='dashboard' class="btn">LOGIN</a>
        </div>
    </header>

    <section id="features" class="features">
        <h2>Features</h2>
        <div class="feature-container">
            <div class="feature">
                <i class="fas fa-globe"></i>
                <h3>Interactive Maps</h3>
                <p>Engage with dynamic and interactive maps.</p>
            </div>
            <div class="feature">
                <i class="fas fa-layer-group"></i>
                <h3>Multiple Basemap Layers</h3>
                <p>Multiple basemap layers for comprehensive analysis.</p>
            </div>
            <div class="feature">
                <i class="fas fa-chart-line"></i>
                <h3>Table Data Visualization</h3>
                <p>Mall distribution point table.</p>
            </div>
        </div>
    </section>

    <footer class="footer mt-auto py-3 bg-light">
        <div class="social-links-warp">
            <div class="container">
                <div class="social-links">
                    <a href="https://www.instagram.com/aslisuroboyo/?utm_source=ig_web_button_share_sheet&igshid=OGQ5ZDc2ODk2ZA==" class="instagram">
                        <i class="fab fa-instagram"></i><span>INSTAGRAM</span>
                    </a>
                    <a href="https://x.com/aslisuroboyo?t=DfZrsIaG15Thn8dBKgKYHQ&s=08" class="twitter">
                        <i class="fab fa-twitter"></i><span>TWITTER</span>
                    </a>
                    <a href="https://youtube.com/@ASLISUROBOYO?si=QPwloxJbvhFhsMUc" class="youtube">
                        <i class="fab fa-youtube"></i><span>YOUTUBE</span>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>
