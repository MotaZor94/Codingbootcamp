<form action="" method="post">
<br>
<br>
<?php foreach($items as $i => $text ) :?>
    <input type="text" value="<?= htmlspecialchars($text)?>" name="items[<?=$i?>]<br>">

<?php endforeach; ?>
<input type="text" value="" name="items[<?= count($items)?>]">
<br>
<input type="submit" value="Add">



</form>