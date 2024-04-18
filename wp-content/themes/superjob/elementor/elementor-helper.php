<?php
namespace Elementor;
function superjob_elementor_init(){
    Plugin::instance()->elements_manager->add_category(
        'superjob-elementor-widget',

        [
            'title'  => 'Super Job Free Elementor Widgets',
            'icon' => 'font'
        ],
        1
    );
}
add_action('elementor/init','Elementor\superjob_elementor_init');