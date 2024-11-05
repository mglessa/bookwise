<div class="flex w-full">
    <input type="text" placeholder="Pesquisar..." class="p-2 rounded flex-1">
    <button>🔎</button>
</div>

<section id="livros" class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
    <?php foreach($livros as $livro): ?>
        <div class="p-3 rounded border border-gray-600">
            <div class="flex gap-5 mb-4">
                <img width="100px" height="100px" src="" alt="foto">
                <div class="flex flex-col">
                    <a href="livro?id=<?=$livro['id']?>" class="font-semibold mb-1 hover:underline"><?=$livro['titulo']?></a>
                    <span class="text-sm"><?=$livro['autor']?></span>
                    <span><?=str_repeat('⭐', $livro['avaliacao'])?></span>
                </div>
            </div>
            <p class="text-sm"><?=$livro['descricao']?></p>
        </div>
    <?php endforeach; ?>
</section>