<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Aspek Model
 *
 * @method \App\Model\Entity\Aspek get($primaryKey, $options = [])
 * @method \App\Model\Entity\Aspek newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Aspek[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Aspek|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aspek|bool saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Aspek patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Aspek[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Aspek findOrCreate($search, callable $callback = null, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AspekTable extends Table
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

        $this->setTable('aspek');
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
            ->scalar('kd_aspek')
            ->maxLength('kd_aspek', 50)
            ->notEmpty('kd_aspek');

        $validator
            ->scalar('nama_aspek')
            ->maxLength('nama_aspek', 50)
            ->allowEmpty('nama_aspek');

        $validator
            ->numeric('prosentase')
            ->allowEmpty('prosentase');

        return $validator;
    }
}
