<html <?php language_attributes(); ?>>

<head>
    <title>
        <?php bloginfo('name'); ?>
    </title>
    <link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>">
</head>


<body>

    <header>
        <div class="container">
            <h1 style="color:white"><?php bloginfo('name'); ?></h1>
            <span style="color:white"> <?php bloginfo('description'); ?> </span>

        </div>
    </header>


<!-- <DIV CLASS="container">
<?php if (have_posts()) : ?>
            <?php the_post(); ?>
            <div class="title">
               
                    <h3><?php the_title(); ?></h3>
               
            </div>
            <div class="main">
                <!-- <p> <?php the_content(); ?></p> -->

                Written by <?php the_author(); ?> Date <?php the_date(); ?>
                <br><br>
                <?php if (has_post_thumbnail()) : ?>
                    <?php the_post_thumbnail(); ?>

                <?php else : echo "not  found"; ?>
                <?php endif; ?>

                <?php the_content(); ?>



            </div>

        <?php else : ?>
        <?php echo "the post no found";
        endif;
        ?>

    </div> -->



    <!-- <?php if (have_posts()) : ?>
        <?php while(have_posts()):?>
        <?php the_post(); ?>
        <div class="content">
            <?php the_content();?>
        </div>
        <?php endwhile ;?>
    <?php else : echo "No found"; ?>
    <?php endif; ?> -->

</body>

</html>