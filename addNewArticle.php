<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
       <?php 
        $title="Информация о нас";
        require_once "blocks/head.php";
        ?>
    </head>
    <body>
        <div id="wrap_wrapper">
        <?php require_once "blocks/header.php"?>
        
            <div id="wrapper">
               <?php require_once "blocks/panel.php"?>
                <div id="leftCol">
                    
                    <?php
                    $connection = mysql_connect("localhost", "root","");
                    $db = mysql_select_db("Articles");
                    if(!$connection||!$db){
			    exit(mysql_error());
			}

                    if(isset($_POST['add'])){
                       $title= strip_tags(trim($_POST['title']));
                       $intro_text=strip_tags(trim($_POST['intro_text']));
                       $full_text=strip_tags(trim($_POST['full_text']));
                       $date= $_POST['date'];
                       $time= $_POST['time'];
                       

                       mysql_query(" INSERT INTO news(title,intro_text,full_text,date,time) "
                               . "VALUES('$title','$intro_text','$full_text','$date','$time')");

                       mysql_close();
                       echo 'Новость успешно добавлена!';
                    }

                   ?>

                    <form method="POST" action="addNewArticle.php">
                        <input type="text" name="title" placeholder="Название статьи" required/><br>  
                        <textarea cols="20" rows="5" name="intro_text" placeholder="Короткое описание статьи" required></textarea><br />
                        <textarea cols="40" rows="10" name="full_text" placeholder="Полный текст для статьи" required></textarea><br />	  
                        <select name="type" size="1">
                            <option value="first">Твое тело</option>
                            <option selected="selected" value="second">Мышщы/Физиология</option>
                            <option value="third">Тренировка</option>
                            <option value="fourth">Диеты</option>
                        </select>
                        <input type="hidden" name="date" value="<?php echo date('Y-m-d');?>"/>
                        <input type="hidden" name="time" value="<?php echo date('H:i:s');?>"/>
                        <input type="submit" name="add" value="Добавить новость">
                    </form>

                </div>
                <?php require_once "blocks/rightCol.php"?>
            </div>
        
        <?php require_once "blocks/footer.php"?>
        </div>
    </body>
</html>