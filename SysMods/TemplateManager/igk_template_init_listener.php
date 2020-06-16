<?php
// @file: igk_template_init_listener.php
// @author: C.A.D. BONDJE DOUE
// @description: 
// @copyright: igkdev © 2020
// @license: Microsoft MIT License. For more information read license.txt
// @company: IGKDEV
// @mail: bondje.doue@igkdev.com
// @url: https://www.igkdev.com

///<summary>Represente class: igk_template_init_listener</summary>
/**
* Represente igk_template_init_listener class
*/
class igk_template_init_listener implements IIGKControllerInitListener{
    private $m_zip;
    ///<summary>Represente __construct function</summary>
    ///<param name="zip"></param>
    /**
    * Represente __construct function
    * @param  $zip
    */
    public function __construct($zip){
        $this->m_zip=$zip;
    }
    ///<summary>Represente addDir function</summary>
    ///<param name="dir"></param>
    /**
    * Represente addDir function
    * @param  $dir
    */
    public function addDir($dir){
        $this->m_zip->addEmptyDir("src/".$dir);
    }
    ///<summary>Represente addSource function</summary>
    ///<param name="name"></param>
    ///<param name="content"></param>
    /**
    * Represente addSource function
    * @param  $name
    * @param  $content
    */
    public function addSource($name, $content){
        $this->m_zip->addFromString("src/".$name, $content);
    }
}
?>