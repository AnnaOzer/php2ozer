<html>
<head>
    <title>Новости</title>
</head>
<body>
    <article>
	 <?php foreach ($news as $article): ?>
        <h1><?=$article['title'];?></h1>
        <div><?=$article['text'];?></div>
		
	<?php endforeach; ?>
    </article>

</body>

</html>