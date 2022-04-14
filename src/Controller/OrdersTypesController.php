<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * OrdersTypes Controller
 *
 * @property \App\Model\Table\OrdersTypesTable $OrdersTypes
 * @method \App\Model\Entity\OrdersType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrdersTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $ordersTypes = $this->paginate($this->OrdersTypes);

        $this->set(compact('ordersTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Orders Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ordersType = $this->OrdersTypes->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('ordersType'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ordersType = $this->OrdersTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $ordersType = $this->OrdersTypes->patchEntity($ordersType, $this->request->getData());
            if ($this->OrdersTypes->save($ordersType)) {
                $this->Flash->success(__('The {0} has been saved.', 'Orders Type'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Orders Type'));
        }
        $this->set(compact('ordersType'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Orders Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ordersType = $this->OrdersTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ordersType = $this->OrdersTypes->patchEntity($ordersType, $this->request->getData());
            if ($this->OrdersTypes->save($ordersType)) {
                $this->Flash->success(__('The {0} has been saved.', 'Orders Type'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Orders Type'));
        }
        $this->set(compact('ordersType'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Orders Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ordersType = $this->OrdersTypes->get($id);
        if ($this->OrdersTypes->delete($ordersType)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Orders Type'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Orders Type'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
