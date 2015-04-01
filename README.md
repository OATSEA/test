# test
Testing use of git pull from php
and more

need to set SSH password to empty by:

```
ssh-keygen -p
```
Initial problem is update.php will run okay from the command line when ssh with the standard pi user but no joy if use it from the web server. Looks like it's a rights issue.

Initial research:

http://www.raspberrypi.org/forums/viewtopic.php?t=48659

"As Apache runs with user=www-data and group=www-data, setting the group of the script to www-data and adding group execute permissions should work (chmod g+x speech.sh)"

need to set this on the git.

Other suggestion is to use the full path to Git in the command

On Raspberry Pi git is located at: /usr/bin/git

But now need to change the git command to tell it destination:

See reference:

http://jerodsanto.net/2008/05/git-clone-pull-without-changing-directories/

suggestes:

An example pull in the already initiated local rails repository:

```
git-dir=/var/www/myapp/.git pull
```


