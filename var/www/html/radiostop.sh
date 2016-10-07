#/bin/bash
echo data |sudo -S  ps axf | grep ./pifm | grep -v grep | awk '{print "kill -9 " $1}' | sh
