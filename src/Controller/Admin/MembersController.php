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
        $this->set('kokyoAry', $this->getKokyoAry());
        $this->set('shuumiAry', $this->getShuumisAry());
        $this->set('seikakuAry', $this->getSeikakusAry());
        $this->set('rainichimokutekiAry', $this->getRainichimokutekisAry());
        $this->set('kikokukibouAry', $this->getKikokukibousAry());
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

    public function printCv(){
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        //set font
        $phpWord->setDefaultFontName('Times New Roman');
        $phpWord->setDefaultFontSize(12);
        $section = $phpWord->addSection();
        //set margin page
        $sectionStyle = $section->getStyle();
        $sectionStyle->setMarginLeft(\PhpOffice\PhpWord\Shared\Converter::cmToTwip(1));
        $sectionStyle->setMarginRight(\PhpOffice\PhpWord\Shared\Converter::cmToTwip(1));

        //set default style
        $tableStyle = array(
            'borderColor' => 'FFFFFF',
            'borderSize'  => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(0.5),
            'cellMargin'  => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(0.1) //
        );
        $myTextStyle = array(
            'align' => 'center',
            'lineHeight' => 1.0
        );

        $table = $section->addTable($tableStyle);
        $row = $table->addRow(); //5000 height of block
        $cellRowSpan = array('vMerge' => 'restart', 'valign' => 'center');
        $cellColSpan = array('gridSpan' => 3, 'valign' => 'center');
        //member of basic infomation
        $first_cell = $row->addCell(\PhpOffice\PhpWord\Shared\Converter::cmToTwip(16));
        $innerTable = $first_cell->addTable();

        //add row ふりがな
        $innerRow = $innerTable->addRow(400);
        $innerRow->addCell(\PhpOffice\PhpWord\Shared\Converter::cmToTwip(3),['borderRightColor' => '000000','borderSize' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(0.03)])->addText('ふりがな:',null,['align' => 'left','lineHeight' => 1.0 ]);
        $innerRow->addCell(\PhpOffice\PhpWord\Shared\Converter::cmToTwip(13),$cellColSpan)->addText('ぐえん・べと・そん',null,$myTextStyle);

        //add row
        $innerTable->addRow(400);
        $innerTable->addCell(\PhpOffice\PhpWord\Shared\Converter::cmToTwip(3),['borderRightColor' => '000000','borderSize' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(0.03)])->addText('氏名:',null,['align' => 'left','lineHeight' => 1.0 ]);
        $innerTable->addCell(\PhpOffice\PhpWord\Shared\Converter::cmToTwip(13),$cellColSpan)->addText('Nguyen Viet Son',null,$myTextStyle);

        //add row seinengabi
        $innerTable->addRow(400);
        $innerTable->addCell(\PhpOffice\PhpWord\Shared\Converter::cmToTwip(3),['borderRightColor' => '000000','borderSize' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(0.03)])->addText('生年月日:',null,['align' => 'left','lineHeight' => 1.0 ]);
        $innerTable->addCell(\PhpOffice\PhpWord\Shared\Converter::cmToTwip(6),['borderRightColor' => '000000','borderSize' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(0.03)])->addText('1989年5月10日:',null,$myTextStyle);
        $innerTable->addCell(\PhpOffice\PhpWord\Shared\Converter::cmToTwip(7),['gridSpan' => 2,'valign' => 'center','borderRightColor' => '000000','borderSize' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(0.03)])->addText('三十歳',null,$myTextStyle);

        //add juusho
        $innerTable->addRow(400);
        $innerTable->addCell(\PhpOffice\PhpWord\Shared\Converter::cmToTwip(13),['gridSpan' => 3,'borderRightColor' => '000000','borderSize' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(0.03)])->addText('連絡先:',null,['align' => 'left','lineHeight' => 1.0 ]);
        $innerTable->addCell(\PhpOffice\PhpWord\Shared\Converter::cmToTwip(3),['borderRightColor' => '000000','borderSize' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(0.03)])->addText('配偶者の有無',null,$myTextStyle);
        $innerTable->addRow(400);
        $innerTable->addCell(\PhpOffice\PhpWord\Shared\Converter::cmToTwip(13),['gridSpan' => 3,'borderRightColor' => '000000','borderSize' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(0.03)])->addText('GIA LAI – DAKPU – TAN AN',null,$myTextStyle);
        $innerTable->addCell(\PhpOffice\PhpWord\Shared\Converter::cmToTwip(3),['borderRightColor' => '000000','borderSize' => \PhpOffice\PhpWord\Shared\Converter::cmToTwip(0.03)])->addText('無',null,$myTextStyle);
        //add image
        $second_cell = $row->addCell(\PhpOffice\PhpWord\Shared\Converter::cmToTwip(3));
        $second_cell->addImage('img/profile_user.jpg',['width' => \PhpOffice\PhpWord\Shared\Converter::cmToPoint(3),'height' => \PhpOffice\PhpWord\Shared\Converter::cmToPoint(4)]);

        //save file word
        $objWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $objWriter->save('helloWorld1.docx');
        die('ss');
    }

    public function dload(){
        $phpWord = new \PhpOffice\PhpWord\PhpWord();
        $section = $phpWord->createSection();
        $section->addText('Hello World!');
        $file = 'HelloWorld1.docx';
        header("Content-Description: File Transfer");
        header('Content-Disposition: attachment; filename="' . $file . '"');
        header('Content-Type: application/vnd.openxmlformats-officedocument.wordprocessingml.document');
        header('Content-Transfer-Encoding: binary');
        header('Cache-Control: must-revalidate, post-check=0, pre-check=0');
        header('Expires: 0');
        $xmlWriter = \PhpOffice\PhpWord\IOFactory::createWriter($phpWord, 'Word2007');
        $xmlWriter->save("php://output");
    }

    protected function getKokyoAry(){
        return array('0' => '--- Chọn Nguyên Quán --','1' => 'An Giang',
                     '2' => 'Bà Rịa – Vũng Tàu',
                     '3' => 'Bắc Giang', '4' => 'Bắc Kạn', '5' => 'Bạc Liêu', '6' => 'Bắc Ninh', '7'=> 'Bến Tre',
                     '8' => 'Bình Định', '9' => 'Bình Dương', '10' => 'Bình Phước' , '11' => 'Bình Thuận','12'=> 'Cà Mau',
                     '13'=> 'Cần Thơ', '14' => 'Cao Bằng', '15' => 'Đà Nẵng', '16' => 'Đắk Lắk', '17' => 'Đắk Nông', '18' => 'Điện Biên',
                     '19'=> 'Đồng Nai', '20' => 'Đồng Tháp', '21' => 'Gia Lai', '22' => 'Hà Giang', '23' => 'Hà Nam', '24' => 'Hà Nội',
                     '25'=> 'Hà Tĩnh', '26' => 'Hải Dương', '27' => 'Hải Phòng','28' => 'Hậu Giang', '29' => 'Hòa Bình', '30' => 'Hưng Yên',
                     '31'=> 'Khánh Hòa', '32' => 'Kiên Giang', '33' => 'Kon Tum', '34' => 'Lai Châu', '35' => 'Lâm Đồng', '36' => 'Lạng Sơn',
                     '37'=> 'Lào Cai', '38' => 'Long An', '39' => 'Nam Định', '40' => 'Nghệ An', '41' => 'Ninh Bình', '42' => 'Ninh Thuận',
                     '43'=> 'Phú Thọ', '44'=> 'Phú Yên','45'=> 'Quảng Bình','46' => 'Quảng Nam', '47' => 'Quảng Ngãi', '48' => 'Quảng Ninh',
                     '49'=> 'Quảng Trị','50' => 'Sóc Trăng', '51' => 'Sơn La', '52' => 'Tây Ninh', '53' => 'Thái Bình', '54' => 'Thái Nguyên',
                     '55'=> 'Thanh Hóa','56' => 'Thừa Thiên Huế', '57' => 'Tiền Giang', '58' => 'TP Hồ Chí Minh', '59'=>'Trà Vinh',
                     '60'=> 'Tuyên Quang','61'=>'Vĩnh Long','62'=> 'Vĩnh Phúc', '63' => 'Yên Bái'
                    );
    }

    public function getShuumisAry(){
        $catObj = $this->loadModel('Shuumis');
        $catQuery = $catObj->find('all', [
            'conditions' => ['status' => 1]]);
        $catArr = $catQuery->toArray();
        $catData = array('0'=> '-- Chọn Sở Thích --');
        if(count($catArr)){
            foreach ($catArr as $cat){
                $catData[$cat->id] = $cat->name;
            }
        }
        return $catData;
    }

    public function getSeikakusAry()
    {
        $catObj = $this->loadModel('Seikakus');
        $catQuery = $catObj->find('all', [
            'conditions' => ['status' => 1]]);
        $catArr = $catQuery->toArray();
        $catData = array('0' => '-- Chọn Tính Cách --');
        if (count($catArr)) {
            foreach ($catArr as $cat) {
                $catData[$cat->id] = $cat->name;
            }
        }
        return $catData;
    }

    public function getRainichimokutekisAry()
    {
        $catObj = $this->loadModel('Rainichimokutekis');
        $catQuery = $catObj->find('all', [
            'conditions' => ['status' => 1]]);
        $catArr = $catQuery->toArray();
        $catData = array('0' => '-- Chọn Lý Do Muốn Làm Việc Tại Nhật Bản --');
        if (count($catArr)) {
            foreach ($catArr as $cat) {
                $catData[$cat->id] = $cat->name;
            }
        }
        return $catData;
    }

    public function getKikokukibousAry()
    {
        $catObj = $this->loadModel('Kikokukibous');
        $catQuery = $catObj->find('all', [
            'conditions' => ['status' => 1]]);
        $catArr = $catQuery->toArray();
        $catData = array('0' => '-- Chọn Dự Định Sau Khi Về Nước --');
        if (count($catArr)) {
            foreach ($catArr as $cat) {
                $catData[$cat->id] = $cat->name;
            }
        }
        return $catData;
    }
}
