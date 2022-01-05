;<?php die('');?>
isWindows=1
enableRequestBodyJSONParsing=
enableAllModules=
disableInstallers=
chmodDir=509
chmodFile=436
forceHTTPSPort=
forceHTTPPort=
fallbackLocale=en_US
domainName=localhost
modulesPath="lib:jelix-admin-modules,lib:jelix-modules,app:modules,app:lizmap-modules,app:vendor/jelix/jcommunity-module/modules"
pluginsPath="app:plugins,lib:jelix-plugins,module:jacl2db/plugins,module:jacl2"
timeZone="Europe/Paris"
httpVersion=
theme=default
charset=UTF-8
locale=en_US
startAction="default:index"
startModule=view
[availableLocales]
0=cs_CZ
1=de_DE
2=el_GR
3=en_US
4=es_ES
5=eu_ES
6=fi_FI
7=fr_FR
8=gl_ES
9=hu_HU
10=it_IT
11=ja_JP
12=nl_NL
13=pl_PL
14=pt_BR
15=pt_PT
16=ro_RO
17=ru_RU
18=sl_SI
19=sv_SE
20=sk_SK
[modules]
jelix.access=2
jelix.path="lib:jelix/core-modules/jelix"
jacldb.access=0
jacl.access=0
jpref.access=0
jsoap.access=0
junittests.access=0
jpref_admin.access=0
jacl2.access=1
jacl2db.access=1
jacl2db.installparam=defaultuser
jauth.access=0
jauthdb.access=0
jcommunity.access=1
jcommunity.installparam="defaultusers=lizmap~defaultusers.json;manualconfig"
admin.access=1
dataviz.access=2
filter.access=2
action.access=2
dynamicLayers.access=2
lizmap.access=2
proj4php.access=1
view.access=2
ldapdao.installparam=noconfigfile
multiauth.installparam="noconfigfile;localconfig"
ldapdao.path="app:vendor/jelix/ldapdao-module/ldapdao"
saml.installparam=localconfig
lizmap.installparam=demo
jacl2db_admin.access=1
jauthdb_admin.access=1
master_admin.access=1
jacl2db_admin.dbprofile=default
jauthdb_admin.dbprofile=default
jpref_admin.dbprofile=default
master_admin.dbprofile=default
jacl.dbprofile=default
jacl2.dbprofile=default
jacl2db.dbprofile=default
jacldb.dbprofile=default
jauth.dbprofile=default
jauthdb.dbprofile=default
jpref.dbprofile=default
jsoap.dbprofile=default
junittests.dbprofile=default
action.dbprofile=default
admin.dbprofile=default
dataviz.dbprofile=default
dynamicLayers.dbprofile=default
filter.dbprofile=default
lizmap.dbprofile=default
proj4php.dbprofile=default
view.dbprofile=default
jcommunity.dbprofile=default
jmessenger.access=0
jmessenger.dbprofile=default
jelix.dbprofile=default
ldapdao.access=0
ldapdao.dbprofile=default
[coordplugins]
autolocale=1
lizmap=lizmapConfig.ini.php
auth="index/auth.coord.ini.php"
jacl2=1
[tplplugins]
defaultJformsBuilder=html
defaultJformsErrorDecorator=
[responses]
html=myHtmlResponse
basichtml=jResponseBasicHtml
redirect=jResponseRedirect
redirectUrl=jResponseRedirectUrl
binary=jResponseBinary
text=jResponseText
cmdline=jResponseCmdline
jsonrpc=jResponseJsonrpc
json=jResponseJson
xmlrpc=jResponseXmlrpc
xml=jResponseXml
zip=jResponseZip
rss2.0=jResponseRss20
atom1.0=jResponseAtom10
css=jResponseCss
htmlfragment=jResponseHtmlFragment
htmlauth=jResponseHtml
sitemap=jResponseSitemap
htmlmap=myHtmlMapResponse
htmlsimple=simpleHtmlResponse
html.path="C:\webserver\lizmap\prod\release_3_3\lizmap/responses/myHtmlResponse.class.php"
basichtml.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseBasicHtml.class.php"
redirect.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseRedirect.class.php"
redirectUrl.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseRedirectUrl.class.php"
binary.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseBinary.class.php"
text.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseText.class.php"
cmdline.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseCmdline.class.php"
jsonrpc.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseJsonrpc.class.php"
json.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseJson.class.php"
xmlrpc.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseXmlrpc.class.php"
xml.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseXml.class.php"
zip.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseZip.class.php"
rss2.0.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseRss20.class.php"
atom1.0.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseAtom10.class.php"
css.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseCss.class.php"
htmlfragment.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseHtmlFragment.class.php"
htmlauth.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseHtml.class.php"
sitemap.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseSitemap.class.php"
htmlmap.path="C:\webserver\lizmap\prod\release_3_3\lizmap/responses/myHtmlMapResponse.class.php"
htmlsimple.path="C:\webserver\lizmap\prod\release_3_3\lizmap/responses/simpleHtmlResponse.class.php"
[_coreResponses]
html=jResponseHtml
basichtml=jResponseBasicHtml
redirect=jResponseRedirect
redirectUrl=jResponseRedirectUrl
binary=jResponseBinary
text=jResponseText
cmdline=jResponseCmdline
jsonrpc=jResponseJsonrpc
json=jResponseJson
xmlrpc=jResponseXmlrpc
xml=jResponseXml
zip=jResponseZip
rss2.0=jResponseRss20
atom1.0=jResponseAtom10
css=jResponseCss
htmlfragment=jResponseHtmlFragment
htmlauth=jResponseHtml
sitemap=jResponseSitemap
html.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseHtml.class.php"
basichtml.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseBasicHtml.class.php"
redirect.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseRedirect.class.php"
redirectUrl.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseRedirectUrl.class.php"
binary.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseBinary.class.php"
text.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseText.class.php"
cmdline.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseCmdline.class.php"
jsonrpc.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseJsonrpc.class.php"
json.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseJson.class.php"
xmlrpc.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseXmlrpc.class.php"
xml.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseXml.class.php"
zip.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseZip.class.php"
rss2.0.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseRss20.class.php"
atom1.0.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseAtom10.class.php"
css.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseCss.class.php"
htmlfragment.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseHtmlFragment.class.php"
htmlauth.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseHtml.class.php"
sitemap.path="C:\webserver\lizmap\prod\release_3_3\lib\jelix/core/response/jResponseSitemap.class.php"
[jResponseHtml]
plugins=
minifyEntryPoint=minify.php
minifyCSS=
minifyJS=
minifyExcludeCSS=
minifyExcludeJS="jelix/wymeditor/jquery.wymeditor.js"
[debugbar]
plugins="sqllog,sessiondata,defaultlog"
defaultPosition=right
errors_openon=error
[error_handling]
messageLogFormat="%date%\t[%code%]\t%msg%\t%file%\t%line%\n"
errorMessage="An error occured. Sorry for the inconvenience."
sensitiveParameters[]=password
sensitiveParameters[]=passwd
sensitiveParameters[]=pwd
[compilation]
checkCacheFiletime=1
force=
[urlengine]
engine=basic_significant
enableParser=1
multiview=
scriptNameServerVariable=SCRIPT_NAME
pathInfoInQueryParameter=
basePath="/webgis/"
backendBasePath=
forceProxyProtocol=
checkHttpsOnParsing=1
jelixWWWPath="/webgis/assets/jelix/"
jqueryPath="/webgis/assets/jelix/jquery/"
defaultEntrypoint=index
notfoundAct="jelix~error:notfound"
simple_urlengine_https=
significantFile=urls.xml
urlScript="/webgis/index.php"
urlScriptPath="/webgis/"
urlScriptName=index.php
urlScriptId=index
urlScriptIdenc=index
documentRoot="C:/webserver/Apache24/htdocs"
[simple_urlengine_entrypoints]
index="@classic"
xmlrpc="@xmlrpc"
jsonrpc="@jsonrpc"
admin="jacl2db~*@classic,jacl2db_admin~*@classic,jauthdb_admin~*@classic,master_admin~*@classic,admin~*@classic,jcommunity~*@classic"
[basic_significant_urlengine_entrypoints]
index=1
xmlrpc=1
jsonrpc=1
admin=1
[basic_significant_urlengine_aliases]
auth=jcommunity
[logger]
_all=
default=file
error=file
warning=file
notice=file
deprecated=
strict=file
debug=
sql=
soap=
metric=syslog
auth=
[fileLogger]
default=messages.log
error=errors.log
warning=errors.log
notice=errors.log
deprecated=errors.log
strict=errors.log
debug=debug.log
auth=messages.log
[memorylogger]
default=20
error=10
warning=10
notice=10
deprecated=10
strict=10
debug=20
sql=20
soap=20
[mailLogger]
email="root@localhost"
emailHeaders="Content-Type: text/plain; charset=UTF-8\nFrom: webmaster@yoursite.com\nX-Mailer: Jelix\nX-Priority: 1 (Highest)\n"
[syslogLogger]
facility=LOG_LOCAL7
ident="php-%sapi%-%domain%[%pid%]"
[stderrLogger]
[stdoutLogger]
[mailer]
webmasterEmail="gisforwaterandsanitation@gmail.com"
webmasterName=
mailerType=mail
hostname=
sendmailPath="/usr/sbin/sendmail"
filesDir="mails/"
smtpHost=localhost
smtpPort=25
smtpSecure=
smtpHelo=
smtpAuth=
smtpUsername=
smtpPassword=
smtpTimeout=10
copyToFiles=
debugModeEnabled=
debugReceiversType=1
debugReceivers=
debugReceiversWhiteList=
debugFrom=
debugFromName=
debugSubjectPrefix=
debugBodyIntroduction=
debugSmtpLevel=0
[acl]
driver=
[acl2]
driver=db
[sessions]
start=1
shared_session=
cookieSecure=
cookieHttpOnly=1
cookieLifetime=0
cookieSameSite=
name=
storage=
loadClasses=
[forms]
controls.datetime.input=menulists
controls.time.input=menulists
controls.datetime.months.labels=numbers
datepicker=default
datetimepicker=default
timepicker=
captcha=simple
captcha.simple.validator="\jelix\forms\Captcha\SimpleCaptchaValidator"
captcha.simple.widgettype=captcha
captcha.recaptcha.validator="\jelix\forms\Captcha\ReCaptchaValidator"
captcha.recaptcha.widgettype=recaptcha
[jforms_builder_html]
[jquery]
jquery="/webgis/assets/js/jquery/jquery-3.5.1.min.js"
jqueryui.js[]="/webgis/assets/js/jquery/ui-1.11.4/jquery-ui.min.js"
jqueryui.css[]="/webgis/assets/js/jquery/ui-1.11.4/jquery-ui.min.css"
[datepickers]
default="/webgis/assets/jelix/js/jforms/datepickers/default/init.js"
default.js[]="/webgis/assets/js/jquery/ui-1.11.4/jquery-ui.min.js"
default.js[]="/webgis/assets/jelix/js/jforms/datepickers/default/ui.en.js"
default.js[]="/webgis/assets/jelix/jquery/ui/i18n/jquery.ui.datepicker-$lang.js"
default.js[]="/webgis/assets/jelix/js/jforms/datepickers/default/ui.$lang.js"
default.css[]="/webgis/assets/js/jquery/ui-1.11.4/jquery-ui.min.css"
[datetimepickers]
default="/webgis/assets/jelix/js/jforms/datepickers/default/init.js"
default.js[]="/webgis/assets/js/jquery/ui-1.11.4/jquery-ui.min.js"
default.js[]="/webgis/assets/jelix/js/jforms/datepickers/default/ui.en.js"
default.js[]="/webgis/assets/jelix/jquery/ui/i18n/jquery.ui.datepicker-$lang.js"
default.js[]="/webgis/assets/jelix/js/jforms/datepickers/default/ui.$lang.js"
default.css[]="/webgis/assets/js/jquery/ui-1.11.4/jquery-ui.min.css"
[timepickers]
[htmleditors]
default.engine.name=ckeditor
default.engine.file[]="/webgis/assets/js/ckeditor5/ckeditor.js"
default.engine.file[]="/webgis/assets/js/ckeditor5/translations/$lang.js"
default.engine.file[]="/webgis/assets/js/ckeditor5/translations/$lang.js"
default.engine.file[]="/webgis/assets/js/ckeditor5/translations/$lang.js"
default.engine.file[]="/webgis/assets/js/ckeditor5/translations/$lang.js"
default.config="/webgis/assets/js/ckeditor5/ckeditor_lizmap.js"
default.skin.default=
wymbasic.engine.name=wymeditor
wymbasic.engine.file[]="/webgis/assets/jelix/jquery/jquery.js"
wymbasic.engine.file[]="/webgis/assets/jelix/wymeditor/jquery.wymeditor.js"
wymbasic.config="/webgis/assets/jelix/js/jforms/htmleditors/wymeditor_basic.js"
wymbasic.skin.default="/webgis/assets/jelix/wymeditor/skins/default/skin.css"
ckdefault.engine.name=ckeditor
ckdefault.engine.file[]="/webgis/assets/js/ckeditor5/ckeditor.js"
ckdefault.config="/webgis/assets/js/ckeditor5/ckeditor_ckdefault.js"
ckfull.engine.name=ckeditor
ckfull.engine.file[]="/webgis/assets/js/ckeditor5/ckeditor.js"
ckfull.config="/webgis/assets/js/ckeditor5/ckeditor_ckfull.js"
ckbasic.engine.name=ckeditor
ckbasic.engine.file[]="/webgis/assets/js/ckeditor5/ckeditor.js"
ckbasic.config="/webgis/assets/js/ckeditor5/ckeditor_ckbasic.js"
ckfullandmedia.engine.name=ckeditor
ckfullandmedia.engine.file[]="/webgis/assets/js/ckeditor5/ckeditor.js"
ckfullandmedia.config="/webgis/assets/js/ckeditor5/ckeditor_ckfullandmedia.js"
[wikieditors]
default.engine.name=wr3
default.wiki.rules=wr3_to_xhtml
default.engine.file="/webgis/assets/jelix/markitup/jquery.markitup.js"
default.config.path="/webgis/assets/jelix/markitup/sets/wr3/"
default.image.path="/webgis/assets/jelix/markitup/sets/wr3/images/"
default.skin="/webgis/assets/jelix/markitup/skins/simple/style.css"
[zones]
disableCache=
[classbindings]
[imagemodifier]
src_url=
src_path=
cache_url=
cache_path=
[rootUrls]
jelix.cache="cache/"
[langToLocale]
cs=cs_CZ
de=de_DE
el=el_GR
en=en_US
es=es_ES
eu=eu_ES
fi=fi_FI
fr=fr_FR
gl=gl_ES
hu=hu_HU
it=it_IT
ja=ja_JP
nl=nl_NL
pl=pl_PL
pt=pt_BR
ro=ro_RO
ru=ru_RU
sl=sl_SI
sv=sv_SE
sk=sk_SK
[disabledListeners]
[coordplugin_auth]
persistant_crypt_key=YGsxIznIxqgEZc38ptGDVN0d688NQ6
[recaptcha]
sitekey=
secret=
theme=
type=
size=
tabindex=
[coordplugin_jacl2]
on_error=2
error_message="jelix~errors.acl.action.right.needed"
on_error_action="jcommunity~login:index"
[coordplugin_autolocale]
enableUrlDetection=1
urlParamNameLanguage=lang
useDefaultLanguageBrowser=1
[jcommunity]
loginResponse=htmlauth
registrationEnabled=
resetPasswordEnabled=1
resetAdminPasswordEnabled=1
verifyNickname=
useJAuthDbAdminRights=1
[_allBasePath]
0="C:\webserver\lizmap\prod\release_3_3\lib/jelix-admin-modules/"
1="C:\webserver\lizmap\prod\release_3_3\lib/jelix-modules/"
2="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/"
3="C:\webserver\lizmap\prod\release_3_3\lizmap/lizmap-modules/"
4="C:\webserver\lizmap\prod\release_3_3\lizmap/vendor/jelix/jcommunity-module/modules/"
5="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/auth/"
6="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/coord/"
7="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/db/"
8="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formbuilder/"
9="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/"
10="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/tpl/"
11="C:\webserver\lizmap\prod\release_3_3\lib/jelix-plugins/cache/"
12="C:\webserver\lizmap\prod\release_3_3\lib/jelix-plugins/kvdb/"
13="C:\webserver\lizmap\prod\release_3_3\lib/jelix-modules/jacl2db//plugins/acl2/"
14="C:\webserver\lizmap\prod\release_3_3\lib/jelix-modules/jacl2//plugins/coord/"
15="C:\webserver\lizmap\prod\release_3_3\lib/jelix-modules/jacl2//plugins/tpl/"
[_modulesPathList]
jacl2db_admin="C:\webserver\lizmap\prod\release_3_3\lib/jelix-admin-modules/jacl2db_admin/"
jauthdb_admin="C:\webserver\lizmap\prod\release_3_3\lib/jelix-admin-modules/jauthdb_admin/"
master_admin="C:\webserver\lizmap\prod\release_3_3\lib/jelix-admin-modules/master_admin/"
jacl2="C:\webserver\lizmap\prod\release_3_3\lib/jelix-modules/jacl2/"
jacl2db="C:\webserver\lizmap\prod\release_3_3\lib/jelix-modules/jacl2db/"
action="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/action/"
admin="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/admin/"
dataviz="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/dataviz/"
dynamicLayers="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/dynamicLayers/"
filter="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/filter/"
lizmap="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/"
proj4php="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/proj4php/"
view="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/view/"
jcommunity="C:\webserver\lizmap\prod\release_3_3\lizmap/vendor/jelix/jcommunity-module/modules/jcommunity/"
jelix="C:\webserver\lizmap\prod\release_3_3\lib/jelix/core-modules/jelix/"
[_pluginsPathList_auth]
class="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/auth/class/"
db="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/auth/db/"
ldap="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/auth/ldap/"
lds="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/auth/lds/"
[_pluginsPathList_cache]
db="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/cache/db/"
memcache="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/cache/memcache/"
memcache22="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/cache/memcache22/"
redis_ext="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/cache/redis_ext/"
redis_php="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/cache/redis_php/"
file="C:\webserver\lizmap\prod\release_3_3\lib/jelix-plugins/cache/file/"
[_pluginsPathList_configcompiler]
debugbar="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/configcompiler/debugbar/"
jquery="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/configcompiler/jquery/"
locales="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/configcompiler/locales/"
nsautoloader="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/configcompiler/nsautoloader/"
responses="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/configcompiler/responses/"
session="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/configcompiler/session/"
[_pluginsPathList_coord]
auth="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/coord/auth/"
autolocale="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/coord/autolocale/"
history="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/coord/history/"
traceexec="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/coord/traceexec/"
zendframework="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/coord/zendframework/"
lizmap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/coord/lizmap/"
jacl2="C:\webserver\lizmap\prod\release_3_3\lib/jelix-modules/jacl2//plugins/coord/jacl2/"
[_pluginsPathList_db]
mssql="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/db/mssql/"
mysql="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/db/mysql/"
mysqli="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/db/mysqli/"
oci="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/db/oci/"
pgsql="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/db/pgsql/"
sqlite="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/db/sqlite/"
sqlite3="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/db/sqlite3/"
sqlsrv="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/db/sqlsrv/"
[_pluginsPathList_debugbar]
defaultlog="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/debugbar/defaultlog/"
sessiondata="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/debugbar/sessiondata/"
soaplog="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/debugbar/soaplog/"
sqllog="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/debugbar/sqllog/"
[_pluginsPathList_formbuilder]
html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formbuilder/html/"
htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formbuilder/htmlbootstrap/"
[_pluginsPathList_formwidget]
autocompleteajax_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/autocompleteajax_html/"
autocomplete_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/autocomplete_html/"
button_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/button_html/"
captcha_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/captcha_html/"
checkboxes_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/checkboxes_html/"
checkbox_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/checkbox_html/"
choice_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/choice_html/"
color_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/color_html/"
datetime_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/datetime_html/"
date_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/date_html/"
group_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/group_html/"
html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/html/"
htmleditor_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/htmleditor_html/"
imageupload_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/imageupload_html/"
input_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/input_html/"
listbox_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/listbox_html/"
menulist_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/menulist_html/"
output_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/output_html/"
radiobuttons_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/radiobuttons_html/"
recaptcha_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/recaptcha_html/"
reset_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/reset_html/"
secretconfirm_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/secretconfirm_html/"
secret_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/secret_html/"
submit_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/submit_html/"
textarea_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/textarea_html/"
time_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/time_html/"
upload2_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/upload2_html/"
upload_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/upload_html/"
wikieditor_html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/formwidget/wikieditor_html/"
button_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/button_htmlbootstrap/"
captcha_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/captcha_htmlbootstrap/"
checkboxes_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/checkboxes_htmlbootstrap/"
checkbox_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/checkbox_htmlbootstrap/"
choice_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/choice_htmlbootstrap/"
datetime_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/datetime_htmlbootstrap/"
date_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/date_htmlbootstrap/"
group_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/group_htmlbootstrap/"
htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/htmlbootstrap/"
htmleditor_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/htmleditor_htmlbootstrap/"
input_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/input_htmlbootstrap/"
listbox_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/listbox_htmlbootstrap/"
menulist_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/menulist_htmlbootstrap/"
output_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/output_htmlbootstrap/"
radiobuttons_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/radiobuttons_htmlbootstrap/"
recaptcha_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/recaptcha_htmlbootstrap/"
reset_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/reset_htmlbootstrap/"
secretconfirm_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/secretconfirm_htmlbootstrap/"
secret_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/secret_htmlbootstrap/"
submit_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/submit_htmlbootstrap/"
textarea_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/textarea_htmlbootstrap/"
upload_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/upload_htmlbootstrap/"
wikieditor_htmlbootstrap="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/formwidget/wikieditor_htmlbootstrap/"
[_pluginsPathList_htmlresponse]
debugbar="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/htmlresponse/debugbar/"
minify="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/htmlresponse/minify/"
[_pluginsPathList_jforms]
html="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/jforms/html/"
htmllight="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/jforms/htmllight/"
[_pluginsPathList_kvdb]
db="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/kvdb/db/"
dba="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/kvdb/dba/"
file2="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/kvdb/file2/"
memcache="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/kvdb/memcache/"
redis_ext="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/kvdb/redis_ext/"
redis_php="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/kvdb/redis_php/"
file="C:\webserver\lizmap\prod\release_3_3\lib/jelix-plugins/kvdb/file/"
[_pluginsPathList_logger]
firebug="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/logger/firebug/"
legacysyslog="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/logger/legacysyslog/"
soapfile="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/logger/soapfile/"
[_tplpluginsPathList_common]
0="C:\webserver\lizmap\prod\release_3_3\lib/jelix-modules/jacl2//plugins/tpl/common/"
1="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/tpl/common/"
2="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/tpl/common/"
[_tplpluginsPathList_html]
0="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/tpl/html/"
1="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/tpl/html/"
[_tplpluginsPathList_ltx2pdf]
0="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/tpl/ltx2pdf/"
[_tplpluginsPathList_text]
0="C:\webserver\lizmap\prod\release_3_3\lizmap/plugins/tpl/text/"
1="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/tpl/text/"
[_tplpluginsPathList_xml]
0="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/tpl/xml/"
[_pluginsPathList_urls]
basic_significant="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/urls/basic_significant/"
significant="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/urls/significant/"
simple="C:\webserver\lizmap\prod\release_3_3\lib\jelix/plugins/urls/simple/"
[_pluginsPathList_acl2]
db="C:\webserver\lizmap\prod\release_3_3\lib/jelix-modules/jacl2db//plugins/acl2/db/"
dbcache="C:\webserver\lizmap\prod\release_3_3\lib/jelix-modules/jacl2db//plugins/acl2/dbcache/"
[_autoload_class]
jAcl2="C:\webserver\lizmap\prod\release_3_3\lib/jelix-modules/jacl2/classes/jAcl2.class.php"
jIAcl2Driver="C:\webserver\lizmap\prod\release_3_3\lib/jelix-modules/jacl2/classes/jIAcl2Driver.iface.php"
jIAcl2Driver2="C:\webserver\lizmap\prod\release_3_3\lib/jelix-modules/jacl2/classes/jIAcl2Driver2.iface.php"
lizmap="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/lizmap.class.php"
lizmapLogItem="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/lizmapLogItem.class.php"
lizmapLogConfig="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/lizmapLogConfig.class.php"
lizmapOGCRequest="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/lizmapOGCRequest.class.php"
qgisProject="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/qgisProject.class.php"
lizmapProject="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/lizmapProject.class.php"
lizmapProxy="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/lizmapProxy.class.php"
lizmapRepository="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/lizmapRepository.class.php"
lizmapWMSRequest="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/lizmapWMSRequest.class.php"
lizmapWFSRequest="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/lizmapWFSRequest.class.php"
lizmapWMTSRequest="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/lizmapWMTSRequest.class.php"
lizmapTiler="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/lizmapTiler.class.php"
lizmapWkt="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/lizmapWkt.class.php"
qgisMapLayer="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/qgisMapLayer.class.php"
qgisVectorLayerDatasource="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/qgisVectorLayerDatasource.class.php"
qgisVectorLayer="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/qgisVectorLayer.class.php"
qgisForm="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/qgisForm.class.php"
qgisFormControl="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/qgisFormControl.class.php"
qgisAttributeEditorElement="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/qgisAttributeEditorElement.class.php"
qgisLayerDbFieldsInfo="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/qgisLayerDbFieldsInfo.class.php"
qgisFormControlsInterface="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/qgisFormControlsInterface.php"
lizmapServices="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/lizmapServices.class.php"
qgisFormValueRelationDynamicDatasource="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/qgisFormValueRelationDynamicDatasource.class.php"
qgisExpressionUtils="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/classes/qgisExpressionUtils.class.php"
lizmapMainViewItem="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/view/classes/lizmapMainViewItem.class.php"
lizmapMapDockItem="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/view/classes/lizmapMapDockItem.class.php"
[_autoload_namespace]
[_autoload_classpattern]
regexp[]="/^jAcl2Db/"
path[]="C:\webserver\lizmap\prod\release_3_3\lib/jelix-modules/jacl2db/classes/|.class.php"
[_autoload_includepathmap]
[_autoload_includepath]
[_autoload_namespacepathmap]
Lizmap="C:\webserver\lizmap\prod\release_3_3\lizmap/modules/lizmap/lib|.php"
Jelix\JCommunity="C:\webserver\lizmap\prod\release_3_3\lizmap/vendor/jelix/jcommunity-module/modules/jcommunity/lib|.php"
PhpRedis="C:\webserver\lizmap\prod\release_3_3\lib/jelix/core-modules/jelix/../../../php5redis/lib|.php"
[_autoload_autoloader]
