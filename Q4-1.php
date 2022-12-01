<html>
<head>
    </head>
    <body>
    <form method="post">
    <table border="0">
    <tr>
    <td> <input type="text" name="salary"/>
    </td>
    </tr>
    <tr>
    <td> <input type="submit" name="submit" value="Submit"/>
    </td>
    </tr>
    </table>
    </form>
    <?php
    if(isset($_POST['submit']))
    {
    $basic_salary = $_POST['salary'];
    $allowance = 0.4 * $basic_salary;
    $house_rent = 0.2 * $basic_salary;
    $gross_salary = $basic_salary + $allowance + $house_rent;
    echo "Basic Salary : ".$basic_salary."/-<br>";
    echo "Dearness Allowance: " .$allowance."/-<br>";
    echo "House Rent : " .$house_rent ."/-";
    echo "Gross Salary : " .$gross_salary ."/-<br>";
    return 0;
    }
    ?>
    </body>
    </html>