<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link          https://cakephp.org CakePHP(tm) Project
 * @since         0.10.0
 * @license       https://opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = 'CakePHP: the rapid development php framework';
?>
<!DOCTYPE html>
<html>
<head>
    <?= $this->Html->charset() ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        <?= $cakeDescription ?>:
        <?= $this->fetch('title') ?>
    </title>
    <?= $this->Html->meta('icon') ?>
    <?= $this->Html->css('jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.css') ?>
    <?= $this->Html->script('jquery-1.11.1.min.js')?>
    <?= $this->Html->script('jquery.mobile-1.4.5/jquery.mobile-1.4.5.min.js')?>
    <?= $this->fetch('meta') ?>
    <?= $this->fetch('css') ?>
    <?= $this->fetch('script') ?>
</head>
<body>
    <div data-role="page" class="" id="home" data-title="AHP-PM" data-url="home">
<div data-role="header" data-position="fixed"><h2>AHP-PM</h2>
<a href="#nav-panel" data-icon="bars" data-iconpos="notext">Menu</a>
<a href="#add-form" data-icon="gear" data-iconpos="notext">Add</a>
</div>
<div role="main" class="ui-content">
<div class="ui-body ui-body-a ui-corner-all">
<?= $this->Flash->render() ?>
<?= $this->fetch('content') ?>
</div>
</div>
<div data-role="footer" data-position="fixed">
    <h4>&COPY; Wakikuk</h4>
</div>
<div data-role="panel" data-position-fixed="true" data-display="push"  id="nav-panel">
<h4 class="ui-bar ui-bar-a">Menu</h4>
<a href="<?= $this->Url->build(['controller'=>'Alternatif','action'=>'index'])?>" rel="external" data-rel="ext"  class="ui-btn ui-shadow ui-corner-all ui-icon-user ui-btn-icon-left">Alternatif</a>
<a href="<?= $this->Url->build(['controller'=>'Aspek','action'=>'index'])?>" rel="external" data-rel="ext" class="ui-btn ui-shadow ui-corner-all ui-icon-grid ui-btn-icon-left">Aspek</a>
<a href="<?= $this->Url->build(['controller'=>'Kriteria','action'=>'index'])?>" rel="external" data-rel="ext" class="ui-btn ui-shadow ui-corner-all ui-icon-tag ui-btn-icon-left">Kriteria</a>
<a href="" rel="external" data-rel="ext" class="ui-btn ui-shadow ui-corner-all ui-icon-calendar ui-btn-icon-left">Bobot Kriteria</a>
<a href="" rel="external" data-rel="ext" class="ui-btn ui-shadow ui-corner-all ui-icon-star ui-btn-icon-left">Profile</a>
<a href="" rel="external" data-rel="ext" class="ui-btn ui-shadow ui-corner-all ui-icon-clock ui-btn-icon-left">Perhitungan</a>
</div>
<div data-role="panel" data-position="right" data-position-fixed="true" data-display="overlay" data-theme="a" id="add-form">
<form class="userform">
<h2>Login</h2>
<label for="name">Username:</label>
<input type="text" name="name" id="name" value="" data-clear-btn="true" data-mini="true">
<label for="password">Password:</label>
<input type="password" name="password" id="password" value="" data-clear-btn="true" autocomplete="off" data-mini="true">
<div class="ui-grid-a">
<div class="ui-block-a"><a href="#" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-b ui-mini">Cancel</a></div>
<div class="ui-block-b"><a href="#" data-rel="close" class="ui-btn ui-shadow ui-corner-all ui-btn-a ui-mini">Save</a></div>
</div>
</form>
 </div> 
</div>
</body>
</html>
