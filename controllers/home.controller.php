<?php
    require './data/livros.php';

    
    view('home', ['livros' => $livros]);
?>
