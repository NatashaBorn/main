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
        <?php require "blocks/header.php"?>
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
                        $count1=mysql_num_rows($result);
                    }
                    if(!isset($_GET['type'])) {
                        echo 'Современный бодибилдинг уже давно превратился в большой бизнес, поэтому львиная доля статей, книг, курсов, методик ориентирована на получение прибыли и не приносит реальной пользы спортсменам, особенно тем, которые еще не нашли свой собственный путь…
Основная цель моего сайта – дать Вам уникальные знания, которые станут незаменимым инструментом для построения собственной формулы успеха в бодибилдинге. Отсюда и название проекта – ТвойТренинг, которое выражает индивидуальность нашего вида спорта. Самопознание даст Вам новую силу, а разум поможет ее удержать…
<br>Задумайтесь, что лучше:<br>
    <br>Следовать чьей-то злой воле либо же обрести свою собственную стратегию тренировки?
    <br>Упорно «биться головой об стену», не понимая смысла своих действий на тренировках либо же, раз и навсегда, уяснить для себя, что такое тренировка мышц?
    <br>Надеяться, что завтра Вам удастся накачать мышцы либо сегодня же разобраться в том, как они растут и что является причиной роста мышц?
    <br>Верить в «чудо упражнения» либо же понять, как взаимосвязаны мышечная масса и физические нагрузки?
    <br>Использовать сомнительные программы тренировок, либо же научиться составлять свои, заточенные конкретно под Ваш организм?
    <br>Завидовать чужим результатам либо же добиться успеха самому?
<br>Портал «Workout» - не просто сайт о бодибилдинге, он призван стать проводником в океане информации. На страницах данного портала бодибилдинг позиционируется не просто как вид спорта, а как наука. Такой подход предоставит ответы на все интересующие Вас вопросы.
<br>Бодибилдинг – прекрасный вид спорта, но развитие собственного тела – тяжелый и ответственный процесс. Грамотная тренировка мышц требует от спортсмена максимальной самоотдачи, железной воли, а главное – разумных действий. Поэтому, Вы либо сделаете шаг к лучшему, либо снова упустите свой шанс…
<br>Помните: мы сами творим свою жизнь, двигаясь назад либо вперед. А вот в какую сторону шагнуть сейчас – решать Вам, у каждого свой путь!';
                        
                    }
                    
                    /*$max_articles=3;
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
                    */
                    mysql_close();
           
                    //$row= mysql_fetch_array($result);
                    $count=$row["id"]-1;
                    
                    while ($row= mysql_fetch_array($result)) {                   
                    //do{
                        //if($row["id"]>(($page*$max_articles-$max_articles)+$count)&&($row["id"]<=(($page*$max_articles)+$count))){
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
                    <?php //}
                    //}while ($row= mysql_fetch_array($result));
                    }
                    
                    ?>
                    
                    <div id="page">
                          <?php 
                         /*if($num_pages!=1){
                        for($i=1;$i<=$num_pages;$i++)
                        echo '<a href="index.php?type='.$type.'&page='.$i.'">'.$i.'</a>';
                    } */?>
                    </div>
                </div>
            
            <?php require_once "blocks/rightCol.php"?>
           </div>
        <?php require_once "blocks/footer.php"?>
           
        </div>
    </body>
</html>