<?php

/**
 * @var array $menuConfigFile
 * @var View $this
 * @var string $content
 */

use ZnLib\Web\Symfony4\MicroApp\Assets\AdminAppAsset;
use ZnLib\Web\Symfony4\MicroApp\Widgets\Layout\ScriptWidget;
use ZnLib\Web\Symfony4\MicroApp\Widgets\Layout\StyleWidget;
use ZnLib\Web\View\View;
use ZnLib\Web\Widgets\Toastr\ToastrWidget;

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

<div class="wrapper">
    <nav class="main-header navbar navbar-expand navbar-dark">
        <?= $this->renderFile(__DIR__ . '/block/main-header.php') ?>
    </nav>

    <?php if(!empty($menuConfigFile)): ?>
        <aside class="main-sidebar sidebar-dark-primary elevation-4">
            <?= $this->renderFile(__DIR__ . '/block/main-sidebar.php', [
                'menuConfigFile' => $menuConfigFile,
            ]) ?>
        </aside>
    <?php endif; ?>

    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <?= $this->renderFile(__DIR__ . '/block/content-header.php') ?>
                </div>
            </div>
        </div>
        <div class="content">
            <div class="container-fluid">
                <?= \ZnLib\Web\Widgets\Alert\AlertWidget::widget() ?>
                <?= $content ?>
            </div>
        </div>
    </div>

    <aside class="control-sidebar control-sidebar-dark">
        <?= $this->renderFile(__DIR__ . '/block/control-sidebar.php') ?>
    </aside>

    <footer class="main-footer">
        <?= $this->renderFile(__DIR__ . '/block/main-footer.php') ?>
    </footer>
</div>

<a id="back-to-top" href="#" class="btn btn-primary back-to-top" role="button" aria-label="Scroll to top">
    <i class="fas fa-chevron-up"></i>
</a>

<?= ToastrWidget::widget(['view' => $this]) ?>
<?= StyleWidget::widget(['view' => $this]) ?>
<?= ScriptWidget::widget(['view' => $this]) ?>

</body>
</html>
