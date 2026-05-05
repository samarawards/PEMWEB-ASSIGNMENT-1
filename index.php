<?php
session_start();
// Halaman registrasi biasanya terbuka untuk umum, 
// tapi kita tambahkan session_start agar bisa mengecek status login.
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>1st Meeting is for HTML</title>
</head>
<body>
    <div class="container">
    <header>
        <div style="display: flex; justify-content: space-between; align-items: center;">
            <div>
                <h3>Curiculum Vitae</h3>
                <h1>Samara Wardasadiya</h1>
                <h5>Bachelor Student of Informatics Engineering</h5>
            </div>
            <?php if (isset($_SESSION['user_name'])): ?>
                <a href="logout.php" style="background: #ef4444; color: white; padding: 5px 15px; border-radius: 5px; text-decoration: none;">Logout</a>
            <?php else: ?>
                <a href="login.php" style="background: #6366f1; color: white; padding: 5px 15px; border-radius: 5px; text-decoration: none;">Login</a>
            <?php endif; ?>
        </div>
        
        <nav class="nav">
            <a href="index.php">CV</a>
            <a href="portofolio.php">Portofolio</a>
        </nav>
    
    </header>    

    <p class="brief">Information Technology student with practical experience in programming, system analysis, and web concepts. Skilled in logical thinking, structured problem-solving, and building functional software projects. Motivated to grow as a developer and contribute to impactful technology solutions.</p>
    <p class="biodata"><b>Name: </b>Samara Wardasadiya</p>
    <p class="biodata"><b>Education: </b>Bachelor Student of Informatics Engineering</p>
    <p class="biodata"><b>Age: </b>19 Years old</p>

    <div class="bagidua">
        <div>
            <img src="Pas Photo 2.jpeg" alt= "graduate picture" width="100">
        </div>
        <div>
            <table border="1">
                <caption>Language Skill</caption>
                <thead>
                    <tr>
                        <th>Language</th>
                        <th>Level</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Bahasa Indonesia</td>
                        <td>Fluent</td>
                    </tr>
                    <tr>
                        <td>English</td>
                        <td>Upper Intermediate</td>
                    </tr>
                    <tr>
                        <td>Korean</td>
                        <td>Basic</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <form id="myForm" action="form.php" method="post">
        <fieldset>
            <legend>Personal Data (Registration)</legend>

            <label for="nama">Full Name:</label><br><br>
            <input type="text" id="MyNama" name="name" required placeholder="Enter your name">

            <br><br>
            <label for="email">Email:</label><br><br>
            <input type="email" id="MyEmail" name="email">

            <br><br>
            <label for="password">Password:</label><br><br>
            <input type="password" id="MyPassword" name="password">

            <br><br>
            <label for="">No. Telpon:</label><br><br>
            <input id="MyTelepon" name="telepon">

        </fieldset>

        <fieldset>
            <legend>Additional Information</legend>

            <p>Gender:</p>

            <input type="radio" id="male" name="gender" value="male">
            <label for="male">Male</label>

            <input type="radio" id="female" name="gender" value="female">
            <label for="female">Female</label>

            <p>Hobbies:</p>

            <input type="checkbox" id="coding" name="hobby[]" value="coding">
            <label for="coding">Coding</label>

            <input type="checkbox" id="gaming" name="hobby[]" value="gaming">
            <label for="gaming">Gaming</label>

            <br><br>
            <label for="address">Address:</label>
            <br>
            <textarea id="address" name="address" rows="4" cols="50"></textarea>

            <br><br>
            <label for="photo">Upload Photo:</label>
            <input type="file" id="photo" name="photo" accept="image/*">

        </fieldset>
        
        <br>
        <button type="submit" >Register</button>
        <button type="reset">Reset</button>
        <p style="margin-top: 15px;">Already have an account? <a href="login.php">Login here</a></p>
    </form>

    <br>
    <table id="resultTable" border="1" style="display:none;">
        <caption>Data Submitted</caption>
        <thead>
            <tr>
                <th>Field</th>
                <th>Value</th>
            </tr>
        </thead>
        <tbody id="resultBody"> 
        </tbody>
    </table>

    </div>
    <script src="script.js"></script>
    
</body>
</html>
