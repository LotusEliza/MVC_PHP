
<!--<p>Главная страница</p>-->

<!--<p>Name: --><?php //debug($this->route['controller']); ?><!--</p>-->

<?php foreach ($news as $val): ?>
    <li class="list-group-item list-group-item-secondary"><a href="post/<?php echo $val['id'];?>"><?php echo $val['title']; ?></a></li>
<?php endforeach; ?>

<li class="list-group-item list-group-item-warning"><a href="post">SHOW ALL POSTS</a></li>


