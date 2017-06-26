<?php
  function decodeData($gender, $status, $tree) {
    /*Decode gender : 0 = Perempuan; 1 = Laki-laki
              status : 0 = Meninggal; 1 = Hidup
              tree : 0 = anak 0x = anakmenantu
                      1% = cucu ; 1%(x,y,z) = cucu Menantu
                      2% = cicit ; 2%(x,y,z) = cicit menantu
                      3---dst--- : to be update as time goes
    */
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
  function getRelatives($nama_q) {
    /*get a parameter of name, and find relatives of that name
      return array of nana_relative => tree_relative
    */
    //init an array
    $relatives_array = array();
  }

  function decodeRelatives($q_tree, $q_cabang) {
    //get data dari query nama


  }
?>
