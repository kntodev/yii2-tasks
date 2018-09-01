<?php

namespace kntodev\tasks;

use Yii;
use yii\base\InvalidParamException;

/**
 * This is just an example.
 */
class Module extends \yii\base\Module
{
	public $controllerNamespace = 'kntodev\tasks\controllers';

    /**
     * {@inheritdoc}
     */
    public function init()
    {

        if (!isset(Yii::$app->get('i18n')->translations['modules/tasks*'])) {
            Yii::$app->get('i18n')->translations['modules/tasks*'] = [
                'class' => PhpMessageSource::class,
                'basePath' => '@kntodev/tasks/translations',
                'sourceLanguage' => 'en-US'
            ];
        }

        return parent::init();
    }
}
