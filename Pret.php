<?php  session_start(); 
?>
<style>
table {
  font-family: arial, sans-serif;
  border-collapse: collapse;
  width: 90%;
}

td, th {
  border: 1px solid #dddddd;
  text-align: left;
  padding: 8px;
}

tr:nth-child(even) {
  background-color: #dddddd;
}
</style>

<table>

<tr>
<th>Hotel</th>
<th>Check In</th>
<th>Check Out</th>
<th>Numar Adulti</th>
<th>Numar Copii</th>
<th>Numar Camere</th>
<th>Pret</th>
<th>Anulare rezervare</th>
</tr>

<tr>
<td><?php echo $row['Nume'];?></td>
<td><?php echo $CheckIn;?></td>
<td><?php echo $CheckOut;?></td>
<td><?php echo $NrAdult;?></td>
<td><?php echo $NrChildren;?></td>
<td><?php echo $NrRooms;?></td>
<td><?php echo $Pret_Total;?></td>
<td><button type="submit" name="AnulareRezervare">Anuleaza Rezervarea</button></td>;
</tr>

<tr>Ana<tr>


</table>
