<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AdminController;
use Cake\Event\Event;

/**
 * Seikakus Controller
 *
 *
 * @method \App\Model\Entity\Seikakus[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class SeikakusController extends AdminController
{

    public function beforeRender(Event $event)
    {
        parent::beforeRender($event); // TODO: Change the autogenerated stub
        $this->viewBuilder()->layout('admin');
    }

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = ['limit' => 10];
        $seikakus = $this->paginate($this->Seikakus);

        $this->set(compact('seikakus'));
    }

    /**
     * View method
     *
     * @param string|null $id Seikakus id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $seikakus = $this->Seikakus->get($id, [
            'contain' => []
        ]);

        $this->set('seikakus', $seikakus);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $seikaku = $this->Seikakus->newEntity();
        if ($this->request->is('post')) {
            $seikaku = $this->Seikakus->patchEntity($seikaku, $this->request->getData());
            if ($this->Seikakus->save($seikaku)) {
                $this->Flash->success(__('The seikakus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The seikakus could not be saved. Please, try again.'));
        }
        $this->set(compact('seikaku'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Seikakus id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $seikaku = $this->Seikakus->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $seikaku = $this->Seikakus->patchEntity($seikaku, $this->request->getData());
            if ($this->Seikakus->save($seikaku)) {
                $this->Flash->success(__('The seikakus has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The seikakus could not be saved. Please, try again.'));
        }
        $this->set(compact('seikaku'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Seikakus id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $seikaku = $this->Seikakus->get($id);
        if ($this->Seikakus->delete($seikaku)) {
            $this->Flash->success(__('The seikakus has been deleted.'));
        } else {
            $this->Flash->error(__('The seikakus could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}