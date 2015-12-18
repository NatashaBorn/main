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
                       $full_text=  strip_tags(trim($_POST['full_text']));
                       $author= strip_tags(trim($_POST['author']));
                       $date= $_POST['date'];
                       $time= $_POST['time'];
                       
                       

                       mysql_query(" INSERT INTO news(title,full_text,date,time,author) "
                               . "VALUES('$title','$full_text','$date','$time','$author')");

                       mysql_close();
                       echo 'Новость успешно добавлена!';
                    }

                   ?>

                    <form method="POST" action="newArticle.php">
                    
                    <input type="text" name="title" placeholder="Название статьи" required/><br>  

                    
                    <textarea cols="40" rows="10" name="text" placeholder="Текст статьи" required> </textarea><br>
                    
                    <input type="text" name="author" placeholder="Автор" required/><br><br>	  
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