<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * UserStatuses Controller
 *
 * @property \App\Model\Table\UserStatusesTable $UserStatuses
 * @method \App\Model\Entity\UserStatus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class UserStatusesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $userStatuses = $this->paginate($this->UserStatuses);

        $this->set(compact('userStatuses'));
    }

    /**
     * View method
     *
     * @param string|null $id User Status id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $userStatus = $this->UserStatuses->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('userStatus'));
    }


    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $userStatus = $this->UserStatuses->newEmptyEntity();
        if ($this->request->is('post')) {
            $userStatus = $this->UserStatuses->patchEntity($userStatus, $this->request->getData());
            if ($this->UserStatuses->save($userStatus)) {
                $this->Flash->success(__('The {0} has been saved.', 'User Status'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'User Status'));
        }
        $this->set(compact('userStatus'));
    }


    /**
     * Edit method
     *
     * @param string|null $id User Status id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $userStatus = $this->UserStatuses->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $userStatus = $this->UserStatuses->patchEntity($userStatus, $this->request->getData());
            if ($this->UserStatuses->save($userStatus)) {
                $this->Flash->success(__('The {0} has been saved.', 'User Status'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The {0} could not be saved. Please, try again.', 'User Status'));
        }
        $this->set(compact('userStatus'));
    }


    /**
     * Delete method
     *
     * @param string|null $id User Status id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $userStatus = $this->UserStatuses->get($id);
        if ($this->UserStatuses->delete($userStatus)) {
            $this->Flash->success(__('The {0} has been deleted.', 'User Status'));
        } else {
            $this->Flash->error(__('The {0} could not be deleted. Please, try again.', 'User Status'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
