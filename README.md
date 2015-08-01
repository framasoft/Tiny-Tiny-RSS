[![](https://git.framasoft.org/assets/logo-black-f52905a40830b30aa287f784b537c823.png)](https://git.framasoft.org)

![English:](https://upload.wikimedia.org/wikipedia/commons/thumb/a/ae/Flag_of_the_United_Kingdom.svg/20px-Flag_of_the_United_Kingdom.svg.png) **Framasoft uses GitLab** for the development of its free softwares. Our Github repositories are only mirrors.
If you want to work with us, **fork us on [git.framasoft.org](https://git.framasoft.org)**. (no registration needed, you can sign in with your Github account)

![Français :](https://upload.wikimedia.org/wikipedia/commons/thumb/c/c3/Flag_of_France.svg/20px-Flag_of_France.svg.png) **Framasoft utilise GitLab** pour le développement de ses logiciels libres. Nos dépôts Github ne sont que des mirroirs.
Si vous souhaitez travailler avec nous, **forkez-nous sur [git.framasoft.org](https://git.framasoft.org)**. (l'inscription n'est pas nécessaire, vous pouvez vous connecter avec votre compte Github)
* * *

Tiny Tiny RSS
=============

Web-based news feed aggregator, designed to allow you to read news from 
any location, while feeling as close to a real desktop application as possible.

http://tt-rss.org

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program.  If not, see <http://www.gnu.org/licenses/>.

Copyright (c) 2005 Andrew Dolgov (unless explicitly stated otherwise).

Uses Silk icons by Mark James: http://www.famfamfam.com/lab/icons/silk/

Modifications by Framasoft
==========================

We translated some hard-coded strings, like the subscription mail.

We added some themes.

We added some plugins as git submodules.

To use our fork, do as follows:

```
git clone https://git.framasoft.org/framasoft/framanews_ttrss.git framanews
cd framanews
git submodule init
git submodule update
```

Then, you can follow the official installation guide at <https://tt-rss.org/gitlab/fox/tt-rss/wikis/InstallationNotes>
