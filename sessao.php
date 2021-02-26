<?php
$id = session_id();
if ($id == NULL) {
   session_start();
}
?>