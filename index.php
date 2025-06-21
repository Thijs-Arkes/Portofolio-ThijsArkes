
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="Login.css">
    <title>Login</title>
</head>

<body>
    <header>
        <h1>Welkom bij mijn Portofolio</h1>
    </header>

    <div class="login-container">
        <h2>Login Portofolio</h2>
        <form id="loginForm">
            <input type="text" id="username" placeholder="Gebruikersnaam" required>
            <input type="password" id="password" placeholder="Wachtwoord" required>
            <button type="submit">Inloggen</button>
        </form>
        <p id="error-message" style="color: red;"></p>
    </div>

    <div class="about-container">
            <h2>Over Mij</h2>
            <p>Leer meer over mij en mijn achtergrond.</p>
            <a href="about.html" class="about-button">Meer lezen</a>
        </div>
    </div>


    <footer>
        <p>&copy; 2025 Mijn Website. Alle rechten voorbehouden.</p>
    </footer>

    <script>
        document.getElementById('loginForm').addEventListener('submit', function(event) {
            event.preventDefault();
            const username = document.getElementById('username').value.trim();
            const password = document.getElementById('password').value.trim();
            const errorMessage = document.getElementById('error-message');

            // Gebruikersnamen en wachtwoorden
            const users = {
                'Albert': 'Dejonge1!',
                'Elleke': 'Jagersma2!',
                'Thijsie': 'Ajaxfan9!',
                'Arvid': 'Fens3!'
            };

            if (users[username] && users[username] === password) {
                errorMessage.textContent = '';
                alert('Login succesvol!');
                window.location.href = 'keuze.html'; // Redirect to Opdrachten.html
            } else {
                errorMessage.textContent = 'Ongeldige gebruikersnaam of wachtwoord.';
            }
        });
    </script>
</body>
</html>