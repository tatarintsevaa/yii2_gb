<?php

namespace app\models;

use yii\web\UploadedFile;

class EventForm extends Event
{
    public $imageFiles;

    public function rules()
    {
        return array_merge(parent::rules(), [
            ['imageFiles', 'file', 'skipOnEmpty' => false, 'extensions' => 'png, jpg',  'maxFiles' => 4]
        ]);
    }

    public function upload()
    {
        if ($this->validate()) {
            foreach ($this->imageFiles as $file) {
                $file->saveAs('uploads/' . $file->baseName . '.' . $file->extension);
            }
            return true;
        } else {
            return false;
        }
    }


}