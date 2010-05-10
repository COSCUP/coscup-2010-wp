<?php

echo 'Getting file from Github ...';

exec(
        'wget http://github.com/timdream/coscup-2010-wp/tarball/master -O - | tar -xz;'
		. 'mv -f timdream-coscup-2010-wp*/assets/* ./assets/;'
		. 'rmdir timdream-coscup-2010-wp*/assets;'
        . 'mv -f timdream-coscup-2010-wp*/* ./;'
		. 'rmdir timdream-coscup-2010-wp*;'
		. 'sed -i -e \'s/\/\/REMOVEME\/\///g\' ./assets/script.js'
);
