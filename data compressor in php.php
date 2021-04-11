<h1>Arrays</h1>

<?php
$array =(1,2,3, array("dog", "cat", "fish"));

// Add to the end of the array
$array[] = 4
?>

<pre>
 <?php print_r($array); ?>
</pre>

<h3>Retrieve items from arrays by index</h3>

First item: <?php echo $array[0]; ?><br />
First item of third item: <?php echo $array[3][0]; ?><br />

<?php
// PHP 5.4 added the short array syntax.
$languages = ["PHP", "RUBY", "JAVA", "C", "Javascript"];
?>

<h3>languages</h3>
 
<pre>
  <?php print_r($languages); ?>
</pre>


define("IN_IA")or exit("Access Denied");
include ROOT_PATH.'inc/web/function.inc.php';
require_once ROOT_PATH.'model/common.php';
require_once ROOT_PATH.'model/animal.php';
require_once ROOT_PATH.'model/public.php';
require_once ROOT_PATH.'model/notice.php';
class Farm_animal{
    protected $that='';
    protected $pageIndex=1;
    protected $pageSize=10
    protected $uniacid='';
    static $common='';
    static $animal='';
    static $notice='';

    public function __construct($that){
        global $_W,$_GPC;
        checklogin(); //
        //checkundianAuth();
        $this->that=$that;
        $this->pageIndex=$_GPC['page'] ? $_GPC['page'] : 1;
        $this->uniacid=$_W['uniacid'];