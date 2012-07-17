#!/bin/bash

{

echo;
echo -n "PERMISSIONS_FIX.SH -- ";
date;

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )";
user="`cat $DIR/../../../vars/localuser`";
group="`cat $DIR/../../../vars/localgroup`";

pushd "$DIR/../../";

find . \! -group $group -o \! -user $user | grep -v "\.git" | while read line;
do
  chown -v $user:$group "$line";
done;

popd;

echo -n "END PERMISSIONS_FIX.SH -- ";
date;

} >> update.log;