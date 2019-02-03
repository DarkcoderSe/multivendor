@extends('layouts.app')

@section('content')
  <div class="col-md-3 col-lg-3 col-sm-4 col-xs-12 float-right-style">
      <div class="categories-menu mrg-xs">
          <div class="category-heading">
             <h3>Browse Brands</h3>
          </div>
          <div class="category-menu-list">
              <ul>
                @foreach (\App\Category::orderBy('name','asc')->get() as $category)
                  <li><a href="#"><img alt="" src="images/icons/thum2.png"> {{$category->name}} <i class="zmdi zmdi-chevron-right"></i></a>
                @endforeach
                    {{-- <div class="category-menu-dropdown">
                        <div class="category-part-1 category-common mb--30">
                            <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                            <ul>
                                <li><a href="#"> Men’s Clothing</a></li>
                                <li><a href="#"> Computer & Office</a></li>
                                <li><a href="#"> Jewelry & Watches</a></li>
                                <li><a href="#"> Bags & Shoes</a></li>
                                <li><a href="#"> Phones & Accessories</a></li>
                            </ul>
                        </div>
                        <div class="category-part-2 category-common mb--30">
                            <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                            <ul>
                                <li><a href="#"> Men’s Clothing</a></li>
                                <li><a href="#"> Computer & Office</a></li>
                                <li><a href="#"> Jewelry & Watches</a></li>
                                <li><a href="#"> Bags & Shoes</a></li>
                                <li><a href="#"> Phones & Accessories</a></li>
                            </ul>
                        </div>
                        <div class="category-part-3 category-common">
                            <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                            <ul>
                                <li><a href="#"> Men’s Clothing</a></li>
                                <li><a href="#"> Computer & Office</a></li>
                                <li><a href="#"> Jewelry & Watches</a></li>
                                <li><a href="#"> Bags & Shoes</a></li>
                                <li><a href="#"> Phones & Accessories</a></li>
                            </ul>
                        </div>
                        <div class="category-part-4 category-common">
                            <h4 class="categories-subtitle"> Jewelry & Watches</h4>
                            <ul>
                                <li><a href="#"> Men’s Clothing</a></li>
                                <li><a href="#"> Computer & Office</a></li>
                                <li><a href="#"> Jewelry & Watches</a></li>
                                <li><a href="#"> Bags & Shoes</a></li>
                                <li><a href="#"> Phones & Accessories</a></li>
                            </ul>
                        </div>
                    </div> --}}
                </li>
              </ul>
          </div>
      </div>
  </div>
  <!-- End Left Feature -->
  </div>
  </div>
  </section>






  {{-- OUR PRODUCTS AREA & FEATURED--}}



  <section class="htc__product__area bg__white">
  <div class="container">
  <div class="row">
  <div class="col-md-3">
      <div class="product-categories-all">
          <div class="product-categories-title">
              <h3>Jewelry & watches</h3>
          </div>
          <div class="product-categories-menu">
              <ul>
                  <li><a href="#">awesome Rings</a></li>
                  <li><a href="#">Hot Earrings</a></li>
                  <li><a href="#">Jewelry Sets</a></li>
                  <li><a href="#">Beads Jewelry</a></li>
                  <li><a href="#">Men's Watches</a></li>
                  <li><a href="#">Women’s Watches</a></li>
                  <li><a href="#">Popular Bracelets</a></li>
                  <li><a href="#"> Pendant Necklaces</a></li>
                  <li><a href="#">Children's Watches</a></li>
              </ul>
          </div>
      </div>
  </div>
  <div class="col-md-9">
      <div class="product-style-tab">
          <div class="product-tab-list">
              <!-- Nav tabs -->
              <ul class="tab-style" role="tablist">
                  <li class="active">
                      <a href="#home1" data-toggle="tab">
                          <div class="tab-menu-text">
                              <h4>latest </h4>
                          </div>
                      </a>
                  </li>
                  <li>
                      <a href="#home2" data-toggle="tab">
                          <div class="tab-menu-text">
                              <h4>best sale </h4>
                          </div>
                      </a>
                  </li>
                  <li>
                      <a href="#home3" data-toggle="tab">
                          <div class="tab-menu-text">
                              <h4>top rated</h4>
                          </div>
                      </a>
                  </li>
                  <li>
                      <a href="#home4" data-toggle="tab">
                          <div class="tab-menu-text">
                              <h4>on sale</h4>
                          </div>
                      </a>
                  </li>
              </ul>
          </div>
          <div class="tab-content another-product-style jump">
              <div class="tab-pane active" id="home1">
                  <div class="row">
                      <div class="product-slider-active owl-carousel">
                        <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                            <div class="product">
                                <div class="product__inner">
                                    <div class="pro__thumb">
                                        <a href="#">
                                            <img src="images/product/5.png" alt="product images">
                                        </a>
                                    </div>
                                    <div class="product__hover__info">
                                        <ul class="product__action">
                                            <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                            <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                            <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="product__details">
                                    <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                    <ul class="product__price">
                                        <li class="old__price">$16.00</li>
                                        <li class="new__price">$10.00</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                      </div>
                  </div>
              </div>
              <div class="tab-pane" id="home2">
                  <div class="row">
                      <div class="product-slider-active owl-carousel">
                          <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                              <div class="product">
                                  <div class="product__inner">
                                      <div class="pro__thumb">
                                          <a href="#">
                                              <img src="images/product/4.png" alt="product images">
                                          </a>
                                      </div>
                                      <div class="product__hover__info">
                                          <ul class="product__action">
                                              <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                              <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                              <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="product__details">
                                      <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                      <ul class="product__price">
                                          <li class="old__price">$16.00</li>
                                          <li class="new__price">$10.00</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                              <div class="product">
                                  <div class="product__inner">
                                      <div class="pro__thumb">
                                          <a href="#">
                                              <img src="images/product/5.png" alt="product images">
                                          </a>
                                      </div>
                                      <div class="product__hover__info">
                                          <ul class="product__action">
                                              <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                              <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                              <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="product__details">
                                      <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                      <ul class="product__price">
                                          <li class="old__price">$16.00</li>
                                          <li class="new__price">$10.00</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                              <div class="product">
                                  <div class="product__inner">
                                      <div class="pro__thumb">
                                          <a href="#">
                                              <img src="images/product/6.png" alt="product images">
                                          </a>
                                      </div>
                                      <div class="product__hover__info">
                                          <ul class="product__action">
                                              <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                              <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                              <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="product__details">
                                      <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                      <ul class="product__price">
                                          <li class="old__price">$16.00</li>
                                          <li class="new__price">$10.00</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                              <div class="product">
                                  <div class="product__inner">
                                      <div class="pro__thumb">
                                          <a href="#">
                                              <img src="images/product/7.png" alt="product images">
                                          </a>
                                      </div>
                                      <div class="product__hover__info">
                                          <ul class="product__action">
                                              <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                              <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                              <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="product__details">
                                      <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                      <ul class="product__price">
                                          <li class="old__price">$16.00</li>
                                          <li class="new__price">$10.00</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                              <div class="product">
                                  <div class="product__inner">
                                      <div class="pro__thumb">
                                          <a href="#">
                                              <img src="images/product/8.png" alt="product images">
                                          </a>
                                      </div>
                                      <div class="product__hover__info">
                                          <ul class="product__action">
                                              <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                              <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                              <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="product__details">
                                      <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                      <ul class="product__price">
                                          <li class="old__price">$16.00</li>
                                          <li class="new__price">$10.00</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="tab-pane" id="home3">
                  <div class="row">
                      <div class="product-slider-active owl-carousel">
                          <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                              <div class="product">
                                  <div class="product__inner">
                                      <div class="pro__thumb">
                                          <a href="#">
                                              <img src="images/product/2.png" alt="product images">
                                          </a>
                                      </div>
                                      <div class="product__hover__info">
                                          <ul class="product__action">
                                              <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                              <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                              <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="product__details">
                                      <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                      <ul class="product__price">
                                          <li class="old__price">$16.00</li>
                                          <li class="new__price">$10.00</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                              <div class="product">
                                  <div class="product__inner">
                                      <div class="pro__thumb">
                                          <a href="#">
                                              <img src="images/product/1.png" alt="product images">
                                          </a>
                                      </div>
                                      <div class="product__hover__info">
                                          <ul class="product__action">
                                              <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                              <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                              <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="product__details">
                                      <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                      <ul class="product__price">
                                          <li class="old__price">$16.00</li>
                                          <li class="new__price">$10.00</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                              <div class="product">
                                  <div class="product__inner">
                                      <div class="pro__thumb">
                                          <a href="#">
                                              <img src="images/product/5.png" alt="product images">
                                          </a>
                                      </div>
                                      <div class="product__hover__info">
                                          <ul class="product__action">
                                              <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                              <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                              <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="product__details">
                                      <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                      <ul class="product__price">
                                          <li class="old__price">$16.00</li>
                                          <li class="new__price">$10.00</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                              <div class="product">
                                  <div class="product__inner">
                                      <div class="pro__thumb">
                                          <a href="#">
                                              <img src="images/product/4.png" alt="product images">
                                          </a>
                                      </div>
                                      <div class="product__hover__info">
                                          <ul class="product__action">
                                              <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                              <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                              <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="product__details">
                                      <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                      <ul class="product__price">
                                          <li class="old__price">$16.00</li>
                                          <li class="new__price">$10.00</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                              <div class="product">
                                  <div class="product__inner">
                                      <div class="pro__thumb">
                                          <a href="#">
                                              <img src="images/product/3.png" alt="product images">
                                          </a>
                                      </div>
                                      <div class="product__hover__info">
                                          <ul class="product__action">
                                              <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                              <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                              <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="product__details">
                                      <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                      <ul class="product__price">
                                          <li class="old__price">$16.00</li>
                                          <li class="new__price">$10.00</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="tab-pane" id="home4">
                  <div class="row">
                      <div class="product-slider-active owl-carousel">
                          <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                              <div class="product">
                                  <div class="product__inner">
                                      <div class="pro__thumb">
                                          <a href="#">
                                              <img src="images/product/9.png" alt="product images">
                                          </a>
                                      </div>
                                      <div class="product__hover__info">
                                          <ul class="product__action">
                                              <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                              <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                              <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="product__details">
                                      <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                      <ul class="product__price">
                                          <li class="old__price">$16.00</li>
                                          <li class="new__price">$10.00</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                              <div class="product">
                                  <div class="product__inner">
                                      <div class="pro__thumb">
                                          <a href="#">
                                              <img src="images/product/5.png" alt="product images">
                                          </a>
                                      </div>
                                      <div class="product__hover__info">
                                          <ul class="product__action">
                                              <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                              <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                              <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="product__details">
                                      <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                      <ul class="product__price">
                                          <li class="old__price">$16.00</li>
                                          <li class="new__price">$10.00</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                              <div class="product">
                                  <div class="product__inner">
                                      <div class="pro__thumb">
                                          <a href="#">
                                              <img src="images/product/3.png" alt="product images">
                                          </a>
                                      </div>
                                      <div class="product__hover__info">
                                          <ul class="product__action">
                                              <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                              <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                              <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="product__details">
                                      <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                      <ul class="product__price">
                                          <li class="old__price">$16.00</li>
                                          <li class="new__price">$10.00</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                              <div class="product">
                                  <div class="product__inner">
                                      <div class="pro__thumb">
                                          <a href="#">
                                              <img src="images/product/4.png" alt="product images">
                                          </a>
                                      </div>
                                      <div class="product__hover__info">
                                          <ul class="product__action">
                                              <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                              <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                              <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="product__details">
                                      <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                      <ul class="product__price">
                                          <li class="old__price">$16.00</li>
                                          <li class="new__price">$10.00</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                          <div class="col-md-4 single__pro col-lg-4 cat--1 col-sm-4 col-xs-12">
                              <div class="product">
                                  <div class="product__inner">
                                      <div class="pro__thumb">
                                          <a href="#">
                                              <img src="images/product/2.png" alt="product images">
                                          </a>
                                      </div>
                                      <div class="product__hover__info">
                                          <ul class="product__action">
                                              <li><a data-toggle="modal" data-target="#productModal" title="Quick View" class="quick-view modal-view detail-link" href="#"><span class="ti-plus"></span></a></li>
                                              <li><a title="Add TO Cart" href="cart.html"><span class="ti-shopping-cart"></span></a></li>
                                              <li><a title="Wishlist" href="wishlist.html"><span class="ti-heart"></span></a></li>
                                          </ul>
                                      </div>
                                  </div>
                                  <div class="product__details">
                                      <h2><a href="product-details.html">Simple Black Clock</a></h2>
                                      <ul class="product__price">
                                          <li class="old__price">$16.00</li>
                                          <li class="new__price">$10.00</li>
                                      </ul>
                                  </div>
                              </div>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
  </div>
  </div>
  </div>
  </section>

  {{-- END of OUR PRODUCTS AREA & FEATURED--}}

  {{-- BLOD AREA --}}

  <section class="htc__blog__area bg__white pb--130">
  <div class="container">
  <div class="row">
  <div class="col-xs-12">
      <div class="section__title section__title--2 text-center">
          <h2 class="title__line">Latest News</h2>
          <p>Lorem ipsum dolor sit amet consectetur adipisicing elit sed do eiusmod temp incididunt ut labore et dolore magna aliqua. </p>
      </div>
  </div>
  </div>
  <div class="row">
  <div class="blog__wrap clearfix mt--60 xmt-30">
      <!-- Start Single Blog -->
      <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
          <div class="blog foo">
              <div class="blog__inner">
                  <div class="blog__thumb">
                      <a href="blog-details.html">
                          <img src="images/blog/blog-img/1.jpg" alt="blog images">
                      </a>
                      <div class="blog__post__time">
                          <div class="post__time--inner">
                              <span class="date">14</span>
                              <span class="month">sep</span>
                          </div>
                      </div>
                  </div>
                  <div class="blog__hover__info">
                      <div class="blog__hover__action">
                          <p class="blog__des"><a href="blog-details.html">Lorem ipsum dolor sit consectetu.</a></p>
                          <ul class="bl__meta">
                              <li>By :<a href="#">Admin</a></li>
                              <li>Product</li>
                          </ul>
                          <div class="blog__btn">
                              <a class="read__more__btn" href="blog-details.html">read more</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End Single Blog -->
      <!-- Start Single Blog -->
      <div class="col-md-4 col-lg-4 col-sm-6 col-xs-12">
          <div class="blog foo">
              <div class="blog__inner">
                  <div class="blog__thumb">
                      <a href="blog-details.html">
                          <img src="images/blog/blog-img/2.jpg" alt="blog images">
                      </a>
                      <div class="blog__post__time">
                          <div class="post__time--inner">
                              <span class="date">14</span>
                              <span class="month">sep</span>
                          </div>
                      </div>
                  </div>
                  <div class="blog__hover__info">
                      <div class="blog__hover__action">
                          <p class="blog__des"><a href="blog-details.html">Lorem ipsum dolor sit consectetu.</a></p>
                          <ul class="bl__meta">
                              <li>By :<a href="#">Admin</a></li>
                              <li>Product</li>
                          </ul>
                          <div class="blog__btn">
                              <a class="read__more__btn" href="blog-details.html">read more</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End Single Blog -->
      <!-- Start Single Blog -->
      <div class="col-md-4 col-lg-4 hidden-sm col-xs-12">
          <div class="blog foo">
              <div class="blog__inner">
                  <div class="blog__thumb">
                      <a href="blog-details.html">
                          <img src="images/blog/blog-img/3.jpg" alt="blog images">
                      </a>
                      <div class="blog__post__time">
                          <div class="post__time--inner">
                              <span class="date">14</span>
                              <span class="month">sep</span>
                          </div>
                      </div>
                  </div>
                  <div class="blog__hover__info">
                      <div class="blog__hover__action">
                          <p class="blog__des"><a href="blog-details.html">Lorem ipsum dolor sit consectetu.</a></p>
                          <ul class="bl__meta">
                              <li>By :<a href="#">Admin</a></li>
                              <li>Product</li>
                          </ul>
                          <div class="blog__btn">
                              <a class="read__more__btn" href="blog-details.html">read more</a>
                          </div>
                      </div>
                  </div>
              </div>
          </div>
      </div>
      <!-- End Single Blog -->
  </div>
  </div>
  </div>
  </section>

  {{-- END BLOG AREA --}}

  <!-- End Blog Area -->
  <!-- Start Footer Area -->
@endsection
@section('scripts')
  <script type="text/javascript" src="{{asset('js/app.js')}}">
  </script>
  <script type="text/javascript">
      $(document).ready(function(){
          getFromCart();
      });
      function deleteFromCart(id){
          var url = "{{URL::to('/user/delete_from_cart')}}/" + id;

          $.get(url,function(response){
                  console.log(response);
                  getFromCart();
              },
          );
      }
      function getFromCart(){
          var url = "{{URL::to('/user/get_from_cart')}}";
          $.get(url, function(response){
              var size = Object.keys(response).length;
              var div = "";
              var total = 0;
              if(size <= 0){
                  div = "<h4>Cart is Empty</h4>";
              }else{
                  for(var i=0; i < size; i++){
                      div += "<tr><td>"+response[i]['name']+"</td><td>"+response[i]['quantity']+"</td><td>"+response[i]['price']+"</td>" +
                              "<td><button type='button' onclick='deleteFromCart("+response[i]['id']+");'>delete</button></td></tr>";
                      total += response[i]['price'];
                  }
              }


              $('#my_cart').html(div);
              $('#total_cart').html(total);
          });
      }
      function addToCart(pid){
          var url = "{{URL::to('/user/add_to_cart')}}";
          var product_id = pid;
          var csrf_token = "{{csrf_token()}}";
          $.post(url,{product_id:product_id, _token:csrf_token},function(response){
                  console.log(response);
                  getFromCart();
              },
          );
      }
  </script>
@endsection
