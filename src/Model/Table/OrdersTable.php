<?php
declare(strict_types=1);

namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Orders Model
 *
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $PickupAddresses
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $DropoffAddresses
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Customers
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $DeliveryBoys
 * @property \App\Model\Table\OrderTypesTable&\Cake\ORM\Association\BelongsTo $OrderTypes
 * @property \App\Model\Table\UsersTable&\Cake\ORM\Association\BelongsTo $Vendors
 * @property \App\Model\Table\OrderStatusesTable&\Cake\ORM\Association\BelongsTo $OrderStatuses
 * @property \App\Model\Table\ImagesTable&\Cake\ORM\Association\BelongsToMany $Images
 * @property \App\Model\Table\ThumbnailsTable&\Cake\ORM\Association\BelongsToMany $Thumbnails
 *
 * @method \App\Model\Entity\Order newEmptyEntity()
 * @method \App\Model\Entity\Order newEntity(array $data, array $options = [])
 * @method \App\Model\Entity\Order[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Order get($primaryKey, $options = [])
 * @method \App\Model\Entity\Order findOrCreate($search, ?callable $callback = null, $options = [])
 * @method \App\Model\Entity\Order patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Order[] patchEntities(iterable $entities, array $data, array $options = [])
 * @method \App\Model\Entity\Order|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface|false saveMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface saveManyOrFail(iterable $entities, $options = [])
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface|false deleteMany(iterable $entities, $options = [])
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface deleteManyOrFail(iterable $entities, $options = [])
 *
 * @mixin \Cake\ORM\Behavior\TimestampBehavior
 */
class OrdersTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config): void
    {
        parent::initialize($config);

        $this->setTable('orders');
        $this->setDisplayField('id');
        $this->setPrimaryKey('id');

        $this->addBehavior('Timestamp');

        $this->belongsTo('PickupAddresses', [
            'className' => 'Users',
            'foreignKey' => 'pickup_address_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('DropoffAddresses', [
            'className' => 'Users',
            'foreignKey' => 'dropoff_address_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Customers', [
            'className' => 'Users',
            'foreignKey' => 'customer_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('DeliveryBoys', [
            'className' => 'Users',
            'foreignKey' => 'delivery_boy_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('OrderTypes', [
            'foreignKey' => 'order_type_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('Vendors', [
            'className' => 'Users',
            'foreignKey' => 'vendor_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsTo('OrderStatuses', [
            'foreignKey' => 'order_status_id',
            'joinType' => 'INNER',
        ]);
        $this->belongsToMany('Images', [
            'foreignKey' => 'order_id',
            'targetForeignKey' => 'image_id',
            'joinTable' => 'images_orders',
        ]);
        $this->belongsToMany('Thumbnails', [
            'foreignKey' => 'order_id',
            'targetForeignKey' => 'thumbnail_id',
            'joinTable' => 'thumbnails_orders',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator): Validator
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('sku')
            ->maxLength('sku', 50)
            ->requirePresence('sku', 'create')
            ->notEmptyString('sku');

        $validator
            ->scalar('product_name')
            ->maxLength('product_name', 100)
            ->requirePresence('product_name', 'create')
            ->notEmptyString('product_name');

        $validator
            ->numeric('product_weight')
            ->requirePresence('product_weight', 'create')
            ->notEmptyString('product_weight');

        $validator
            ->numeric('product_price')
            ->requirePresence('product_price', 'create')
            ->notEmptyString('product_price');

        $validator
            ->dateTime('pickup_date')
            ->requirePresence('pickup_date', 'create')
            ->notEmptyDateTime('pickup_date');

        $validator
            ->dateTime('dropoff_date')
            ->requirePresence('dropoff_date', 'create')
            ->notEmptyDateTime('dropoff_date');

        $validator
            ->numeric('delivery_boy_rating')
            ->requirePresence('delivery_boy_rating', 'create')
            ->notEmptyString('delivery_boy_rating');

        $validator
            ->scalar('customer_comments')
            ->maxLength('customer_comments', 255)
            ->requirePresence('customer_comments', 'create')
            ->notEmptyString('customer_comments');

        $validator
            ->scalar('delivery_comments')
            ->maxLength('delivery_comments', 255)
            ->requirePresence('delivery_comments', 'create')
            ->notEmptyString('delivery_comments');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules): RulesChecker
    {
        $rules->add($rules->existsIn(['pickup_address_id'], 'PickupAddresses'), ['errorField' => 'pickup_address_id']);
        $rules->add($rules->existsIn(['dropoff_address_id'], 'DropoffAddresses'), ['errorField' => 'dropoff_address_id']);
        $rules->add($rules->existsIn(['customer_id'], 'Customers'), ['errorField' => 'customer_id']);
        $rules->add($rules->existsIn(['delivery_boy_id'], 'DeliveryBoys'), ['errorField' => 'delivery_boy_id']);
        $rules->add($rules->existsIn(['order_type_id'], 'OrderTypes'), ['errorField' => 'order_type_id']);
        $rules->add($rules->existsIn(['vendor_id'], 'Vendors'), ['errorField' => 'vendor_id']);
        $rules->add($rules->existsIn(['order_status_id'], 'OrderStatuses'), ['errorField' => 'order_status_id']);

        return $rules;
    }
}
