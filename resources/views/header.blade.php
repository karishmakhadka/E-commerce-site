
<div class="catagories-side-menu">
        <!-- Close Icon -->
        <div id="sideMenuClose">
            <i class="ti-close"></i>
        </div>
        <!--  Side Nav  -->
        <div class="nav-side-menu">
            <div class="menu-list">
                <h6>Categories</h6>
                <ul id="menu-content" class="menu-content collapse out">
                    <!-- Single Item -->
                    @foreach($categories as $category)
                    <li data-toggle="collapse" data-target="#{{$category->id}}" class="collapsed active">
                        <a href="#">{{$category->title}}<span class="arrow"></span></a>

                        @if($category->subCategory()->count())
                        <ul class="sub-menu collapse" id="{{$category->id}}">
                            @foreach($category->subCategory as $subCategory)
                            <li><a href="{{url('category/'.$subCategory->id)}}">{{$subCategory->title}}</a></li>
                            @endforeach
                            
                        </ul> 
                        @endif    


                    </li>
                    @endforeach
                    <li data-toggle="collapse" data-target="#women" class="collapsed active">
                        <a href="#">Woman wear <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="women">
                            <li><a href="{{asset('#')}}">Midi Dresses</a></li>
                            <li><a href="{{asset('#')}}">Maxi Dresses</a></li>
                            <li><a href="{{asset('#')}}">Prom Dresses</a></li>
                            <li><a href="{{asset('#')}}">Little Black Dresses</a></li>
                            <li><a href="{{asset('#')}}">Mini Dresses</a></li>
                        </ul>
                    </li><
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#man" class="collapsed">
                        <a href="{{asset('#')}}">Man Wear <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="man">
                            <li><a href="{{asset('#')}}">Man Dresses</a></li>
                            <li><a href="{{asset('#')}}">Man Black Dresses</a></li>
                            <li><a href="{{asset('#')}}">Man Mini Dresses</a></li>
                        </ul>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#kids" class="collapsed">
                        <a href="{{asset('#')}}">Children <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="kids">
                            <li><a href="{{asset('#')}}">Children Dresses</a></li>
                            <li><a href="{{asset('#')}}">Mini Dresses</a></li>
                        </ul>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#bags" class="collapsed">
                        <a href="{{asset('#')}}">Bags &amp; Purses <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="bags">
                            <li><a href="{{asset('#')}}">Bags</a></li>
                            <li><a href="{{asset('#')}}">Purses</a></li>
                        </ul>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#eyewear" class="collapsed">
                        <a href="#">Eyewear <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="eyewear">
                            <li><a href="{{asset('#')}}">Eyewear Style 1</a></li>
                            <li><a href="{{asset('#')}}">Eyewear Style 2</a></li>
                            <li><a href="{{asset('#')}}">Eyewear Style 3</a></li>
                        </ul>
                    </li>
                    <!-- Single Item -->
                    <li data-toggle="collapse" data-target="#footwear" class="collapsed">
                        <a href="#">Footwear <span class="arrow"></span></a>
                        <ul class="sub-menu collapse" id="footwear">
                            <li><a href="{{asset('#')}}">Footwear 1</a></li>
                            <li><a href="{{asset('#')}}">Footwear 2</a></li>
                            <li><a href="{{asset('#')}}">Footwear 3</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div id="wrapper">

        <!-- ****** Header Area Start ****** -->
        <header class="header_area">
            <!-- Top Header Area Start -->
            <div class="top_header_area">
                <div class="container h-100">
                    <div class="row h-100 align-items-center justify-content-end">

                        <div class="col-12 col-lg-7">
                            <div class="top_single_area d-flex align-items-center">
                                <!-- Logo Area -->
                                <div class="top_logo">
                                    
                                </div>
                                <!-- Cart & Menu Area -->
                                <div class="header-cart-menu d-flex align-items-center ml-auto">
                                    <!-- Cart Area -->
                                    <div class="mx-auto" style="width: 200px;">
                                        <b><u>KARISHMA'S</u></b>
                                        <br>FASHION POINT
                                    </div>

                                    <div class="cart">
                                        <a href="{{asset('#')}}" id="header-cart-btn" target="_blank"><span class="cart_quantity">2</span> <i class="ti-bag"></i> Your Bag $20</a>
                                        <!-- Cart List Area Start -->
                                        <ul class="cart-list">
                                            <li>
                                                <a href="#" class="image"><img src="img/product-img/product-10.jpg" class="cart-thumb" alt=""></a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#">Women's Fashion</a></h6>
                                                    <p>1x - <span class="price">$10</span></p>
                                                </div>
                                                <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                            </li>
                                            <li>
                                                <a href="#" class="image"><img src="img/product-img/product-11.jpg" class="cart-thumb" alt=""></a>
                                                <div class="cart-item-desc">
                                                    <h6><a href="#">Women's Fashion</a></h6>
                                                    <p>1x - <span class="price">$10</span></p>
                                                </div>
                                                <span class="dropdown-product-remove"><i class="icon-cross"></i></span>
                                            </li>
                                            <li class="total">
                                                <span class="pull-right">Total: $20.00</span>
                                                <a href="cart.html" class="btn btn-sm btn-cart">Cart</a>
                                                <a href="checkout-1.html" class="btn btn-sm btn-checkout">Checkout</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="header-right-side-menu ml-15">
                                        <a href="#" id="sideMenuBtn"><i class="ti-menu" aria-hidden="true"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <!-- Top Header Area End -->
            <div class="main_header_area">
                <div class="container h-100">
                    <div class="row h-100">
                        <div class="col-12 d-md-flex justify-content-between">
                            <!-- Header Social Area -->
                            <div class="header-social-area">
                                <a href="#"><span class="karl-level">Share</span> <i class="fa fa-pinterest" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                <a href="#"><i class="fa fa-linkedin" aria-hidden="true"></i></a>
                            </div>
                            <!-- Menu Area -->
                            <div class="main-menu-area">
                                <nav class="navbar navbar-expand-lg align-items-start">

                                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#karl-navbar" aria-controls="karl-navbar" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"><i class="ti-menu"></i></span></button>

                                    <div class="collapse navbar-collapse align-items-start collapse" id="karl-navbar">
                                        <ul class="navbar-nav animated" id="nav">
                                            @foreach($categories as $category)
                                            <li class="nav-item active"><a class="nav-link" href="{{$category->slug}}">{{$category->title}}</a></li>
                                            @endforeach
                                           <!--  <li class="nav-item dropdown">
                                                <a class="nav-link dropdown-toggle" href="#" id="karlDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Pages</a>
                                                <div class="dropdown-menu" aria-labelledby="karlDropdown">
                                                    <a class="dropdown-item" href="index.html">Home</a>
                                                    <a class="dropdown-item" href="shop.html">Shop</a>
                                                    <a class="dropdown-item" href="product-details.html">Product Details</a>
                                                    <a class="dropdown-item" href="cart.html">Cart</a>
                                                    <a class="dropdown-item" href="checkout.html">Checkout</a>
                                                </div>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="dress">Dresses</a></li>

                                            <li class="nav-item"><a class="nav-link" href="shoes"><span class="karl-level">hot</span> Shoes</a>
                                            </li>
                                            <li class="nav-item"><a class="nav-link" href="{{url('form')}}">Contact Us</a></li> -->
                                        </ul>
                                    </div>
                                </nav>
                            </div>
                            <!-- Help Line -->
                            <div class="help-line">
                                <a href="{{asset('tel:+346573556778')}}"><i class="ti-headphone-alt"></i>+977-9860467313</a>
                            </div>
                            <div class="search-head ml-auto">
                                <form action="{{route('search')}}">
                                    <input placeholder="Search here" name="keyword" class="main-search-box" type="text" style="background-color: #ff084e">

                                    <div class="search-block">
                         
                                         <button type="submit" onclick="" style="background-color: #ff084e"><i class="fa fa-search"></i>
                                        </button>                        
                                    </div>
                                </form>
                             </div

                        </div>
                    </div>
                </div>
            </div>
        </header>