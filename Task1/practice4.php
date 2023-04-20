	


<html>

<style>
table, th, td {
border: 1px solid black;
}
</style>

<body>

<table>
<?php
$size = $_REQUEST['size'];

for ($i = 0; $i < $size+1; $i++)
{

	echo "<tr>";

        if($i == 0)
        {
                echo "<td> </td>";
                for($j = 1; $j < $size+1; $j++)
                {
                        echo "<td> $j </td>";
                }
        }

        else
        {
                echo "<td> $i </td>";
                for($j = 1; $j < $size+1; $j++)
                {
                        echo "<td>" .$j*$i. "</td>";
                }
        }

        echo "</tr>";

}
?>

</table>
</body>

</html>
            
