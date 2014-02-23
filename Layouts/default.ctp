<?php
/**
* Optipdf Theme by Lukas Strassel
* @author Lukas Strassel <info@sakulstra.org>
* @link http://sakulstra.org
*/
?>
<!DOCTYPE html>
<html lang="de-DE">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
    <meta name="author" content="Lukas Strassel" />
    <title><?php echo $title_for_layout; ?> &raquo; <?php echo Configure::read('Site.title'); ?></title>
    <?php
    echo $this->Meta->meta();
    echo $this->Layout->feed();
    echo $this->Html->css('screen');
    ?>
    <link href='http://fonts.googleapis.com/css?family=Exo+2' rel='stylesheet' type='text/css'>
    <?php
    echo $this->Blocks->get('css');
    echo $this->Blocks->get('script');
    echo $scripts_for_layout;
    ?>
</head>
    <body>
        <div id="container">
            <div id="header">
                <div  class="grid-container">
                    <div class="logo">
                        <h1><?php echo $this->Html->link(Configure::read('Site.title'),'/'.$this->params['language']);?></h1>
                        <div id="tagline">
                            <p><?php echo Configure::read('Site.tagline'); ?></p>
                        </div>
                    </div>
                    <nav id="mainnav">
                        <?php echo $this->Layout->menu('main'); ?>
                    </nav>
                </div>
            </div>
            <div id="content">
                <?php echo $this->Session->flash();?>
                <div class="grid-container">
                    <div id="content" class="grid-80">
                        <?php echo $content_for_layout;?>
                    </div>
                    <div id="sidebar" class="grid-20">
                        <?php echo $this->Layout->blocks('right');?>
                    </div>
                </div>
            </div>
            <div id="footer">
                <div class="grid-container">
                    <p class="grid-100">
                        &copy; <?php echo $this->Html->link('Optipdf','http://optipdf.de/impressum');?> <?php echo date('Y');?>
                    </p>
                </div>
            </div>
        </div>
    </body>
</html>