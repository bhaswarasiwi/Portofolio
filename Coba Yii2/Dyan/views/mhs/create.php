<?php

use yii\helpers\Html;

/* @var $this yii\web\View */
/* @var $model app\models\Mhs */

$this->title = 'Create Mhs';
$this->params['breadcrumbs'][] = ['label' => 'Mhs', 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="mhs-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>
    
<?= Html::a('Back', ['/mhs/index'], ['class'=>'btn btn-primary']) ?>
</div>
