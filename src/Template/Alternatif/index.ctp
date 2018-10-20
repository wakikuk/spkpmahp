<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Alternatif[]|\Cake\Collection\CollectionInterface $alternatif
 */
?>
<h3 class="ui-bar ui-bar-a">Data Alternatif</h3>
<div class="ui-grid-b ui-responsive">
    <div class="ui-block-a">
      <a href="<?= $this->Url->build(['action'=>'add'])?>" rel="external" class="ui-shadow ui-btn ui-corner-all ui-btn-icon-left ui-icon-plus">Tambah</a>
    </div>
    <div class="ui-block-b">  
  
    </div>
    <div class="ui-block-c">
           <form>
               <input id="filterTable-input" data-type="search" placeholder="Cari Alternatif">
          
        </form>
    </div>
</div>
<table  data-role="table" class="ui-table ui-responsive table-stripe ui-shadow table-stroke" data-filter="true" data-input="#filterTable-input">
    <thead>
     <tr>
                <th scope="col"><?= 'No' ?></th>
                <th scope="col"><?= 'Kode Alternatif' ?></th>
                <th scope="col"><?= 'Nama Alternatif' ?></th>
                <th scope="col" class="actions"><?= __('Aksi') ?></th>
            </tr>
    </thead>
        <tbody>
            <?php foreach ($alternatif as $alternatif): ?>
            <tr>
                <td><?= $this->Number->format($alternatif->id) ?></td>
                <td><?= h($alternatif->kd_alternatif) ?></td>
                <td><?= h($alternatif->nama_alternatif) ?></td>
                <td class="actions">
                    <div data-role="controlgroup" data-type="horizontal" >
        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $alternatif->id],['data-iconpos'=>"notext",'data-icon'=>'edit','data-role'=>'button','class'=>'ui-shadow ','data-ajax'=>'false']) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $alternatif->id],['data-enchanced'=>'true','class'=>'ui-btn ui-shadow ui-corner-all ui-icon-forbidden ui-btn-icon-notext'], ['confirm' => __('Are you sure you want to delete # {0}?', $alternatif->id)]) ?>
   
</div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    
</table>