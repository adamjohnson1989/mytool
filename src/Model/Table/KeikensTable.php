<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Keikens Model
 *
 * @property \App\Model\Table\MembersTable|\Cake\ORM\Association\BelongsTo $Members
 *
 * @method \App\Model\Entity\Keiken get($primaryKey, $options = [])
 * @method \App\Model\Entity\Keiken newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Keiken[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Keiken|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Keiken patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Keiken[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Keiken findOrCreate($search, callable $callback = null, $options = [])
 */
class KeikensTable extends Table
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

        $this->setTable('keikens');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->belongsTo('Members', [
            'foreignKey' => 'members_id'
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
            ->scalar('to_time')
            ->allowEmpty('to_time');

        $validator
            ->scalar('from_time')
            ->allowEmpty('from_time');

        $validator
            ->scalar('company')
            ->allowEmpty('company');

        $validator
            ->scalar('job')
            ->allowEmpty('job');

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
        $rules->add($rules->existsIn(['members_id'], 'Members'));

        return $rules;
    }
}
