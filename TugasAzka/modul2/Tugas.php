<?php
     $K = '<table border=1>';
     for($x=1;$x<=5;$x++) {
      $K .= '<tr>';
      for($w=1;$w<=5;$w++) {
       $Wa = '';
          if(($x % 2 == 0 && $w % 2 == 0) || ($x % 2 == 1 && $w % 2 == 1)) {
              $Wa = 'black';
          }
       else $Wa = 'white';
          $K .= '<td width=30 height=30 bgcolor='.$Wa.'></td>';
      }
      $K .= '</tr>';
     }
     $K .= '</table>';
     print $K;
?>