<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Викторина</title>
        <link rel="stylesheet" href="./styleq.css">
        <link rel="stylesheet" href="./styles/user-info.css">
    </head>
    
    <body>
        
        <header>

            <section class="header-title">
              
                <img src="logo.png" title="Pvzgw2" width="7%" height="100%" style="margin-top: 10px;">
                <h2 class="sub" align="center" style="margin-top: 1%">Игровое поле</h2>
           
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
            <section><fieldset>

            <legend align="center"><h1>Викторина</h1></legend>
                        
                <br><br><br>
                    
            <section class="fox"><p>Благодаря вашим знаниям об игре вы сможете заработать баллы. Эти баллы будут отображаться в вашей личной характеристике. Также ответив на вопросы, вы автоматически принимаете участие в рейтинговой гонке. Стоит отметить, что при обнаружении жульнической аферы, администратор в праве обнулить ваши баллы.</p>
                
                                <br><br><br>
                    <form  name="quest" action="increment_user_pt.php" method="POST">
                    <label for="q1">1) Сколько здоровья дают "улучшения здоровья"? </label><br><br>
                    <input type="radio" name="q1" value="0">5
                    <input type="radio" name="q1" value="0">15
                    <input type="radio" name="q1" value="0">40
                    <input type="radio" name="q1" value="1">10
                    <input type="radio" name="q1" value="0">20
                                
                                <br><br><br>

                    <label for="q2">2) Сколько стоят феноменальные пакеты персонажей?</label><br><br>   
                    <input type="radio" name="q2" value="0">30000
                    <input type="radio" name="q2" value="0">40000
                    <input type="radio" name="q2" value="0">70000
                    <input type="radio" name="q2" value="1">75000
                    <input type="radio" name="q2" value="0">100000

                                <br><br><br>

                    <label for="q3">3) Куда вы ходите играть в garden ops?</label><br><br>
                    <input type="radio" name="q3" value="1">Crazy Dave's Van
                    <input type="radio" name="q3" value="0">Globe
                    <input type="radio" name="q3" value="0">Special events portal
                    <input type="radio" name="q3" value="0">Zomboss' ship
                    <input type="radio" name="q3" value="0">Multiplayer portal

                                <br><br><br>

                    <label for="q4">4) Сколько зомби-героев имеют 125 здоровья? (Без обновлений и стандартных изменений) </label><br><br>
                    <input type="radio" name="q4" value="0">0
                    <input type="radio" name="q4" value="0">3
                    <input type="radio" name="q4" value="1">4
                    <input type="radio" name="q4" value="0">1
                    <input type="radio" name="q4" value="0">2

                                <br><br><br> 
                                
                    <label for="q5">5) Plants vs Zombies</label><br><br>
                    <input type="radio" name="q5" value="0">Комедия
                    <input type="radio" name="q5" value="0">Шутер от первого лица
                    <input type="radio" name="q5" value="1">Шутер от третьего лица
                    <input type="radio" name="q5" value="0">Не знаю
                    <input type="radio" name="q5" value="0">Это что?<br><br>

                    <input type="submit" name="enviar" value="Ответить">
                </section>
                                <br><br><br>
                </fieldset>
            </form>
            </section>
        </main>


        <footer>
            <p>Разработчики: Катерина Ящишина и Роман Брехов</p>   
        </footer>
    </body>
</html>