<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mhs */

$this->title = 'Update Mhs: ' . $model->nrp;
$this->params['breadcrumbs'][] = ['label' => 'Mhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = ['label' => $model->nrp, 'url' => ['view', 'id' => $model->nrp]];
$this->params['breadcrumbs'][] = 'Update';
?>
<div class="mhs-update">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
