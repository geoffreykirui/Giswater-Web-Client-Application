<?php 
if (jApp::config()->compilation['checkCacheFiletime'] &&

filemtime('C:\webserver\lizmap\preprod\master\lizmap/modules/admin/forms/landing_page_content.form.xml') > 1631882449){ return false;
}else{

class cForm_admin_Jx_landing_page_content extends jFormsBase {
 public function __construct($sel, &$container, $reset = false){
          parent::__construct($sel, $container, $reset);
$ctrl= new jFormsControlhtmleditor('HTMLContent');
$ctrl->label='';
$ctrl->config='ckfullandmedia';
$this->addControl($ctrl);
$ctrl= new jFormsControlsubmit('_submit');
$ctrl->label=jLocale::get('admin.form.admin_services.submit.label');
$ctrl->datasource= new jFormsStaticDatasource();
$this->addControl($ctrl);
  }
}
 return true;}