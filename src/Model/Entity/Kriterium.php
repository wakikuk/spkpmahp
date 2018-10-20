<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Kriterium Entity
 *
 * @property int $id
 * @property string $kd_kriteria
 * @property string $nama_kritera
 * @property float $nilai_kriteria
 * @property string $factor
 * @property string $kd_aspek
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime $modified
 */
class Kriterium extends Entity
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
        'kd_kriteria' => true,
        'nama_kritera' => true,
        'nilai_kriteria' => true,
        'factor' => true,
        'kd_aspek' => true,
        'created' => true,
        'modified' => true
    ];
}
