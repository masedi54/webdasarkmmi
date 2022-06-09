<?php

    $course_field = 'Quality Local Product';

    $product_list = [
        'Nusantara Batik Mega Mendung', // index 0
        'Nusantara Batik Singa Barong', // index 1
        'Nusantara Batik Sekar Jagad', // index 2
        'Nusantara Batik Pring Sedapur' // index 3
    ];
    $quality_list = array (
        'Low, Medium', // except array, object
        'Low, Premium',
        'Medium, Premium',
        'Low, Premium, Medium'
    );

    $variant_list = [
        'Classic',
        'Modern',
        'Classic-Modern',
        'Classic-Modern'
    ];

    $course_information = new stdClass();
    $course_information->title = 'Design and Build Web';
    $course_information->totalparticipant = 80;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Javaneese Batik. Introduction</title>
</head>

<body>
    <h1>
        Javaneese Batik - <?php echo $course_field; ?>
    </h1>

    <table border="1" width="100%">
    <tr>
            <th>No</th>
            <th>Product</th>
            <th>Variant</th>
            <th>Quality</th>
        </tr>
        <tr>
            <td>1</td>
            <td><?php echo $product_list[0]; ?></td>
            <td><?php echo $variant_list[0]; ?></td>
            <td><?php echo $quality_list[0]; ?></td>
        </tr>
        <tr>
            <td>2</td>
            <td><?php echo $product_list[1]; ?></td>
            <td><?php echo $variant_list[1]; ?></td>
            <td><?php echo $quality_list[1]; ?></td>
        </tr>
        <tr>
            <td>3</td>
            <td><?php echo $product_list[2]; ?></td>
            <td><?php echo $variant_list[2]; ?></td>
            <td><?php echo $quality_list[2]; ?></td>
        </tr>
        <tr>
            <td>4</td>
            <td><?php echo $product_list[3]; ?></td>
            <td><?php echo $variant_list[3]; ?></td>
            <td><?php echo $quality_list[3]; ?></td>
        </tr>

        <?php
            for ($i=0; $i < 4; $i++) { 
                echo "
                <tr>
                    <td>".($i+5)."</td>
                    <td> ". $product_list[$i] ."</td>
                    <td> ". $variant_list[$i] ."</td>
                    <td> ". $quality_list[$i] ."</td>
                </tr>
                ";
            }
        ?>

    </table>
</body>
</html>