<?php
/* @var $this yii\web\View */
$this->title = Yii::t('frontend', 'Articles')
?>
<div id="article-index">
    <?php echo \yii\widgets\ListView::widget([
        'dataProvider'=>$dataProvider,
        'pager'=>[
            'hideOnSinglePage'=>true,
        ],
        'itemView'=>'_item'
    ])?>
</div>
