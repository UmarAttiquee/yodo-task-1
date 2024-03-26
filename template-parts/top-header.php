<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>


<?php
$f6_1 = get_field('sec_6_field_1', 'option');
$f6_2 = get_field('sec_6_field_2', 'option');
$f6_3 = get_field('sec_6_field_3', 'option');
$f6_4 = get_field('sec_6_field_4', 'option');
$f6_5 = get_field('sec_6_field_5', 'option');

?>

<section class="top_header">
    <div class="container-fluid">
        <div class="row">
            <div class="col-6 top_header_right">
                <div>
                 <span><i class="fa-solid fa-location-dot"></i></span><span class="top_header_right_icon_gap"> <?php echo $f6_1; ?></span>  
                </div>
                <div>
                <span>  <i class="fa-regular fa-envelope "> </span></i><span class="top_header_right_icon_gap"> <?php echo $f6_2; ?></span>  
                </div>
            </div>
            <div class="col-6 top_header_left">
                <div class="top_header_left_1st_div">
                <?php echo $f6_3; ?>
                </div>
                <div class="top_header_left_2nd_div">
                    <span><a class="top_header_left_2nd_div_a1" href="#" type="button"><?php echo $f6_4; ?></a></span>
                    <span><a class="top_header_left_2nd_div_a2" href="#" type="button"><?php echo $f6_5; ?></a></span>
                </div>
            </div>
        </div>
    </div>
</section>
</body>
</html>