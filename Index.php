<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>AlannWeb - Home</title>
    <style>
        /* Global Styles */
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e8f5e9;
            color: #333;
            overflow-x: hidden;
        }

        /* Container Styles */
        .container {
            width: 100%;
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px; /* Padding to ensure content does not touch the edges */
            box-sizing: border-box; /* Include padding and border in the element's total width and height */
            display: flex;
            flex-direction: row; /* Arrange sidebar and main content side by side */
            gap: 20px; /* Space between sidebar and main content */
        }

        /* Header Styles */
        header {
            background-color: #388e3c;
            color: white;
            padding: 15px 0;
            position: relative;
            z-index: 10;
            width: 100%;
        }

        header .container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            max-width: 100%; /* Ensure header content fits within container */
        }

        header h1 {
            margin: 0;
            font-size: 2em;
        }

        nav ul {
            list-style: none;
            margin: 0;
            padding: 0;
            display: flex;
        }

        nav ul li {
            margin-left: 20px;
            position: relative;
        }

        nav ul li a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            transition: color 0.3s ease, transform 0.3s ease;
        }

        nav ul li a:hover {
            color: #c8e6c9;
            transform: translateY(-3px); /* Reduced vertical movement */
        }

        /* Sidebar Styles */
        aside {
            background-color: #c8e6c9;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-radius: 8px; /* Rounded corners for sidebar */
            flex: 0 0 250px; /* Fixed width for sidebar */
            width: 100%;
        }

        aside h3 {
            margin-top: 0;
        }

        aside ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        aside ul li {
            margin-bottom: 10px;
        }

        aside ul li a {
            text-decoration: none;
            color: #388e3c;
            font-weight: bold;
            transition: color 0.3s ease;
        }

        aside ul li a:hover {
            color: #2c6b2f;
        }

        /* Main Styles */
        main {
            background-color: #ffffff;
            padding: 20px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            border-radius: 8px; /* Rounded corners for main content */
            flex: 1; /* Take remaining space */
            width: 100%;
        }

        @keyframes fadeIn {
            from { opacity: 0; }
            to { opacity: 1; }
        }

        /* Footer Styles */
        footer {
            background-color: #388e3c;
            color: white;
            text-align: center;
            padding: 10px 0;
            position: relative;
            z-index: 10;
            width: 100%;
            margin-top: 20px; /* Ensure spacing between footer and main content */
        }

        footer p {
            margin: 0;
        }

        /* Responsive Design */
        @media (max-width: 768px) {
            header h1 {
                font-size: 1.5em;
            }

            nav ul {
                flex-direction: column;
                align-items: flex-start;
            }

            nav ul li {
                margin-left: 0;
                margin-bottom: 10px;
            }

            nav ul li a {
                font-size: 1em;
            }

            .container {
                flex-direction: column; /* Stack sidebar and main content vertically on smaller screens */
                padding: 0 10px; /* Reduced padding on smaller screens */
            }

            aside {
                width: 100%;
                margin-bottom: 20px; /* Spacing between sidebar and main content on smaller screens */
            }

            main {
                padding: 15px;
            }
        }
    </style>
</head>
<body>
    <header>
        <div class="container">
            <h1>AlannWeb</h1>
            <nav>
            </nav>
        </div>
    </header>
    <div class="container">
        <aside>
            <h3>Sidebar Menu</h3>
            <ul>
                <li><a href="profile-fadhlanfadhlilahx.php">Profile</a></li>
                <li><a href="settings.php">Settings</a></li>
                <li><a href="notifications.php">Notifications</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>
        </aside>
        <main>
            <h2>Welcome to AlannWeb</h2>
            <p>This is the homepage. Here you can find the latest news or updates about AlannWeb.</p>
            <!-- Add more content here -->
        </main>
    </div>
    <footer>
        <div class="container">
            <p>&copy; 2024 AlannWeb. All rights reserved.</p>
        </div>
    </footer>
</body>
</html>