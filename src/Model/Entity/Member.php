<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Member Entity
 *
 * @property int $id
 * @property string $name
 * @property string $birthday
 * @property string $kokyo
 * @property string $image
 * @property int $companys_id
 * @property int $status
 * @property string $shincho
 * @property string $taiju
 * @property string $iq
 * @property int $kekkon
 *
 * @property \App\Model\Entity\Company $company
 */
class Member extends Entity
{

    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'name' => true,
        'birthday' => true,
        'kokyo' => true,
        'image' => true,
        'companys_id' => true,
        'status' => true,
        'shincho' => true,
        'taiju' => true,
        'iq' => true,
        'kekkon' => true,
        'company' => true,
        'ketsueki' => true,
        'migime'  => true,
        'hidarime' => true,
        'kikite' => true,
        'gender' => true,
        'my_number' => true,
        'mshv' => true,
        'my_number_from' => true,
        'my_number_basho' => true,
        'jusho' => true,
        'kazoku_nenshu' => true,
        'shuumis_id' => true,
        'seikakus_id' => true,
        'rainichimokutekis_id' => true,
        'kikokukibous_id' => true,
        'sannengoshunyu' => true,
        'shains_id' => true,
        'shikimou' => true,
        'inshuu' => true,
        'ketsuen' => true,
        'irezumi' => true,
        'gunjin' => true
    ];
}
