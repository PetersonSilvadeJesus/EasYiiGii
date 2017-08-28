<?php

namespace thtmorais\easyiigii;

use yii\base\BootstrapInterface;

class Bootstrap implements BootstrapInterface
{
    public function bootstrap($app)
    {
        if ($app->hasModule('gii')) {
            if (!isset($app->getModule('gii')->generators['easyii-gii'])) {
                $app->getModule('gii')->generators['easyii-gii-model'] = 'thtmorais\easyiigii\model\Generator';
                $app->getModule('gii')->generators['easyii-gii-crud']['class'] = 'thtmorais\easyiigii\crud\Generator';
                $app->getModule('gii')->generators['easyii-gii-migration'] = 'thtmorais\easyiigii\migration\Generator';
            }
        }
    }
}
