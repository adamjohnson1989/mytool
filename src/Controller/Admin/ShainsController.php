<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AdminController;
use Cake\Event\Event;

/**
 * Shains Controller
 *
 *
 * @method \App\Model\Entity\Shain[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class ShainsController extends AdminController
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
        $shains = $this->paginate($this->Shains);

        $this->set(compact('shains'));
    }

    /**
     * View method
     *
     * @param string|null $id Shain id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $shain = $this->Shains->get($id, [
            'contain' => []
        ]);

        $this->set('shain', $shain);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $shain = $this->Shains->newEntity();
        $catObj = $this->loadModel('Departments');
        $catQuery = $catObj->find('all');
        $catArr = $catQuery->toArray();
        $catData = array('0'=> '--Chọn Bộ Phận--');
        if(count($catArr)){
            foreach ($catArr as $cat){
                $catData[$cat->id] = $cat->name;
            }
        }
        if ($this->request->is('post')) {
            $shain = $this->Shains->patchEntity($shain, $this->request->getData());
            if ($this->Shains->save($shain)) {
                $this->Flash->success(__('The shain has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shain could not be saved. Please, try again.'));
        }
        $this->set(compact('shain'));
        $this->set('catData',$catData);
    }

    /**
     * Edit method
     *
     * @param string|null $id Shain id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $shain = $this->Shains->get($id, [
            'contain' => []
        ]);
        $catObj = $this->loadModel('Departments');
        $catQuery = $catObj->find('all');
        $catArr = $catQuery->toArray();
        $catData = array('0'=> '--Chọn Bộ Phận--');
        if(count($catArr)){
            foreach ($catArr as $cat){
                $catData[$cat->id] = $cat->name;
            }
        }
        if ($this->request->is(['patch', 'post', 'put'])) {
            $shain = $this->Shains->patchEntity($shain, $this->request->getData());
            if ($this->Shains->save($shain)) {
                $this->Flash->success(__('The shain has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The shain could not be saved. Please, try again.'));
        }
        $this->set(compact('shain'));
        $this->set('catData',$catData);
    }

    /**
     * Delete method
     *
     * @param string|null $id Shain id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $shain = $this->Shains->get($id);
        if ($this->Shains->delete($shain)) {
            $this->Flash->success(__('The shain has been deleted.'));
        } else {
            $this->Flash->error(__('The shain could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}