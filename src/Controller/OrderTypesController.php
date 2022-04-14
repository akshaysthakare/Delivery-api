<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * OrderTypes Controller
 *
 * @property \App\Model\Table\OrderTypesTable $OrderTypes
 * @method \App\Model\Entity\OrderType[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OrderTypesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $orderTypes = $this->paginate($this->OrderTypes);

        $this->set(compact('orderTypes'));
    }

    /**
     * View method
     *
     * @param string|null $id Order Type id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $orderType = $this->OrderTypes->get($id, [
            'contain' => ['Orders'],
        ]);

        $this->set(compact('orderType'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $orderType = $this->OrderTypes->newEmptyEntity();
        if ($this->request->is('post')) {
            $orderType = $this->OrderTypes->patchEntity($orderType, $this->request->getData());
            if ($this->OrderTypes->save($orderType)) {
                $this->Flash->success(__('The {0} has been saved.', 'Order Type'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Order Type'));
        }
        $this->set(compact('orderType'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Order Type id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $orderType = $this->OrderTypes->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $orderType = $this->OrderTypes->patchEntity($orderType, $this->request->getData());
            if ($this->OrderTypes->save($orderType)) {
                $this->Flash->success(__('The {0} has been saved.', 'Order Type'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Order Type'));
        }
        $this->set(compact('orderType'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Order Type id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $orderType = $this->OrderTypes->get($id);
        if ($this->OrderTypes->delete($orderType)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Order Type'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Order Type'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
