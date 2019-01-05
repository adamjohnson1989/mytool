<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Saiyous Entity
 *
 * @property int $id
 * @property string $name
 * @property int $companys_id
 * @property int $associations_id
 * @property string $interview_date
 * @property string $member
 * @property int $status
 *
 * @property \App\Model\Entity\Company $company
 * @property \App\Model\Entity\Association $association
 */
class Saiyous extends Entity
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
        'companys_id' => true,
        'associations_id' => true,
        'interview_date' => true,
        'member' => true,
        'status' => true,
        'company' => true,
        'association' => true
    ];
}
