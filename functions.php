<?php
  function decodeData($gender, $status, $tree) {
            /*fungsi1*/
            if ($gender == 1) {
              $gender_s = "Laki-laki";
            }
            else {
              $gender_s = "Perempuan";
            }
            if ($status == 0) {
              if ($gender == 1) {
                  $status_s = "Almarhum";     
              }
              else {
                $status_s = "Almarhumah";
              }
            }//endstatus
            else {
              $status_s = "Hidup";
            }
            if ($tree[0] == '0') {
              $tree_q = "Anak";
              if (strlen($tree)==2) {
                $tree_q = $tree_q . " Menantu";
              }
            }
            else if ($tree[0]=='1') {
              $tree_q = "Cucu";
              if ((strlen($tree)>=3) && ((mb_substr($tree,-1)=="x")||(mb_substr($tree,-1)=="y")||(mb_substr($tree,-1)=="x"))) {  
                $tree_q = $tree_q . " Menantu";
              }
            }
            else if ($tree[0]=='2') {
              $tree_q = "Cicit";
              if ((strlen($tree)>=4) && ((mb_substr($tree,-1)=="x")||(mb_substr($tree,-1)=="y")||(mb_substr($tree,-1)=="x"))) {   
                $tree_q = $tree_q . " Menantu";
              }
            }
            else {
              $tree_q = "Canggah";
            }

            return array($gender_s, $status_s, $tree_q);
}


?>