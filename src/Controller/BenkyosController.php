<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Benkyos Controller
 *
 * @property \App\Model\Table\BenkyosTable $Benkyos
 *
 * @method \App\Model\Entity\Benkyo[] paginate($object = null, array $settings = [])
 */
class BenkyosController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Members']
        ];
        $benkyos = $this->paginate($this->Benkyos);

        $this->set(compact('benkyos'));
        $this->set('_serialize', ['benkyos']);
    }

    /**
     * View method
     *
     * @param string|null $id Benkyo id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $benkyo = $this->Benkyos->get($id, [
            'contain' => ['Members']
        ]);

        $this->set('benkyo', $benkyo);
        $this->set('_serialize', ['benkyo']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $benkyo = $this->Benkyos->newEntity();
        if ($this->request->is('post')) {
            $benkyo = $this->Benkyos->patchEntity($benkyo, $this->request->getData());
            if ($this->Benkyos->save($benkyo)) {
                $this->Flash->success(__('The benkyo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The benkyo could not be saved. Please, try again.'));
        }
        $members = $this->Benkyos->Members->find('list', ['limit' => 200]);
        $this->set(compact('benkyo', 'members'));
        $this->set('_serialize', ['benkyo']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Benkyo id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $benkyo = $this->Benkyos->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $benkyo = $this->Benkyos->patchEntity($benkyo, $this->request->getData());
            if ($this->Benkyos->save($benkyo)) {
                $this->Flash->success(__('The benkyo has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The benkyo could not be saved. Please, try again.'));
        }
        $members = $this->Benkyos->Members->find('list', ['limit' => 200]);
        $this->set(compact('benkyo', 'members'));
        $this->set('_serialize', ['benkyo']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Benkyo id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $benkyo = $this->Benkyos->get($id);
        if ($this->Benkyos->delete($benkyo)) {
            $this->Flash->success(__('The benkyo has been deleted.'));
        } else {
            $this->Flash->error(__('The benkyo could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
