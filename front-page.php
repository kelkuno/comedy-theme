<?php get_header(); ?>
    <!-- intro  -->
    <section class="header-img">
        <div class="gradient"></div>
        <div class="header-content-wrapper">
            <h1>Ali Sultan</h1>
            <h2>Comedian Writer Actor</h2>
            <div><a class="primary-btn" href="#">Watch Stand Up</a></div>
        </div>
    </section>
    <!-- about section  -->
    <section>
        <div id="about" class="container">
            <h2>About</h2>
            <div class="row">
                <div class="col">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/ali-headshot.jpg" alt="Comedian Ali Sultan headshot.">
                </div>
                <div class="col">
                    <p>Ali Sultan saw his first stand up comedian when he moved to America from Yemen at the age of 15. He grew the desire to go on stage but first he needed to learn English.</p>
                    <p>Ali became the first Yemeni-Ethiopian American to make a stand up television network debut on The Late Show with Stephen Colbert. Ali has been on Comedy Central’s Hart of The City with Kevin Hart. He filmed his Half Hour comedy special in Dubai for Comedy Central Arabia. He represented Minnesota and won the Best in The Midwest competition at Gildas LaughFest.</p>
                    <p>His album Happy to Be Here and Funny First can be heard on Spotify, Sirius Xm and has over 1 millions streams on Pandora. His last special from Drybar has over a million views on YouTube.</p>
                </div>
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