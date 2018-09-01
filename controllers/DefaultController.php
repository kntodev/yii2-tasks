<?php

namespace kntodev\tasks\controllers;

use Yii;
use yii\web\Controller;
use yii\data\Pagination;
use yii\helpers\Url;
use yii\filters\AccessControl;
use yii\filters\VerbFilter;

/**
 * Default controller for the `simplemessage` module
 */
class DefaultController extends Controller
{

    public $layout = "@app/views/layouts/main";
}
