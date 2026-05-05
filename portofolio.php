<?php
session_start();

// Proteksi halaman: Jika tidak ada session, arahkan ke login.php
if (!isset($_SESSION['user_name'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="portofolio.css">
    <title>Portofolio - <?php echo htmlspecialchars($_SESSION['user_name']); ?></title>
    <style>
        .logout-banner {
            background: #f1f5f9;
            padding: 10px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 8px;
            margin-bottom: 20px;
        }
    </style>
</head>
<body>

    <div class="logout-banner">
        <span>Logged in as: <b><?php echo htmlspecialchars($_SESSION['user_name']); ?></b></span>
        <a href="logout.php" style="color: #ef4444; font-weight: bold; text-decoration: none;">Sign Out</a>
    </div>

    <Header>
        <h1>Samara Wardasadiya</h1>
        <p>Informatics Engineering Student</p>
    </Header>

    <h2>Skills</h2>
    <ul>
        <li>C++ Programming</li>
        <li>HTML & Web Basics</li>
        <li>Problem Solving</li>
    </ul>

    <h2>Projects</h2>
    <h3>NEUROCPP</h3>
    <p><b>Language: </b>C++</p>
    <p><b>Description: </b>A consol based chatbot AI integrated with Gemini.</p>

    <h3>Lombok Tour Graph</h3>
    <p><b>Language: </b>Java</p>
    <p><b>Description: </b>Graph-based program designed to model and analyze tourism routes in Lombok. The system represents tourist destinations as nodes and the connections between them as edges, allowing efficient route visualization and path analysis.</p>

    <h2>Contact</h2>
    <p>Email: samara@gemail.com</p>
    <p>Instagram: @samarawards</p>
    <a href="index.php">CV: Reach Me</a>
    
</body>
</html>
