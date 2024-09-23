<?php
require_once 'functions/index.php';
require_once 'classes/index.php';
require_once 'const.php';


$next_movie= NextMovie::get_data_and_create_movie(API_URL);
$next_movie_data = $next_movie->get_data();
?>
<?php render_template('head', $next_movie_data) ?>

<!DOCTYPE html>
<html lang="en">
<body>
   <?php render_template('main', array_merge($next_movie_data, [
    'until_message' => $next_movie->get_until_message()
])) ?>
</body>
</html>