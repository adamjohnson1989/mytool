<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Members Model
 *
 * @property \App\Model\Table\CompanysTable|\Cake\ORM\Association\BelongsTo $Companys
 *
 * @method \App\Model\Entity\Member get($primaryKey, $options = [])
 * @method \App\Model\Entity\Member newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Member[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Member|bool save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Member patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Member[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Member findOrCreate($search, callable $callback = null, $options = [])
 */
class MembersTable extends Table
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

        $this->setTable('members');
        $this->setDisplayField('name');
        $this->setPrimaryKey('id');

        $this->belongsTo('Companys', [
            'foreignKey' => 'companys_id'
        ]);
        $this->belongsTo('Shuumis', [
            'foreignKey' => 'shuumis_id'
        ]);

        $this->belongsTo('Seikakus', [
            'foreignKey' => 'seikakus_id'
        ]);

        $this->belongsTo('Rainichimokutekis', [
            'foreignKey' => 'rainichimokutekis_id'
        ]);

        $this->belongsTo('Kikokukibous', [
            'foreignKey' => 'kikokukibous_id'
        ]);

        $this->belongsTo('Shains', [
            'foreignKey' => 'shains_id'
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
            ->allowEmpty('name');

        $validator
            ->scalar('birthday')
            ->allowEmpty('birthday');

        $validator
            ->scalar('kokyo')
            ->allowEmpty('kokyo');

        $validator
            ->scalar('image')
            ->allowEmpty('image');

        $validator
            ->integer('status')
            ->allowEmpty('status');

        $validator
            ->scalar('shincho')
            ->allowEmpty('shincho');

        $validator
            ->scalar('taiju')
            ->allowEmpty('taiju');

        $validator
            ->scalar('iq')
            ->allowEmpty('iq');

        $validator
            ->integer('kekkon')
            ->allowEmpty('kekkon');
        $validator
            ->scalar('my_number')
            ->allowEmpty('my_number');

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
        $rules->add($rules->existsIn(['companys_id'], 'Companys'));

        return $rules;
    }
}
