<?php
$title = $model->titulo;
$subtitle = $model->subtitulo;
$content = $model->conteudo;
$img = $model->img;
$tags = $model->tags;
$likeCount = empty($model->like) ? '0' : $model->like;
$dt_create = date_format(date_create($model->dt_create, timezone_open('America/Sao_Paulo')), 'd/m/Y');

?>

<div class="card text-center mb-3">
    <h3 class="card-header"><?= $title ?></h3>
    <div class="card-body">
        <h5 class="card-title"><?= $subtitle ?></h5>
        <h6 class="card-subtitle text-muted"><?= $tags ?></h6>
    </div>
    <div class="bg-img container bg-white" style="width: 70%;">
        <img style="width: 100%; " src="<?= $img ?>" alt="" srcset="">
    </div>
    <div class="card-body card-body d-flex justify-content-center">
        <p class="card-text" style="width:30em;   "><?= $content ?></p>
    </div>
    <div class="card-body">
        <a href="#" class="text-none card-link"><i class="fas fa-thumbs-up"></i> <?= $likeCount ?> </a>
        <a href="#" class="text-none card-link"><i class="fas fa-comment"></i> <?= $likeCount ?> </a>
        <a href="#" class="text-none card-link"><i class="fas fa-triangle-exclamation"></i> </a>
    </div>
    <div class="card-footer text-muted">
        <?= $dt_create ?>
    </div>
</div>