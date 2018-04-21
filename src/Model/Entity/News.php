<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * News Entity
 *
 * @property int $id
 * @property string $name
 * @property string $desc
 * @property string $thumb
 * @property string $created_at
 * @property \Cake\I18n\FrozenTime $update_at
 * @property int $users_id
 * @property string $tag
 * @property int $categories_id
 *
 * @property \App\Model\Entity\Users $user
 * @property \App\Model\Entity\Categories $cat
 */
class News extends Entity
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
        'description' => true,
        'thumb' => true,
        'created_at' => true,
        'update_at' => true,
        'users_id' => true,
        'tag' => true,
        'categories_id' => true,
        'url' => true,
        'status' => true,
        'short_desc' => true
    ];
}
