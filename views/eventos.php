<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'cabecalho.php';
?>

<div>
    <div class="container-eventos">
        <?php for ($i = 0; $i < 2; $i++) : ?>
            <div class="evento-link">
                <a href="<?= dirname('/touristic/views/conteudo_evento.php') . DIRECTORY_SEPARATOR . 'conteudo_evento.php' ?>">
                    <div class="evento-titulo-img">
                        <span>Festa X</span>
                        <img src="https://source.unsplash.com/random/1920x1080/?party" alt="">
                    </div>
                </a>
            </div>

            <div class="evento-link">
                <a href="<?= dirname('/touristic/views/conteudo_evento.php') . DIRECTORY_SEPARATOR . 'conteudo_evento.php' ?>">
                    <div class="evento-titulo-img">
                        <span>Show Y</span>
                        <img src="https://source.unsplash.com/random/1920x1080/?show" alt="">
                    </div>
                </a>
            </div>

            <div class="evento-link">
                <a href="<?= dirname('/touristic/views/conteudo_evento.php') . DIRECTORY_SEPARATOR . 'conteudo_evento.php' ?>">
                    <div class="evento-titulo-img">
                        <span>Feira Z</span>
                        <img src="https://source.unsplash.com/random/1920x1080/?fair" alt="">
                    </div>
                </a>
            </div>

            <div class="evento-link">
                <a href="<?= dirname('/touristic/views/conteudo_evento.php') . DIRECTORY_SEPARATOR . 'conteudo_evento.php' ?>">
                    <div class="evento-titulo-img">
                        <span>Palestra A</span>
                        <img src="https://source.unsplash.com/random/1920x1080/?people" alt="">
                    </div>
                </a>
            </div>
        <?php endfor; ?>
    </div>
</div>

<?php
require_once dirname(__DIR__) . DIRECTORY_SEPARATOR . 'templates' . DIRECTORY_SEPARATOR . 'rodape.php';
?>