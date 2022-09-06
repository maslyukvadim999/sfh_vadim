<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css" />
</head>
<body>
    
    <div class="flex-container">

        <div class="header">     
            <?php include 'menu.inc.php' ?>
        </div>

        <div class="about_me">
         
          <h1>  <?php  echo $p  ?> </h1>

            <div class="data">
                <div class="myImg">
                    <?php  echo '<img src="/img/stas.jpg">'; ?>
                </div>

                <div class="fullname">
                    <p> Меня зовут 
                    <?php echo $name, ' ', $patronymic . '<br>';
                          echo 'город', ' ', $city; ?>                                      
                    </p> 
           
                    <p> Мне
                    <?php  echo $age;   ?>          
                    лет </p>
                    <p> Я знаю как создавать переменные и работать с ними</p>
                </div>

                <div>
                    <form action="action.php" method="post">
                        <p>Кто вы? <input type="text" name="name" /></p>
                        <p>Ваш возраст <input type="text" name="age" /></p>
                        <p><input type="submit" /></p>
                    </form>
                </div>

            </div>

            <div class="knowledge">
                                   
                    <?php  include 'knowledge.inc.php'; ?>
                    <?php   echo $a, ' ', $b, ' '; ?> <br>
                    <?php
                        $a = 10;
                        $b = 20;
                        $c = $a + $b;
                        echo $c;
                    ?>   <br>
                    <?php
                    echo $_SERVER['HTTP_USER_AGENT'];
                    ?>
                    <br>

                     <?php
                        echo $d;
                    ?> 

            </div>

            <div class="article">
                <p class="text">
                    «Никогда не ошибается тот, кто ничего не делает». Теодор Рузвельт
                </p>
            </div>
        </div>

            <?php include 'footer.inc.php' ?>

    </div>


</body>
</html>
