<?php

use yii\helpers\Html;


/* @var $this yii\web\View */
/* @var $model app\common\models\Privilege */

$this->title = Yii::t('app', 'Create Privilege');
$this->params['breadcrumbs'][] = ['label' => Yii::t('app', 'Privileges'), 'url' => ['index']];
$this->params['breadcrumbs'][] = $this->title;
?>
<div class="privilege-create">

    <h1><?= Html::encode($this->title) ?></h1>

    <?= $this->render('_form', [
        'model' => $model,
    ]) ?>

</div>
