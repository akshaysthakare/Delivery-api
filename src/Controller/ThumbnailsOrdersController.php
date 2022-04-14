<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * ThumbnailsOrders Controller
 *
 * @property \App\Model\Table\ThumbnailsOrdersTable $ThumbnailsOrders
 * @method \App\Model\Entity\ThumbnailsOrder[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ThumbnailsOrdersController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Thumbnails', 'Orders'],
        ];
        $thumbnailsOrders = $this->paginate($this->ThumbnailsOrders);

        $this->set(compact('thumbnailsOrders'));
    }

    /**
     * View method
     *
     * @param string|null $id Thumbnails Order id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $thumbnailsOrder = $this->ThumbnailsOrders->get($id, [
            'contain' => ['Thumbnails', 'Orders'],
        ]);

        $this->set(compact('thumbnailsOrder'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $thumbnailsOrder = $this->ThumbnailsOrders->newEmptyEntity();
        if ($this->request->is('post')) {
            $thumbnailsOrder = $this->ThumbnailsOrders->patchEntity($thumbnailsOrder, $this->request->getData());
            if ($this->ThumbnailsOrders->save($thumbnailsOrder)) {
                $this->Flash->success(__('The {0} has been saved.', 'Thumbnails Order'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Thumbnails Order'));
        }
        $thumbnails = $this->ThumbnailsOrders->Thumbnails->find('list', ['limit' => 200]);
        $orders = $this->ThumbnailsOrders->Orders->find('list', ['limit' => 200]);
        $this->set(compact('thumbnailsOrder', 'thumbnails', 'orders'));
    }


    /**
     * Edit method
     *
     * @param string|null $id Thumbnails Order id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $thumbnailsOrder = $this->ThumbnailsOrders->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $thumbnailsOrder = $this->ThumbnailsOrders->patchEntity($thumbnailsOrder, $this->request->getData());
            if ($this->ThumbnailsOrders->save($thumbnailsOrder)) {
                $this->Flash->success(__('The {0} has been saved.', 'Thumbnails Order'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'Thumbnails Order'));
        }
        $thumbnails = $this->ThumbnailsOrders->Thumbnails->find('list', ['limit' => 200]);
        $orders = $this->ThumbnailsOrders->Orders->find('list', ['limit' => 200]);
        $this->set(compact('thumbnailsOrder', 'thumbnails', 'orders'));
    }


    /**
     * Delete method
     *
     * @param string|null $id Thumbnails Order id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $thumbnailsOrder = $this->ThumbnailsOrders->get($id);
        if ($this->ThumbnailsOrders->delete($thumbnailsOrder)) {
            $this->Flash->success(__('The {0} has been deleted.', 'Thumbnails Order'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'Thumbnails Order'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
