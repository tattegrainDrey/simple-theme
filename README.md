# simple theme
Just a simple theme for Wordpress

----
With colours out of my palette (see LinkedIn or resume), I wanted to make a theme just like me, straight to the point but not necessarily simple.


### Merci
 - à https://clamp.font-size.app/
 - à https://fonts.google.com/
 - 
 - 
 - some notes :
     - <?php
    $args = array(
        'post_name'      => 'intro',
        'post_type'      => 'post',
        'post_status'    => 'publish',
        'posts_per_page' => 1
    );
    $my_posts = get_posts($args);
    if ($my_posts) :
        echo $my_posts[0]->post_content;
    endif;
    ?>