<?php  																														require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/app.class.php");	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/nav.class.php"); 	require_once($_SERVER['DOCUMENT_ROOT'] . "/eclipse.org-common/system/menu.class.php"); 	$App 	= new App();	$Nav	= new Nav();	$Menu 	= new Menu();		include($App->getProjectCommon());    # All on the same line to unclutter the user's desktop'
	include '../version.php';

	$pageTitle 		= "JGit - Download";
	$maven_repo		= "https://repo.eclipse.org/content/groups/releases/";

	$html  = '<div id="midcolumn">';
	$html .= file_get_contents('_index.html');
	$html .= "</div>";

	$html = preg_replace('/@VERSION@/', $version, $html);
	$html = preg_replace('/@API_VERSION@/', $api_version, $html);
	$html = preg_replace('/@MAVEN_REPO@/', $maven_repo, $html);

	# Generate the web page
	$App->generatePage($theme, $Menu, $Nav, $pageAuthor, $pageKeywords, $pageTitle, $html);
?>
