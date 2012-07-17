#!/bin/bash
php ./server/buildscripts/install_files.php &&
./server/buildscripts/clear_cache.sh &&
./server/buildscripts/assetic_dump.sh &&
./server/buildscripts/permissions_fix.sh

exit $?;