<?php

namespace Individuality\Menu;
use Benlumia007\Backdrop\Component\Menu as MenuContract;

class Component extends MenuContract {
    public function __construct( $menu_id = [] ) {
        $this->menu_id = $this->defaults();
    }

    public function defaults() {
        return [
            'primary'   => esc_html__( 'Primary Navigation', 'individuality' ),
            'secondary' => esc_html__( 'Secondary Navigation', 'individuality' ),
            'social'    => esc_html__( 'Social Navigation', 'individuality' )
        ];
    }
}   