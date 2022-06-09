<?php

$document_data = array(
    array(
        'code' => 'A162',
        'name' => 'Finance Report Company',
        'retention_period' => 3
    ),
    array(
        'code' => 'A309',
        'name' => 'Consumer Request',
        'retention_period' => 1
    ),
    array(
        'code' => 'B781',
        'name' => 'Consumer Report Inquiry',
        'retention_period' => 1
    ),
    array(
        'code' => 'C009',
        'name' => 'Work Order Note',
        'retention_period' => 2
    ),
);

?>

<!doctype html>
<html lang="en">

<head>
    <title>Javaneese Batik Documentation</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS v5.0.2 -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    <style>
        .matrix-table {
            border: 1px solid #000;
            border-width: 0 1px;
        }

        .matrix-table td {
            padding: 3px 10px;
        }
    </style>
</head>

<body>
    <div class="col-8" style="margin: auto;">
        <h2>Javaneese Batik</h2>
        <h6>Quallity Local Product</h6>

        <table class="table table-striped table-inverse table-responsive">
            <thead class="thead-default">
                <tr>
                    <th>No </th>
                    <th>Document Code</th>
                    <th>Document Name</th>
                    <th>Retention PeriodYear(s)</th>
                </tr>
            </thead>
            <tbody>

                <?php

                $counter = 0;

                foreach ($document_data as $key => $value) {

                    $counter++;

                    echo "
                        <tr>
                            <td scope='row'>$counter</td>
                            <td>{$value['code']}</td>
                            <td>{$value['name']}</td>
                            <td>{$value['retention_period']}</td>
                        </tr>
                    ";
                }

                 for ($i = 0; $i < count($document_data); $i++) {
                     echo "
                                 <tr>
                                     <td scope='row'>" . ($i + 5) . "</td>
                                     <td>{$document_data[$i]['code']}</td>
                                     <td>{$document_data[$i]['name']}</td>
                                     <td>{$document_data[$i]['retention_period']}</td>
                                 </tr>
                             ";
                 }

                ?>

            </tbody>
        </table>

        <hr />

    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>