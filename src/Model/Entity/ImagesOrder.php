<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * ImagesOrder Entity
 *
 * @property int $id
 * @property int $image_id
 * @property int $order_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Image $image
 * @property \App\Model\Entity\Order $order
 */
class ImagesOrder extends Entity
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
        'image_id' => true,
        'order_id' => true,
        'created' => true,
        'modified' => true,
        'image' => true,
        'order' => true,
    ];
}
