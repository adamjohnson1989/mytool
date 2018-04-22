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
class ContactsController  extends AppController
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
    public function display()
    {

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

    }

}
