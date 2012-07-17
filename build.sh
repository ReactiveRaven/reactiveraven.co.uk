#!/bin/bash
./server/buildscripts/clear_cache.sh &&
./server/buildscripts/assetic_dump.sh

exit $?;