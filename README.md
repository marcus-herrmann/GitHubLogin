# GitHub Login

Based on apeisa's ProcessWire module http://github.com/apeisa/FacebookLogin

===

To adapt the original readme:

This module provides simple way to allow facebook login/registration for your site.

It creates a new page called /github-login/ (you can move/rename that later),
which does quick github login. It also adds github_id field to user template,
that is used to match with fb account.

## INSTALL INSTRUCTIONS

1. Install the module
2. Copy the github-login.php to your /site/templates/ folder
3. Create a new app from GitHub Developers site: https://github.com/settings/applications
4. Edit the module and add GitHub Client ID and Client Secret
5. Start logging in by visiting the www.yoursite.com/github-login/
