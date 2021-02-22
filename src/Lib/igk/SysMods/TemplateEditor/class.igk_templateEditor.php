<?php
// @file: class.igk_templateEditor.php
// @author: C.A.D. BONDJE DOUE
// @description: 
// @copyright: igkdev © 2020
// @license: Microsoft MIT License. For more information read license.txt
// @company: IGKDEV
// @mail: bondje.doue@igkdev.com
// @url: https://www.igkdev.com

///<summary>Use to edit a template</summary>
/**
* Use to edit a template
*/
final class IGKTemplateEditor extends IGKControllerBase{
    ///<summary>Represente __construct function</summary>
    /**
    * Represente __construct function
    */
    public function __construct(){
        parent::__construct();
    }
    ///<summary>cancel edition of the controller</summary>
    /**
    * cancel edition of the controller
    */
    public function Cancel($ctrl){}
    ///<summary>call this function edit a controller</summary>
    /**
    * call this function edit a controller
    */
    public function Edit($ctrl){
        if(!$this->can_edit($ctrl)){
            return;};
    }
    ///<summary>get tempory folder</summary>
    /**
    * get tempory folder
    */
    public function getTempFolder(){
        return $this->getDeclaredDir()."/temp";
    }
}
