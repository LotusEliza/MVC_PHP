
<p>Show post</p>




<?php foreach ($posts as $val): ?>

    <h1><?php echo $val['title']; ?></h1>
    <h5><?php echo $val['body']; ?></h5>
    <h4><?php echo $val['author']; ?></h4>
<?php endforeach; ?>