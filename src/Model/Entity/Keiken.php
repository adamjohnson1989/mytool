<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Keiken Entity
 *
 * @property int $id
 * @property string $to_time
 * @property string $from_time
 * @property string $company
 * @property string $job
 * @property int $members_id
 *
 * @property \App\Model\Entity\Member $member
 */
class Keiken extends Entity
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
        'to_time' => true,
        'from_time' => true,
        'company' => true,
        'job' => true,
        'members_id' => true,
        'member' => true
    ];
}
