<?php
namespace App\View\Helper;
use Cake\View\Helper;
use Cake\View\View;

class UploadHelper extends Helper
{
    public $fileArr = [];
    public $resizeWidth;
    public $resizeHeight;
    public $folderUp;

    public function __construct($fileData,$resize_with=Null,$resize_height=Null,$folderUpload=Null)
    {
        $this->fileArr = $fileData;
        $this->resizeWidth = $resize_with ? $resize_with : 720;
        $this->resizeHeight= $resize_height ? $resize_height : 487;
        $this->folderUp = $folderUpload != null ? $folderUpload : 'default';
    }
    /*Resize image */
    public function resizeImage($resourceType,$image_width,$image_height) {
        $imageLayer = imagecreatetruecolor($this->resizeWidth,$this->resizeHeight);
        imagecopyresampled($imageLayer,$resourceType,0,0,0,0,$this->resizeWidth,$this->resizeHeight, $image_width,$image_height);
        return $imageLayer;
    }

    /*Upload image*/
    public function upload()
    {
        $returnVal = ['status' => 0, 'imgPath' => ''];
        if(is_array($this->fileArr)) {
            $fileName = $this->fileArr['tmp_name'];
            $sourceProperties = getimagesize($fileName);
            $resizeFileName = time();
            $uploadPath = "uploads" . DS . $this->folderUp . DS;


            if (!file_exists(WWW_ROOT .$uploadPath)) {
                mkdir(WWW_ROOT .$uploadPath, 0777, true);
            }
            $fileExt = pathinfo($this->fileArr['name'], PATHINFO_EXTENSION);
            $uploadImageType = $sourceProperties[2];
            $sourceImageWidth = $sourceProperties[0];
            $sourceImageHeight = $sourceProperties[1];
            $newFilePath = WWW_ROOT . $uploadPath. $resizeFileName. ".". $fileExt;
            switch ($uploadImageType) {
                case IMAGETYPE_JPEG:
                    $resourceType = imagecreatefromjpeg($fileName);
                    $imageLayer = $this->resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight);
                    imagejpeg($imageLayer,$newFilePath);
                    break;

                case IMAGETYPE_GIF:
                    $resourceType = imagecreatefromgif($fileName);
                    $imageLayer = $this->resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight);
                    imagegif($imageLayer,$newFilePath);
                    break;

                case IMAGETYPE_PNG:
                    $resourceType = imagecreatefrompng($fileName);
                    $imageLayer = $this->resizeImage($resourceType,$sourceImageWidth,$sourceImageHeight);
                    imagepng($imageLayer,$newFilePath);
                    break;

                default:
                    $returnVal['status'] = 0;
                    break;
            }

            $upVal = move_uploaded_file($fileName, $newFilePath);
            if($upVal){
                $returnVal['status'] = 1;
                $returnVal['imgPath'] = DS . $uploadPath. $resizeFileName. ".". $fileExt;
            }
        }
        return $returnVal;
    }
}