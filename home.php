<?php
    session_start();   
?>

<!DOCTYPE html>
<html lang="pt">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Главная</title>
        <link rel="stylesheet" href="./style.css">
        <link rel="stylesheet" href="./styles/user-info.css">
    </head>
    <body>
        
        <header>
            <section class="user-info">
                <img src="./assents/user_profile.png" width="70px" height="70px">

                <main class="user-description">
                    <p id="name"><?php echo($_SESSION['user']);?></p>

                    <p id="pontuation">
                        Баллы: <?php echo($_SESSION['pts']);?><br>
                    </p>
                </main>
            </section>

            <section class="header-title">
                <img src="logo.png" title="Pvzgw2" width="7%" height="100%" style="margin-top: 10px;">
                <h2 class="sub" align="center" style="margin-top: 1%;">Игровое поле</h2>
            </section>
            
            <nav class="header-options">
                <section class="options" style="margin-bottom: 20px;">
                    <a href="ranking.php?to=logout">Выйти</a>
                </section>
            </nav>
        </header>

        <section id="megan">
            <section class="all-options">
                <a href="home.php">Главная</a>
                <a href="dica1.php">Советы</a>
                <a href="questionario.php">Викторина</a>
                <a href="sobre1.php">О нас</a>
                <a href="show-rank.php?to=ranking">Рейтинг</a>
            </section>
        </section>

        <main>

                <figure><img src="img4.jpg" title="Pvzgw2" alt="PVZ GW2" width="45%" header=50%></figure>

            <section class="content-text">
                <h1>Главная</h1>

                <p>Здравствуйте, добро пожаловать в ряды офицеров Plants vs Zombies GW2. Здесь вы узнаете все советы и секреты, чтобы стать отличным игроком. После вы можете поделиться опытом и приемами с другими игроками для достижения максимального уровня.
                </p>
            </section> 
            <section class="content-text">
                <h1>Наши мотивы</h1>
                <p>Мы не преследуем каких-то финансовых мотивов, наша цель рассказать как можно большой аудитории об игре.
                </p>
            </section>

        </main>
    </body>
</html>