#!/bin/bash

{

echo;
echo -n "UPDATE.SH -- ";
date;

DIR="$( cd "$( dirname "${BASH_SOURCE[0]}" )" && pwd )";

pushd "$DIR";

php app/console cache:clear --env=prod; # clear cache

popd;

echo -n "END UPDATE.SH -- ";
date;

} >> update.log;