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
                       $text=strip_tags(trim($_POST['text']));
                       $login=$_SESSION["name"];

                       mysql_query(" INSERT INTO ideaArticle(title,text,login) "
                               . "VALUES('$title','$text','$login')");

                       mysql_close();
                    }

                   ?>

                    <form method="POST" action="addIdeaArticle.php">
                    <input type="text" name="title" placeholder="Название идеи" required/><br>  
                    <textarea name="text" placeholder="Описание идеи" required></textarea><br />	  
                    <input type="submit" name="add" value="Предложить идею" onClick="alert('Идея успешно отправлена!')">
                </form>

                </div>
                <?php require_once "blocks/rightCol.php"?>
            </div>
        
        <?php require_once "blocks/footer.php"?>
        </div>
    </body>
</html>