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
                 <div id="myOffice">
                    <h2>Список понравившихся мне записей</h2>
                    
                    <?php echo $_SESSION["name"];
                        foreach ($_SESSION as $value) {
                            echo $value;
                            $connection = mysql_connect("localhost", "root","");
                            $db = mysql_select_db("Articles");
                            if(!$connection||!$db){
			        exit(mysql_error());
			    }
                            if($value!=$_SESSION["name"]){
                            $result = mysql_query("SELECT * FROM articles WHERE id=$value");
                            //$row=mysql_fetch_array($result);  
                            mysql_close();
                            
                            if($row= mysql_fetch_array($result)) { ?> 
                                <div id="articles">  
                                <?php echo '<img src="img/articles/'.$row["type"].'/'.$row["id"].'.jpg">';?>
                                <a href=""><h1 class="title"><?php echo $row['title'];?></h1></a>
                                <p><?php echo $row['intro_text'];?></p>
                                
                                    
                                <?php 
                                echo'<a href="article.php?type='.$row["type"].'&id='.$row["id"].'">
                                <div class="more">Далее</div>
                                </a>';
                                echo '<a href="myOffice.php?id='.$row["id"].'">
                                    <input name="delete" type="submit" value="Удалить" onClick="alert(\'Вы delete запись в личный кабинет!\')">
                                    </a>';
                                ?>
                          
                                <div style="clear:both;"></div>
                                </div>
                                <?php } 
                            }
                        }  
                     ?>
                    
                </div>
                <script>
                    $(document).ready(function() {
                        $("#delete").click(function() {
                            <?php 
                            $id=$_GET['id'];
                            if($_SESSION[".$id."]===$value){unset($_SESSION[".$id."]);}
                                ?>       
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