<p>ID категории: <?=$cat->id?><br>
    Название категории: <?=$cat->name?><br>
    CSS класс категории: <?=$cat->class?>
</p>
<?php foreach ($lots as $key) {
    print($key->name . '<br>');
}
