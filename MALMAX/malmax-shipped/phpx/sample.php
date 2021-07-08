<?php
function list_unclonables()
{
	foreach (get_declared_classes() as $class)
	{
		$r=new ReflectionClass($class);
		if (!$r->isCloneable())
			echo $class,PHP_EOL;
	}
}
function test_all()
{
	foreach (get_defined_functions()['user'] as $function)
		if (substr($function,0,5)=="test_" and $function!=__FUNCTION__)
		{
			echo $function,":",PHP_EOL;
			$function();
		}
}
test_all() or test_deepcopy_stress2() or die;
// test_unclonable() or die;
// test_objectarray() or die;
function test_unclonable()
{
	$x=new Exception;
	$a=[$x];
	$y=deep_copy($x);
	$x->y=5;
	var_dump($y);
}
test_deepcopy_stress2() or die;
function test_deepcopy_stress2()
{
	printf("%.3fKB\n",memory_get_usage()/1024.0);
	$first=memory_get_usage();
	ob_start();
	for ($i=0;$i<200;++$i)
		test_objectarray2();
	ob_get_clean();
	gc_collect_cycles();
	printf("%.3fKB\n",$first/1024.0);
	printf("%.3fKB\n",memory_get_usage()/1024.0);	
}
// test_deepcopy_basic7() or die;
// test_stress_deepcopy() or die;
// test_array4() or die;
// deep_copy($GLOBALS); die();
// test_deepcopy_mem_leak3() or die;
// test_array3() or die;
// test_everything() or die;
// test_deepcopy_mem_leak2() or die;
// test_deepcopy_mem_leak() or die;

// test_deep_copy_recursive_reference() or die;
// test_deepcopy_object_reference() or die;
// test_deep_copy_variable_reference() or die;
// test_deep_copy_variable_reference2() or die;
die();
function test_objectarray2()
{
	$obj=new stdClass;
	$val=str_repeat("-",10000);

	$a=[
	$val
	// $obj
	];
	$a[]=$a;
	$a[]=&$a;
	$a2=deep_copy($a);
	var_dump($a);
	unset($a);
	var_dump($a2);
	unset($a2);

	echo "all done.";
}
function test_deepcopy_basic7()
{
	$_a=[];
	$a=[$_a,$_a];
	$a2=deep_copy($a);
	unset($a);
	var_dump($a2);
}
function test_deepcopy_basic6()
{
	$o=new stdClass;
	$o->val=2;
	$a=[1,$o];
	$a2=deep_copy($a);
	$a3=deep_copy($a);
	$a4=deep_copy($a);

	$a[0]++;
	$a[1]->val++;
	unset($a3,$a4);
	var_dump($a2);
}
function test_deepcopy_basic5()
{
	$a=[1,null,null];
	$a2=deep_copy($a);
	$a[0]++;
	var_dump($a2);
}
function test_deepcopy_basic4()
{
	$a=[1,"key"=>"value","hello","key2"=>"value"];
	$a2=deep_copy($a);
	$a[0]++;
	var_dump($a2);
}
function test_deepcopy_basic3()
{
	$a=[1,"key"=>"value","hello"];
	$a2=deep_copy($a);
	$a[0]++;
	var_dump($a2);
}
function test_deepcopy_basic2()
{
	$a=[1,"hello"];
	$a2=deep_copy($a);
	$a[0]++;
	var_dump($a2);
}
function test_deepcopy_basic1()
{
	$a=[1,2,3];
	$a2=deep_copy($a);
	$a[0]++;
	var_dump($a2);
}
function test_stress_deepcopy()
{
	$a=[];
	$a[]=$a;
	$a[]=$a;
	$a[]=$a;

	$a2=deep_copy($a);
	// unset($a2);
	$a3=deep_copy($a);
	unset($a3);
	$a4=deep_copy($a);
	unset($a4);
	var_dump($a2);
}
function test_deepcopy_mem_leak3()
{

	printf("%.3fKB\n",memory_get_usage()/1024.0);
	$first=memory_get_usage();
	// test_deepcopy_object_reference();
	$a=[1,2,3,4,5];
	$a[]=$a;
	$a[]=$a;
	$a[]=$a;
	for ($i=0;$i<1;++$i)
		deep_copy($a);
		// test_array3();
	printf("%.3fKB\n",$first/1024.0);
	printf("%.3fKB\n",memory_get_usage()/1024.0);
}
function test_array4()
{
	$a=[1,2,3,4,5];
	$a[]=$a;
	$a[]=$a;
	$a[]=$a;
	// $a[]=$a;
	for ($i=0;$i<20;++$i)
	$a2=deep_copy($a);
	var_dump($a2);
}
function test_array3()
{
	// $a=[0,'z'=>1,'x'=>2,'y'=>3,4];
	$a=[0,1,2,'x'=>3,4];
	// $a['ref']=&$a;
	$a['val']=$a;
	$a2=deep_copy($a);
	$a[0]++;
	var_dump($a);
	unset($a);
	var_dump($a2);
}
function test_array2()
{
	$a=[0,1,2,3];
	// $a['ref']=&$a;
	$a['val']=$a;

	$a2=deep_copy($a);
	$a[1]++;
	var_dump($a);
	unset($a);
	var_dump($a2);
}
function test_array_copy()
{
	$a0=[1,2,3,4];
	$a1=[$a0,5,6,$a0];

	$a2=deep_copy($a1);
	$a1[1]++;
	var_dump($a1);
	unset($a1);
	$a2[0][0]++;
	var_dump($a2);
}
function test_objectarray()
{
	$obj=new stdClass;
	$a=[$obj];
	$a[]=$a;
	$a2=deep_copy($a);
	unset($a);
	var_dump($a2);
	unset($a2);
	echo 'all done.\n';
}
function test_everything()
{
	$obj=new stdClass;
	$obj->val=123;
	$value=10;


	$a=[
	$obj
	,$obj,'objref'=>&$obj
	,$value,'value'=>$value,10,9,'ref'=>&$value
	];
	$a['selfval']=$a;
	$a['selfref']=&$a;
	$a2=deep_copy($a);
	var_dump($a);
	echo str_repeat("-",80),PHP_EOL;
	unset($a);
	$o=&$a2['objref'];
	$v2=&$a2['ref'];
	var_dump($a2);
	unset($a2);
	echo "all done.";
}
function test_deepcopy_mem_leak2()
{

	printf("%.3fKB\n",memory_get_usage()/1024.0);
	$first=memory_get_usage();
	// test_deepcopy_object_reference();
	for ($i=0;$i<10;++$i)
	test_deep_copy_recursive_reference();
	// test_deep_copy_variable_reference();
	// test_deep_copy_variable_reference2();
	printf("%.3fKB\n",$first/1024.0);
	printf("%.3fKB\n",memory_get_usage()/1024.0);
}
function test_deepcopy_mem_leak()
{
	printf("%.3fKB\n",memory_get_usage()/1024.0);
	printf("%.3fKB\n",memory_get_usage()/1024.0);
	$a=range(0,1000);
	for ($i=0;$i<1000;++$i)
		$a2=deep_copy($a);
	gc_collect_cycles();
	unset($a,$a2,$i);
	printf("%.3fKB\n",memory_get_usage()/1024.0);
}

function test_deepcopy_object_reference()
{
	$o=new stdClass;
	$o->a=1;
	$o->b=2;

	$b=5;
	// $fp=fopen("/tmp/tmp","wt");
	$o2=$o;
	$a=['a'=>$o,$o,&$o,$o,$o2,&$o];
	$a=['a'=>$o,$o];//,$o,&$o,$o,$o2,&$o];
	// $a=[$o,$o,&$o,$o,$o2];
	$a2=deep_copy($a);
	$o->a++;
	$a2[0]->a--;
	var_dump($a);
	var_dump($a2);
}
function test_deep_copy_recursive_reference()
{
	$a=[2,&$a];
	$a2=deep_copy($a);
	$a[0]++;
	var_dump($a);
	var_dump($a2);

}
function test_deep_copy_variable_reference()
{

	$b=5;
	$a=[&$b,&$b,$b,2,2,2,2];
	$a2=deep_copy($a);
	$b++;
	var_dump($a);
	var_dump($a2); //should not change
}
function test_deep_copy_variable_reference2()
{
	$b=10;
	$c="hello";
	$a=[0,&$b,&$c,&$b,&$b,$b];
	// echo xserialize($a);
	$a2=deep_copy($a);
	$a[1]++;
	$a[2].=" there";
	$a2[1]--;
	var_dump($a);
	var_dump($a2);
}
/*
die();
$f=fopen("/tmp/a","wt");
$f2=fopen("/tmp/b","wt");
$f3=fopen("/tmp/b","wt");
$x=[5,4,1,"hello",$f,&$f2,"nono",$f3];
var_dump(xserialize($x));

die();
$x=2;
$a=2;
$array=[$a,&$a];
var_dump(zval_id($a));
var_dump(zval_id($a));
var_dump(zval_id($x));
$b=5.5;
$c=5.5;
var_dump(zval_id($array[0]));
var_dump(zval_id($array[1]));
echo PHP_EOL;
var_dump(zval_id($b));
var_dump(zval_id($c));
$d=&$c;
var_dump(zval_id($d));
unset($d);

$x=new stdClass;
$x2=$x;
$x3=&$x;
$x4=&$x3;
var_dump(zval_id($x));
var_dump(zval_id($x2));
var_dump(zval_id($x3));
var_dump(zval_id($x4));


echo str_repeat("-",80),PHP_EOL;
var_dump($array);
var_dump(is_ref($array[0]));
var_dump(is_ref($array[1]));
$b=&$array;
unset($b);
$b=2;
$c=$b;
$d=$b;
$ref=&$b;
var_dump(is_ref($b));
die();
ini_set("memory_limit","-1");
echo floor(memory_get_peak_usage()/1024),"KB",PHP_EOL;
$t=microtime(true);


coverage(1);
$a="123";
$multiline="1234
56789"
;
class something{
	public $x="123";

	private $y=
	"234";
	function __construct($a="123")
	{
		return $a;
	}
}
$x=new something();
$x->x;
$n=0;
for ($i=0;$i<1000000;++$i)
{
	$n=$n+1;
	$n--;
}
coverage(0);



print_r(get_coverage_files());
print_r(count(get_coverage_lines()));
echo PHP_EOL,str_repeat("_",80),PHP_EOL;
echo PHP_EOL;
echo floor(memory_get_peak_usage()/1024),"KB",PHP_EOL;
echo floor(memory_get_usage()/1024),"KB",PHP_EOL;
printf("%.5f seconds.\n",microtime(true)-$t);

die();
//requires php 5.4+
function md5_($x)
{
	return "x".md5_original($x);
}
var_dump(function_override("md5","md5_"));
var_dump(function_override("md5","md5_"));
var_dump(md5(123));
var_dump(function_restore("md5"));
var_dump(function_restore("md5"));
var_dump(md5(123));
var_dump(function_exists("md5_original"));
var_dump(function_exists("md5_"));
var_dump(function_remove("md5_"));
echo PHP_EOL;

class_rename("PDO","PDO_");
class PDO extends PDO_
{
	 function Something()
	{
		echo "did something";
		return true;
	}
}
$x=new PDO("sqlite:memory");
foreach ($x->query("SELECT 1,2,3,4,0") as $data)
	var_dump($data);
$x->Something();





/**/