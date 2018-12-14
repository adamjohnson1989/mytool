<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * New cell
 */
class GakureikiCell extends Cell
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
    public function display($memberId)
    {
        $this->loadModel('Benkyos');
        $result = $this->Benkyos->find('all')
            ->where(['Benkyos.members_id' => $memberId])
            ->order(['Benkyos.id' => 'ASC']);
        $this->set('benkyos', $result->toArray());
    }

    public function keiken($memberId)
    {
        $this->loadModel('Keikens');
        $result = $this->Keikens->find('all')
            ->where(['Keikens.members_id' => $memberId])
            ->order(['Keikens.id' => 'ASC']);
        $this->set('keikens', $result->toArray());
    }

    public function kazoku($memberId)
    {
        $this->loadModel('News');
        $result = $this->News->find('all',['contain' => ['Categories']])
            ->where(['News.status' => 1])
            ->order(['News.id' => 'DESC'])->limit(8);
        $this->set('news', $result->toArray());
    }
}
