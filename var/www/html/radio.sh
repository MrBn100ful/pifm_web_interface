#/bin/bash

frecfile="/var/www/html/frec.txt"

musicfile="/var/www/html/music.txt"

echo "launch radio !"


cd /home/pifm/


sudo ./pifm $(<"$musicfile").wav $(<"$frecfile")
