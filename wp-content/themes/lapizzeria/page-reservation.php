<?php
/*
* Template Name: Contact Us
*/
get_header(); ?>

    <?php  while(have_posts()): the_post(); ?>


        <div class="hero" style="background-image:url(<?php echo get_the_post_thumbnail_url(); ?>);">
            <div class="hero-content">
                <div class="hero-text">
                    <h2><?php the_title(); ?></h2>
                </div>
            </div>
        </div>

        <div class="main-content container reservation">
            <main class="text-center content-text clear">
                <div class="reservation-info">
                    <form method="post" class="reservation-form">
                        <h2>Make a Reservation</h2>
                        <div class="field">
                            <input type="text" id="name" name="name" placeholder= "Please Enter your Name" required>
                        </div>
                        <div class="field">
                            <input type="datetime-local" id="date" name="date" placeholder= "Please Enter your Date" required>
                        </div>
                        <div class="field">
                            <input type="email" id="email" name="email" placeholder= "Please Enter your Mail" required>
                        </div>
                        <div class="field">
                            <input type="tel  " id="phone" name="phone" placeholder= "Please Enter your phone" required>
                        </div>
                        <div class="field">
                            <textarea name="message" id="message" cols="30" rows="10"></textarea>
                        </div>
                        <input type="submit" name= "submit" class = "button" value ="send">
                        <input type="hidden" name= "hidden" value ="1">
                    </form>
                </div>
            </main>
        </div>

    <?php endwhile; ?>
    
<?php  get_footer(); ?>