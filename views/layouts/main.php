<?php

/* @var $this \yii\web\View */
/* @var $content string */

use app\widgets\Alert;
use yii\helpers\Html;
use yii\bootstrap\Nav;
use yii\bootstrap\NavBar;
use yii\widgets\Breadcrumbs;
use app\assets\AppAsset;

AppAsset::register($this);
?>
<?php $this->beginPage() ?>
<!DOCTYPE html>
<html lang="<?= Yii::$app->language ?>">
<head>
    <meta charset="<?= Yii::$app->charset ?>">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php $this->registerCsrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
</head>
<body>
<?php $this->beginBody() ?>

<div class="wrap">
    <?php
    NavBar::begin([
        'brandLabel' => Yii::$app->name,
        'brandUrl' => Yii::$app->homeUrl,
        'options' => [
            'class' => 'navbar-inverse navbar-fixed-top',
        ],
    ]);
    echo Nav::widget([
        'options' => ['class' => 'navbar-nav navbar-right'],
        'items' => [
            ['label' => 'Home', 'url' => ['/site/index']],
            ['label' => 'Surat',
            'items' => [
                ['label'=>'Surat Masuk','url' =>['/surat-masuk']],
                ['label'=>'Surat Keluar','url' =>['/surat-keluar']],
                ['label'=>'Sifat','url'=>['/sifat']],
                ['label'=>'Kategori Surat Masuk','url'=>['/kategori-surat']],
                ['label'=>'Kategori Surat Keluar','url'=>['/kategori-surat-keluar']],
            ],
            
        ],

            ['label' => 'Approval',
            'items' => [
                ['label'=>'Approval Rules Edge','url' =>['/approval-rules-edge']],
                ['label'=>'Approval Rules Node','url' =>['/approval-rules-node']],
                ['label'=>'Approval Surat Keluar','url'=>['/approval-surat-keluar']],
                
            ],
            
        ],

        ['label' => 'Disposisi',
            'items' => [
                ['label'=>'Disposisi Rules Edge','url' =>['/disposisi-rules-edge']],
                ['label'=>'Disposisi Rules Node','url' =>['/disposisi-rules-node']],
                ['label'=>'Disposisi Surat Masuk','url'=>['/disposisi-surat-masuk']],
                
            ],
            
        ],
        ['label'=>'Instansi','url' => ['/instansi']],
        ['label'=>'Jabatan','url' => ['/jabatan']],
        ['label'=>'Golongan','url' => ['/golongan']],
        ['label' => 'Users',
        'items' => [
            ['label'=>'Users','url' => ['/users']],
            ['label'=>'Jabatan Users','url' => ['/jabatan-users']],
    ],
],
            ['label' => 'Abouth', 'url' => ['/site/about']],
            Yii::$app->user->isGuest ? (
                ['label' => 'Login', 'url' => ['/site/login']]
            ) : (
                '<li>'
                . Html::beginForm(['/site/logout'], 'post')
                . Html::submitButton(
                    'Logout (' . Yii::$app->user->identity->username . ')',
                    ['class' => 'btn btn-link logout']
                )
                . Html::endForm()
                . '</li>'
            )
        ],
    ]);
    NavBar::end();
    ?>

    <div class="container">
        <?= Breadcrumbs::widget([
            'links' => isset($this->params['breadcrumbs']) ? $this->params['breadcrumbs'] : [],
        ]) ?>
        <?= Alert::widget() ?>
        <?= $content ?>
    </div>
</div>

<footer class="footer">
    <div class="container">
        <p class="pull-left">&copy; My Company <?= date('Y') ?></p>

        <p class="pull-right"><?= Yii::powered() ?></p>
    </div>
</footer>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>
