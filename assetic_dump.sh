#!/bin/bash

{

echo;
echo -n "UPDATE.SH -- ";
date;

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )";

pushd "$DIR";

php app/console assetic:dump --env=prod --no-debug; # write assets into real locations

popd;

echo -n "END UPDATE.SH -- ";
date;

} >> update.log;