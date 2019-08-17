<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Shain Entity
 *
 * @property int $id
 * @property string $name
 * @property string $email
 * @property string $tel
 * @property int $status
 * @property int $parentID
 * @property int $departments_id
 *
 * @property \App\Model\Entity\Department $department
 */
class Shain extends Entity
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
        'email' => true,
        'tel' => true,
        'status' => true,
        'parentID' => true,
        'departments_id' => true,
        'department' => true
    ];
}
