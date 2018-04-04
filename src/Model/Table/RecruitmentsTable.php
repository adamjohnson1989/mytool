<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Recruitments Model
 *
 * @property \App\Model\Table\UsersTable|\Cake\ORM\Association\BelongsTo $Users
 *
 * @method \App\Model\Entity\Recruitment get($primaryKey, $options = [])
 * @method \App\Model\Entity\Recruitment newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Recruitment[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Recruitment|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Recruitment patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Recruitment[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Recruitment findOrCreate($search, callable $callback = null, $options = [])
 */
class RecruitmentsTable extends Table
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

        $this->setTable('recruitments');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Users', [
            'foreignKey' => 'users_id'
        ]);
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
            ->requirePresence('name', 'create')
            ->notEmpty('name');

        $validator
            ->scalar('kyuryo')
            ->allowEmpty('kyuryo');

        $validator
            ->scalar('basho')
            ->allowEmpty('basho');

        $validator
            ->integer('nensu')
            ->allowEmpty('nensu');

        $validator
            ->scalar('description')
            ->allowEmpty('description');

        $validator
            ->scalar('created_at')
            ->allowEmpty('created_at');

        $validator
            ->scalar('update_at')
            ->allowEmpty('update_at');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['users_id'], 'Users'));

        return $rules;
    }
}
