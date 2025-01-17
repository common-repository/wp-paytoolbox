<?php $all_products = wppaytoolbox_get_category_products(); ?>

<div class="wpptb">

    <h2><?php _e('Products', 'wppaytoolbox') ?></h2>

	<?php if ($all_products): ?>
        <div class="uk-child-width-1-2@s uk-child-width-1-3@m uk-grid-match" uk-grid>

			<?php foreach ($all_products as $prod): ?>
                <div>
                    <div class="uk-card uk-card-default">
                        <div class="uk-card-media-top">
							<?php if (!empty($prod->getThumb())): ?>
                                <img src="<?php echo $prod->getThumb() ?>"/>
                                <a href="?product=<?php echo $prod->getCode() ?>" class="uk-position-cover"></a>
							<?php endif; ?>
                        </div>
                        <div class="uk-card-body">
                            <h2 class="uk-card-title uk-margin-remove-top">
                                <a href="?product=<?php echo $prod->getCode() ?>">
									<?php echo $prod->getName() ?>
                                </a>
                            </h2>
                            <div class="uk-clearfix">
                            <span class="wpptb-price uk-text-primary uk-float-left">
                            	<?php echo number_format($prod->getPrice(), 2) ?>
	                            <?php echo $prod->getCurrency() ?>
                            </span>
                                <a href="<?php echo $prod->getQuicksellUrl() ?>" class="uk-text-uppercase uk-float-right">
                                    <span uk-icon="icon: cart; ratio: 0.8"></span>
									<?php _e('Add to cart', 'wppaytoolbox') ?>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
			<?php endforeach; ?>
        </div>
	<?php else: ?>
        <div class="uk-alert uk-alert-primary">
			<?php _e('Currently there are no products for this category', 'wppaytoolbox') ?>
        </div>
	<?php endif; ?>

</div>

