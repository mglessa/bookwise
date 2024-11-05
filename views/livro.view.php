<section class="flex gap-20">
    <img width="100px" height="100px" src="" alt="Foto">
    <div class="flex flex-col gap-1">
        <h2 class="text-lg font-semibold"><?=$livro['titulo']?></h2>
        <p class="text-sm"><?=$livro['descricao']?></p>
        <div>
            <span><?=str_repeat('⭐', $livro['avaliacao'])?></span>
            <span class="text-xs text-gray-500 font-ligth italic">(3 avaliações)</span>
        </div>

    </div>
</section>

<section>
    <div>
        <h3>Avaliações</h3>
        <button>Avaliar</button>
    </div>

    <div>
        <div>
            <div>
                <img src="" alt="">
                <h4>Joe Doe</h4>
                <span>*****</span>
            </div>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi rerum natus tempora neque soluta, eaque molestias vel fuga debitis sequi repellat velit nam consectetur sed deserunt repellendus ea alias eum.</p>
        </div>
    </div>
</section>