<?php
class general extends connexio{
    var $conn;
    
    function general($ruta="../../"){
        parent::connexio($ruta);
    }
    
    
    function llistat_autors(){
        $sql="SELECT AUT_IDAUTOR FROM AUTORS";
        $rs= $this->DB_Select($sql);
        $i=i;
        while ($rs_f= $this->DB_Fetch($rs)){
            $aut=new autor();
            $aut->inicialitza($rs_f['AUT_IDAUTOR']);
            $items[$i]=serializa($aut);
            $i++;
        }
        return $items;
    }
}
?>
