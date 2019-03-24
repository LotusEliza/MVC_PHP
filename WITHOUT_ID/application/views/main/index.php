
<!--<p>Главная страница</p>-->

<!--<p>Name: --><?php //debug($this->route['controller']); ?><!--</p>-->

<?php foreach ($news as $val): ?>
    <li class="list-group-item list-group-item-secondary"><a href="post"><?php echo $val['title']; ?></a></li>
<?php endforeach; ?>


