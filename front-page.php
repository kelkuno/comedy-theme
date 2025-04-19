<?php get_header(); ?>
    <!-- intro  -->
    <section class="header-img">
        <div class="gradient"></div>
        <div class="header-content-wrapper container">
            <h1>Ali Sultan</h1>
            <h2>Comedian Writer Actor</h2>
            <div><a class="primary-btn" href="#">Watch Stand Up</a></div>
        </div>
        <div class="container">
            <p>As seen on</p>
            <div class="credit-group">
                <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg" alt="Link to Ali Sultan Instagram page" width="25">
                <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg" alt="Link to Ali Sultan Instagram page" width="25">
                <img src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg" alt="Link to Ali Sultan Instagram page" width="25">
            </div>
        </div>
    </section>
    <!-- Shows section  -->
    <section>
        <div id="shows" class="container">
            <h2>Shows</h2>
            <?php
            $today = date('Ymd');
            $homepageEvents = new WP_Query(array(
                'posts_per_page' => -1,
                'post_type' => 'event',
                'meta_key' => 'event_date',
                'orderby' => 'meta_value_num',
                'order' => 'ASC',
                'meta_query' => array(
                    array(
                        'key' => 'event_date',
                        'compare' => '>=',
                        'value' => $today
                    )
                )
            ));

            while($homepageEvents->have_posts()) {
                $homepageEvents->the_post(); ?>
                <!-- html -->
                <div class="event">
                    <div class="event-info">
                        <span class="event-date"><?php
                            $eventDate = new DateTime(get_field('event_date'));
                            echo $eventDate->format('M d'); ?>
                        </span>
                        <span class="event-location"><?php the_field('event_city_state') ?></span>
                        <span class="event-title"><?php the_title() ?></span>
                    </div>
                    <div><a class="primary-btn" target="_blank" rel="noopener noreferrer" href="<?php the_field('ticket_link') ?>">Tickets</a></div>
                </div>
            <?php } wp_reset_postdata(); ?>
        </div>
    </section>
<?php get_footer(); ?>