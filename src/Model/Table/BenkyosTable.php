<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Benkyos Model
 *
 * @property \App\Model\Table\MembersTable|\Cake\ORM\Association\BelongsTo $Members
 *
 * @method \App\Model\Entity\Benkyo get($primaryKey, $options = [])
 * @method \App\Model\Entity\Benkyo newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Benkyo[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Benkyo|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Benkyo patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Benkyo[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Benkyo findOrCreate($search, callable $callback = null, $options = [])
 */
class BenkyosTable extends Table
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

        $this->setTable('benkyos');
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
            ->scalar('from_time')
            ->allowEmpty('from_time');

        $validator
            ->scalar('to_time')
            ->allowEmpty('to_time');

        $validator
            ->scalar('school_name')
            ->allowEmpty('school_name');

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
