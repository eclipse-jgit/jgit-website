<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "Nova";
	

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
	$Nav->setLinkList(array());
	$Nav->addNavSeparator("JGit", 	"/jgit");
	$Nav->addCustomNav("Download", "/jgit/download", "_self", 3);
	$Nav->addCustomNav("Documentation", "/jgit/documentation", "_blank", 3);
	$Nav->addCustomNav("Support", "/jgit/support", "_blank", 3);
	$Nav->addCustomNav("Getting Involved", "/jgit/developers", "_blank", 3);
	
	$pageKeywords	= "eclipse, egit, jgit, git, vcs";
	$pageAuthor		= "Chris Aniszczyk";
	$pageTitle 		= "JGit";

	$Menu->setMenuItemList(array());
	$Menu->addMenuItem("Home", "/jgit", "_self");
	$Menu->addMenuItem("Download", "/jgit/download", "_self");
	$Menu->addMenuItem("Documentation", "/jgit/documentation", "_self");
	$Menu->addMenuItem("Support", "/jgit/support", "_self");
	$Menu->addMenuItem("Developers", "/jgit/developers", "_self");
	
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="style.css"/>' . "\n\t");
	$App->AddExtraHtmlHeader('<link rel="stylesheet" type="text/css" href="style2.css"/>' . "\n\t");
	
	$App->Promotion = TRUE;
?>
