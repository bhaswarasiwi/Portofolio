<?php

use yii\helpers\Html;
use yii\grid\GridView;

/* @var $this yii\web\View */
/* @var $dataProvider yii\data\ActiveDataProvider */

$this->title = 'Mhs';
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mhs-index">

    <h1><?= Html::encode($this->title) ?></h1>

    <p>
        <?= Html::a('Create Mhs', ['create'], ['class' => 'btn btn-success']) ?>
    </p>


    <?= GridView::widget([
        'dataProvider' => $dataProvider,
        'columns' => [
            ['class' => 'yii\grid\SerialColumn'],

            'nrp',
            'nama',
            'alamat',
            'tanggal_lahir',

            ['class' => 'yii\grid\ActionColumn'],
        ],
    ]); ?>


</div>
