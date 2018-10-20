<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aspek $aspek
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aspek'), ['action' => 'edit', $aspek->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aspek'), ['action' => 'delete', $aspek->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aspek->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Aspek'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aspek'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="aspek view large-9 medium-8 columns content">
    <h3><?= h($aspek->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Kode') ?></th>
            <td><?= h($aspek->kode) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nama Aspek') ?></th>
            <td><?= h($aspek->nama_aspek) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($aspek->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Prosentase') ?></th>
            <td><?= $this->Number->format($aspek->prosentase) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($aspek->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($aspek->modified) ?></td>
        </tr>
    </table>
</div>
