<!doctype html>
<html lang="en">

<head>
    <title>Javaneese Batik Gallery</title>
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
        
        <h2>Javaneese Batik Gallery</h2>
        <h6>Quality Local Product</h6>

        <?php

        $available_items = array(
            array(
                'image_path' => 'batik.jpg',
                'label' => 'Nusantara Batik Mega Mendung',
                'description' => 'Elegan, cantik'
            ),
            array(
                'image_path' => 'batik2.jpg',
                'label' => 'Nusantara Batik Singa Barong',
                'description' => 'Premium, Best Quality'
            ),
            array(
                'image_path' => 'batik3.jpg',
                'label' => 'Nusantara Batik Sekar Jagad',
                'description' => 'Original Product'
            ),
            array(
                'image_path' => 'batik4.jpg',
                'label' => 'Nusantara Batik Pring Sedapur',
                'description' => 'Mewah, Classic, Kharismatik'
            ),
        );

        foreach ($available_items as $key => $value) {
            echo "
                <div class='col-12' style='display: flex; border: 1px solid grey;'>
                    <div style='width: 200; background: #EBEBEB; padding: 10px;'>
                        <img width=120 src='images/{$value['image_path']}' alt='{$value['image_path']}'>
                    </div>
                    <div style='flex:1; background: #EBEBEB; border-left: 1px solid grey; padding: 10px;'>
                        <h4>{$value['label']}</h4>
                        <p>{$value['description']}</p>
                    </div>
                </div>
            ";
        }

        ?>

        <br/>
        <br/>


    </div>
    <!-- Bootstrap JavaScript Libraries -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
</body>

</html>