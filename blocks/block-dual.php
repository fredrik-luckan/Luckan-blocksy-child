
 <div  class="hero-fiftycontainer alignfull nomarginhero" 
      style="background-color:<?php block_field( 'hero-bgcolor' ); ?> !important;
            flex-direction: <?php block_field( 'hero-flip-order' ); ?>;">
    <div class="hero-left-side">
      <article class="left-text">
       <<?php block_field( 'header-type' ); ?>> <?php block_field( 'hero-titel' ); ?> </<?php block_field( 'header-type' ); ?>>
       <p><?php block_field( 'hero-undertext' ); ?></p>
     </article>
  </div>
    
  <img class="right_image right-half" 
              src=" <?php
                  $attachment_id = block_value( 'hero-half-image' );
                  echo wp_get_attachment_image_url( $attachment_id, 'medium' ); ?> "
              srcset= "<?php
                  echo wp_get_attachment_image_srcset( $attachment_id, 'medium' )?>"
              sizes="<?php echo wp_get_attachment_image_sizes( $attachment_id, 'medium' ) ?>"

              style=
              "object-fit: <?php block_field( 'toggle-contain-image' ); ?>;
              padding: <?php block_field( 'margin-image' ); ?>px;"  />
  </div>

 
