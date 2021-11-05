<?php
#Error
function form_error($label_field) {
    global $error;
    if (!empty($error[$label_field])) {
        return $error[$label_field];
    }
}
#Set value
function setvalue($label_field) {
    global $$label_field;
    if (!empty($$label_field)) {
        return $$label_field;
    }
}