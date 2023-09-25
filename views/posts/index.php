<?php

use app\models\Posts;
use yii\helpers\Html;
use yii\helpers\Url;
use yii\grid\ActionColumn;
use yii\grid\GridView;
use yii\widgets\ListView;
use yii\widgets\Pjax;

/** @var yii\web\View $this */
/** @var app\models\PostsSearch $searchModel */
/** @var yii\data\ActiveDataProvider $dataProvider */

$this->title = Yii::t('app', 'Comunidade');
$this->params['breadcrumbs'][] = $this->title;
?>

<style>
    .table-responsive {
        overflow-x: auto;
    }

   
</style>
<div class="posts-index" style="max-width: 600px; display: flex; flex-direction: column; margin: 0 auto;">

    <div>
        <h1><?= Html::encode($this->title) ?></h1>
        <span>Troquem insights, tendências e melhores práticas, ampliando suas redes e conhecimentos.</span>
    </div>
    
    <hr>
    <div>
        <input type="date" name="test" id="" class="form-control">
        <!-- < ?= Html::a(Yii::t('app', '<i class="fas fa-plus"></i> Criar postagens'), ['create'], ['class' => 'btn btn-success']) ?> -->
    </div>
    <hr>

    <?php Pjax::begin(); ?>

    <div class="row">

        <?=

        ListView::widget([
            'dataProvider' => $dataProvider,
            'itemView' => '_item', // Crie uma visualização parcial personalizada para cada item
            'layout' => '<div style="width:100%;">{items}</div><div class="pager">{pager}</div>',
            'options' => ['class' => 'row'], // Adiciona a classe 'row' ao elemento principal
            'itemOptions' => ['class' => 'col-md-12'], // Adiciona a classe 'col-md-6' aos elementos de item
        ]);
        
        
        
        //  GridView::widget([
        //     'dataProvider' => $dataProvider,
        //     'summary' => false,
        //     'options' => [
        //         'class' => 'table-responsive', // Adicione a classe CSS aqui
        //     ],
        //     'columns' => [

        //         [
        //             'attribute' => 'id',
        //             'label' => false,
        //             'format' => 'raw',
        //             'contentOptions' => ['style' => 'min-width: 100px;'],
        //             'value' => function ($model) {

        //                 $title = $model->titulo;
        //                 $subtitle = $model->subtitulo;
        //                 $content = $model->conteudo;
        //                 $img = $model->img;
        //                 $tags = $model->tags;
        //                 $likeCount = empty($model->like) ? '0' : $model->like;
        //                 $dt_create = date_format(date_create($model->dt_create, timezone_open('America/Sao_Paulo')), 'd/m/Y');


        //                 $post = '<div class="card text-center mb-3" style="width:100%;">
        //                 <h3 class="card-header">' . $title . '</h3>
        //                 <div class="card-body">
        //                 <h5 class="card-title">' . $subtitle . '</h5>
        //                 <h6 class="card-subtitle text-muted">' . $tags . '</h6>
        //                 </div>
        //                 <div class="bg-img container bg-white" style="width: 25em;">
        //                     <img style="width: 100%; " src="' . $img . '" alt="" srcset="">

        //                 </div>
        //                 <div class="card-body card-body d-flex justify-content-center" >
        //                 <p class="card-text" style="width:30em;   ">' . $content . '</p>
        //                 </div>
        //                 <div class="card-body">
        //                 <a href="#" class="text-none card-link"><i class="fas fa-thumbs-up"></i> ' . $likeCount . ' </a>
        //                 <a href="#" class="text-none card-link"><i class="fas fa-comment"></i> ' . $likeCount . ' </a>
        //                 <a href="#" class="text-none card-link"><i class="fas fa-triangle-exclamation"></i> </a>
        //                 </div>
        //                 <div class="card-footer text-muted">
        //                 ' . $dt_create . '
        //                 </div>
        //             </div>
        //             ';

        //                 return $post;
        //             }
        //         ]
        //         // 'pessoa_id',
        //         // 'empresa_id',
        //         // 'tipo_post_id',
        //         // 'img:ntext',
        //         //'titulo',
        //         //'subtitulo',
        //         //'tags',
        //         //'status',
        //         //'dt_create',
        //         //'dt_update',
        //         // [
        //         //     'class' => ActionColumn::className(),
        //         //     'urlCreator' => function ($action, Posts $model, $key, $index, $column) {
        //         //         return Url::toRoute([$action, 'id' => $model->id]);
        //         //      }
        //         // ],
        //     ],
        // ]);
        
        
        ?>

    </div>

    <?php Pjax::end(); ?>

</div>