<form action="" method="post">
    <table>
        <tr>
            <td>Enter the first Number:</td>
            <td><input type="number" name="num1"></td>
        </tr>
        <tr>
            <td>Enter the second Number:</td>
            <td><input type="number" name="num2"></td>
        </tr>
        <tr>
            <td></td>
            <td><input type="submit" name="calculator" value="calculator"></td>
        </tr>
    </table>
</form>
<?php
if(isset($_POST['calculation'])){
$numone=$_POST['num1'];
$numtwo=$_POST['num2'];
if(empty($numone)or empty($numtwo)){
    echo "<span style='color:#EE6554'>Field must not be empty.</span>";
}
}
?>