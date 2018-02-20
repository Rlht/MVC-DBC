<?php
    
    //var_dump ($this->DBsNames);    
    $array = $this->DBsNames;

?>
<style type="text/css">
    table {
        border-collapse: collapse;
        border-spacing:0;
        border-style:solid;
        border-color:#aaa;
        
    }
    thead {       
        vertical-align:top;
        border-style:solid;
        color:#fff;
        background-color:#f38630;
        text-align:center;
        vertical-align:top;
    }
    tbody tr {
        border-top-style: dashed;
        border-top-width: 1px;       
    }
    tbody tr th {
        padding: 4px;
    };
</style>
<table>
  <thead>
    <tr>
        <th>name</th>
        <th>host</th>
        <th>user</th>
        <th>password</th>
    </tr>
  </thead>
  <tbody>
 <?php foreach ($array["db"] as $rows) {
     echo "<tr>";
        foreach ($rows as $col) {
            echo "<th>";            
            if (!empty($col)) {
                echo $col;
            } else {
                echo "BRAK";
            }
            echo "</th>";
        }
     echo "</tr>";
 }
      
      
?>
  </tbody>
</table>



