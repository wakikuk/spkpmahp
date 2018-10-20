<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Kriterium $kriterium
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Kriterium'), ['action' => 'edit', $kriterium->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Kriterium'), ['action' => 'delete', $kriterium->id], ['confirm' => __('Are you sure you want to delete # {0}?', $kriterium->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Kriteria'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Kriterium'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="kriteria view large-9 medium-8 columns content">
    <h3><?= h($kriterium->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Kd Kriteria') ?></th>
            <td><?= h($kriterium->kd_kriteria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nama Kritera') ?></th>
            <td><?= h($kriterium->nama_kritera) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Factor') ?></th>
            <td><?= h($kriterium->factor) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Kd Aspek') ?></th>
            <td><?= h($kriterium->kd_aspek) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($kriterium->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Nilai Kriteria') ?></th>
            <td><?= $this->Number->format($kriterium->nilai_kriteria) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($kriterium->created) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Modified') ?></th>
            <td><?= h($kriterium->modified) ?></td>
        </tr>
    </table>
</div>
