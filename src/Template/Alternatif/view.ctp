<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alternatif $alternatif
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Alternatif'), ['action' => 'edit', $alternatif->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Alternatif'), ['action' => 'delete', $alternatif->id], ['confirm' => __('Are you sure you want to delete # {0}?', $alternatif->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Alternatif'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Alternatif'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="alternatif view large-9 medium-8 columns content">
    <h3><?= h($alternatif->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Kd Alternatif') ?></th>
            <td><?= h($alternatif->kd_alternatif) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nama Alternatif') ?></th>
            <td><?= h($alternatif->nama_alternatif) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($alternatif->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($alternatif->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($alternatif->modified) ?></td>
        </tr>
    </table>
</div>
