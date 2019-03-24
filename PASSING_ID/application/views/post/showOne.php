<?php
/**
 * Created by PhpStorm.
 * User: lotus
 * Date: 2/14/19
 * Time: 10:29 AM
 */

echo "SHOW ONE VIEW";
foreach ($post as $val): ?>
    <h1><?php echo $val['title']; ?></h1>
    <h5><?php echo $val['body']; ?></h5>
    <h4><?php echo $val['author']; ?></h4>
<?php endforeach; ?>