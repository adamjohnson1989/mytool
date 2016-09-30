<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Associations Model
 *
 * @method \App\Model\Entity\Association get($primaryKey, $options = [])
 * @method \App\Model\Entity\Association newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Association[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Association|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Association patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Association[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Association findOrCreate($search, callable $callback = null)
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class AssociationsTable extends Table
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

        $this->table('associations');
        $this->displayField('name');
        $this->primaryKey('id');

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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->allowEmpty('name_jp');

        $validator
            ->allowEmpty('address');

        $validator
            ->allowEmpty('address_jp');
        $validator
            ->allowEmpty('telephone');
        $validator
            ->allowEmpty('kakari');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        return $validator;
    }
}
