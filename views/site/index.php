<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

?>
<div class="site-index">

    <div class="jumbotron text-center bg-transparent mt-5 ">
        <h1 class="display-4">Bem-vindo à <b class="text-secondary">IX3change</b>!</h1>

        <p class="lead">A Plataforma da Inovação e Tecnológica!</p>

        <!-- <p><a class="btn btn-lg btn-success" href="">Comece com agora &raquo;</a></p> -->
    </div>

    <div class="body-content ">

        <div class="row">
            <div class="col-lg-8 mb-3">
                <h2 class="text-secondary">Jornada para a Inovação</h2>

                <p class="h4">
                    Na vanguarda da transformação tecnológica, a IX3change surge como a plataforma definitiva para impulsionar a indústria, 
                    fomentar a inovação e desenvolver a infraestrutura do futuro. Aqui, equipes de empresas cadastradas mergulharão em um ecossistema envolvente, 
                    onde o aprendizado, a colaboração e a competição se unem em um único espaço virtual..
                </p>

                <p><a class="btn btn-outline-secondary mt-4" href="<?=Url::to(['site/login'])?>">Quero inovar &raquo;</a></p>
            </div>
            <div class="col-lg-4">
                <img style="width: 100%;" src="<?= Yii::getAlias("@web")?>/img/bg-1.png" />
            </div>
        </div>

    </div>
</div>
