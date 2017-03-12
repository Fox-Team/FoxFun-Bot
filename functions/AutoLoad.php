<?php
function include_all_php($folder){
    foreach (glob("{$folder}/*.php") as $filename)
    {
        include $filename;
    }
}
// include_all_php("folder name !");
?>