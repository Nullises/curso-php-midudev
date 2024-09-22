<?php 
$languages = ['PHP', 'JavaScript', 'Python', 'Java'];
?>


<ul>
<?php foreach($languages as $key => $language) : ?>
<li><?php  echo $key . " - " . $language . "\n"?></li>
<?php endforeach; ?>
</ul>
