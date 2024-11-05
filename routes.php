<?php 

function redirect() {
    $path = $_SERVER['PATH_INFO'] ?? '/home';
    $path = filter_var($path, FILTER_SANITIZE_URL);

    if(file_exists("./controllers/{$path}.controller.php")) {
        require "./controllers/{$path}.controller.php";
    } else {
        abort(404);
    }
}

redirect();

?>
