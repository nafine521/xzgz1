<?php
namespace app\index\controller;

class Index
{
    public function index()
    {
      $dir = "./video/";
      $list= "";
        // Open a known directory, and proceed to read its contents
        if (is_dir($dir)) {
          if ($dh = opendir($dir)) {
            while (($file = readdir($dh)) !== false) {
              if(filetype($dir . $file)=='file' ) $list.= "<a href='/index/index/play?v=$file'  >$file </a><br/><hr/>";
            }
            closedir($dh);
          }
        }
        return $list;
    }

    public function play(){
      $f=input("v");
      return "<video  src='/video/$f' controls='controls'autoplay='autoplay'></video> <br/>";
    }
}
//wget -r -p -np -k www.5yun.orgfasddddddddsdsdsdsdsdsdsddsds
