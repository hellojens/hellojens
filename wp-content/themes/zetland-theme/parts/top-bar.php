<div class="top-bar-container contain-to-grid show-for-medium-up sticky" data-options="sticky_on: large">
    <nav class="top-bar" data-topbar role="navigation">
        <ul class="title-area">
            <li class="name">
                <h1><a href="<?php echo home_url(); ?>"><?php bloginfo( 'name' ); ?></a></h1>
            </li>
        </ul>
        <section class="top-bar-section">
            <!-- Right Nav Section -->
            <ul class="right">
              <li class="action-button active"><a href="#">Bliv medlem</a></li>
            </ul>

            <ul class="right menu"> 
                <li><a class="manifest" href="#manifest">Menifest</a></li>
                <li><a class="faq" href="#faq">FAQ</a></li>
            </ul>

            <ul class="right kickstarter-stats">
                <?php dynamic_sidebar( 'menu-widgets' ); ?>
            </ul>
        </section>
    </nav>
</div>
