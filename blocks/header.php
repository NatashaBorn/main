<header>
    <div id="logo">
       <img src="img/logo3.jpg">
        <a href="/www/index.php?type=news" title="Перейти на главную">
        <h1>Workout</h1><br>
        <p>Информационный ресурс для тех кто хочет быть здоровым</p>
        
        </a>
    </div>
    <div id="menuHead">
        <a href="about.php">
            <div style="margin-right: 5%">О нас</div>
        </a>
        <a href="feedback.php">
            <div style="margin-right: 5%">Обратная связь</div>
        </a>
        <?php
        $admin='Natasha';
        if(isset($_SESSION["name"])&& $_SESSION["name"]==$admin)
            echo '<a href="newArticle.php">
                    <div>Добавить новость</div>
                </a>';
         if(isset($_SESSION["name"])&& $_SESSION["name"]!=$admin)
            echo '<a href="newArticle.php">
                    <div>Предложить новость</div>
                </a>';
        ?>
        
        
    </div>
    <!--<div id="regAuth">
        <a href="reg.php">Регистрация</a> |
        <a href="auth.php"> Авторизация</a>
    </div>-->
</header>