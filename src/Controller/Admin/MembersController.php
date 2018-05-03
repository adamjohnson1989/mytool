<?php
namespace App\Controller\Admin;

use App\Controller\Admin\AdminController;
use Cake\Event\Event;
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
        $this->viewBuilder()->layout('member');
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
        if ($this->request->is('ajax')) {
            $reVal = ['status' => 0];
            $dataAry = $this->request->getData();
            if(isset($dataAry['action1'])){
                unset($dataAry['action1']);
            }
            /*Begin Upload file*/
                $imgInfo = $dataAry['image'];
                $imgUploadedAry = $this->upload($imgInfo,640,480,'member');
                unset($dataAry['image']);
                $dataAry['image'] = isset($imgUploadedAry['imgPath']) ? $imgUploadedAry['imgPath'] : '';
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

    public function createHtml()
    {
        ob_end_clean();
        ob_start();
        $mpdf=new mPDF();
        $mpdf->SetDisplayMode('fullpage');
        // LOAD a stylesheet
        $stylesheet = file_get_contents(WWW_ROOT . 'css' . DS . 'bootstrap' . DS . 'bootstrap.css' );
        $mpdf->WriteHTML($stylesheet,1);
        $html = '
        <div class="row">
    <div class="info" id="info">
        <div class="col-md-9">
            <div class="portlet-body flip-scroll">
                <table class="table table-bordered table-striped table-condensed flip-content">
                    <tbody>
                    <tr>
                        <td colspan="3">
                            ふりがな：<span>グエン・ティ・ノン</span>
                        </td>
                    </tr>
                    <tr>
                        <td colspan="3">
                            氏名：<span>NGUYEN THI NONG</span>
                        </td>
                    </tr>
                    <tr>
                        <td width="60%">
                            生年月日：<span>1997年08月28日</span>
                        </td>
                        <td colspan="2">
                            19歳
                        </td>
                    </tr>
                    <tr>
                        <td colspan="2" width="75%">
                            連絡先　：</br>
                            BA RIA VUNG TAU – LONG DIEN – LONG HAI
                        </td>
                        <td>
                            配偶者の有無 </br>
                            無
                        </td>
                    </tr>
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col-md-3 text-right" style="padding-right: 0px">
            <img src="/img/profile_user.jpg" alt="" width="100" height="135">
        </div>
    </div>
    <div id="gakureki">
        <div class="portlet-body flip-scroll">
            <table class="table table-bordered table-striped table-condensed flip-content">
                <thead class="flip-content">
                <tr>
                    <th width="12.5%">
                        年月
                    </th>
                    <th width="12.5%">
                        年月
                    </th>
                    <th>
                        学歴
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        2012-09
                    </td>
                    <td>
                        2015-06
                    </td>
                    <td>
                        BA RIA VUNG TAU 継続教育センター
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        留年の有無：無
                    </td>
                </tr>
                <tr>
                    <td colspan="3">
                        日本長期滞在資格ビザ取得の有無・ビザの内容：無
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="shokureki">
        <div class="portlet-body flip-scroll">
            <table class="table table-bordered table-striped table-condensed flip-content">
                <thead class="flip-content">
                <tr>
                    <th width="12.5%">
                        年月
                    </th>
                    <th width="12.5%">
                        年月
                    </th>
                    <th>
                        職歴
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>
                        2015-07
                    </td>
                    <td>
                        2016-06
                    </td>
                    <td>
                        UY VIET 靴製造有限会社・革靴縫製
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="menkyo">
        <div class="portlet-body flip-scroll">
            <table class="table table-bordered table-striped table-condensed flip-content">
                <thead class="flip-content">
                <tr>
                    <th width="12.5%">
                        年月
                    </th>
                    <th width="12.5%">
                        年月
                    </th>
                    <th>
                        他の免許・資格
                    </th>
                </tr>
                </thead>
                <tbody>
                <tr>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>
                        無
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="kazoku">
        <div class="portlet-body flip-scroll">
            <table class="table table-bordered table-striped table-condensed flip-content">
                <tbody>
                <tr>
                    <td>
                        家族氏名
                    </td>
                    <td>
                        続柄
                    </td>
                    <td>
                        年齢
                    </td>
                    <td>
                        職業
                    </td>
                    <td rowspan="2">
                        在日親戚 : 無 </br>
                        続柄 　　：
                    </td>
                </tr>
                <tr>
                    <td>
                        NGUYEN TAN THANH
                    </td>
                    <td>
                        父
                    </td>
                    <td>
                        他界
                    </td>
                    <td>
                        商売
                    </td>
                </tr>
                <tr>
                    <td>
                        NGUYEN THI LIEN
                    </td>
                    <td>
                        母
                    </td>
                    <td>
                        44
                    </td>
                    <td>
                        工員
                    </td>
                    <td rowspan="2">
                        使用教科書: みなの日本語 </br>
                        学習期間:　3ヶ月 </br>
                        既習課  :　第5課 </br>
                    </td>
                </tr>
                <tr>
                    <td>
                        NGUYEN THI LIEN
                    </td>
                    <td>
                        母
                    </td>
                    <td>
                        44
                    </td>
                    <td>
                        工員
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="keikaku">
        <div class="portlet-body flip-scroll">
            <table class="table table-bordered table-striped table-condensed flip-content">
                <tbody>
                    <tr>
                        <td width="50%">
                            得意な科目・分野：</br>
                            革靴縫製。
                        </td>
                        <td colspan="2">
                            自覚している性格 : </br>
                            明るくて、素早くて、勤勉な人です。
                        </td>
                    </tr>
                    <tr>
                        <td rowspan="2">
                            志望動機：</br>
                            家族のためにお金を稼ぎたいです。
                        </td>
                        <td>
                            血液型：B
                        </td>
                        <td>
                            家族の収入：4万円/月
                        </td>
                    </tr>
                    <tr>
                        <td>
                            IQ：　80/100
                        </td>
                        <td>
                            クレぺリン検査:　B
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <div id="">
        <div class="portlet-body flip-scroll">
            <table class="table table-bordered table-striped table-condensed flip-content">
                <tbody>
                <tr>
                    <td width="50%">
                        視力:  右  2.0      左  2.0         色盲: 無
                    </td>
                    <td>
                        利き手  :　右
                    </td>
                </tr>
                <tr>
                    <td>
                        身長 : 158 センチ
                    </td>
                    <td>
                        体　重  : 50キロ
                    </td>
                </tr>
                <tr>
                    <td>
                        喫煙の有無: 無
                    </td>
                    <td>
                        飲酒の有無：無
                    </td>
                </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
        ';
        $mpdf->WriteHTML($html,2);
        $mpdf->Output('myfile');
        ob_end_flush();
        exit;
    }
}
