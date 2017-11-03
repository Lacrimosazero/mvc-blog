<?php
class code{
    public $width=100;
    public $height=40;
    public $type="png";
    public $zhongzi="1234567890abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ";
    public $codelen=4;
    public $codeurl="demo.ttf";
    public $code="";
//    public $image;
    public $codesize=array("min"=>15,"max"=>30);
    public $codeangle=array("min"=>-15,"max"=>15);
    public $lineNum=array("min"=>3,"max"=>10);
    public $pixNum=array("min"=>50,"max"=>100);


    //设置画布
    private function setcanvas(){
        //创建画布
        $this->image=imagecreatetruecolor($this->width,$this->height);
        //填充随机颜色
        imagefill($this->image,0,0,$this->setColor());
    }

    //设置随机颜色
    private function setColor($type="back"){
        $r=$type=="back"?mt_rand(1,120):mt_rand(130,254);
        $g=$type=="back"?mt_rand(1,120):mt_rand(130,254);
        $b=$type=="back"?mt_rand(1,120):mt_rand(130,254);
        return imagecolorallocate($this->image,$r,$g,$b);
    }

    //设置内容
    private function setCon()
    {
        $this->setText();

        for ($i = 0; $i < $this->codelen; $i++) {
            $fontsize = mt_rand($this->codesize["min"], $this->codesize["max"]);
            $fontangle = mt_rand($this->codeangle["min"], $this->codeangle["max"]);
            $space = intval($this->width / $this->codelen);

            $arr = imagettfbbox($fontsize, $fontangle, $this->codeurl, $this->code[$i]);

            imagettftext($this->image, $fontsize, $fontangle, $i * $space + mt_rand(-5, 5), $arr[1] - $arr[5] + mt_rand(min(0,$this->height - ($arr[1] - $arr[5])), $this->height - ($arr[1] - $arr[5])), $this->setColor("a"), $this->codeurl, $this->code[$i]);
        }

    }

    //设置文字
    private function setText(){
        $str="";
        for($i=0;$i<$this->codelen;$i++){
            $str.=$this->zhongzi[mt_rand(0,strlen($this->zhongzi-1))];
        }
        $this->code=$str;
//        return $str;
    }

    //设置线条
    private function setLine()
    {
        $lineNum = mt_rand($this->lineNum["min"], $this->lineNum["max"]);
        for ($i = 0; $i < $lineNum; $i++) {
            $startx = mt_rand(0, intval($this->width / 3));
            $endx = mt_rand(intval($this->width / 3 * 2), $this->width);
            $starty = mt_rand(0, $this->height);
            $endy = mt_rand(0, $this->height);
            imageline($this->image, $startx, $starty, $endx, $endy, $this->setColor("a"));
        }
    }

    //设置点
    private function setPix(){
        $pixNum=mt_rand($this->pixNum["min"],$this->pixNum["max"]);
        for($i=0;$i<$pixNum;$i++){
            $X=mt_rand(0,$this->width);
            $Y=mt_rand(0,$this->height);
            //imagesetpixel — 画一个单一像素
            imagesetpixel($this->image,$X,$Y,$this->setColor());
        }
    }

    //输出
    public function output(){
        header("content-type:image/" . $this->type);
        $this->setcanvas();
        $this->setCon();
        $this->setLine();
        $this->setPix();
        $_SESSION["imagecode"]=strtolower($this->code);
        $type = "image" . $this->type;
        $type($this->image);
        imagedestroy($this->image);

    }

}
/*$obj=new code();
$obj->output();*/
