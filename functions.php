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

  function decodeRelatives($main_tree, $array_nama, $array_tree) {
    /*/get main tree from sql query and then pass to this function
     if index 1 of main_tree is equal to array's member, then that member is as level as main_tree's
        then if index 2 is equal to member's then that member is a bro/sis
          ---if gender 
        else if all chars are the same but one has additional x,y,or z then that member is spouse of main_tree's
    else if index 1 of main_tree is one less than member, then main_tree is member's parent
    else if index 1 of main_Tree is one more than member's, then the main_tree is member's child
    else if index 1 of main_Tree is more than one less/more, then give other case :
      - case incrementation of index 1 more than 1;
        - case in/dec of index 1 is 2 = "cucu" or "mbah"
        - case in/dec of index 1 is 3 = "cicit" or "?"
    return an array of given string

*/
  $array_relation = array();
  $count = count($array_nama, $array_tree);
  for ($i = 0; $i< $count; $i++) {
    $a_nama = $array_nama[$i];
    $a_tree = $array_tree[$i];
    if ($main_tree[1] == $a_tree[1]) {

    } 
    else if ($main_tree[1]==$a_tree[1]+1) {

    }
    else if ($main_tree[2]==$a_tree[1]-1) {

    }
    else if ($main_tree[2]==$a_tree[2]-1) {
      
    }

  }

  }

  function printArrayOfRelatives($nama, $array_nama, $array_relation) {

  }
?>