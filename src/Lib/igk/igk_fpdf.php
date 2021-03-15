<?php
// author: C.A.D. BONDJE DOUE
// licence: IGKDEV - Balafon @ 2019
// desc: fpdf utility class

/** @depends FPDF */

if(!class_exists("FPDF", false)){
    die("fpdf library is required.");
}

///<summary>Represente interface: IIGKPdfPrinter</summary>
/**
* Represente IIGKPdfPrinter interface
*/
interface IIGKPdfPrinter{
    ///<summary>Represente drawRect function</summary>
    ///<param name="x"></param>
    ///<param name="y"></param>
    ///<param name="w"></param>
    ///<param name="h"></param>
    /**
    * Represente drawRect function
    * @param mixed $x
    * @param mixed $y
    * @param mixed $w
    * @param mixed $h
    */
    function drawRect($x, $y, $w, $h);
    ///<summary>Represente drawText function</summary>
    ///<param name="text"></param>
    ///<param name="x"></param>
    ///<param name="y"></param>
    /**
    * Represente drawText function
    * @param mixed $text
    * @param mixed $x
    * @param mixed $y
    */
    function drawText($text, $x, $y);
    ///<summary>Represente fillRect function</summary>
    ///<param name="x"></param>
    ///<param name="y"></param>
    ///<param name="w"></param>
    ///<param name="h"></param>
    /**
    * Represente fillRect function
    * @param mixed $x
    * @param mixed $y
    * @param mixed $w
    * @param mixed $h
    */
    function fillRect($x, $y, $w, $h);
    ///<summary>Represente measureText function</summary>
    ///<param name="text"></param>
    /**
    * Represente measureText function
    * @param mixed $text
    */
    function measureText($text);
}
///<summary> extension of the fpdf data : for drawing curve</summary>
/**
*  extension of the fpdf data : for drawing curve
*/
class IGKFPDF extends FPDF {
    ///<summary>Represente _out function</summary>
    ///<param name="s"></param>
    /**
    * Represente _out function
    * @param mixed $s
    */
    public function _out($s){
        parent::_out($s);
    }
    ///<summary>Represente _putinfo function</summary>
    /**
    * Represente _putinfo function
    */
    function _putinfo(){
        $this->_out('/Producer '.$this->_textstring('IGKWEB '.IGK_VERSION));
        if(!empty($this->title))
            $this->_out('/Title '.$this->_textstring($this->title));
        if(!empty($this->subject))
            $this->_out('/Subject '.$this->_textstring($this->subject));
        if(!empty($this->author))
            $this->_out('/Author '.$this->_textstring($this->author));
        if(!empty($this->keywords))
            $this->_out('/Keywords '.$this->_textstring($this->keywords));
        if(!empty($this->creator))
            $this->_out('/Creator '.$this->_textstring($this->creator));
        $this->_out('/CreationDate '.$this->_textstring('D:'.@date('YmdHis')));
    }
    ///<summary>Represente Curve function</summary>
    ///<param name="x1"></param>
    ///<param name="y1"></param>
    ///<param name="cx1"></param>
    ///<param name="cy1"></param>
    ///<param name="cx2"></param>
    ///<param name="cy2"></param>
    /**
    * Represente Curve function
    * @param mixed $x1
    * @param mixed $y1
    * @param mixed $cx1
    * @param mixed $cy1
    * @param mixed $cx2
    * @param mixed $cy2
    */
    public function Curve($x1, $y1, $cx1, $cy1, $cx2, $cy2){}
    ///<summary>Represente MirrorH function</summary>
    ///<param name="x" default="''"></param>
    /**
    * Represente MirrorH function
    * @param mixed $x the default value is ''
    */
    function MirrorH($x=''){
        $this->Scale(-100, 100, $x);
    }
    ///<summary>Represente MirrorL function</summary>
    ///<param name="angle"></param>
    ///<param name="x" default="''"></param>
    ///<param name="y" default="''"></param>
    /**
    * Represente MirrorL function
    * @param mixed $angle the default value is 0
    * @param mixed $x the default value is ''
    * @param mixed $y the default value is ''
    */
    function MirrorL($angle=0, $x='', $y=''){
        $this->Scale(-100, 100, $x, $y);
        $this->Rotate(-2 * ($angle-90), $x, $y);
    }
    ///<summary>Represente MirrorP function</summary>
    ///<param name="x" default="''"></param>
    ///<param name="y" default="''"></param>
    /**
    * Represente MirrorP function
    * @param mixed $x the default value is ''
    * @param mixed $y the default value is ''
    */
    function MirrorP($x='', $y=''){
        $this->Scale(-100, -100, $x, $y);
    }
    ///<summary>Represente MirrorV function</summary>
    ///<param name="y" default="''"></param>
    /**
    * Represente MirrorV function
    * @param mixed $y the default value is ''
    */
    function MirrorV($y=''){
        $this->Scale(100, -100, '', $y);
    }
    ///<summary>Represente renderPage function</summary>
    /**
    * Represente renderPage function
    */
    public function renderPage(){
        igk_wln("buffer :".$this->buffer);
        igk_wln("page :". $this->pages[$this->page]);
    }
    ///<summary>Represente restore function</summary>
    /**
    * Represente restore function
    */
    public function restore(){
        $this->_out('Q');
    }
    ///<summary>Represente Rotate function</summary>
    ///<param name="angle"></param>
    ///<param name="x" default="''"></param>
    ///<param name="y" default="''"></param>
    /**
    * Represente Rotate function
    * @param mixed $angle
    * @param mixed $x the default value is ''
    * @param mixed $y the default value is ''
    */
    public function Rotate($angle, $x='', $y=''){
        if($x === '')
            $x=$this->x;
        if($y === '')
            $y=$this->y;
        $y=($this->h - $y) * $this->k;
        $x *= $this->k;
        $tm[0]=cos(deg2rad($angle));
        $tm[1]=sin(deg2rad($angle));
        $tm[2]= - $tm[1];
        $tm[3]=$tm[0];
        $tm[4]=$x + ($tm[1] * $y) - ($tm[0] * $x);
        $tm[5]=$y - ($tm[0] * $y) - ($tm[1] * $x);
        $this->setTransform($tm);
    }
    ///<summary>Represente save function</summary>
    /**
    * Represente save function
    */
    public function save(){
        $this->_out('q');
    }
    ///<summary>Represente Scale function</summary>
    ///<param name="s_x"></param>
    ///<param name="s_y"></param>
    ///<param name="x" default="''"></param>
    ///<param name="y" default="''"></param>
    /**
    * Represente Scale function
    * @param mixed $s_x
    * @param mixed $s_y
    * @param mixed $x the default value is ''
    * @param mixed $y the default value is ''
    */
    function Scale($s_x, $s_y, $x='', $y=''){
        if($x === '')
            $x=$this->x;
        if($y === '')
            $y=$this->y;
        if($s_x == 0 || $s_y == 0)
            $this->Error('Please use values unequal to zero for Scaling');
        $y=($this->h - $y) * $this->k;
        $x *= $this->k;
        $s_x /= 100;
        $s_y /= 100;
        $tm[0]=$s_x;
        $tm[1]=0;
        $tm[2]=0;
        $tm[3]=$s_y;
        $tm[4]=$x * (1 - $s_x);
        $tm[5]=$y * (1 - $s_y);
        $this->setTransform($tm);
    }
    ///<summary>Represente ScaleX function</summary>
    ///<param name="s_x"></param>
    ///<param name="x" default="''"></param>
    ///<param name="y" default="''"></param>
    /**
    * Represente ScaleX function
    * @param mixed $s_x
    * @param mixed $x the default value is ''
    * @param mixed $y the default value is ''
    */
    public function ScaleX($s_x, $x='', $y=''){
        $this->Scale($s_x, 100, $x, $y);
    }
    ///<summary>Represente ScaleXY function</summary>
    ///<param name="s"></param>
    ///<param name="x" default="''"></param>
    ///<param name="y" default="''"></param>
    /**
    * Represente ScaleXY function
    * @param mixed $s
    * @param mixed $x the default value is ''
    * @param mixed $y the default value is ''
    */
    public function ScaleXY($s, $x='', $y=''){
        $this->Scale($s, $s, $x, $y);
    }
    ///<summary>Represente ScaleY function</summary>
    ///<param name="s_y"></param>
    ///<param name="x" default="''"></param>
    ///<param name="y" default="''"></param>
    /**
    * Represente ScaleY function
    * @param mixed $s_y
    * @param mixed $x the default value is ''
    * @param mixed $y the default value is ''
    */
    public function ScaleY($s_y, $x='', $y=''){
        $this->Scale(100, $s_y, $x, $y);
    }
    ///<summary>Represente setTransform function</summary>
    ///<param name="tm"></param>
    /**
    * Represente setTransform function
    * @param mixed $tm
    */
    public function setTransform($tm){
        $s=sprintf('%.3F %.3F %.3F %.3F %.3F %.3F cm', $tm[0], $tm[1], $tm[2], $tm[3], $tm[4],  - $tm[5]);
        $this->_out($s);
    }
    ///<summary>Represente Skew function</summary>
    ///<param name="angle_x"></param>
    ///<param name="angle_y"></param>
    ///<param name="x" default="''"></param>
    ///<param name="y" default="''"></param>
    /**
    * Represente Skew function
    * @param mixed $angle_x
    * @param mixed $angle_y
    * @param mixed $x the default value is ''
    * @param mixed $y the default value is ''
    */
    function Skew($angle_x, $angle_y, $x='', $y=''){
        if($x === '')
            $x=$this->x;
        if($y === '')
            $y=$this->y;
        if($angle_x<=-90 || $angle_x>=90 || $angle_y<=-90 || $angle_y>=90)
            $this->Error('Please use values between -90° and 90° for skewing');
        $x *= $this->k;
        $y=($this->h - $y) * $this->k;
        $tm[0]=1;
        $tm[1]=tan(deg2rad($angle_y));
        $tm[2]=tan(deg2rad($angle_x));
        $tm[3]=1;
        $tm[4]= - $tm[2] * $y;
        $tm[5]= - $tm[1] * $x;
        $this->setTransform($tm);
    }
    ///<summary>Represente SkewX function</summary>
    ///<param name="angle_x"></param>
    ///<param name="x" default="''"></param>
    ///<param name="y" default="''"></param>
    /**
    * Represente SkewX function
    * @param mixed $angle_x
    * @param mixed $x the default value is ''
    * @param mixed $y the default value is ''
    */
    function SkewX($angle_x, $x='', $y=''){
        $this->Skew($angle_x, 0, $x, $y);
    }
    ///<summary>Represente SkewY function</summary>
    ///<param name="angle_y"></param>
    ///<param name="x" default="''"></param>
    ///<param name="y" default="''"></param>
    /**
    * Represente SkewY function
    * @param mixed $angle_y
    * @param mixed $x the default value is ''
    * @param mixed $y the default value is ''
    */
    function SkewY($angle_y, $x='', $y=''){
        $this->Skew(0, $angle_y, $x, $y);
    }
    ///<summary>Represente Translate function</summary>
    ///<param name="t_x"></param>
    ///<param name="t_y"></param>
    /**
    * Represente Translate function
    * @param mixed $t_x
    * @param mixed $t_y
    */
    function Translate($t_x, $t_y){
        $tm[0]=1;
        $tm[1]=0;
        $tm[2]=0;
        $tm[3]=1;
        $tm[4]=$t_x * $this->k;
        $tm[5]=$t_y * $this->k;
        $this->setTransform($tm);
    }
    ///<summary>Represente TranslateX function</summary>
    ///<param name="t_x"></param>
    /**
    * Represente TranslateX function
    * @param mixed $t_x
    */
    function TranslateX($t_x, $x=0, $y=0){
        $this->Translate($t_x, 0, $x, $y);
    }
    ///<summary>Represente TranslateY function</summary>
    ///<param name="t_y"></param>
    /**
    * Represente TranslateY function
    * @param mixed $t_y
    */
    function TranslateY($t_y, $x=0, $y=0){
        $this->Translate(0, $t_y, $x, $y);
    }
}
///<summary> use that class to handle pdf file</summary>
/**
*  use that class to handle pdf file
*/
final class IGKPDF extends IGKObject implements IIGKPdfPrinter {
    private $m_author;
    private $m_fpdf;
    private $m_keywords;
    private $m_subject;
    private $m_title;
    ///<summary>Represente __construct function</summary>
    ///<param name="type" default="P"></param>
    ///<param name="unit" default="mm"></param>
    ///<param name="format" default="A4"></param>
    /**
    * Represente __construct function
    * @param mixed $type the default value is "P"
    * @param mixed $unit the default value is "mm"
    * @param mixed $format the default value is "A4"
    */
    public function __construct($type="P", $unit="mm", $format="A4"){
        $this->init($type, $unit, $format);
    }
    ///<summary>Represente addBr function</summary>
    ///<param name="h" default="null"></param>
    /**
    * Represente addBr function
    * @param mixed $h the default value is null
    */
    public function addBr($h=null){
        $this->m_fpdf->Ln($h);
    }
    ///<summary>Represente addCPage function</summary>
    ///<param name="type" default="P"></param>
    ///<param name="format" default="A4"></param>
    /**
    * Represente addCPage function
    * @param mixed $type the default value is "P"
    * @param mixed $format the default value is "A4"
    */
    public function addCPage($type="P", $format="A4"){
        $this->m_fpdf->AddPage($type, $format);
    }
    ///<summary>Represente addFont function</summary>
    ///<param name="fn"></param>
    ///<param name="style" default="IGK_STR_EMPTY"></param>
    ///<param name="file" default="null"></param>
    /**
    * Represente addFont function
    * @param mixed $fn
    * @param mixed $style the default value is IGK_STR_EMPTY
    * @param mixed $file the default value is null
    */
    public function addFont($fn, $style=IGK_STR_EMPTY, $file=null){
        $this->m_fpdf->AddFont($fn, $style, $file);
    }
    ///<summary>Represente addPage function</summary>
    /**
    * Represente addPage function
    */
    public function addPage(){
        call_user_func_array([$this->m_fpdf, "addPage"], func_get_args());
    }
    ///<summary>Represente beginPath function</summary>
    /**
    * Represente beginPath function
    */
    public function beginPath(){}
    ///<summary>Represente bezierCurveTo function</summary>
    ///<param name="x1"></param>
    ///<param name="y1"></param>
    ///<param name="cx1"></param>
    ///<param name="cy1"></param>
    ///<param name="cx2"></param>
    ///<param name="cy2"></param>
    ///<param name="x2" default="null"></param>
    ///<param name="y2" default="null"></param>
    /**
    * Represente bezierCurveTo function
    * @param mixed $x1
    * @param mixed $y1
    * @param mixed $cx1
    * @param mixed $cy1
    * @param mixed $cx2
    * @param mixed $cy2
    * @param mixed $x2 the default value is null
    * @param mixed $y2 the default value is null
    */
    public function bezierCurveTo($x1, $y1, $cx1, $cy1, $cx2, $cy2, $x2=null, $y2=null){
        $this->m_fpdf->Curve($x1, $y1, $cx1, $cy1, $cx2, $cy2, $x2 ?? $x1, $y2 ?? $y1);
    }
    ///<summary>Represente closePath function</summary>
    /**
    * Represente closePath function
    */
    public function closePath(){}
    ///<summary>Represente createLink function</summary>
    /**
    * Represente createLink function
    */
    public function createLink(){
        return $this->FPDF->AddLink();
    }
    ///<summary>draw cell text with width and height specified. note that x and y update for next location</summary>
    /**
    * draw cell text with width and height specified. note that x and y update for next location
    */
    public function drawCText($w, $h, $text, $border=0, $ln=1, $align="L", $fill=false, $link=null){
        $this->m_fpdf->Cell($w, $h, $text, $border, $ln, $align, $fill, $link);
    }
    ///<summary>Represente drawImage function</summary>
    ///<param name="imgfileObject"></param>
    ///<param name="x"></param>
    ///<param name="y"></param>
    /**
    * Represente drawImage function
    * @param mixed $imgfileObject
    * @param mixed $x
    * @param mixed $y
    */
    public function drawImage($imgfileObject, $x, $y){
        if(file_exists($imgfileObject)){
            $this->FPDF->Image($imgfileObject, $x, $y);
        }
    }
    ///<summary>Represente drawImg function</summary>
    ///<param name="file"></param>
    ///<param name="x" default="null"></param>
    ///<param name="y" default="null"></param>
    ///<param name="w"></param>
    ///<param name="h"></param>
    ///<param name="type" default="null"></param>
    ///<param name="link" default="null"></param>
    /**
    * Represente drawImg function
    * @param mixed $file
    * @param mixed $x the default value is null
    * @param mixed $y the default value is null
    * @param mixed $w the default value is 0
    * @param mixed $h the default value is 0
    * @param mixed $type the default value is null
    * @param mixed $link the default value is null
    */
    public function drawImg($file, $x=null, $y=null, $w=0, $h=0, $type=null, $link=null){
        $this->FPDF->Image($file, $x, $y, $w, $h, $type, $link);
    }
    ///<summary>Represente drawLine function</summary>
    ///<param name="x1"></param>
    ///<param name="y1"></param>
    ///<param name="x2"></param>
    ///<param name="y2"></param>
    /**
    * Represente drawLine function
    * @param mixed $x1
    * @param mixed $y1
    * @param mixed $x2
    * @param mixed $y2
    */
    public function drawLine($x1, $y1, $x2, $y2){
        $this->m_fpdf->Line($x1, $y1, $x2, $y2);
    }
    ///<summary>Represente drawLineSeparatorw function</summary>
    ///<param name="webcolor"></param>
    /**
    * Represente drawLineSeparatorw function
    * @param mixed $webcolor
    */
    public function drawLineSeparatorw($webcolor){
        $this->setdColorw($webcolor);
        $this->drawLine($this->getX(), $this->getY(), $this->FPDF->w - $this->FPDF->rMargin, $this->getY());
    }
    ///<summary>Represente drawLink function</summary>
    ///<param name="x"></param>
    ///<param name="y"></param>
    ///<param name="w"></param>
    ///<param name="h"></param>
    ///<param name="link"></param>
    /**
    * Represente drawLink function
    * @param mixed $x
    * @param mixed $y
    * @param mixed $w
    * @param mixed $h
    * @param mixed $link
    */
    public function drawLink($x, $y, $w, $h, $link){
        $this->FPDF->Rect($x, $y, $w, $h, $link);
    }
    ///<summary>Represente drawMultiTextCell function</summary>
    ///<param name="w"></param>
    ///<param name="h"></param>
    ///<param name="text"></param>
    ///<param name="border"></param>
    ///<param name="align" default="L"></param>
    ///<param name="fillcolor" default="false"></param>
    /**
    * Represente drawMultiTextCell function
    * @param mixed $w
    * @param mixed $h
    * @param mixed $text
    * @param mixed $border the default value is 0
    * @param mixed $align the default value is "L"
    * @param mixed $fillcolor the default value is false
    */
    public function drawMultiTextCell($w, $h, $text, $border=0, $align="L", $fillcolor=false){
        $this->m_fpdf->MultiCell($w, $h, $text, $border, $align, $fillcolor);
    }
    ///<summary>Represente drawRect function</summary>
    ///<param name="x"></param>
    ///<param name="y"></param>
    ///<param name="w"></param>
    ///<param name="h"></param>
    /**
    * Represente drawRect function
    * @param mixed $x
    * @param mixed $y
    * @param mixed $w
    * @param mixed $h
    */
    public function drawRect($x, $y, $w, $h){
        $this->FPDF->Rect($x, $y, $w, $h);
    }
    ///<summary>draw text at position</summary>
    /**
    * draw text at position
    */
    public function drawText($text, $x=0, $y=0){
        $this->m_fpdf->Text($x, $y, $text);
    }
    ///<summary>Represente drawWText function</summary>
    ///<param name="h"></param>
    ///<param name="text"></param>
    ///<param name="link" default="null"></param>
    /**
    * Represente drawWText function
    * @param mixed $h
    * @param mixed $text
    * @param mixed $link the default value is null
    */
    public function drawWText($h, $text, $link=null){
        $this->m_fpdf->Write($h, $text, $link);
    }
    ///<summary>Represente fill function</summary>
    /**
    * Represente fill function
    */
    public function fill(){}
    ///<summary>Represente fillRect function</summary>
    ///<param name="x"></param>
    ///<param name="y"></param>
    ///<param name="w"></param>
    ///<param name="h"></param>
    /**
    * Represente fillRect function
    * @param mixed $x
    * @param mixed $y
    * @param mixed $w
    * @param mixed $h
    */
    public function fillRect($x, $y, $w, $h){
        $this->FPDF->Rect($x, $y, $w, $h, 'F');
    }
    ///<summary>Represente getAuthor function</summary>
    /**
    * Represente getAuthor function
    */
    public function getAuthor(){
        return $this->m_author;
    }
    ///<summary>Represente getFpdf function</summary>
    /**
    * Represente getFpdf function
    */
    public function getFpdf(){
        return $this->m_fpdf;
    }
    ///<summary>Represente getKeywords function</summary>
    /**
    * Represente getKeywords function
    */
    public function getKeywords(){
        return $this->m_keywords;
    }
    ///<summary>Represente getPageNo function</summary>
    /**
    * Represente getPageNo function
    */
    public function getPageNo(){
        return $this->FPDF->PageNo();
    }
    ///<summary>Represente getScreenH function</summary>
    /**
    * Represente getScreenH function
    */
    public function getScreenH(){
        return $this->m_fpdf->h - ($this->m_fpdf->tMargin + $this->m_fpdf->bMargin);
    }
    ///<summary>Represente getScreenW function</summary>
    /**
    * Represente getScreenW function
    */
    public function getScreenW(){
        return $this->m_fpdf->w - ($this->m_fpdf->rMargin + $this->m_fpdf->lMargin);
    }
    ///<summary>Represente getStringWidth function</summary>
    ///<param name="s"></param>
    /**
    * Represente getStringWidth function
    * @param mixed $s
    */
    public function getStringWidth($s){
        return $this->FPDF->GetStringWidth($s);
    }
    ///<summary>Represente getSubject function</summary>
    /**
    * Represente getSubject function
    */
    public function getSubject(){
        return $this->m_subject;
    }
    ///<summary>Represente getTitle function</summary>
    /**
    * Represente getTitle function
    */
    public function getTitle(){
        return $this->m_title;
    }
    ///<summary>Represente getX function</summary>
    /**
    * Represente getX function
    */
    public function getX(){
        return $this->FPDF->GetX();
    }
    ///<summary>Represente getY function</summary>
    /**
    * Represente getY function
    */
    public function getY(){
        return $this->FPDF->GetY();
    }
    ///<summary>Represente init function</summary>
    ///<param name="type" default="P"></param>
    ///<param name="unit" default="mm"></param>
    ///<param name="format" default="A4"></param>
    ///<param name="firstpage" default="true"></param>
    /**
    * Represente init function
    * @param mixed $type the default value is "P"
    * @param mixed $unit the default value is "mm"
    * @param mixed $format the default value is "A4"
    * @param mixed $firstpage the default value is true
    */
    public function init($type="P", $unit="mm", $format="A4", $firstpage=true){
        $this->m_fpdf=new IGKFPDF($type, $unit, $format);
        $this->m_fpdf->SetFont("Arial", IGK_STR_EMPTY, 12);
        if($firstpage){
            $this->addPage();
        }
    }
    ///<summary>Represente measureText function</summary>
    ///<param name="text"></param>
    /**
    * Represente measureText function
    * @param mixed $text
    */
    public function measureText($text){
        return $this->m_fpdf->GetStringWidth($text);
    }
    ///<summary>Represente moveTo function</summary>
    /**
    * Represente moveTo function
    */
    public function moveTo(){}
    ///<summary>Represente Render function</summary>
    ///<param name="name" default="pdfdocument.pdf"></param>
    ///<param name="dest" default="I"></param>
    /**
    * Represente Render function
    * @param mixed $name the default value is "pdfdocument.pdf"
    * @param mixed $dest the default value is "I"
    */
    public function Render($name="pdfdocument.pdf", $dest="I"){
        $this->m_fpdf->title=$this->Title;
        $this->m_fpdf->author=$this->Author;
        $this->m_fpdf->subject=$this->Subject;
        $this->m_fpdf->keywords=$this->Keywords;
        $this->m_fpdf->Output($name, $dest);
    }
    ///<summary>Represente renderPage function</summary>
    /**
    * Represente renderPage function
    */
    public function renderPage(){
        $this->m_fpdf->renderPage();
    }
    ///<summary>Represente restore function</summary>
    /**
    * Represente restore function
    */
    public function restore(){
        $this->m_fpdf->restore();
    }
    ///<summary>Represente rotate function</summary>
    ///<param name="angle"></param>
    /**
    * Represente rotate function
    * @param mixed $angle
    */
    public function rotate($angle){
        $this->m_fpdf->Rotate($angle);
    }
    ///<summary>Represente save function</summary>
    /**
    * Represente save function
    */
    public function save(){
        $this->m_fpdf->save();
    }
    ///<summary>Represente setAuthor function</summary>
    ///<param name="value"></param>
    /**
    * Represente setAuthor function
    * @param mixed $value
    */
    public function setAuthor($value){
        $this->m_author=$value;
    }
    ///<summary>Represente setdColorf function</summary>
    ///<param name="r"></param>
    ///<param name="g" default="null"></param>
    ///<param name="b" default="null"></param>
    /**
    * Represente setdColorf function
    * @param mixed $r
    * @param mixed $g the default value is null
    * @param mixed $b the default value is null
    */
    public function setdColorf($r, $g=null, $b=null){
        $this->FPDF->SetDrawColor($r * 255, $g ? $g * 255: $g, $b ? $b * 255: $b);
    }
    ///<summary>Represente setdColorw function</summary>
    ///<param name="webcolor"></param>
    /**
    * Represente setdColorw function
    * @param mixed $webcolor
    */
    public function setdColorw($webcolor){
        $cl=IGKColorf::FromString($webcolor);
        $this->setdColorf($cl->R, $cl->G, $cl->B);
    }
    ///<summary>Represente setfColorf function</summary>
    ///<param name="r"></param>
    ///<param name="g" default="null"></param>
    ///<param name="b" default="null"></param>
    /**
    * Represente setfColorf function
    * @param mixed $r
    * @param mixed $g the default value is null
    * @param mixed $b the default value is null
    */
    public function setfColorf($r, $g=null, $b=null){
        $this->FPDF->SetFillColor($r * 255, $g ? $g * 255: $g, $b ? $b * 255: $b);
    }
    ///<summary>Represente setfColorw function</summary>
    ///<param name="webcolor"></param>
    /**
    * Represente setfColorw function
    * @param mixed $webcolor
    */
    public function setfColorw($webcolor){
        $cl=IGKColorf::FromString($webcolor);
        $this->setfColorf($cl->R, $cl->G, $cl->B);
    }
    ///<summary>Represente setFont function</summary>
    ///<param name="name"></param>
    ///<param name="type"></param>
    ///<param name="size"></param>
    /**
    * Represente setFont function
    * @param mixed $name
    * @param mixed $type
    * @param mixed $size
    */
    public function setFont($name, $type, $size){
        $this->FPDF->SetFont($name, $type, $size);
    }
    ///<summary>Represente setFontSize function</summary>
    ///<param name="w"></param>
    /**
    * Represente setFontSize function
    * @param mixed $w
    */
    public function setFontSize($w){
        $this->FPDF->SetFontSize($w);
    }
    ///<summary>Represente setKeywords function</summary>
    ///<param name="value"></param>
    /**
    * Represente setKeywords function
    * @param mixed $value
    */
    public function setKeywords($value){
        $this->m_keywords=$value;
    }
    ///<summary>Represente setLink function</summary>
    ///<param name="id"></param>
    ///<param name="y"></param>
    ///<param name="p" default="-1"></param>
    /**
    * Represente setLink function
    * @param mixed $id
    * @param mixed $y the default value is 0
    * @param mixed $p the default value is -1
    */
    public function setLink($id, $y=0, $p=-1){
        return $this->FPDF->SetLink($id, $y, $p);
    }
    ///<summary>Represente setMargin function</summary>
    ///<param name="left"></param>
    ///<param name="top"></param>
    ///<param name="right"></param>
    /**
    * Represente setMargin function
    * @param mixed $left
    * @param mixed $top
    * @param mixed $right
    */
    public function setMargin($left, $top, $right){
        $this->FPDF->SetMargins($left, $top, $right);
    }
    ///<summary>Represente setSubject function</summary>
    ///<param name="value"></param>
    /**
    * Represente setSubject function
    * @param mixed $value
    */
    public function setSubject($value){
        $this->m_subject=$value;
    }
    ///<summary>Represente settColorf function</summary>
    ///<param name="r"></param>
    ///<param name="g" default="null"></param>
    ///<param name="b" default="null"></param>
    /**
    * Represente settColorf function
    * @param mixed $r
    * @param mixed $g the default value is null
    * @param mixed $b the default value is null
    */
    public function settColorf($r, $g=null, $b=null){
        $this->FPDF->SetTextColor($r * 255, $g ? $g * 255: $g, $b ? $b * 255: $b);
    }
    ///<summary>Represente settColorw function</summary>
    ///<param name="webcolor"></param>
    /**
    * Represente settColorw function
    * @param mixed $webcolor
    */
    public function settColorw($webcolor){
        $cl=IGKColorf::FromString($webcolor);
        $this->settColorf($cl->R, $cl->G, $cl->B);
    }
    ///<summary>Represente setTitle function</summary>
    ///<param name="value"></param>
    /**
    * Represente setTitle function
    * @param mixed $value
    */
    public function setTitle($value){
        $this->m_title=$value;
    }
    ///<summary>Represente setTransform function</summary>
    ///<param name="m11"></param>
    ///<param name="m12"></param>
    ///<param name="m21"></param>
    ///<param name="m22"></param>
    ///<param name="offsetx"></param>
    ///<param name="offsety"></param>
    /**
    * Represente setTransform function
    * @param mixed $m11
    * @param mixed $m12
    * @param mixed $m21
    * @param mixed $m22
    * @param mixed $offsetx
    * @param mixed $offsety
    */
    public function setTransform($m11, $m12, $m21, $m22, $offsetx, $offsety){
        $this->m_fpdf->setTransform(array($m11, $m12, $m21, $m22, $offsetx, $offsety));
    }
    ///<summary>Represente setWidth function</summary>
    ///<param name="w"></param>
    /**
    * Represente setWidth function
    * @param mixed $w
    */
    public function setWidth($w){
        $this->FPDF->SetLineWidth($w);
    }
    ///<summary>Represente setXY function</summary>
    ///<param name="x"></param>
    ///<param name="y"></param>
    /**
    * Represente setXY function
    * @param mixed $x
    * @param mixed $y
    */
    public function setXY($x, $y){
        $this->FPDF->SetXY($x, $y);
    }
    ///<summary>Represente stroke function</summary>
    /**
    * Represente stroke function
    */
    public function stroke(){}
}
///<summary> used to write pdf</summary>
/**
*  used to write pdf
*/
final class IGKPDFDbWriter extends IGKObject {
    private $m_pdf;
    ///<summary>Represente __construct function</summary>
    ///<param name="pdf"></param>
    /**
    * Represente __construct function
    * @param mixed $pdf
    */
    public function __construct($pdf){
        $this->m_pdf=$pdf;
    }
    ///<summary>Represente addRow function</summary>
    ///<param name="r"></param>
    ///<param name="height" default="20"></param>
    ///<param name="measure" default="null"></param>
    /**
    * Represente addRow function
    * @param mixed $r
    * @param mixed $height the default value is 20
    * @param mixed $measure the default value is null
    */
    public function addRow($r, $height=20, $measure=null){
        $i=0;
        foreach($r as  $v){
            $w=igk_getv($measure, $i, 12);
            $this->m_pdf->drawCText($w, $height, utf8_decode($v), 0, 0);
            $i++;
        }
        $this->m_pdf->addBr();
    }
    ///<summary>Represente Create function</summary>
    /**
    * Represente Create function
    */
    public static function Create(){
        $pdf=new IGKPDF();
        $pdrr=new IGKPDFDbWriter($pdf);
        return $pdrr;
    }
    ///<summary>Represente getPDF function</summary>
    /**
    * Represente getPDF function
    */
    public function getPDF(){
        return $this->m_pdf;
    }
    ///<summary>Represente Render function</summary>
    ///<param name="name" default="pdfdocument.pdf"></param>
    ///<param name="dest" default="I"></param>
    /**
    * Represente Render function
    * @param mixed $name the default value is "pdfdocument.pdf"
    * @param mixed $dest the default value is "I"
    */
    public function Render($name="pdfdocument.pdf", $dest="I"){
        $this->m_pdf->Render($name, $dest);
    }
}
