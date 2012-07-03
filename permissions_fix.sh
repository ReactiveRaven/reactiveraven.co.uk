#!/bin/bash

{

echo;
echo -n "PERMISSIONS_FIX.SH -- ";
date;

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )";

pushd "$DIR";

chmod -R ugo+rw app/cache;
chmod -R ugo+rw app/logs;
chmod -R ugo+rw web/css;
chmod -R ugo+rw web/js;
chmod -R ugo+rw app/bootstrap.php.cache;

popd;

echo -n "END PERMISSIONS_FIX.SH -- ";
date;

} >> update.log;
