<?php

function printException(Throwable $th) {
    echo $th->getMessage();
    echo '<pre>' . $th->getTraceAsString() . '</pre>';
}