
<?php  //1.php语法导致的变量覆盖
//$a = "want_to_be_a_cat";
//$b = "miaow";
//$test = $a;
//$$test = $b;
//var_dump($want_to_be_a_cat);//输出miaow



//以下是php函数导致的变量覆盖(extract parse_str mb_parseatr   import_request_variables)
//$a = "want a cat";
//$b = "miao";
//extract([$a => $b]);
//var_dump($a);



//php配置项导致变量覆盖(register_globals:php.ini中的一个配置项，配置为true之后传入get/post参数都会被赋成变量)

//php变量覆盖漏洞的利用方法

$test = 'abc';
$$test = 'ewrewrw';
echo $abc;    //首先定义$test  其值是abc   $$test 是先将$test解析成abc 继续解析就成了$abc = ewrewrw

extract(array('test'=>'b'));
echo$test;



parse_str("test=b");
echo $test;

