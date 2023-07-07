<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $img
 * @property string $email
 * @property string $password
 * @property string $password_salt
 * @property string $token
 * @property int $role_id
 * @property int $statu_id
 * @property int $is_buyer
 *
 * @property \App\Model\Entity\Role $role
 * @property \App\Model\Entity\Course[] $courses
 */
class User extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array<string, bool>
     */
    protected $_accessible = [
        'img' => true,
        'email' => true,
        'password' => true,
        'password_salt' => true,
        'token' => true,
        'role_id' => true,
        'statu_id' => true,
        'is_buyer' => true,
        'role' => true,
        'courses' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array<string>
     */
    protected $_hidden = [
        'password',
        'token',
    ];
}
