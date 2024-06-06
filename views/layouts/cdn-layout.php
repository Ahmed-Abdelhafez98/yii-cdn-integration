<?php
/* @var $this \yii\web\View */
/* @var $content string */

use yii\helpers\Html;
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
    <?= Html::csrfMetaTags() ?>
    <title><?= Html::encode($this->title) ?></title>
    <?php $this->head() ?>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
        }
        .container {
            max-width: 800px;
            margin: 20px auto;
            background: white;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .header {
            text-align: center;
            margin-bottom: 40px;
        }
        .header h1 {
            margin: 0;
            font-size: 2em;
            color: #333;
        }
        .content {
            line-height: 1.6;
        }
        .content h2 {
            color: #333;
        }
        .content p {
            color: #666;
        }
        .content ul {
            color: #666;
        }
        .code-block {
            background: #f4f4f4;
            border-left: 4px solid #007bff;
            padding: 10px;
            margin: 20px 0;
            font-family: monospace;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            padding: 10px 0;
            color: #333;
            background-color: #f4f4f4;
            border-top: 1px solid #ddd;
        }
    </style>
</head>
<body>
<?php $this->beginBody() ?>

<div class="container">
    <?= $content ?>
</div>

<?php $this->endBody() ?>
</body>
</html>
<?php $this->endPage() ?>