<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class FrontPage extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var string[]
     */
    protected static $views = [
        'front-page',
    ];

    /**
     * Data to be passed to view before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'rooms' => $this->getRooms(),
        ];
    }

    /**
     * Returns the latest rooms to be displayed on the front page.
     *
     * @return array
     */
    public function getRooms()
    {
        $args = [
            'post_type'      => 'room',
            'posts_per_page' => 3,
            'orderby'        => 'date',
            'order'          => 'ASC',
        ];

        $query = new \WP_Query($args);
        $rooms = [];

        if ($query->have_posts()) {
            while ($query->have_posts()) {
                $query->the_post();
                
                $rooms[] = [
                    'title'      => get_the_title(),
                    'excerpt'    => get_the_content(), // using content as excerpt for simplicity
                    'price_from' => get_post_meta(get_the_ID(), 'price_from', true) ?: 'TBD',
                    'size_sqm'   => get_post_meta(get_the_ID(), 'size_sqm', true) ?: 'N/A',
                    'bed_type'   => get_post_meta(get_the_ID(), 'bed_type', true) ?: 'N/A',
                    'link'       => get_permalink(),
                ];
            }
            wp_reset_postdata();
        }

        return $rooms;
    }
}
