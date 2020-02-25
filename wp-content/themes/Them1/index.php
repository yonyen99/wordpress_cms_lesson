<html <?php language_attributes(); ?>>

<head>
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
</head>

<body>

    <header>
        <div class="container">
            <h1 style="color:white"><?php bloginfo('name'); ?></h1>
            <span style="color:white"> <?php bloginfo('description'); ?> </span>
            <div class="navbar">
                <?php wp_nav_menu();?>
            </div>
            
        </div>
    </header>


    <!-- condition post -->
    <?php if (have_posts()) : ?>
        <?php while(have_posts()):?>
        <?php the_post(); ?>
        <?php the_title();?>;
        <!-- category  -->
        <?php $caters = get_the_category();
            $output ="";
            if($caters){
                foreach($caters as $cater){
                    $output ='<a href = "'.get_category_link($cater->term_id).'">'.$cater->cat_name.'</a>';
                }
            }
            echo $output;
            ?>
      

        <div class="content">
            <?php the_excerpt();?>
        </div>

        <?php endwhile ;?>
    <?php else : echo "No found"; ?>
    <?php endif; ?>

</body>

</html>