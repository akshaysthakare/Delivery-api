<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Orders Controller
 *
 * @property \App\Model\Table\OrdersTable $Orders
 * @method \App\Model\Entity\Order[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrdersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['PickupAddresses', 'DropoffAddresses', 'Customers', 'DeliveryBoys', 'OrderTypes', 'Vendors', 'OrderStatuses'],
        ];
        $orders = $this->paginate($this->Orders);

        $this->set(compact('orders'));
    }

    /**
     * View method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => ['PickupAddresses', 'DropoffAddresses', 'Customers', 'DeliveryBoys', 'OrderTypes', 'Vendors', 'OrderStatuses', 'Images', 'Thumbnails'],
        ]);

        $this->set(compact('order'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $order = $this->Orders->newEmptyEntity();
        if ($this->request->is('post')) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The {0} has been saved.', 'Order'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Order'));
        }
        $pickupAddresses = $this->Orders->PickupAddresses->find('list', ['limit' => 200]);
        $dropoffAddresses = $this->Orders->DropoffAddresses->find('list', ['limit' => 200]);
        $customers = $this->Orders->Customers->find('list', ['limit' => 200]);
        $deliveryBoys = $this->Orders->DeliveryBoys->find('list', ['limit' => 200]);
        $orderTypes = $this->Orders->OrderTypes->find('list', ['limit' => 200]);
        $vendors = $this->Orders->Vendors->find('list', ['limit' => 200]);
        $orderStatuses = $this->Orders->OrderStatuses->find('list', ['limit' => 200]);
        $images = $this->Orders->Images->find('list', ['limit' => 200]);
        $thumbnails = $this->Orders->Thumbnails->find('list', ['limit' => 200]);
        $this->set(compact('order', 'pickupAddresses', 'dropoffAddresses', 'customers', 'deliveryBoys', 'orderTypes', 'vendors', 'orderStatuses', 'images', 'thumbnails'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $order = $this->Orders->get($id, [
            'contain' => ['Images', 'Thumbnails']
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $order = $this->Orders->patchEntity($order, $this->request->getData());
            if ($this->Orders->save($order)) {
                $this->Flash->success(__('The {0} has been saved.', 'Order'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Order'));
        }
        $pickupAddresses = $this->Orders->PickupAddresses->find('list', ['limit' => 200]);
        $dropoffAddresses = $this->Orders->DropoffAddresses->find('list', ['limit' => 200]);
        $customers = $this->Orders->Customers->find('list', ['limit' => 200]);
        $deliveryBoys = $this->Orders->DeliveryBoys->find('list', ['limit' => 200]);
        $orderTypes = $this->Orders->OrderTypes->find('list', ['limit' => 200]);
        $vendors = $this->Orders->Vendors->find('list', ['limit' => 200]);
        $orderStatuses = $this->Orders->OrderStatuses->find('list', ['limit' => 200]);
        $images = $this->Orders->Images->find('list', ['limit' => 200]);
        $thumbnails = $this->Orders->Thumbnails->find('list', ['limit' => 200]);
        $this->set(compact('order', 'pickupAddresses', 'dropoffAddresses', 'customers', 'deliveryBoys', 'orderTypes', 'vendors', 'orderStatuses', 'images', 'thumbnails'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Order id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $order = $this->Orders->get($id);
        if ($this->Orders->delete($order)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Order'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Order'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
