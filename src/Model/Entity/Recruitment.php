<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Recruitment Entity
 *
 * @property int $id
 * @property string $name
 * @property string $kyuryo
 * @property string $basho
 * @property int $nensu
 * @property string $description
 * @property string $created_at
 * @property string $update_at
 * @property int $users_id
 *
 * @property \App\Model\Entity\User $user
 */
class Recruitment extends Entity
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
        'kyuryo' => true,
        'basho' => true,
        'nensu' => true,
        'description' => true,
        'created_at' => true,
        'update_at' => true,
        'users_id' => true,
        'user' => true,
        'deadline' => true,
        'type'  => true,
        'url'   => true
    ];
}
