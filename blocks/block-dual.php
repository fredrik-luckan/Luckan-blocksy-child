  <div  class="hero-fiftycontainer alignfull nomarginhero" 
      style="background-color:<?php block_field( 'hero-bgcolor' ); ?> !important;
            flex-direction: <?php block_field( 'hero-flip-order' ); ?>;">
    <div class="hero-left-side">
      <article class="left-text">
       <h1><?php block_field( 'hero-titel' ); ?></h1>
       <p><?php block_field( 'hero-undertext' ); ?></p>
     </article>
  </div>
    
     <img class="right_image right-half" 
              src="<?php block_field( 'hero-half-image' ); ?>"
              style=
              "object-fit: <?php block_field( 'toggle-contain-image' ); ?>;
              padding: <?php block_field( 'margin-image' ); ?>px;"> 
  </div>