<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * New cell
 */
class NewCell extends Cell
{

    /**
     * List of valid options that can be passed into this
     * cell's constructor.
     *
     * @var array
     */
    protected $_validCellOptions = [];

    /**
     * Default display method.
     *
     * @return void
     */
    public function display()
    {
        $this->loadModel('News');
        $result = $this->News->find('all',['contain' => ['Categories']])
            ->select(['id', 'name','thumb','short_desc'])
            ->where(['News.status' => 1,'Categories.url' => URL_TIN_TUC])
            ->order(['News.id' => 'DESC'])->limit(10);
        $this->set('news', $result->toArray());
    }

    public function show($param)
    {
        $this->loadModel('News');
        $result = $this->News->find('all',['contain' => ['Categories']])
            ->select(['id', 'name','thumb','short_desc','url'])
            ->where(['News.status' => 1,'Categories.url' => $param])
            ->order(['News.id' => 'DESC'])->limit(11);
        $this->set('news', $result->toArray());
        $this->set('category_url',$param);
    }
}
