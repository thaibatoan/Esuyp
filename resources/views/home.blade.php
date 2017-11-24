@extends('layouts.app')

@section('title', 'Home')

@section('content')
<div class="block">
    <div class="w-100 mx-0 d-flex flex-wrap">
        <div id="main" class="my-4 col-12 col-lg-8" style="flex-grow:1">
            <div class="section-wrap w-100">
                <div id="top-download-header" class="d-flex row-m0 justify-content-between align-items-baseline px-3">
                    <h5 class="text-uppercase section-header"> Trending</h5>
                    <a href="ppt.html">View All</a>
                </div>
                <div class="row-m0 p-4">
                    <div class="col-12 col-md-6 aspect-wrapper bg-gray">
                        <div class="image d-flex align-items-center justify-content-center">
                            <img src="{{ asset('images/hoodie-man-4.png') }}" alt="product" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12 col-md-6">
                        <div class="title">
                            <a href="#"> <h5 class="mb-0">Template's name long name</h5></a>
                            <a href="#" class="text-muted product-cat">Category</a>
                            <div>
                                <div class="ratings">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:80%"></div>
                                </div>
                            </div>
                            <span class="price text-muted product-cat">Discription: Somebody made a title that has long name, so the description has also to be long aswell</span>
                        </div>
                    </div>
                </div>
                <div class="row-m0 p-4">
                    <div class="item col-xl-4 col-md-6">
                        <div class="product is-gray">
                            <div class="image d-flex align-items-center justify-content-center">
                                <img src="{{ asset('images/hoodie-man-4.png') }}" alt="product" class="img-fluid">
                                <div class="hover-overlay d-flex align-items-center justify-content-center">
                                    <div class="CTA d-flex align-items-center justify-content-center">
                                        <a href="#" class="add-to-cart"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="visit-product active"><i class="fa fa-globe"></i>View</a>
                                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="title">
                                <small class="text-muted">Category</small>
                                <a href="detail.html"> <h3 class="h6 text-uppercase no-margin-bottom">Name</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-md-6">
                        <div class="product is-gray">
                            <div class="image d-flex align-items-center justify-content-center">
                                <img src="{{ asset('images/hoodie-man-4.png') }}" alt="product" class="img-fluid">
                                <div class="hover-overlay d-flex align-items-center justify-content-center">
                                    <div class="CTA d-flex align-items-center justify-content-center">
                                        <a href="#" class="add-to-cart"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="visit-product active"><i class="fa fa-globe"></i>View</a>
                                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="title">
                                <small class="text-muted">Category</small>
                                <a href="ppt.html"> <h3 class="h6 text-uppercase no-margin-bottom">Name</h3></a>
                            </div>
                        </div>
                    </div>
                    <div class="item col-xl-4 col-md-6">
                        <div class="product is-gray">
                            <div class="image d-flex align-items-center justify-content-center">
                                <img src="{{ asset('images/hoodie-man-4.png') }}" alt="product" class="img-fluid">
                                <div class="hover-overlay d-flex align-items-center justify-content-center">
                                    <div class="CTA d-flex align-items-center justify-content-center">
                                        <a href="#" class="add-to-cart"><i class="fa fa-heart"></i></a>
                                        <a href="#" class="visit-product active"><i class="fa fa-globe"></i>View</a>
                                        <a href="#" data-toggle="modal" data-target="#exampleModal" class="quick-view"><i class="fa fa-arrows-alt"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="title">
                                <small class="text-muted">Category</small>
                                <a href="detail.html"> <h3 class="h6 text-uppercase no-margin-bottom">Name</h3></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="section-wrap w-100">
                <div id="top-download-header" class="d-flex row-m0 justify-content-between align-items-baseline px-3">
                    <h5 class="text-uppercase section-header"> New release</h5>
                    <a href="ppt.html">View All</a>
                </div>
                <div class="row-m0 p-4">
                    <div class="col-12 col-sm-6 col-md-4 aspect-wrapper bg-gray">
                        <div class="image d-flex align-items-center justify-content-center">
                            <img src="{{ asset('images/hoodie-man-4.png') }}" alt="product" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-8">
                        <div class="title">
                            <a href="#"> <h5 class="mb-0">Template's name long name</h5></a>
                            <a href="#" class="text-muted product-cat">Category</a>
                            <div>
                                <div class="ratings">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:80%"></div>
                                </div>
                            </div>
                            <span class="price text-muted product-cat">3 hours ago</span>
                        </div>
                    </div>
                </div>
                <div class="row-m0 p-4">
                    <div class="col-12 col-sm-6 col-md-4 aspect-wrapper bg-gray">
                        <div class="image d-flex align-items-center justify-content-center">
                            <img src="{{ asset('images/hoodie-man-4.png') }}" alt="product" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-8">
                        <div class="title">
                            <a href="#"> <h5 class="mb-0">Template's name long name</h5></a>
                            <a href="#" class="text-muted product-cat">Category</a>
                            <div>
                                <div class="ratings">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:80%"></div>
                                </div>
                            </div>
                            <span class="price text-muted product-cat">3 hours ago</span>
                        </div>
                    </div>
                </div>
                <div class="row-m0 p-4">
                    <div class="col-12 col-sm-6 col-md-4 aspect-wrapper bg-gray">
                        <div class="image d-flex align-items-center justify-content-center">
                            <img src="{{ asset('images/hoodie-man-4.png') }}" alt="product" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-8">
                        <div class="title">
                            <a href="#"> <h5 class="mb-0">Template's name long name</h5></a>
                            <a href="#" class="text-muted product-cat">Category</a>
                            <div>
                                <div class="ratings">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:80%"></div>
                                </div>
                            </div>
                            <span class="price text-muted product-cat">3 hours ago</span>
                        </div>
                    </div>
                </div>
                <div class="row-m0 p-4">
                    <div class="col-12 col-sm-6 col-md-4 aspect-wrapper bg-gray">
                        <div class="image d-flex align-items-center justify-content-center">
                            <img src="{{ asset('images/hoodie-man-4.png') }}" alt="product" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-8">
                        <div class="title">
                            <a href="#"> <h5 class="mb-0">Template's name long name</h5></a>
                            <a href="#" class="text-muted product-cat">Category</a>
                            <div>
                                <div class="ratings">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:80%"></div>
                                </div>
                            </div>
                            <span class="price text-muted product-cat">3 hours ago</span>
                        </div>
                    </div>
                </div>
                <div class="row-m0 p-4">
                    <div class="col-12 col-sm-6 col-md-4 aspect-wrapper bg-gray">
                        <div class="image d-flex align-items-center justify-content-center">
                            <img src="{{ asset('images/hoodie-man-4.png') }}" alt="product" class="img-fluid">
                        </div>
                    </div>
                    <div class="col-12 col-sm-6 col-md-8">
                        <div class="title">
                            <a href="#"> <h5 class="mb-0">Template's name long name</h5></a>
                            <a href="#" class="text-muted product-cat">Category</a>
                            <div>
                                <div class="ratings">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:80%"></div>
                                </div>
                            </div>
                            <span class="price text-muted product-cat">3 hours ago</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div id="right-sidebar" class="my-4 p-0">
            <div class="section-wrap column">
                <h5 class="section-header text-uppercase col-12"> Browse by Categories</h5>
                <div id="category-links" class="row-m0 col-12">
                    <a href="#" class="col-6 col-md-4 col-lg-6">Category 1</a>
                    <a href="#" class="col-6 col-md-4 col-lg-6">Category 2</a>
                    <a href="#" class="col-6 col-md-4 col-lg-6">Category 3</a>
                    <a href="#" class="col-6 col-md-4 col-lg-6">Category 4</a>
                    <a href="#" class="col-6 col-md-4 col-lg-6">Category 5</a>
                    <a href="#" class="col-6 col-md-4 col-lg-6">Category 6</a>
                    <div id="more-links" class="w-100 collapse">
                        <div class="row-m0">
                            <a href="#" class="col-6 col-md-4 col-lg-6">Category 7</a>
                            <a href="#" class="col-6 col-md-4 col-lg-6">Category 8</a>
                            <a href="#" class="col-6 col-md-4 col-lg-6">Category 9</a>
                            <a href="#" class="col-6 col-md-4 col-lg-6">Category 10</a>
                            <a href="#" class="col-6 col-md-4 col-lg-6">Category 11</a>
                            <a href="#" class="col-6 col-md-4 col-lg-6">Category 12</a>
                        </div>
                    </div>
                </div>
                <a data-toggle="collapse" data-target="#more-links" id="more-btn" class="text-uppercase btn-rect">Show More <i class="fa-caret-down fa"></i></a>
            </div>
            <div id="top-download">
                <div id="top-download-header" class="d-flex row-m0 justify-content-between align-items-baseline">
                    <h5 class="text-uppercase section-header"> Top Downloads</h5>
                    <a href="ppt.html">View All</a>
                </div>
                <div class="item col-12 p-0">
                    <div class="d-flex flex-wrap">
                        <div class="col-12 col-sm-4 col-lg-6 p-0 aspect-wrapper mw-md-200">
                            <div class="img-aspect-ratio bg-white">
                                <img src="#" alt="product">
                            </div>
                        </div>
                        <div class="title title-hide col-12 col-sm-8 col-lg-6">
                            <a href="#"> <h6 class="name mb-0">Template's name long name</h6></a>
                            <a href="#" class="text-muted product-cat">Category</a>
                            <div>
                                <div class="ratings">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:80%"></div>
                                </div>
                            </div>
                            <span class="price text-muted product-cat">14,203 Downloads</span>
                        </div>
                        <div class="clear-fix"></div>
                    </div>
                </div>
                <div class="item col-12 p-0">
                    <div class="d-flex flex-wrap">
                        <div class="col-12 col-sm-4 col-lg-6 p-0 aspect-wrapper mw-md-200">
                            <div class="img-aspect-ratio bg-white">
                                <img src="#" alt="product">
                            </div>
                        </div>
                        <div class="title title-hide col-12 col-sm-8 col-lg-6">
                            <a href="#"> <h6 class="name mb-0">Template's name long name</h6></a>
                            <a href="#" class="text-muted product-cat">Category</a>
                            <div>
                                <div class="ratings">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:80%"></div>
                                </div>
                            </div>
                            <span class="price text-muted product-cat">14,203 Downloads</span>
                        </div>
                        <div class="clear-fix"></div>
                    </div>
                </div>
                <div class="item col-12 p-0">
                    <div class="d-flex flex-wrap">
                        <div class="col-12 col-sm-4 col-lg-6 p-0 aspect-wrapper mw-md-200">
                            <div class="img-aspect-ratio bg-white">
                                <img src="#" alt="product">
                            </div>
                        </div>
                        <div class="title title-hide col-12 col-sm-8 col-lg-6">
                            <a href="#"> <h6 class="name mb-0">Template's name long name</h6></a>
                            <a href="#" class="text-muted product-cat">Category</a>
                            <div>
                                <div class="ratings">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:80%"></div>
                                </div>
                            </div>
                            <span class="price text-muted product-cat">14,203 Downloads</span>
                        </div>
                        <div class="clear-fix"></div>
                    </div>
                </div>
            </div>
            <hr>
            <div id="top-download" class="section-nowrapper">
                <div id="top-download-header" class="d-flex row-m0 justify-content-between align-items-baseline">
                    <h5 class="text-uppercase section-header"> Things you may like</h5>
                    <a href="ppt.html">View All</a>
                </div>
                <div class="item col-12 p-0">
                    <div class="d-flex flex-wrap">
                        <div class="col-12 col-sm-4 col-lg-6 p-0 aspect-wrapper mw-md-200">
                            <div class="img-aspect-ratio bg-white">
                                <img src="#" alt="product">
                            </div>
                        </div>
                        <div class="title col-12 col-sm-8 col-lg-6">
                            <a href="#"> <h6 class="name mb-0">Template's name long name</h6></a>
                            <a href="#" class="text-muted product-cat">Category</a>
                            <div>
                                <div class="ratings">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:80%"></div>
                                </div>
                            </div>
                            <span class="price text-muted product-cat">14,203 Downloads</span>
                        </div>
                        <div class="clear-fix"></div>
                    </div>
                </div>
                <div class="item col-12 p-0">
                    <div class="d-flex flex-wrap">
                        <div class="col-12 col-sm-4 col-lg-6 p-0 aspect-wrapper mw-md-200">
                            <div class="img-aspect-ratio bg-white">
                                <img src="#" alt="product">
                            </div>
                        </div>
                        <div class="title col-12 col-sm-8 col-lg-6">
                            <a href="#"> <h6 class="name mb-0">Template's name long name</h6></a>
                            <a href="#" class="text-muted product-cat">Category</a>
                            <div>
                                <div class="ratings">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:80%"></div>
                                </div>
                            </div>
                            <span class="price text-muted product-cat">14,203 Downloads</span>
                        </div>
                        <div class="clear-fix"></div>
                    </div>
                </div>
                <div class="item col-12 p-0">
                    <div class="d-flex flex-wrap">
                        <div class="col-12 col-sm-4 col-lg-6 p-0 aspect-wrapper mw-md-200">
                            <div class="img-aspect-ratio bg-white">
                                <img src="#" alt="product">
                            </div>
                        </div>
                        <div class="title col-12 col-sm-8 col-lg-6">
                            <a href="#"> <h6 class="name mb-0">Template's name long name</h6></a>
                            <a href="#" class="text-muted product-cat">Category</a>
                            <div>
                                <div class="ratings">
                                    <div class="empty-stars"></div>
                                    <div class="full-stars" style="width:80%"></div>
                                </div>
                            </div>
                            <span class="price text-muted product-cat">14,203 Downloads</span>
                        </div>
                        <div class="clear-fix"></div>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear-fix"></div>
    </div>
</div>
@endsection
