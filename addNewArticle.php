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
                       $type=strip_tags(trim($_POST['type']));
                       $date= $_POST['date'];
                       $time= $_POST['time'];
                       

                       mysql_query(" INSERT INTO articles(title,intro_text,full_text,date,time,type) "
                               . "VALUES('$title','$intro_text','$full_text','$date','$time','$type')");

                       mysql_close();
                       echo '<span class="message" style="padding-left: 24%;">Статья успешно добавлена!</span>';
                    }

                   ?>

                    <form method="POST" action="addNewArticle.php" style="margin-top: 10px;">
                        <input type="text" name="title" placeholder="Название статьи" required/><br>  
                        <textarea cols="20" rows="5" name="intro_text" placeholder="Короткое описание статьи" required></textarea><br />
                        <textarea cols="40" rows="10" name="full_text" placeholder="Полный текст для статьи" required></textarea><br />	  
                        <select name="type" size="1">
                            <option value="yourBody">Твое тело</option>
                            <option selected="selected" value="anatomy">Мышщы/Физиология</option>
                            <option value="training">Тренировка</option>
                            <option value="trainingProgram">Программы тренировок</option>
                            <option value="exercises">Упражнения для мышц</option>
                            <option value="ration">Рацион</option>
                            <option value="diet">Диеты</option>
                        </select>
                        <input type="hidden" name="date" value="<?php echo date('Y-m-d');?>"/>
                        <input type="hidden" name="time" value="<?php echo date('H:i:s');?>"/>
                        <button name="add">Добавить новость</button>
                    </form>

                </div>
                <?php require_once "blocks/rightCol.php"?>
            </div>
        
        <?php require_once "blocks/footer.php"?>
        </div>
    </body>
</html>