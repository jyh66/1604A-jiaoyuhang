<php>
    function sixOne($n,$m)
    {
    echo "<pre>";
    $a = 1;
    $arr = range(0,$n-1);
    while(true){
        if(count($arr)==1){
            return array_keys($arr)[0];
        }
        foreach($arr as $key=>$val){
            $a++;
            if($a==$m-1){
                unset($arr[$key]);
                $a=0;
            }
        }
    }
}

</php>




<php>
    function childeren($n,$m){
    for($i = 0;$i < $n;$i++){
    $arr[] = $i;
    }
    $o = 1;
    while(ture){
    if(count($arr) == 1){
    return array_keys($arr)[0];
    }
    foreach($arr as $key =>$val){
    $o++;
    if($o == $m){
    unset($arr[$key]);
    $o = 1;
    }
    }
    }
    }
    echo children(10,20);
</php>
