<!--List-->
<div class="type-C-26">
    <div class="border_content columns">
        <div class="row">
            <div class="col-md-3 col-sm-12 col-xs-12">
                <div class="widget_price_filter shop-widgets">
                    <h4 class="widget-title">Filter by price</h4>
                    <form method="get" action="#">
                        <div class="price_slider_wrapper">
                            <div id="slider-range" style=""></div>
                            <div class="price_slider_amount">
                                <input type="text" name="min_price" value="" data-min="2" placeholder="Min price" style="display: none;">
                                <input type="text" name="max_price" value="" data-max="35" placeholder="Max price" style="display: none;">
                                <button type="submit" class="button">Filter</button>
                                <div class="price_amount">
                                    Price: <span id="amount"></span>
                                </div>
                            </div>
                        </div>
                    </form>                                  
                </div>
                <div class="widget_shopping_cart shop-widgets">
                    <h4 class="widget-title">Cart</h4>
                    <div>
                        <ul class="cart_list">
                            <li class="empty">No products in the cart.</li>
                        </ul>
                    </div>
                </div>
                <div class="widget_product_search shop-widgets">
                    <form role="search" method="get" class="woocommerce-product-search" action="#">
                        <label class="screen-reader-text" for="woocommerce-product-search-field">Search for:</label>
                        <input type="search" placeholder="Search Products…" value="" name="s" title="Search for:">
                        <input type="submit" value="Search">
                        <input type="hidden" name="post_type" value="product">
                    </form>
                </div>
                <div class="shop-widgets">
                    <h4 class="widget-title">Top Rated Products</h4>
                    <?php foreach ($top_products as $top_product): ?>
                    <ul class="product_list_widget">
                        <li>
                            <a href="#" title="Woo Album #4">
                                <img src="<?php echo $top_product->top_product_img ?>" class="attachment-shop_thumbnail" alt="cd_5_angle"><?php echo $top_product->top_product_title ?></a>
                            <div>
                                <span class="rating">
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                    <span class="star"></span>
                                </span>
                            </div>	
                            <del><span class="amount"><?php echo $top_product->top_product_amount_del ?></span></del> 
                            <ins><span class="amount"><?php echo $top_product->top_product_amount ?></span></ins>
                        </li>
                        <?php endforeach ?>
                       
                    </ul>
                </div>
                <div class="shop-widgets">
                    <h4 class="widget-title">Product Categories</h4>
                    <ul class="product-categories">
                        <?php foreach ($categories as $categorie): ?>
                        <li class="cat-item cat-parent">
                            <a href="#"><?php echo $categorie->categorie_c1 ?></a>
                            <ul class="children">
                                <li class="cat-item">
                                    <a href="#"><?php echo $categorie->categorie_c2_1 ?></a>
                                </li>
                                <li class="cat-item">
                                    <a href="#"><?php echo $categorie->categorie_c2_2 ?></a>
                                </li>
                            </ul>
                        </li>
                        <?php endforeach ?>
                       
                    </ul>
                </div>	
            </div>

            <div class="col-md-9 col-sm-12 col-xs-12">
                <p class="woocommerce-result-count">Showing 1–9 of 23 results</p>
                <form class="woocommerce-ordering" method="get">
                    <select name="orderby">
                        <option value="menu_order" selected="selected">Default sorting</option>
                        <option value="popularity">Sort by popularity</option>
                        <option value="rating">Sort by average rating</option>
                        <option value="date">Sort by newness</option>
                        <option value="price">Sort by price: low to high</option>
                        <option value="price-desc">Sort by price: high to low</option>
                    </select>
                </form>
                <ul class="products">
                    <?php foreach ($products as $product): ?>
                    <div class="col-md-4 col-sm-8 col-xs-12">
                        <li class="animated product type-product status-publish has-post-thumbnail" data-animated="fadeInRight">
                            <a href="./detail"></a>
                            <a href="#">
                                <span class="onsale">Sale!</span>
                                <img width="300" height="300" src="<?php echo $product->product_img ?>">		
                                <div>
                                    <h3><?php echo $product->product_title ?></h3>
                                    <div class="star-rating">
                                        <span class="rating">
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                            <span class="star"></span>
                                        </span>
                                    </div>
                                    <span class="price">
                                        <del><span class="amount"><?php echo $product->product_amount_del ?></span></del>
                                        <ins><span class="amount"><?php echo $product->product_amount ?></span></ins>
                                    </span> 
                                </div>
                            </a>
                            <a class="button">Add to cart</a>
                        </li>
                    </div>
                    <?php endforeach ?>
                </ul>
                <div class="clear"></div>
                <!----------------------------- PAGINATION -------------------------------->
                <!-- <nav class="woocommerce-pagination">
                    <ul class="page-numbers">
                        <li><span class="page-numbers current">1</span></li>
                        <li><a class="page-numbers" href="#">2</a></li>
                        <li><a class="page-numbers" href="#">3</a></li>
                        <li><a class="next page-numbers" href="#">→</a></li>
                    </ul>
                </nav> -->
                <ul class="pagination">
                <?php $i = 1; ?>
                    @if($products->currentPage() == 1)
                        <li class="disabled"><a href="#">&laquo;</a></li>
                    @else
                        <?php $index = $products->currentPage(); $index--; ?>
                        <li><a href="{{ URL::route('list') }}?page={{ $index }}">&laquo;</a></li>
                    @endif
                        @while($i <= $products->lastPage())
                        <?php  ?>
                            @if($products->currentPage() == $i)
                                <li class="disabled"><a href="{{ URL::route('list') }}?page={{ $i }}">{{ $i }}</a></li>
                            @else
                                <li><a href="{{ URL::route('list') }}?page={{ $i }}">{{ $i }}</a></li>
                            @endif
                            <?php $i++; ?>
                        @endwhile
                    @if($products->currentPage() == $products->lastPage())
                        <li class="disabled"><a href="#">&raquo;</a></li>
                    @else
                        <?php $index = $products->currentPage(); $index++; ?>
                        <li><a href="{{ URL::route('list') }}?page={{ $index }}">&raquo;</a></li>
                    @endif
                </ul>
                <!------------------------------------------------------------------------>
            </div>
        </div>
    </div>
</div>
