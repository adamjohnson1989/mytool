<?php
namespace App\View\Cell;

use Cake\View\Cell;

/**
 * Recruitment cell
 */
class RecruitmentCell extends Cell
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
        $this->loadModel('Recruitments');
        $result = $this->Recruitments->find()->order(['id' => 'DESC'])->limit(10);
        $dataArr = ['tts' => [], 'ks' => []];
        foreach ($result->toArray() as $item){
            if($item['type'] == 0){
                $dataArr['tts'][] = $item;
            }else{
                $dataArr['ks'][] = $item;
            }
        }
        $this->set('recruitmentAry', $dataArr);
    }
}
