<?php
// author: C.A.D. BONDJE DOUE
// licence: IGKDEV - Balafon @ 2019
// desc: gd utility class

///<summary>Represente igk_gd_resize_proportional function</summary>
///<param name="src"></param>
///<param name="w"></param>
///<param name="h"></param>
///<param name="type" default="1"></param>
///<param name="compression"></param>
/**
* Represente igk_gd_resize_proportional function
* @param  $src
* @param  $w
* @param  $h
* @param  $type the default value is 1
* @param  $compression the default value is 0
*/
function igk_gd_resize_proportional($src, $w, $h, $type=1, $compression=0){
    $ih=imagecreatefromstring($src);
    $W=imagesx($ih);
    $H=imagesy($ih);
    $ow=$w;
    $oh=$h;
    $ex=$w/ $W;
    $ey=$h/ $H;
    $ex=min($ex, $ey);
    $x=(( - $W * $ex) + $w)/2.0;
    $y=(( - $H * $ex) + $h)/2.0;
    $img=imagecreatetruecolor($w, $h);
    $black=imagecolorallocate($img, 0, 0, 0);
    imagecolortransparent($img, $black);
    $sh=imagescale($ih, ceil($ex * $W), ceil($ex * $H));
    imagecopy($img, $sh, $x, $y, 0, 0, $w, $h);
    $g=igk_ob_get_func(function($t) use ($img, $compression){
        if($t == 1){
            imagepng($img, null, $compression);
        }
        else{
            imagejpeg($img, null, $compression);
        }
    }
    , array($type, $compression));
    imagedestroy($sh);
    imagedestroy($ih);
    imagedestroy($img);
    return $g;
}
///<summary>Represente class: IGKGD</summary>
/**
* Represente IGKGD class
*/
class IGKGD {
    private $m_height;
    private $m_himg;
    private $m_width;
    ///<summary>Represente __construct function</summary>
    ///<param name="w"></param>
    ///<param name="h"></param>
    ///<param name="himg"></param>
    /**
    * Represente __construct function
    * @param  $w
    * @param  $h
    * @param  $himg
    */
    private function __construct($w, $h, $himg){
        $this->m_width=$w;
        $this->m_height=$h;
        $this->m_himg=$himg;
    }
    ///<summary>Represente _createColor function</summary>
    ///<param name="color"></param>
    /**
    * Represente _createColor function
    * @param  $color
    */
    private function _createColor($color){
        $hcl=null;
        if(is_object($color))
            $hcl=imagecolorallocate($this->m_himg, $color->R, $color->G, $color->B);
        return $hcl;
    }
    ///<summary>Represente Clear function</summary>
    ///<param name="color"></param>
    /**
    * Represente Clear function
    * @param  $color
    */
    public function Clear($color){
        $hcl=imagecolorallocate($this->m_himg, $color->R, $color->G, $color->B);
        imagefill($this->m_himg, 0, 0, $hcl);
        imagecolordeallocate($this->m_himg, $hcl);
    }
    ///<summary>Represente Clearf function</summary>
    ///<param name="color"></param>
    /**
    * Represente Clearf function
    * @param  $color
    */
    public function Clearf($color){
        if(is_string($color) && !empty($color)){
            $color=IGKColorf::FromString($color);
        }
        $this->Clear((object)array(
            "R"=>$color->R * 255,
            "G"=>$color->G * 255,
            "B"=>$color->B * 255
        ));
    }
    ///<summary>Represente Clearw function</summary>
    ///<param name="webcolor"></param>
    /**
    * Represente Clearw function
    * @param  $webcolor
    */
    public function Clearw($webcolor){
        $this->Clearf(IGKColorf::FromString($webcolor));
    }
    ///<summary>Represente Create function</summary>
    ///<param name="imgwidth"></param>
    ///<param name="imgheight"></param>
    /**
    * Represente Create function
    * @param  $imgwidth
    * @param  $imgheight
    */
    public static function Create($imgwidth, $imgheight){
        $v_img=imagecreatetruecolor($imgwidth, $imgheight);
        if(is_resource($v_img)){
            return new IGKGD($imgwidth, $imgheight, $v_img);
        }
        return null;
    }
    ///<summary>Represente Dispose function</summary>
    /**
    * Represente Dispose function
    */
    public function Dispose(){
        imagedestroy($this->m_himg);
    }
    ///<summary>Represente DrawEllipse function</summary>
    ///<param name="color"></param>
    ///<param name="center"></param>
    ///<param name="radius"></param>
    /**
    * Represente DrawEllipse function
    * @param  $color
    * @param  $center
    * @param  $radius
    */
    public function DrawEllipse($color, $center, $radius){
        $hcl=$this->_createColor($color);
        imageellipse($this->m_himg, $center->X, $center->Y, abs($radius->X * 2.0), abs($radius->Y * 2.0), $hcl);
        imagecolordeallocate($this->m_himg, $hcl);
    }
    ///<summary>Represente DrawImage function</summary>
    ///<param name="himg"></param>
    ///<param name="x"></param>
    ///<param name="y"></param>
    ///<param name="w" default="-1"></param>
    ///<param name="h" default="-1"></param>
    /**
    * Represente DrawImage function
    * @param  $himg
    * @param  $x
    * @param  $y
    * @param  $w the default value is -1
    * @param  $h the default value is -1
    */
    public function DrawImage($himg, $x, $y, $w=-1, $h=-1){
        $rs=(($w == -1) && ($h == -1));
        $w=$w == -1 ? imagesx($himg): $w;
        $h=$h == -1 ? imagesy($himg): $h;
        if(!$rs){
            $img=imagecreatetruecolor($w, $h);
            $sh=imagescale($himg, $w, $h);
            imagecopy($this->m_himg, $sh, $x, $y, 0, 0, $w, $h);
            imagedestroy($img);
            imagedestroy($sh);
        }
        else
            imagecopy($this->m_himg, $himg, $x, $y, 0, 0, $w, $h);
    }
    ///<summary>Represente DrawRectangle function</summary>
    ///<param name="color"></param>
    ///<param name="rect"></param>
    ///<param name="y" default="null"></param>
    ///<param name="width" default="null"></param>
    ///<param name="height" default="null"></param>
    /**
    * Represente DrawRectangle function
    * @param  $color
    * @param  $rect
    * @param  $y the default value is null
    * @param  $width the default value is null
    * @param  $height the default value is null
    */
    public function DrawRectangle($color, $rect, $y=null, $width=null, $height=null){
        if(is_string($color))
            $color=IGKColor::FromString($color);
        if(!is_object($rectx)){
            $rectx=new IGKRectanglef($rectx, $y, $width, $height);
        }
        $hcl=imagecolorallocate($this->m_himg, $color->R, $color->G, $color->B);
        imagerectangle($this->m_himg, $rect->X, $rect->Y, $rect->X + $rect->Width, $rect->y + $rect->Height, $hcl);
        imagecolordeallocate($this->m_himg, $hcl);
    }
    ///<summary>Represente DrawString function</summary>
    ///<param name="string"></param>
    ///<param name="font"></param>
    ///<param name="size"></param>
    ///<param name="x"></param>
    ///<param name="y"></param>
    ///<param name="color"></param>
    /**
    * Represente DrawString function
    * @param  $string
    * @param  $font
    * @param  $size
    * @param  $x
    * @param  $y
    * @param  $color
    */
    public function DrawString($string, $font, $size, $x, $y, $color){
        $hcl=imagecolorallocate($this->m_himg, $color->R, $color->G, $color->B);
        $r=imagefttext($this->m_himg, $size, 0, $x, $y, $hcl, $font, $string);
        imagecolordeallocate($this->m_himg, $hcl);
        return (object)array(
            "x"=>$r[0],
            "y"=>$r[7],
            "width"=>abs($r[0] - $r[4]),
            "height"=>abs($r[5] - $r[1])
        );
    }
    ///<summary>Represente FillEllipse function</summary>
    ///<param name="color"></param>
    ///<param name="center"></param>
    ///<param name="radius"></param>
    /**
    * Represente FillEllipse function
    * @param  $color
    * @param  $center
    * @param  $radius
    */
    public function FillEllipse($color, $center, $radius){
        $hcl=$this->_createColor($color);
        imagefilledellipse($this->m_himg, $center->X, $center->Y, abs($radius->X * 2.0), abs($radius->Y * 2.0), $hcl);
        imagecolordeallocate($this->m_himg, $hcl);
    }
    ///<summary>Represente FillRectangle function</summary>
    ///<param name="color"></param>
    ///<param name="rectx"></param>
    ///<param name="y" default="null"></param>
    ///<param name="width" default="null"></param>
    ///<param name="height" default="null"></param>
    /**
    * Represente FillRectangle function
    * @param  $color
    * @param  $rectx
    * @param  $y the default value is null
    * @param  $width the default value is null
    * @param  $height the default value is null
    */
    public function FillRectangle($color, $rectx, $y=null, $width=null, $height=null){
        if(is_string($color))
            $color=IGKColor::FromString($color);
        if(!is_object($rectx)){
            $rectx=new IGKRectanglef($rectx, $y, $width, $height);
        }
        $hcl=imagecolorallocate($this->m_himg, $color->R, $color->G, $color->B);
        imagefilledrectangle($this->m_himg, $rectx->X, $rectx->Y, $rectx->X + $rectx->Width, $rectx->Y + $rectx->Height, $hcl);
        imagecolordeallocate($this->m_himg, $hcl);
    }
    ///<summary>Represente FromGd function</summary>
    ///<param name="himg"></param>
    /**
    * Represente FromGd function
    * @param  $himg
    */
    public static function FromGd($himg){
        return new IGKGD(imagesx($himg), imagesy($himg), $himg);
    }
    ///<summary>Represente Render function</summary>
    /**
    * Represente Render function
    */
    public function Render(){
        return imagepng($this->m_himg);
    }
    ///<summary>Represente RenderText function</summary>
    /**
    * Represente RenderText function
    */
    public function RenderText(){
        IGKOb::Start();
        $this->Render();
        $c=IGKOb::Content();
        IGKOb::Clear();
        return $c;
    }
}
if(!extension_loaded("gd")){
    if(!function_exists("dl") || !@dl("gd.so")){
        return;}
}
define("IGK_GD_SUPPORT", 1);