<?php
echo "<table>";
for ($rows=1; $rows <= 8; $rows++) { 
            echo "<tr>";
            for($cols=1 ; $cols <=8 ; $cols++)
            {
            $total=$rows+$cols;
            if($total%2==0)
            {
            echo "<td height=40px width=40px bgcolor=white border=1px></td>";
            }
            else
            {
            echo "<td height=40px width=40px bgcolor=black border=1px></td>";
            }
            }
            echo "</tr>";
      }

    echo "</table>";

?>
