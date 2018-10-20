<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aspek[]|\Cake\Collection\CollectionInterface $aspek
 */
?>
<h3 class="ui-bar ui-bar-a">Data Aspek</h3>
<div class="ui-grid-b ui-responsive">
    <div class="ui-block-a">
      <a href="<?= $this->Url->build(['action'=>'add'])?>" rel="external" class="ui-shadow ui-btn ui-corner-all ui-btn-icon-left ui-icon-plus">Tambah</a>
    </div>
    <div class="ui-block-b">  
  
    </div>
    <div class="ui-block-c">
           <form>
               <input id="filterTable-input" data-type="search" placeholder="Cari Aspek">
          
        </form>
    </div>
</div>

<table  data-role="table" class="ui-table ui-responsive table-stripe ui-shadow table-stroke" data-filter="true" data-input="#filterTable-input">
        <thead>
            <tr>
                <th scope="col"><?= 'No' ?></th>
                <th scope="col"><?= 'Kode Aspek' ?></th>
                <th scope="col"><?= 'Nama Aspek' ?></th>
                <th scope="col"><?= 'Prosentase' ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>

        <tbody>
            <?php foreach ($aspek as $aspek): ?>
            <tr>
                <td><?= $this->Number->format($aspek->id) ?></td>
                <td><?= h($aspek->kd_aspek) ?></td>
                <td><?= h($aspek->nama_aspek) ?></td>
                <td><?= $this->Number->format($aspek->prosentase) ?></td>
                <td class="actions">
<div data-role="controlgroup" data-type="horizontal">
<?= $this->Html->link(__('Edit'), ['action' => 'edit', $aspek->id],['class'=>'ui-btn ui-shadow ui-corner-all ui-icon-edit ui-btn-icon-notext','data-ajax'=>'false']) ?>
<?= $this->Form->postLink(__('Delete'), ['action' => 'delete',$aspek->id],['class'=>'ui-btn ui-shadow ui-corner-all ui-icon-forbidden ui-btn-icon-notext'], ['confirm' => __('Are you sure you want to delete # {0}?', $aspek->id)]) ?>

</div>
     </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    
</table>

