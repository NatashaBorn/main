@extends('index')

@section('content')
<aside class="page_right_navigation">
    <div class="sort_products">
        <div class="sort_products_title">sort products</div>
        <div class="list">
            <div class="list_item"><span class="text">Sort by <span class="red_word">prise</span></span></div>
            <div class="list_item"><span class="text">Sort by <span class="red_word">style</span></span></div>
            <div class="list_item"><span class="text">Sort by <span class="red_word">colour</span></span></div>
            <div class="list_item"><span class="text">Sort by <span class="red_word">season</span></span></div>
            <div class="list_item"><span class="text">Sort by <span class="red_word">rating</span></span></div>
        </div>
    </div>
    <div class="best_sellers">
        <div class="best_sellers_title">best sellers</div>
        <div class="product_on_right_navigation">
            <img src="images/example.jpg" alt="image">
            <div class="product_on_right_navigation_container">
                <div class="product_on_right_navigation_titile">Product name here</div>
                <div class="product_on_right_navigation_description">Short description product</div>
                <div class="product_on_right_navigation_price_title">Price:</div>
                <div class="product_on_right_navigation_price">250$</div>
            </div>
        </div>
        <div class="product_on_right_navigation">
            <img src="images/example.jpg" alt="image">
            <div class="product_on_right_navigation_container">
                <div class="product_on_right_navigation_titile">Product name here</div>
                <div class="product_on_right_navigation_description">Short description product</div>
                <div class="product_on_right_navigation_price_title">Price:</div>
                <div class="product_on_right_navigation_price">250$</div>
            </div>
        </div>
        <div class="product_on_right_navigation">
            <img src="images/example.jpg" alt="image">
            <div class="product_on_right_navigation_container">
                <div class="product_on_right_navigation_titile">Product name here</div>
                <div class="product_on_right_navigation_description">Short description product</div>
                <div class="product_on_right_navigation_price_title">Price:</div>
                <div class="product_on_right_navigation_price">250$</div>
            </div>
        </div>
        <div class="product_on_right_navigation">
            <img src="images/example.jpg" alt="image">
            <div class="product_on_right_navigation_container">
                <div class="product_on_right_navigation_titile">Product name here</div>
                <div class="product_on_right_navigation_description">Short description product</div>
                <div class="product_on_right_navigation_price_title">Price:</div>
                <div class="product_on_right_navigation_price">250$</div>
            </div>
        </div>
    </div>
    <div class="payment_options">
        <div class="payment_options_title">payment options</div>
        <img class="payment_item" src="images/payment_1.png" alt="image_payment">
        <img class="payment_item" src="images/payment_1.png" alt="image_payment">
        <img class="payment_item" src="images/payment_1.png" alt="image_payment">
        <img class="payment_item" src="images/payment_1.png" alt="image_payment">
        <img class="payment_item" src="images/payment_1.png" alt="image_payment">
        <img class="payment_item" src="images/payment_1.png" alt="image_payment">
        <img class="payment_item" src="images/payment_1.png" alt="image_payment">
        <img class="payment_item" src="images/payment_1.png" alt="image_payment">
        <img class="payment_item" src="images/payment_1.png" alt="image_payment">
    </div>
</aside>
<section class="page_content">
    <img class="top_image_of_content" src="images/top_image_of_content.png" alt="top_image_of_content">
    <div class="featured_products">
        <div class="featured_products_title">featured products</div>
        <div class="product">
            <img src="images/product.jpg" alt="image_product">
            <div class="product_button">
                <div class="product_name">Cross</div>
                <div class="product_price">50.00$</div>
            </div>
        </div>
        <div class="product">
            <img src="images/product.jpg" alt="image_product">
            <div class="product_button">
                <div class="product_name">Cross</div>
                <div class="product_price">50.00$</div>
            </div>
        </div>
        <div class="product">
            <img src="images/product.jpg" alt="image_product">
            <div class="product_button">
                <div class="product_name">Cross</div>
                <div class="product_price">50.00$</div>
            </div>
        </div>
        <div class="product">
            <img src="images/product.jpg" alt="image_product">
            <div class="product_button">
                <div class="product_name">Cross</div>
                <div class="product_price">50.00$</div>
            </div>
        </div>
        <div class="product">
            <img src="images/product.jpg" alt="image_product">
            <div class="product_button">
                <div class="product_name">Cross</div>
                <div class="product_price">50.00$</div>
            </div>
        </div>
        <div class="product">
            <img src="images/product.jpg" alt="image_product">
            <div class="product_button">
                <div class="product_name">Cross</div>
                <div class="product_price">50.00$</div>
            </div>
        </div>
        <div class="product">
            <img src="images/product.jpg" alt="image_product">
            <div class="product_button">
                <div class="product_name">Cross</div>
                <div class="product_price">50.00$</div>
            </div>
        </div>
        <div class="product">
            <img src="images/product.jpg" alt="image_product">
            <div class="product_button">
                <div class="product_name">Cross</div>
                <div class="product_price">50.00$</div>
            </div>
        </div>
        <div class="product">
            <img src="images/product.jpg" alt="image_product">
            <div class="product_button">
                <div class="product_name">Cross</div>
                <div class="product_price">50.00$</div>
            </div>
        </div>
    </div>
    <ul class="pagination">
        <li id="num_1" onclick="pagination(this)"><a>1</a></li>
        <li id="num_2" onclick="pagination(this)"><a>2</a></li>
        <li id="num_3" onclick="pagination(this)"><a>3</a></li>
        <li id="num_4" onclick="pagination(this)"><a>4</a></li>
        <li id="num_5" onclick="pagination(this)"><a>5</a></li>
        <li id="num_6" onclick="pagination(this)"><a>6</a></li>
    </ul>
</section>
@stop