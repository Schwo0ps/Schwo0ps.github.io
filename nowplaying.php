<?php
exec('mpc -q play');
echo exec('mpc current');
if (file_exists('scripts/pid')) {
  exec('kill `cat scripts/pid`');
}
exec('scripts/update > /dev/null &');
?>
