<?php 
//Função recebe datas inicio/fim e gera uma array do intervalo
function criarIntervaloDatas($strInicio,$strFinal) {
    $intervaloDatas=array();

    $daData=mktime(1,0,0,substr($strInicio,5,2), substr($strInicio,8,2),substr($strInicio,0,4));
    $paraData=mktime(1,0,0,substr($strFinal,5,2), substr($strFinal,8,2),substr($strFinal,0,4));

    if ($paraData>=$daData)
    {
        array_push($intervaloDatas,date('d/m/Y',$daData));
        while ($daData<$paraData)
        {
            $daData+=86400;
            array_push($intervaloDatas,date('d/m/Y',$daData));
        }
    }
    else {
        echo "Valores incorretos!";
    }
    return $intervaloDatas;
}