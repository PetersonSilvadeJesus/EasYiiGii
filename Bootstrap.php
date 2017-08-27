<?php

namespace thtmorais\easyiigii;

use yii\base\Application;
use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
//        \Yii::setAlias('@mtengii','@vendor/thtmorais/easyiigii');
        if ($app->hasModule('gii')) {
            if (!isset($app->getModule('gii')->generators['easy-gii'])) {
                $app->getModule('gii')->generators['enhanced-gii-model'] = 'thtmorais\easyiigii\model\Generator';
                $app->getModule('gii')->generators['enhanced-gii-crud']['class'] = 'thtmorais\easyiigii\crud\Generator';
//                $app->getModule('gii')->generators['enhanced-gii-crud']['templates'] = [
//                    'default' => '@mtengii/crud/default',
//                    'nested' => '@mtengii/crud/nested'
//                ];
                $app->getModule('gii')->generators['enhanced-gii-migration'] = 'thtmorais\easyiigii\migration\Generator';
            }
        }
    }
}
