[![](https://git.framasoft.org/assets/logo-black-f52905a40830b30aa287f784b537c823.png)](https://git.framasoft.org)

![English:](https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Flag_of_the_United_Kingdom.svg/20px-Flag_of_the_United_Kingdom.svg.png) **Framasoft uses GitLab** for the development of its free softwares. Our Github repositories are only mirrors.
If you want to work with us, **fork us on [git.framasoft.org](https://git.framasoft.org)**. (no registration needed, you can sign in with your Github account)

![Français :](https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/20px-Flag_of_France.svg.png) **Framasoft utilise GitLab** pour le développement de ses logiciels libres. Nos dépôts Github ne sont que des mirroirs.
Si vous souhaitez travailler avec nous, **forkez-nous sur [git.framasoft.org](https://git.framasoft.org)**. (l'inscription n'est pas nécessaire, vous pouvez vous connecter avec votre compte Github)
* * *

Quota
=====

Quota plugin for Framanews (Tiny Tiny RSS)
https://github.com/framasoft/framanews_quota.git

Licensed under GNU GPL version 2

Copyright (c) 2013 Luc Didry

## Requirements

* tt-rss v1.9 or be working from trunk at:
https://github.com/gothfox/Tiny-Tiny-RSS

##Install:
Go to your ttrss dir and:
```shell
cd plugins
git clone https://github.com/framasoft/framanews_quota.git
```

Enable plugin in config.php and put:

```php
define('FEED_QUOTA', 100);
```

in your config.php;