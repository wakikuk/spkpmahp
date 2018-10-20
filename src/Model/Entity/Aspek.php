<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aspek Entity
 *
 * @property int $id
 * @property string $kode
 * @property string $nama_aspek
 * @property float $prosentase
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Aspek extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'kd_aspek' => true,
        'nama_aspek' => true,
        'prosentase' => true,
        'created' => true,
        'modified' => true
    ];
}
