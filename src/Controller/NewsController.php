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
class NewsController extends AppController
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
        $catUrl = $this->request->param('slug');
        $this->paginate = [
            'contain' => ['Categories'],
            'limit'   => ITEM_PER_PAGE_FRONTEND
        ];
        $query = $this->News->find('all',['contain' => ['Categories']])
            ->select(['id', 'name','thumb','short_desc','url','created_at'])
            ->where(['News.status' => 1,'Categories.url' => $param])
            ->order(['News.id' => 'DESC']);
        $news = $this->paginate($query);
        $this->set(compact('news'));
        $this->set('_serialize', ['news']);
        $this->set('category_url',$param);
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
        $new = $this->News->get($id, [
            'contain' => ['Categories']
        ]);
        $this->set('new', $new);
        $this->set('_serialize', ['new']);
    }

}
