<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="join.css">
</head>
<body>
    <header>
        Gå med i föreningen
        <a href="index.php">Tillbaka</a>
    </header>
    <div class="main">
        <form action="join.php" method="post">
            <label for="name">Namn</label>
            <input type="text" name="name" id="name" placeholder="Förnamn Efternamn" requierd><br>
            <label for="email">E-mail</label>
            <input type="email" name="email" id="email" placeholder="ABC123@gmail.com" requierd><br>
            <label for="pass">Lösenord</label>
            <input type="password" name="pass" id="pass" placeholder="Lösenord" requierd><br>
            <div id="checkfix">
                <input type="checkbox" name="News" id="News">
                <label for="News">Få nyhetsbrev</label>
            </div>
            <button type="submit" id="btn">Gå med</button>
        </form>
    </div>
    <footer>&copy;Föreningen för Fågelskådnign i Falsterbo</footer>
</body>
</html>