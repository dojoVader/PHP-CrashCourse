<?php // Write a function that generates the salaryman table from the list of
// data from the array

$salaryDetails = [
    'Salary of A' => '$1300',
    'Salary of B' => '$1400',
    'Salary of C' => '$1600',
    'Salary of D' => '$1800',
    'Salary of E' => '$1200',
    'Salary of F' => '$1300',
    'Salary of G' => '$1400',
    'Salary of H' => '$1600',
    'Salary of I' => '$1800',
    'Salary of J' => '$1200',
    'Salary of K' => '$1300',
    'Salary of L' => '$1400',
    'Salary of M' => '$1600',
    'Salary of N' => '$1800',
    'Salary of O' => '$1200',
    'Salary of P' => '$1300',
    'Salary of Q' => '$1400',
    'Salary of R' => '$1600',
    'Salary of S' => '$1800',
    'Salary of T' => '$1200',
];

/**
 * Calculates the Details of the Salary Man
 * @param $salaryData
 * @return String
 */
function renderRows($salaryData)
{
    foreach ($salaryData as $salary => $amount) {
        ?>
            <tr>
                <td><?php echo $salary; ?></td>
                <td><?php echo $amount; ?></td>
            </tr>
        <?php
    }
}

?>

<html>
    <head>
        <style>
            table, th, td {
  border: 1px solid;
}
        </style>
    </head>
    <body>
       <table style="">
        <thead>
            <th>Salary Note</th>
            <th>Amount ($)</th>
        </thead>
        <tbody>
            <?php renderRows(($salaryDetails)); ?>        
        </tbody>
       </table>
    </body>

    
</html>
