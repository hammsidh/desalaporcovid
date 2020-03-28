<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\models\PoskoModel */

$this->title = Yii::t('app', 'Create Posko Model');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Posko Models'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="posko-model-create">

    <?= $this->render('_form', [
    'model' => $model,
    ]) ?>

</div>