<?php

use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\helpers\Html;

/* @var $this \yii\web\View */
/* @var $content string */

$this->beginContent('@frontend/views/layouts/_clear.php')
?>
<div class="wrapper">
    <header class="main-header">
        <?php
        NavBar::begin([
            'brandLabel' => Yii::$app->name,
            'brandUrl' => Yii::$app->homeUrl,
            'options' => [
                'class' => 'navbar-static-top',
            ],
        ]); ?>
        <?php echo Nav::widget([
            'options' => ['class' => 'navbar-nav'],
            'items' => [
                ['label' => Yii::t('frontend', 'Home'), 'url' => ['/site/index']],
                ['label' => Yii::t('frontend', 'About'), 'url' => ['/page/view', 'slug'=>'about']],
                ['label' => Yii::t('frontend', 'Articles'), 'url' => ['/article/index']],
                ['label' => Yii::t('frontend', 'Contact'), 'url' => ['/site/contact']],
                ['label' => Yii::t('frontend', 'Signup'), 'url' => ['/user/sign-in/signup'], 'visible'=>Yii::$app->user->isGuest],
                ['label' => Yii::t('frontend', 'Login'), 'url' => ['/user/sign-in/login'], 'visible'=>Yii::$app->user->isGuest],
                [
                    'label' => Yii::$app->user->isGuest ? '' : Yii::$app->user->identity->getPublicIdentity(),
                    'visible'=>!Yii::$app->user->isGuest,
                    'items'=>[
                        [
                            'label' => Yii::t('frontend', 'Settings'),
                            'url' => ['/user/default/index']
                        ],
                        [
                            'label' => Yii::t('frontend', 'Backend'),
                            'url' => Yii::getAlias('@backendUrl'),
                            'visible'=>Yii::$app->user->can('manager')
                        ],
                        [
                            'label' => Yii::t('frontend', 'Logout'),
                            'url' => ['/user/sign-in/logout'],
                            'linkOptions' => ['data-method' => 'post']
                        ]
                    ]
                ],
                [
                    'label'=>Yii::t('frontend', 'Language'),
                    'items'=>array_map(function ($code) {
                        return [
                            'label' => Yii::$app->params['availableLocales'][$code],
                            'url' => ['/site/set-locale', 'locale'=>$code],
                            'active' => Yii::$app->language === $code
                        ];
                    }, array_keys(Yii::$app->params['availableLocales']))
                ]
            ]
        ]); ?>
        <?php NavBar::end(); ?>
    </header>

    <div class="content-wrapper" style="min-height: 343px;">
        <?php echo $content ?>
    </div>

    <footer class="main-footer">
        <div class="container">
            <div class="pull-right hidden-xs"><?php echo Yii::powered() ?></div>
            <strong>Copyright &copy; <?php echo date('Y') ?> <?php echo Yii::$app->name; ?>.</strong> All rights reserved.
        </div>
        <!-- /.container -->
    </footer>
</div>

<?php $this->endContent() ?>
