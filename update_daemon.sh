#!/bin/bash
/var/www/framanews/ttrss2/update_daemon2.php --tasks 4 --interval 120 >> /var/log/framanews/framanews2.log 2>&1
