<?php

use kartik\widgets\DepDrop;
use yii\helpers\Url;

?>
<?php
    echo $form->field($generator, 'tableName');
    echo $form->field($generator, 'relNxN')->label('NxM relationships')->widget(DepDrop::classname(), [
        'type' => DepDrop::TYPE_SELECT2,
        'options' => ['multiple' => true],
        'select2Options'=>[
            'pluginOptions'=>[
                'allowClear'=>true
            ]
        ],
        'pluginOptions'=>[
            'depends'=>['generator-tableName'],
            'placeholder'=>'Select the relationships',
            'url'=>Url::to(['\thtmorais\easyiigii\model\Generator\relationships']),
            'loadingText' => 'Loading relationships...',
        ]
    ]);
?>