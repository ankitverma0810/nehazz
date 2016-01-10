<?php
class AttachableBehavior extends ModelBehavior {    
    public $_defaults = array('label' => 'filename', //attachment field name in the form//
                              'errorMessages' => array('isUploaded' => 'Malicious file upload.', 'moveUploaded' => 'Error moving file upload.', 'isValidType' => 'Invalid file type. Please check your file type and try again.', 'isValidSize' => 'Invalid file size. Please check your file size and try again.'),
                              'thumbQuality' => 80, 'maxSize' => '2048576', 
                              //database fields name//
                              'fields' => array('filename' => 'filename'),
                              'types' => array('image/jpeg' => 'jpg', 'image/pjpeg' => 'jpg', 'image/png' => 'png', 'image/gif' => 'gif'));
    
    public $_validThumbTypes = array('image/jpeg', 'image/pjpeg', 'image/png', 'image/gif');
    public $_attachmentRoot = null;
    public $_errorMsg = "Error uploading file";
    public $settings = array();
    public $model = null;    
    
    public function setup(Model $model, $config = array()) {
        $this->settings[$model->name] = array_merge($this->_defaults, $this->settings, $model->settings);
        $this->model                  = $model;
        $this->_attachmentRoot        = WWW_ROOT . str_replace(array(
            '/',
            '\\'
        ), array(
            DS,
            DS
        ), $this->settings[$model->name]['location']) . DS;
    }
    
    public function beforeSave(Model $model, $options = array()) {
        if(isset($model->data[$model->name][$this->settings[$model->name]['label']])){
            extract($this->settings[$model->name]);
            $attachment = $model->data[$model->name][$label];     
            if (!empty($attachment['name'])) {
                //====defining names for our database columns and also giving unique name for each attachment====//
                $model->data[$model->name][$fields['filename']] = ($this->_fileExists($this->_attachmentRoot . $attachment['name'])) ? time() . '_' . $attachment['name'] : $attachment['name'];
                
                //====checking all the conditions before uploading and saving====//
                if (!$this->_isUploaded($attachment) || !$this->_isValidSize($attachment['size']) || !$this->_isValidType($attachment) || !$this->_dirExists($this->_attachmentRoot) || !$this->_moveUploaded($attachment['tmp_name'], $model->data[$model->name][$fields['filename']])) {
                    $model->validationErrors[$label] = $this->_errorMsg;
                    return false;
                }
                
                //====if the file type is image/jpeg====//
                if (in_array($attachment['type'], $this->_validThumbTypes)) {
                    list($width, $height) = getimagesize($this->_attachmentRoot . $model->data[$model->name][$fields['filename']]);
                    if (isset($this->settings[$model->name]['thumbnails'])) {
                        //====resizing the images and saving them to different location====//
                        foreach ($this->settings[$model->name]['thumbnails'] as $dir => $size) {
                            list($width, $height) = explode('x', strtolower($size));
                            if ($this->_dirExists($this->_attachmentRoot . $dir)) {
                                $this->_resizeToThumb($model->data[$model->name][$fields['filename']], $dir, $width, $height);
                            }
                        }
                    }
                }
            } else {
                if($model->id > 0){
                    $record = $model->findById($model->id);
                    if(!empty($record[$model->name][$fields['filename']])) {
                        $model->data[$model->name][$fields['filename']] = $record[$model->name][$fields['filename']];
                    } else {
                        $model->data[$model->name][$fields['filename']] = '';
                    }
                } else {
                    $model->data[$model->name][$fields['filename']] = '';
                }
            }
        }
        return true;
    }
    
    //====if your are deleting a post and wants to delete images related to it====//
    public function beforeDelete(Model $model, $cascade = true) {
        $model->read(null, $model->id);
        $this->_deleteAttachments($model, $model->data[$model->name]['filename']);
        return true;
    }
    
    protected function _moveUploaded($tmpName, $attachmentName) {
        if (move_uploaded_file($tmpName, $this->_attachmentRoot . $attachmentName)) {
            return true;
        }
        $this->_errorMsg = $this->settings[$this->model->name]['errorMessages']['moveUploaded'];
        return false;
    }
    
    protected function _isUploaded($attachment) {
        if (isset($attachment['error']) && $attachment['error'] == 0 || !empty($attachment['tmp_name']) && $attachment['tmp_name'] != 'none') {
            return is_uploaded_file($attachment['tmp_name']);
        }
        $this->_errorMsg = $this->settings[$this->model->name]['errorMessages']['isUploaded'];
        return false;
    }
    
    protected function _isValidType($attachment) {
        $ext = substr($attachment['name'], strrpos($attachment['name'], '.') + 1);
        if (isset($this->settings[$this->model->name]['types'][$attachment['type']]) && $ext == $this->settings[$this->model->name]['types'][$attachment['type']]) {
            return true;
        }
        $this->_errorMsg = $this->settings[$this->model->name]['errorMessages']['isValidType'];
        return false;
    }
    
    protected function _isValidSize($size) {
        if ($size == 0)
            return false;
        
        if ($size <= $this->settings[$this->model->name]['maxSize']) {
            return true;
        }
        $this->_errorMsg = $this->settings[$this->model->name]['errorMessages']['isValidSize'];
        return false;
    }
    
    protected function _dirExists($dir) {
        if (!file_exists($dir)) {
            trigger_error(__("AttachableBehavior Error - Please create '{$dir}' directory and set permissions for uploading.", true), E_USER_WARNING);
            return false;
        }
        return true;
    }
    
    protected function _fileExists($file) {
        if (file_exists($file)) {
            return true;
        }
        return false;
    }
    
    protected function _deleteFile($file) {
        if (file_exists($file)) {
            return unlink($file);
        }
        return false;
    }
    
    protected function _deleteAttachments($model, $attachment) {
        //==========adding by ankit==========//
        $this->_attachmentRoot = WWW_ROOT . str_replace(array(
            '/',
            '\\'
        ), array(
            DS,
            DS
        ), $model->settings['location']) . DS;
        //======//
        $this->_deleteFile($this->_attachmentRoot . $attachment);
        if (isset($this->settings[$this->model->name]['thumbnails'])) {
            foreach ($this->settings[$this->model->name]['thumbnails'] as $dir => $size) {
                if ($this->_fileExists($this->_attachmentRoot . $dir . DS . $attachment)) {
                    $this->_deleteFile($this->_attachmentRoot . $dir . DS . $attachment);
                }
            }
        }
    }
    
    protected function _resizeToThumb($imgName, $dir, $canvasWidth, $canvasHeight) {
        $img = $this->_attachmentRoot . $imgName;
        list($imgWidth, $imgHeight) = getimagesize($img);
        $ratioOrig = $imgWidth / $imgHeight;
        if (($canvasWidth / $canvasHeight) > $ratioOrig) {
            $canvasWidth = $canvasHeight * $ratioOrig;
        } else {
            $canvasHeight = $canvasWidth / $ratioOrig;
        }
        $original = imagecreatefromjpeg($img);
        $canvas   = imagecreatetruecolor($canvasWidth, $canvasHeight);
        imagecopyresampled($canvas, $original, 0, 0, 0, 0, $canvasWidth, $canvasHeight, $imgWidth, $imgHeight);
        $createJpg = imagejpeg($canvas, $this->_attachmentRoot . $dir . DS . $imgName, $this->settings[$this->model->name]['thumbQuality']);
        imagedestroy($canvas);
        imagedestroy($original);
        if ($createJpg) {
            return true;
        }
        return false;
    }   
}
?>