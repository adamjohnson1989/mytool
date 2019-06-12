<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Saiyous Model
 *
 * @property \App\Model\Table\CompanysTable|\Cake\ORM\Association\BelongsTo $Companys
 * @property \App\Model\Table\AssociationsTable|\Cake\ORM\Association\BelongsTo $Associations
 *
 * @method \App\Model\Entity\Saiyous get($primaryKey, $options = [])
 * @method \App\Model\Entity\Saiyous newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Saiyous[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Saiyous|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Saiyous patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Saiyous[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Saiyous findOrCreate($search, callable $callback = null, $options = [])
 */
class SaiyousTable extends Table
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

        $this->setTable('saiyous');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Recruitments', [
            'foreignKey' => 'recruitments_id',
            'joinType' => 'INNER'
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
            ->integer('recruitments_id')
            ->notEmpty('recruitments_id');

        $validator
            ->integer('members_id')
            ->allowEmpty('member');

        $validator
            ->integer('status')
            ->allowEmpty('status');

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
        $rules->add($rules->existsIn(['recruitments_id'], 'Recruitments'));

        return $rules;
    }
}
