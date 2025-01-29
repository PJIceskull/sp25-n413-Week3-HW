<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Machine</title>
    <?php wp_head() ?>
</head>

<body>
    <nav>
        <ul>
            <li>Home</li>
            <li>Colors</li>
            <li>Products</li>
        </ul>
    </nav>

    <h1>The Green Machine</h1>

    <?php
    if (have_posts()) :
        while (have_posts()) : the_post();
    ?>
            <h4><?php the_title() ?></h4>
            <p> <i>By <?php the_author() ?></i> <?php the_date() ?> </p>
            <p><?php the_excerpt() ?></p>
    <?php
        endwhile;
    endif;
    ?>

    <div class="imageWrap">
        <img src="https://www.motortrend.com/uploads/2023/07/982-1488-22-1/feature_image.jpg" alt="Green Hotrod Car">
        <img src="https://images.pexels.com/photos/1048033/pexels-photo-1048033.jpeg?auto=compress&cs=tinysrgb&w=1260&h=750&dpr=1" alt="Wet Green Leaf">
    </div>

    <?php wp_footer() ?>
</body>

</html>