<?php
/* @var $this \yii\web\View */
use yii\helpers\ArrayHelper;
use yii\widgets\Breadcrumbs;
use yii\helpers\Html;

// setup header and subtitle
$headerEncode = isset($this->params["header"]["encode"]) ? $this->params["header"]["encode"] : true;
$headerTitle = Html::encode($this->title);
$headerSubtitle = '';

if (isset($this->params["header"]["title"])) {
    $headerTitle = $headerEncode ? Html::encode($headerTitle) : $headerTitle;
}
if (isset($this->params["header"]["subtitle"])) {
    $headerTitle = $headerEncode ? Html::encode($headerSubtitle) : $headerSubtitle;
}

// setup breadcrumbs
$breadcrumbs = [];
if (isset($this->params['breadcrumbs'])) {
    $breadcrumbs = $this->params['breadcrumbs'];
} else {
    $breadcrumbs[] = ['label' => $headerTitle];
}

/* @var $content string */
$this->beginContent('@frontend/views/layouts/base.php')
?>
    <div class="container">

        <?php if (!isset($this->params["no-header"])): ?>
            <section>
                <section class="content-header">
                    <h1>
                        <?php echo $headerTitle ?>
                        <small><?php echo $headerSubtitle ?></small>
                    </h1>
                    <?php echo Breadcrumbs::widget([
                        'homeLink' => [
                            'label' => '<i class="fa fa-home"></i> ' . Yii::t('frontend', 'Home'),
                            'url' => '/'
                        ],
                        'links' => $breadcrumbs,
                        'encodeLabels' => false,
                    ]) ?>
                </section>
            </section>

        <?php endif; ?>

        <section class="content">
            <?php if(Yii::$app->session->hasFlash('alert')):?>
                <?php echo \yii\bootstrap\Alert::widget([
                    'body'=>ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'body'),
                    'options'=>ArrayHelper::getValue(Yii::$app->session->getFlash('alert'), 'options'),
                ])?>
            <?php endif; ?>

            <!-- Example of your ads placing -->
            <?php echo \common\widgets\DbText::widget([
                'key' => 'ads-example'
            ]) ?>

            <?php echo $content ?>
        </section>

    </div>
<?php $this->endContent() ?>
