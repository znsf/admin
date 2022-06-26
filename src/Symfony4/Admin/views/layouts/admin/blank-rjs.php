<?php

/**
 * @var array $menuConfigFile
 * @var View $this
 * @var string $content
 */

use ZnLib\Web\Components\Asset\Assets\AdminAppAsset;
use ZnLib\Web\Components\Layout\Widgets\Script\ScriptWidget;
use ZnLib\Web\Components\Layout\Widgets\Style\StyleWidget;
use ZnLib\Web\Components\View\Libs\View;
use ZnLib\Web\Components\Widget\Widgets\Toastr\ToastrWidget;
use ZnLib\Web\Components\Asset\Assets\AppAsset;

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
    <script data-main="/rjs/index?ver=<?= hash_file('crc32b', __DIR__ . '/../../../../../../../../../public/rjs/index.js') ?>"
            src="/rjs/vendor/requirejs/require.js"></script>
</head>
<body>

<?= $content ?>

<?= '' //ToastrWidget::widget(['view' => $this]) ?>
<?= StyleWidget::widget(['view' => $this]) ?>
<?= '' /*ScriptWidget::widget(['view' => $this])*/ ?>

</body>
</html>
