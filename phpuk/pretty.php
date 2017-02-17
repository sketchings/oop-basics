<?php
function exception_handler($exception) {
    echo '<span class="dfp">DFP:</span> '
        . $exception->getMessage()
        . ' in file ' . $exception->getFile()
        . ' on line ' . $exception->getLine()
        . "\n";
}

set_exception_handler('exception_handler');
function exception_error_handler($severity, $message, $file, $line) {
    if (!(error_reporting() & $severity)) {
        // This error code is not included in error_reporting
        return;
    }
    exception_handler( new ErrorException($message, 0, $severity, $file, $line) );
}
set_error_handler("exception_error_handler");
?>
<style>
    html{
        font-size: 3.5em;
    }
    .dfp {
        font-size: 4em;
        clear: both;
        margin: auto;
        text-align: center;
        width:100%;
    }
</style>