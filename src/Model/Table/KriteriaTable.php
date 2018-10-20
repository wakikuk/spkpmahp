<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Kriteria Model
 *
 * @method \App\Model\Entity\Kriterium get($primaryKey, $options = [])
 * @method \App\Model\Entity\Kriterium newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Kriterium[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Kriterium|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kriterium|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Kriterium patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Kriterium[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Kriterium findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class KriteriaTable extends Table
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

        $this->setTable('kriteria');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');
     $this->hasOne('Aspek')->setBindingKey('kd_aspek')
                       ->setForeignKey('kd_aspek')
                       ->setDependent(true);
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
            ->scalar('kd_kriteria')
            ->maxLength('kd_kriteria', 50)
            ->notEmpty('kd_kriteria');

        $validator
            ->scalar('nama_kritera')
            ->maxLength('nama_kritera', 50)
            ->allowEmpty('nama_kritera');

        $validator
            ->numeric('nilai_kriteria')
            ->allowEmpty('nilai_kriteria');

        $validator
            ->scalar('factor')
            ->allowEmpty('factor');

        $validator
            ->scalar('kd_aspek')
            ->maxLength('kd_aspek', 50)
            ->notEmpty('kd_aspek');

        return $validator;
    }
}
