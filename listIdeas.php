<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
       <?php 
        $title="Информация о нас";
        require_once "blocks/head.php";
        ?>
        <script type="text/javascript" src="js/jquery.js"></script>
        <script>
            $(document).ready(function() {
            $("#delete").click(function() {
                <?php $id=$row['id'];
                   mysql_db_query("Articles", "DELETE FROM ideaArticle WHERE id=$id")?>       
                    );
                });
            });
        </script>
        
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
                
                $click=$_GET['click'];
                $id=$_GET['id'];
                if($click==true){
                    mysql_query("DELETE FROM ideaArticle WHERE id=$id");
                }
                
                $result=mysql_query("SELECT*FROM ideaArticle");

                mysql_close();
                $row=mysql_fetch_array($result);
                //echo $row['title'];

                while ($row = mysql_fetch_array($result)) { ?>        
                <h1><?php echo $row['title'];?></h1>
                <p><?php echo $row['text'];?></p>
                <p>Автор новости: <?php echo $row['login'];?></p>
                <?php echo '<a href="listIdeas.php?id='.$row["id"].'&click=true">
                    <div>Delete</div>
                    </a>';
                ?>
                
                <hr/>	
                <?php }?>
                
            </div>
            <?php require_once "blocks/rightCol.php"?>
        </div>
        
        <?php require_once "blocks/footer.php"?>
        </div>
    </body>
</html>