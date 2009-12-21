<?php

	# Set the theme for your project's web pages.
	# See the Committer Tools "How Do I" for list of themes
	# https://dev.eclipse.org/committers/
	# Optional: defaults to system theme 
	$theme = "";

	# Define your project-wide Nav bars here.
	# Format is Link text, link URL (can be http://www.someothersite.com/), target (_self, _blank), level (1, 2 or 3)
	# these are optional
  $Nav->addNavSeparator("JGit",   "/jgit/");
  $Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Source", "http://egit.eclipse.org/egit/parallelip-jgit.git", "_self", 1);
  $Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Contributor Guide", "http://wiki.eclipse.org/EGit/Contributor_Guide", "_self", 1);

	$Nav->addNavSeparator("Users", "/jgit/", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Downloads", "downloads.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;Installation", "install.php", "_self", 1);
	$Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;FAQ (wiki)", "http://wiki.eclipse.org/index.php/EGit/FAQ", "_self", 1);

  $Nav->addNavSeparator("About",   "/jgit/");
  $Nav->addCustomNav("&nbsp;&nbsp;&nbsp;&nbsp;About This Project", "/projects/project_summary.php?projectid=technology.jgit", "_self", 1);

?>
