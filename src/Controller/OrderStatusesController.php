<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * OrderStatuses Controller
 *
 * @property \App\Model\Table\OrderStatusesTable $OrderStatuses
 * @method \App\Model\Entity\OrderStatus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrderStatusesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $orderStatuses = $this->paginate($this->OrderStatuses);

        $this->set(compact('orderStatuses'));
    }

    /**
     * View method
     *
     * @param string|null $id Order Status id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderStatus = $this->OrderStatuses->get($id, [
            'contain' => ['Orders'],
        ]);

        $this->set(compact('orderStatus'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderStatus = $this->OrderStatuses->newEmptyEntity();
        if ($this->request->is('post')) {
            $orderStatus = $this->OrderStatuses->patchEntity($orderStatus, $this->request->getData());
            if ($this->OrderStatuses->save($orderStatus)) {
                $this->Flash->success(__('The {0} has been saved.', 'Order Status'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Order Status'));
        }
        $this->set(compact('orderStatus'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Order Status id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderStatus = $this->OrderStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderStatus = $this->OrderStatuses->patchEntity($orderStatus, $this->request->getData());
            if ($this->OrderStatuses->save($orderStatus)) {
                $this->Flash->success(__('The {0} has been saved.', 'Order Status'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Order Status'));
        }
        $this->set(compact('orderStatus'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Order Status id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderStatus = $this->OrderStatuses->get($id);
        if ($this->OrderStatuses->delete($orderStatus)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Order Status'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Order Status'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
