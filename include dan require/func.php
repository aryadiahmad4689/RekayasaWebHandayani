<?php

function getInputNilai(){
    return "  <select name='nilai[]'>
        <option value='A'>A</option>
        <option value='B'>B</option>
        <option value='C'>C</option>
        <option value='D'>D</option>
        <option value='E'>E</option>
    </select>";
}

function getInputSks(){
    return "<input type='text' name='sks[]' maxlength='1' size='1'>";
}

function getNilaiAngka($nilaiHuruf){
    if ($nilaiHuruf == "A") return 4;
    elseif ($nilaiHuruf == "B") return 3;
    elseif ($nilaiHuruf == "C") return 2;
    elseif ($nilaiHuruf == "D") return 1;
    elseif ($nilaiHuruf == "C") return 0;
}

function getIPK($nilai, $sks){
    $totalSks =0;
    $totalSksNilai =0;
    for ($i=0; $i<count($nilai); $i++){
        $totalSks += $sks[$i];
        $totalSksNilai += $sks[$i]*getNilaiAngka($nilai[$i]);
    }
    $ipk = $totalSksNilai / $totalSks;
    return $ipk;
}