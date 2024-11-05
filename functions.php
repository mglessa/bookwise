<?php 

function dd($data) {
    echo '<pre>';
    var_dump($data);
    echo '</pre>';
    die();
}

function abort($code) {
    http_response_code($code);
    view('404');
    die();
}

function view($view, $data = []) {
    extract($data);
    require './views/template/app.php';
};

?>