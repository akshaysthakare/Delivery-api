<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;
use Authentication\PasswordHasher\DefaultPasswordHasher; // Add this line

/**
 * User Entity
 *
 * @property int $id
 * @property string $username
 * @property string $password
 * @property int $active
 * @property string $first_name
 * @property string $last_name
 * @property string $mobile
 * @property int $thumbnail_id
 * @property int $image_id
 * @property int $user_status_id
 * @property int $type_id
 * @property string $email
 * @property string $employee_code
 * @property int $address_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenDate|null $modified
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
     * @var array
     */
    protected $_accessible = [
        'username' => true,
        'password' => true,
        'active' => true,
        'first_name' => true,
        'last_name' => true,
        'mobile' => true,
        'thumbnail_id' => true,
        'image_id' => true,
        'user_status_id' => true,
        'type_id' => true,
        'email' => true,
        'employee_code' => true,
        'address_id' => true,
        'created' => true,
        'modified' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];



    // Add this method
    protected function _setPassword(string $password) : ?string
    {
        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher())->hash($password);
        }
    }
}
