<?php
namespace App\Controller;

use App\Controller\AppController;
use Cake\Core\Configure;
use Cake\Event\Event;
/**
 * Recruitments Controller
 *
 * @property \App\Model\Table\RecruitmentsTable $Recruitments
 *
 * @method \App\Model\Entity\Recruitment[] paginate($object = null, array $settings = [])
 */
class RecruitmentsController extends AppController
{
    public function beforeRender(Event $event)
    {
        parent::beforeRender($event);
        $this->viewBuilder()->setLayout('frontend');
    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function display($param)
    {
        $condition = $param == 'thuc-tap-sinh' ? Configure::read('TTS') : Configure::read('KS');
        $this->paginate = [
            'contain' => ['Users'],
            'limit'   => 1,
            'order'   => ['id' => 'desc'],
            'conditions' => ['type' => $condition]
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

}
