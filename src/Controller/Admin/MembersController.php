<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AdminController;
use Cake\Event\Event;
use PhpOffice\PhpWord\PhpWord;
use PhpOffice\PhpWord\Shared\Converter;
use PhpOffice\PhpWord\Style\TablePosition;
use PhpOffice\PhpWord\Style\Image;
use PhpOffice\PhpWord\Style\Table;
use \PhpOffice\PhpWord\Shared\Html;
//require_once (ROOT . DS . 'vendor' . DS . 'mpdf' . DS .  'mpdf.php');
//use mPDF;

/**
 * Members Controller
 *
 * @property \App\Model\Table\MembersTable $Members
 *
 * @method \App\Model\Entity\Member[] paginate($object = null, array $settings = [])
 */
class MembersController extends AdminController
{
    public function beforeRender(Event $event)
    {
        parent::beforeRender($event); // TODO: Change the autogenerated stub
        if($this->request->getParam('action') == 'gakureki'){
            $this->viewBuilder()->layout('ajax');
        }else{
            $this->viewBuilder()->layout('member');
        }

    }
    /**
     * Index method
     *
     * @return \Cake\Http\Response|void
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Companys']
        ];
        $members = $this->paginate($this->Members);

        $this->set(compact('members'));
        $this->set('_serialize', ['members']);
    }

    /**
     * View method
     *
     * @param string|null $id Member id.
     * @return \Cake\Http\Response|void
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $member = $this->Members->get($id, [
            'contain' => ['Companys']
        ]);
        switch ($member->kekkon) {
            case 1:
                $member->kekkon = KEKKON_1;
                break;
            case 2:
                $member->kekkon = KEKKON_2;
                break;
            default:
                $member->kekkon = KEKKON_0;
                break;
        }
        switch ($member->ketsueki) {
            case 1:
                $member->ketsueki = KETSUEKI_1;
                break;
            case 2:
                $member->ketsueki = KETSUEKI_2;
                break;
            case 3:
                $member->ketsueki = KETSUEKI_3;
                break;
            default:
                $member->ketsueki = KETSUEKI_0;
                break;
        }
        $this->set('member', $member);
        $this->set('_serialize', ['member']);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $member = $this->Members->newEntity();
        if ($this->request->is('post')) {
            $reVal = ['status' => 0];
            $dataAry = $this->request->getData();
            if(isset($dataAry['action1'])){
                unset($dataAry['action1']);
            }
            /*Begin Upload file*/
            /*Check if exist image then upload*/
            if($dataAry['image']['error'] == 0){
                $imgInfo = $dataAry['image'];
                $imgUploadedAry = $this->upload($imgInfo,640,480,'member');
                unset($dataAry['image']);
                $dataAry['image'] = isset($imgUploadedAry['imgPath']) ? $imgUploadedAry['imgPath'] : '';
            }
            /*End Upload file*/
            $member = $this->Members->patchEntity($member, $dataAry);
            if ($obj = $this->Members->save($member)) {
                $this->request->session()->write('Member.id', $obj->id);
                $reVal['status'] = 1;
                $reVal['msg'] = 'Thông tin cơ bản của ứng viên đã được tạo';
            }else{
                $reVal['status'] = 0;
                $reVal['msg'] = 'Thông tin cơ bản của ứng viên chưa đúng. Hãy kiểm tra lại';
            }
            echo json_encode($reVal);
            die;
        }
        $companys = $this->Members->Companys->find('list', ['limit' => 200]);
        $this->set(compact('member', 'companys'));
        $this->set('_serialize', ['member']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Member id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $member = $this->Members->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $member = $this->Members->patchEntity($member, $this->request->getData());
            if ($this->Members->save($member)) {
                $this->Flash->success(__('The member has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The member could not be saved. Please, try again.'));
        }
        $companys = $this->Members->Companys->find('list', ['limit' => 200]);
        $this->set(compact('member', 'companys'));
        $this->set('_serialize', ['member']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Member id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $member = $this->Members->get($id);
        if ($this->Members->delete($member)) {
            $this->Flash->success(__('The member has been deleted.'));
        } else {
            $this->Flash->error(__('The member could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function gakureki(){
        $gakurekiAry = $this->request->getData('gakureki');
        $this->set(compact('gakurekiAry'));
        $this->set('_serialize', ['gakurekiAry']);
    }
}
