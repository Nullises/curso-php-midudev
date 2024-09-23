<?php
require_once 'functions/index.php';
require_once 'const.php';

$data = get_data(API_URL);
$until_message = get_until_message($data["days_until"])
?>
<?php render_template('head', $data) ?>

<!DOCTYPE html>
<html lang="en">
<body>
   <?php render_template('main', array_merge($data, [
    'until_message' => $until_message
])) ?>
</body>
</html>