<?php
exec('mpc -q play');
echo exec('mpc current');
if (file_exists('shell/pid')) {
  exec('kill `cat shell/pid`');
}
exec('shell/update > /dev/null &');
?>
