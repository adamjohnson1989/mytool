<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Keikens Controller
 *
 *
 * @method \App\Model\Entity\Keiken[] paginate($object = null, array $settings = [])
 */
class KeikensController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $keikens = $this->paginate($this->Keikens);

        $this->set(compact('keikens'));
        $this->set('_serialize', ['keikens']);
    }

    /**
     * View method
     *
     * @param string|null $id Keiken id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $keiken = $this->Keikens->get($id, [
            'contain' => []
        ]);

        $this->set('keiken', $keiken);
        $this->set('_serialize', ['keiken']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        if ($this->request->is('ajax')) {
            $dataAry = $this->request->getData();
            $returnVal = [];
            foreach ($dataAry as $dataItem){
                $keiken = $this->Keikens->newEntity();
                $keikenData['to_time'] = $dataItem[0];
                $keikenData['from_time'] = $dataItem[1];
                $keikenData['company'] = $dataItem[2];
                $keikenData['job'] = $dataItem[3];
                $keikenData['members_id'] = $this->request->session()->read('Member.id');
                $keiken = $this->Keikens->patchEntity($keiken, $keikenData);
                if ($this->Keikens->save($keiken)) {
                    $returnVal['status'] = 1;
                }else{
                    $returnVal['status'] = 0;
                }
            }
            echo json_encode($returnVal);die;
        }
        $this->set(compact('keiken'));
        $this->set('_serialize', ['keiken']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Keiken id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $keiken = $this->Keikens->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $keiken = $this->Keikens->patchEntity($keiken, $this->request->getData());
            if ($this->Keikens->save($keiken)) {
                $this->Flash->success(__('The keiken has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The keiken could not be saved. Please, try again.'));
        }
        $this->set(compact('keiken'));
        $this->set('_serialize', ['keiken']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Keiken id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $keiken = $this->Keikens->get($id);
        if ($this->Keikens->delete($keiken)) {
            $this->Flash->success(__('The keiken has been deleted.'));
        } else {
            $this->Flash->error(__('The keiken could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
