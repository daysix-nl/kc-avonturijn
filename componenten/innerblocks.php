<?php $allowed_blocks_inner = ["acf/blok-titel", "acf/blok-nieuws-agenda", "acf/blok-ons-team", "acf/form-solliciteer", "acf/blok-schoolvakanties-studiedagen"]; ?>
<InnerBlocks allowedBlocks="<?php echo esc_attr( wp_json_encode( $allowed_blocks_inner ) ); ?>"/>