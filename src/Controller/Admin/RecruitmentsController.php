<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AdminController;
use Cake\Event\Event;
/**
 * Recruitments Controller
 *
 * @property \App\Model\Table\RecruitmentsTable $Recruitments
 *
 * @method \App\Model\Entity\Recruitment[] paginate($object = null, array $settings = [])
 */
class RecruitmentsController extends AdminController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Users']
        ];
        $recruitments = $this->paginate($this->Recruitments);

        $this->set(compact('recruitments'));
        $this->set('_serialize', ['recruitments']);
    }

    /**
     * View method
     *
     * @param string|null $id Recruitment id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $recruitment = $this->Recruitments->get($id, [
            'contain' => ['Users']
        ]);

        $this->set('recruitment', $recruitment);
        $this->set('_serialize', ['recruitment']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $recruitment = $this->Recruitments->newEntity();
        if ($this->request->is('post')) {
            $dataArr = $this->request->getData();
            $dataSave = [];
            foreach ($dataArr as $k => $data){
                $dataSave[$k] = htmlspecialchars($data);
            }
            $recruitment = $this->Recruitments->patchEntity($recruitment, $dataSave);
            if ($this->Recruitments->save($recruitment)) {
                $this->Flash->success(__('The recruitment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recruitment could not be saved. Please, try again.'));
        }
        $users = $this->Recruitments->Users->find('list', ['limit' => 200]);
        $this->set(compact('recruitment', 'users'));
        $this->set('_serialize', ['recruitment']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Recruitment id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $recruitment = $this->Recruitments->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $dataArr = $this->request->getData();
            $dataSave = [];
            foreach ($dataArr as $k => $data){
                $dataSave[$k] = htmlspecialchars($data);
            }
            $recruitment = $this->Recruitments->patchEntity($recruitment, $dataSave);
            if ($this->Recruitments->save($recruitment)) {
                $this->Flash->success(__('The recruitment has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The recruitment could not be saved. Please, try again.'));
        }
        $users = $this->Recruitments->Users->find('list', ['limit' => 200]);
        $this->set(compact('recruitment', 'users'));
        $this->set('_serialize', ['recruitment']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Recruitment id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $recruitment = $this->Recruitments->get($id);
        if ($this->Recruitments->delete($recruitment)) {
            $this->Flash->success(__('The recruitment has been deleted.'));
        } else {
            $this->Flash->error(__('The recruitment could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
