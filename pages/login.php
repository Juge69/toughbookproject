<!DOCTYPE html>
<html lang="nl">
<head>
    <meta charset="UTF-8">
    <title>Inloggen - toughbookbeheer</title>
    <link rel="stylesheet" href="../styling/style.css">
</head>
<body>
    <div class="login-page">
        <div class="login-title">
            <h1>Toughbooks</h1>
            <p>Log in om de pagina's te beheren</p>
        </div>

        <div class="login-card">
            <h2>Inloggen</h2>

            <form id="login-form" method="post">
                <div class="login-field">
                    <svg class="icon" viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 12a5 5 0 100-10 5 5 0 000 10zm0 2c-4.4 0-8 2.2-8 5v3h16v-3c0-2.8-3.6-5-8-5z"/></svg>
                    <input type="text" id="gebruikersnaam" name="gebruikersnaam" placeholder="Gebruikersnaam">
                </div>

                <div class="login-field">
                    <svg class="icon" viewBox="0 0 24 24" width="18" height="18" fill="currentColor"><path d="M12 2a4 4 0 00-4 4v3H7a2 2 0 00-2 2v9a2 2 0 002 2h10a2 2 0 002-2v-9a2 2 0 00-2-2h-1V6a4 4 0 00-4-4zm0 2a2 2 0 012 2v3h-4V6a2 2 0 012-2z"/></svg>
                    <input type="password" id="wachtwoord" name="wachtwoord" placeholder="Wachtwoord">
                </div>

                <div class="login-alert" id="login-error" hidden></div>

                <div class="login-links">
                    <a href="#">Wachtwoord vergeten?</a>
                </div>

                <button type="submit" class="btn-login">INLOGGEN</button>
            </form>
            
        </div>
    </div>
</body>
</html>