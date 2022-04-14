<?php
declare(strict_types=1);

namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Order Entity
 *
 * @property int $id
 * @property string $sku
 * @property int $pickup_address_id
 * @property int $dropoff_address_id
 * @property string $product_name
 * @property float $product_weight
 * @property float $product_price
 * @property \Cake\I18n\FrozenTime $pickup_date
 * @property \Cake\I18n\FrozenTime $dropoff_date
 * @property int $customer_id
 * @property int $delivery_boy_id
 * @property int $order_type_id
 * @property int $vendor_id
 * @property int $order_status_id
 * @property float $delivery_boy_rating
 * @property string $customer_comments
 * @property string $delivery_comments
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\User $pickup_address
 * @property \App\Model\Entity\User $dropoff_address
 * @property \App\Model\Entity\User $customer
 * @property \App\Model\Entity\User $delivery_boy
 * @property \App\Model\Entity\OrderType $order_type
 * @property \App\Model\Entity\User $vendor
 * @property \App\Model\Entity\OrderStatus $order_status
 * @property \App\Model\Entity\Image[] $images
 * @property \App\Model\Entity\Thumbnail[] $thumbnails
 */
class Order extends Entity
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
        'sku' => true,
        'pickup_address_id' => true,
        'dropoff_address_id' => true,
        'product_name' => true,
        'product_weight' => true,
        'product_price' => true,
        'pickup_date' => true,
        'dropoff_date' => true,
        'customer_id' => true,
        'delivery_boy_id' => true,
        'order_type_id' => true,
        'vendor_id' => true,
        'order_status_id' => true,
        'delivery_boy_rating' => true,
        'customer_comments' => true,
        'delivery_comments' => true,
        'created' => true,
        'modified' => true,
        'pickup_address' => true,
        'dropoff_address' => true,
        'customer' => true,
        'delivery_boy' => true,
        'order_type' => true,
        'vendor' => true,
        'order_status' => true,
        'images' => true,
        'thumbnails' => true,
    ];
}
