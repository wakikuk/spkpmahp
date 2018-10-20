<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Alternatif Model
 *
 * @method \App\Model\Entity\Alternatif get($primaryKey, $options = [])
 * @method \App\Model\Entity\Alternatif newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Alternatif[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Alternatif|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alternatif|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Alternatif patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Alternatif[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Alternatif findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AlternatifTable extends Table
{

    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('alternatif');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmpty('id', 'create');

        $validator
            ->scalar('kd_alternatif')
            ->maxLength('kd_alternatif', 50)
            ->notEmpty('kd_alternatif');

        $validator
            ->scalar('nama_alternatif')
            ->maxLength('nama_alternatif', 50)
            ->allowEmpty('nama_alternatif');

        return $validator;
    }
}
