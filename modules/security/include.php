<?
if(!defined("CACHED_b_sec_iprule")) // define("CACHED_b_sec_iprule", 36000);
if(!defined("CACHED_b_sec_filter_mask")) // define("CACHED_b_sec_filter_mask", 36000);
if(!defined("CACHED_b_sec_frame_mask")) // define("CACHED_b_sec_frame_mask", 36000);
if(!defined("CACHED_b_sec_redirect_url")) // define("CACHED_b_sec_redirect_url", 36000);

global $DB, $DBSQLServerType;

if($DBSQLServerType == "NATIVE")
	require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/security/classes/".strtolower($DB->type)."/database_ms.php");
else
	require_once($_SERVER["DOCUMENT_ROOT"]."/bitrix/modules/security/classes/".strtolower($DB->type)."/database.php");

CModule::AddAutoloadClasses(
	"security",
	array(
		"CSecurityIPRule" => "classes/general/iprule.php",
		"CSecurityFilter" => "classes/general/filter.php",
		"CSecurityFilterBaseAuditor" => "classes/general/auditors/base_auditor.php",
		"CSecurityFilterXssAuditor" => "classes/general/auditors/xss_auditor.php",
		"CSecurityFilterSqlAuditor" => "classes/general/auditors/sql_auditor.php",
		"CSecurityFilterPathAuditor" => "classes/general/auditors/path_auditor.php",
		"CSecurityHtmlEntity" => "classes/general/html_entity.php",
		"CSecurityFilterMask" => "classes/general/filter_mask.php",
		"CSecurityXSSDetect" => "classes/general/post_filter.php",
		"CSecurityXSSDetectVariables" => "classes/general/post_filter_variables.php",
		"CSecuritySessionDB" => "classes/general/session_db.php",
		"CSecuritySessionMC" => "classes/general/session_mc.php",
		"CSecuritySession" => "classes/general/session.php",
		"CSecurityUser" => "classes/general/user.php",
		"CSecurityRedirect" => "classes/general/redirect.php",
		"CSecurityAntiVirus" => "classes/general/antivirus.php",
		"CSecurityFrame" => "classes/general/frame.php",
		"CSecurityFrameMask" => "classes/general/frame.php",
		"CSecurityEvent" => "classes/general/event.php",
		"CSecuritySystemInformation" => "classes/general/system_information.php",
		"CSecurityTemporaryStorage" => "classes/general/temporary_storage.php",
		"CSecuritySiteChecker" => "classes/general/site_checker.php",
		"CSecurityBaseTest" => "classes/general/tests/base_test.php",
		"CSecurityTestsPackage" => "classes/general/tests/tests_package.php",
		"CSecurityCriticalLevel" => "classes/general/tests/critical_level.php",
		"CSecurityCloudMonitorTest" => "classes/general/tests/cloud_monitor.php",
		"CSecurityCloudMonitorRequest" => "classes/general/tests/cloud_monitor_request.php",
		"CSecurityEnvironmentTest" => "classes/general/tests/environment.php",
		"CSecurityFilePermissionsTest" => "classes/general/tests/file_permissions.php",
		"CSecurityPhpConfigurationTest" => "classes/general/tests/php_configuration.php",
		"CSecuritySiteConfigurationTest" => "classes/general/tests/site_configuration.php",
		"CSecurityTaintCheckingTest" => "classes/general/tests/taint_checking.php"
	)
);

?>