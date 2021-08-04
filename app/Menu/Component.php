<?php

namespace Individuality\Menu;
use Benlumia007\Backdrop\Component\Menu as MenuContract;

class Component extends MenuContract {
    public function __construct( $menu_id = [] ) {
        $this->menu_id = $this->defaults();
    }

    public function defaults() {
        return array(
            'primary'   => esc_html__( 'Primary Sidebar', 'individuality' ),
            'secondary' => esc_html__( 'Secondary Sidebar', 'individuality' ),
            'social'    => esc_html__( 'Social Navigation', 'individuality' )
        );
    }
}   