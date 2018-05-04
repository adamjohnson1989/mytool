<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Newest cell
 */
class NewestCell extends Cell
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
            ->where(['News.status' => 1])
            ->order(['News.id' => 'DESC'])->limit(8);
        $this->set('news', $result->toArray());
    }
}
