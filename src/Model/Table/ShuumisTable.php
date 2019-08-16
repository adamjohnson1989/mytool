<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Shuumis Model
 *
 * @method \App\Model\Entity\Shuumi get($primaryKey, $options = [])
 * @method \App\Model\Entity\Shuumi newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Shuumi[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Shuumi|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Shuumi patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Shuumi[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Shuumi findOrCreate($search, callable $callback = null, $options = [])
 */
class ShuumisTable extends Table
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

        $this->setTable('shuumis');
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
