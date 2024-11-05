<?php

    require './data/livros.php';

    $id = $_REQUEST['id'];
    $livro = array_filter($livros, fn($livro) => $livro['id'] == $id);
    $livro = array_pop($livro);

    view('livro', ['livro' => $livro]);
?>
