<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&
filemtime('C:\webserver\lizmap\prod\release_3_3\lizmap/modules/view/templates/jmessage_answer.tpl') > 1616160726){ return false;
} else {
 require_once('C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/tpl/html/function.jmessage.php');
function template_meta_0af55d9764aa82c3ba966c529588fdf6($t){

}
function template_0af55d9764aa82c3ba966c529588fdf6($t){
?><?php jtpl_function_html_jmessage( $t);?>
<?php 
}
return true;}
