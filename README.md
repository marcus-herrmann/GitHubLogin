# GitHub Login

Based on @apeisa's ProcessWire module http://github.com/apeisa/FacebookLogin

===

Let users use GitHubs OAuth2 to create and log in users based on their GitHub Account. 
This could both serve as an exclusive or additional way to register/login users, depending on your site. 
If you chose the latter be sure to check/assign the correct user roles.

When installed, the module creates:

* A user role called `github-user`
* A page called `github-login`
* A template called `github-login`
* A field called `github_id` associated to the user, pointing at to the GitHub User ID

If a user signs up via GitHub Login for the first time, a ProcessWire user is created. This user's name is the GitHub 
user's nickname/their url. 

The module tries to get the GitHub user's email and set it as eMail address of the PW user.
This, however, will only succeed if the GitHub user has set their email to 'public'.

## Config

1. Before accessing /github-user/ for the first time be sure having copied the file github-login.php to your /site/templates folder.
2. Create a new app from GitHub Developers site: https://github.com/settings/applications
3. Go to the module settings and add  GitHub Client ID and Client Secret
4. Optional: Change the /github-login/ page url
5. Start logging in by visiting the www.yoursite.com/github-login/


