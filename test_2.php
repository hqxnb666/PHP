
//var_dump(0=='admin');
//True

//  1 and 1test 可以转换成1    相同类型可以转化

//MD5 HASH相关漏洞利用、

<?php
//if(md5($_GET['a'])==md5($_GET['b']))
//{
  //  echo$flag;  //输入两个值  进行MD5加密 之后用== （弱类型）去比较 如果相等 输出flag
//}


//PHP变量覆盖漏洞
$cmd="echohello";
//一些能够覆盖变量cmd的逻辑
system($cmd);


