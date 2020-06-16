<?php
// author: C.A.D. BONDJE DOUE
// licence: IGKDEV - Balafon @ 2019
//desc: framework requirement

$c=igk_cmp_version("7.0", phpversion());
igk_wln($c);
if($c){
    igk_wln("require php version 7.0+");
}
$requirements["php7.0+"]=function(){
    $c=igk_cmp_version("7.0", phpversion());
    if($c){
        return false;
    }
};
$requirements["curl"]=function(){
    if(method_exists("curl_init"))
        return 1;
};
$requirements["mysqli"]=function(){
    return false;
};
$errors=[];
foreach($requirements as $k=>$v){
    if(!$v()){
        igk_wln("Balafon Require : ".$k);
    }
}