<main id="main">
    <div class="container">

        <!--MAIN SLIDE-->
        <div class="wrap-main-slide">
            <div class="slide-carousel owl-carousel style-nav-1" data-items="1" data-loop="1" data-nav="true" data-dots="false">
                <div class="item-slide">
                    <img src="{{asset('asset/banner/banner_01.png')}}" alt="" class="img-slide">
                </div>
                <div class="item-slide">
                    <img src="{{asset('asset/banner/banner_02.jpeg')}}" alt="" class="img-slide">
                </div>
                <div class="item-slide">
                    <img src="{{asset('asset/banner/banner_03.jpeg')}}" alt="" class="img-slide">
                </div>
            </div>
        </div>

        <!--BANNER-->
        <div class="wrap-banner style-twin-default">
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="{{asset('asset/banner/short_banner_1.jpeg')}}" alt="" width="580" height="190"></figure>
                </a>
            </div>
            <div class="banner-item">
                <a href="#" class="link-banner banner-effect-1">
                    <figure><img src="{{asset('asset/banner/short_banner_2.jpeg')}}" alt="" width="580" height="190"></figure>
                </a>
            </div>
        </div>

        <!--On Sale-->
        <div class="wrap-show-advance-info-box style-1 has-countdown">
            <h3 class="title-box">On Sale</h3>
            <div class="wrap-countdown mercado-countdown" data-expire="2020/12/12 12:34:56"></div>
            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                @foreach ($popular_products as $product)
                    <div class="product product-style-2 equal-elem ">
                        <div class="product-thumnail">
                            <a href="{{route('product.details', ['slug'=>$product->slug])}}" title="{{$product->name}}">
                                <figure><img src="{{ asset('asset/product_image')}}/{{$product->image}}" width="800" height="800" alt="{{$product->name}}"></figure>
                            </a>
                            <div class="group-flash">
                                <span class="flash-item sale-label">sale</span>
                            </div>
                            <div class="wrap-btn">
                                <a href="#" class="function-link">quick view</a>
                            </div>
                        </div>
                        <div class="product-info">
                            <a href="{{route('product.details', ['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
                            <div class="wrap-price"><span class="product-price">৳{{$product->regular_price}}</span></div>
                        </div>
                    </div>
                @endforeach

                

                

            </div>
        </div>

        <!--Latest Products-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Latest Products</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="{{asset('asset/banner/wide_banner_2.jpeg')}}" width="1170" height="100" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">						
                    <div class="tab-contents">
                        <div class="tab-content-item active" id="digital_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >
                                @foreach ($popular_products as $product)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{route('product.details', ['slug'=>$product->slug])}}" title="{{$product->name}}">
                                                <figure><img src="{{ asset('asset/product_image')}}/{{$product->image}}" width="800" height="800" alt="{{$product->name}}"></figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('product.details', ['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
                                            <div class="wrap-price"><span class="product-price">৳{{$product->regular_price}}</span></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>							
                    </div>
                </div>
            </div>
        </div>

        <!--Product Categories-->
        <div class="wrap-show-advance-info-box style-1">
            <h3 class="title-box">Product Categories</h3>
            <div class="wrap-top-banner">
                <a href="#" class="link-banner banner-effect-2">
                    <figure><img src="{{asset('asset/banner/wide_banner_1.jpeg')}}" width="1170" height="240" alt=""></figure>
                </a>
            </div>
            <div class="wrap-products">
                <div class="wrap-product-tab tab-style-1">
                    <div class="tab-control">
                        <a href="#fashion_1a" class="tab-control-item active">Robotics</a>
                        <a href="#fashion_1b" class="tab-control-item">Project Kits</a>
                        <a href="#fashion_1c" class="tab-control-item">ICs</a>
                        <a href="#fashion_1d" class="tab-control-item">Books</a>
                    </div>
                    <div class="tab-contents">

                        <div class="tab-content-item active" id="fashion_1a">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}' >

                                @foreach ($popular_products as $product)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{route('product.details', ['slug'=>$product->slug])}}" title="{{$product->name}}">
                                                <figure><img src="{{ asset('asset/product_image')}}/{{$product->image}}" width="800" height="800" alt="{{$product->name}}"></figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('product.details', ['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
                                            <div class="wrap-price"><span class="product-price">৳{{$product->regular_price}}</span></div>
                                        </div>
                                    </div>
                                @endforeach
                            </div>
                        </div>

                        <div class="tab-content-item" id="fashion_1b">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container " data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                @foreach ($popular_products as $product)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{route('product.details', ['slug'=>$product->slug])}}" title="{{$product->name}}">
                                                <figure><img src="{{ asset('asset/product_image')}}/{{$product->image}}" width="800" height="800" alt="{{$product->name}}"></figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('product.details', ['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
                                            <div class="wrap-price"><span class="product-price">৳{{$product->regular_price}}</span></div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        <div class="tab-content-item" id="fashion_1c">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                @foreach ($popular_products as $product)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{route('product.details', ['slug'=>$product->slug])}}" title="{{$product->name}}">
                                                <figure><img src="{{ asset('asset/product_image')}}/{{$product->image}}" width="800" height="800" alt="{{$product->name}}"></figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('product.details', ['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
                                            <div class="wrap-price"><span class="product-price">৳{{$product->regular_price}}</span></div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>

                        <div class="tab-content-item" id="fashion_1d">
                            <div class="wrap-products slide-carousel owl-carousel style-nav-1 equal-container" data-items="5" data-loop="false" data-nav="true" data-dots="false" data-responsive='{"0":{"items":"1"},"480":{"items":"2"},"768":{"items":"3"},"992":{"items":"4"},"1200":{"items":"5"}}'>

                                @foreach ($popular_products as $product)
                                    <div class="product product-style-2 equal-elem ">
                                        <div class="product-thumnail">
                                            <a href="{{route('product.details', ['slug'=>$product->slug])}}" title="{{$product->name}}">
                                                <figure><img src="{{ asset('asset/product_image')}}/{{$product->image}}" width="800" height="800" alt="{{$product->name}}"></figure>
                                            </a>
                                            <div class="group-flash">
                                                <span class="flash-item new-label">new</span>
                                            </div>
                                            <div class="wrap-btn">
                                                <a href="#" class="function-link">quick view</a>
                                            </div>
                                        </div>
                                        <div class="product-info">
                                            <a href="{{route('product.details', ['slug'=>$product->slug])}}" class="product-name"><span>{{$product->name}}</span></a>
                                            <div class="wrap-price"><span class="product-price">৳{{$product->regular_price}}</span></div>
                                        </div>
                                    </div>
                                @endforeach

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>			

    </div>

</main>
