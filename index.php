<?php session_start();?>
<!DOCTYPE html>
<html>
    <head>
       <?php 
        $title="Новости обо всем";
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
                    
                    $type=$_GET['type'];
                    
                    if(isset($_GET)){
                        $result=mysql_query("SELECT * FROM articles WHERE type = '$type'");
                    }
                    else {
                        
                    }
                    
                   
                    //$result=mysql_query("SELECT * FROM $base");
                    $max_articles=3;
                    $num_articles=mysql_num_rows($result);
                    $num_pages=intval(($num_articles-1)/$max_articles)+1;
        
                    if(isset($_GET["page"])){
                        $page=$_GET["page"];
                        if($page<1)
                            $page=1;
                        elseif($page>$num_pages)
                            $page=$num_pages;
                    }
                    else
                        $page=1;
                    
                    mysql_close();
					/*$row=mysql_fetch_array($result);
					echo $row['title'];
                    '.$row["title"].'
                    '.$row["intro_text"].'
                    '.$row["date"].'
                    '.$row["time"].'
                    '.$base.'
                    '.$row["id"].'
                    */
                    //$count=$row["id"];
           
                    $row= mysql_fetch_array($result);
                    $count=$row["id"]-1;
          
                    do{
                        
                        if($row["id"]>(($page*$max_articles-$max_articles)+$count)&&($row["id"]<=(($page*$max_articles)+$count))){
               ?> 
                    <div id="articles">  
                    <?php echo '<img src="img/articles/'.$type.'/'.$row["id"].'.jpg">';?>
                    <a href=""><h1 class="title"><?php echo $row['title'];?></h1></a>
                    <p><?php echo $row['intro_text'];?></p>
                    <?php echo'<a href="article.php?type='.$type.'&id='.$row["id"].'">
                    <div class="more">Далее</div>
                    </a>';?>
                    <div style="clear:both;"></div>
                    </div>
                    <?php }
                    }while ($row= mysql_fetch_array($result));?>
                    
                      <div id="page">
                          <?php if($num_pages!=1){
                        for($i=1;$i<=$num_pages;$i++)
                        echo '<a href="index.php?type='.$type.'&page='.$i.'">'.$i.'</a>';
                    } ?>
                      </div>
                      <?php if($result==false)
               echo'ошибочка'?>
                </div>
            
            <?php require_once "blocks/rightCol.php"?>
           </div>
        <?php require_once "blocks/footer.php"?>
           
        </div>
    </body>
</html>