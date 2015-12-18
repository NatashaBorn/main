<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
       <?php 
        $title="Информация о нас";
        require_once "blocks/head.php";
        ?>
        <script src="js/jquery.js"></script>
                
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
                    $id=$_GET['id'];
                    $type=$_GET['type'];
                    
                    if(isset($_GET)){
                        $result=mysql_query("SELECT * FROM articles WHERE type = '$type' and id=$id");
                        $row=mysql_fetch_array($result);                   
                    }
                    
                    mysql_close();
                    
                    ?> 
                    <div id="articles">
                    <h1><?php echo $row['title'];?></h1>
                    <?php echo '<img src="img/articles/'.$row['type'].'/'.$id.'.jpg">';?>
                    <p><?php echo $row['full_text'];?></p>
                    <p>Дата публикации: <?php echo $row['date'];?> / <?php echo $row['time'];?></p>
                    <p>Автор новости: <?php echo $row['author'];?></p>
                    <?php if(isset($_SESSION["name"])&& !isset($_SESSION[".$id."])){
                        /*echo '
                            <button id="like">Добавить в избранное</button> 
                        ';*/
                        echo '<a href="article.php?type='.$type.'&id='.$row["id"].'">
                        <input name="like" type="submit" value="Добавить в избранное" onClick="alert(\'Вы добавили запись в личный кабинет!\')">
                        </a>';
                    }
                    elseif (isset($_SESSION["name"])&&isset($_SESSION[".$id."])) {
                        echo 'Эта новость уже есть в вашем личном кабинете!';
                    }
                    else{
                        echo '*Чтобы добавить запись в личный кабинет необходимо зарегистрироваться';}
                        ?>
                        
                    </div>
                <script>
                    $(document).ready(function() {
                        $("#like").click(function() {
                            <?php $_SESSION[".$id."] = $id;?>       
                            );
                        });
                    });
                </script>
                                                  
            </div>
            <?php require_once "blocks/rightCol.php"?>
        </div>
        
        <?php require_once "blocks/footer.php"?>
        </div>
    </body>
</html>