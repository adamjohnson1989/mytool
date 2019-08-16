<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Seikakus Model
 *
 * @method \App\Model\Entity\Seikakus get($primaryKey, $options = [])
 * @method \App\Model\Entity\Seikakus newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Seikakus[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Seikakus|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Seikakus patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Seikakus[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Seikakus findOrCreate($search, callable $callback = null, $options = [])
 */
class SeikakusTable extends Table
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

        $this->setTable('seikakus');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');
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
            ->scalar('name')
            ->maxLength('name', 255)
            ->allowEmpty('name');

        $validator
            ->scalar('name_jp')
            ->maxLength('name_jp', 255)
            ->allowEmpty('name_jp');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        return $validator;
    }
}
