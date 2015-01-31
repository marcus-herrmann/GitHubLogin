<?php
/*
 * Template file for facebook login
 *
 * This should be copied to /site/templates/ folder if installation script cannot do it
 *
*/

$gh = $this->modules->get("GithubLogin");
if(!$gh) throw new Wire404Exception('Github module is not installed');
echo $gh->execute();

