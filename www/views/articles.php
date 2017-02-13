<!DOCTYPE html>
<html>
<head>
	<meta charset="utf8"/>
    <title>Мой первый блог</title>
    <link rel="stylesheet" href="style.css"/>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
</head>
<body>
    <div class="container">
        <h1>Мой первый блог</h1>
        <a href="admin">Панель администратора</a>
        <div>
        	<?php foreach ($articles as $a): ?>
            <div class="article">
                <h3><a href="article.php?id=<?=$a['id']?>"><?=$a['title']?></a></h3>
                <em>Опубликовано:<?=$a['date']?></em>
                <p><?=articles_intro($a['content'])?></p>
                <h4><a href="article.php?id=<?=$a['id']?>">читать далее...</a></h4>
            </div>
            <?php endforeach ?>
        </div>
        <footer>
            <p>Мой первый блог<br />Copyright &copy; 2015</p>
        </footer>
    </div>    
</body>
</html>