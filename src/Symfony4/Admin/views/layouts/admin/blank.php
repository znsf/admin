<?php

/**
 * @var array $menuConfigFile
 * @var View $this
 * @var string $content
 */

use ZnLib\Web\Components\Asset\Assets\AdminAppAsset;
use ZnLib\Web\Components\Widget\Widgets\Script\ScriptWidget;
use ZnLib\Web\Components\Widget\Widgets\Style\StyleWidget;
use ZnLib\Web\Components\View\Libs\View;
use ZnLib\Web\Components\Widget\Widgets\Toastr\ToastrWidget;

(new AdminAppAsset())->register($this);

//$this->registerCssFile('/static/css/footer.css');
//$this->registerCssFile('/static/css/site.css');

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title><?= $title ?? '' ?></title>
    <?= StyleWidget::widget(['view' => $this]) ?>
</head>
<body>

<?= \ZnLib\Web\Components\Widget\Widgets\Alert\AlertWidget::widget() ?>
<?= $content ?>

<?= ToastrWidget::widget(['view' => $this]) ?>
<?= StyleWidget::widget(['view' => $this]) ?>
<?= ScriptWidget::widget(['view' => $this]) ?>

</body>
</html>
