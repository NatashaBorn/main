<?php
    $connect=mysql_connect("localhost","root","")or die(mysql_error());
        mysql_select_db("Articles");
            if(isset($_POST["enter"])){
                $e_login=$_POST["e_login"];
                $e_password= md5($_POST["e_password"]);
                $query=  mysql_query("SELECT * FROM users WHERE login='$e_login'");
                $user_data=  mysql_fetch_array($query);
                if($user_data["password"]==$e_password){
                    $_SESSION['name']=$e_login;
                }
                else{
                    echo 'Error!';
                }
            }
            if(isset($_POST["exit"])){
                session_destroy();
                unset($_SESSION["name"]);
            }
            
            
            if(isset($_SESSION["name"])){
                echo 'Ты зашел!<br>
                <form  method="post" action="myOffice.php">
                    <input type="submit" name="myOffice" value="Мой кабинет"><br>
                    <input type="submit" name="exit" value="Выход"><br>
                </form>';
                
                
            }
            else{
                echo '<form  method="post" action="">
            <input type="text" name="e_login" placeholder="Login" required><br>
            <input type="password" name="e_password" placeholder="Password" required><br>
            <input type="submit" name="enter" value="Autorization"><br>
            <a href="reg.php">Зарегистрироваться</a>     
        </form>';
            }