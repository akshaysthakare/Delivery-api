<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ImagesOrders Controller
 *
 * @property \App\Model\Table\ImagesOrdersTable $ImagesOrders
 * @method \App\Model\Entity\ImagesOrder[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ImagesOrdersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Images', 'Orders'],
        ];
        $imagesOrders = $this->paginate($this->ImagesOrders);

        $this->set(compact('imagesOrders'));
    }

    /**
     * View method
     *
     * @param string|null $id Images Order id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $imagesOrder = $this->ImagesOrders->get($id, [
            'contain' => ['Images', 'Orders'],
        ]);

        $this->set(compact('imagesOrder'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $imagesOrder = $this->ImagesOrders->newEmptyEntity();
        if ($this->request->is('post')) {
            $imagesOrder = $this->ImagesOrders->patchEntity($imagesOrder, $this->request->getData());
            if ($this->ImagesOrders->save($imagesOrder)) {
                $this->Flash->success(__('The {0} has been saved.', 'Images Order'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Images Order'));
        }
        $images = $this->ImagesOrders->Images->find('list', ['limit' => 200]);
        $orders = $this->ImagesOrders->Orders->find('list', ['limit' => 200]);
        $this->set(compact('imagesOrder', 'images', 'orders'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Images Order id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $imagesOrder = $this->ImagesOrders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $imagesOrder = $this->ImagesOrders->patchEntity($imagesOrder, $this->request->getData());
            if ($this->ImagesOrders->save($imagesOrder)) {
                $this->Flash->success(__('The {0} has been saved.', 'Images Order'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Images Order'));
        }
        $images = $this->ImagesOrders->Images->find('list', ['limit' => 200]);
        $orders = $this->ImagesOrders->Orders->find('list', ['limit' => 200]);
        $this->set(compact('imagesOrder', 'images', 'orders'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Images Order id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $imagesOrder = $this->ImagesOrders->get($id);
        if ($this->ImagesOrders->delete($imagesOrder)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Images Order'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Images Order'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
