@extends('layouts.frontend.frontend')
@section('content')

    <section class="rh_banner rh_banner__image" style="background-repeat: no-repeat; background-position: center 12.4441%; background-image: url({{asset('img/banner.jpg')}}); background-size: cover;">

        <div class="rh_banner__cover"></div>
        <!-- /.rh_banner__cover -->

        <div class="rh_banner__wrap">

            <h2 class="rh_banner__title">
                {{$home->header}}			</h2>
            <!-- /.rh_banner__title -->

        </div>
        <!-- /.rh_banner__wrap -->

    </section>
    <div class="rh_prop_search rh_prop_search_init">

        <!-- /.rh_prop_search__form -->

    </div>
    <section class="rh_section rh_wrap--padding rh_wrap--topPadding">





        <div class="rh_page rh_page--fullWidth">


            <div class="rh_page__head rh_page__property">

                <div class="rh_page__property_title">

                    <img class="only-for-print inspiry-qr-code" src="https://chart.googleapis.com/chart?cht=qr&amp;chs=90x90&amp;chl=http://modern.realhomes.io/property/home-in-merrick-way/&amp;choe=UTF-8" alt="Home in Merrick Way">
                    <h1 class="rh_page__title">
                        {{$home->header}}		</h1>
                    <!-- /.rh_page__title -->

                    <p class="rh_page__property_address">
                        {{$home->country}} /	{{$home->city}} 		</p>

                    <div class="page-breadcrumbs  page-breadcrumbs-modern">
                        <nav class="property-breadcrumbs">
                        </nav>
                    </div>
                    <!-- /.rh_page__property_address -->

                </div>
                <!-- /.rh_page__property_title -->

                <div class="rh_page__property_price">
                    <p class="status">
                        For Sale		</p>
                    <!-- /.status -->
                    <p class="price">
                       $ {{$home->price}} 		</p>
                    <!-- /.price -->
                </div>
                <!-- /.rh_page__property_price -->

            </div>
            <!-- /.rh_page__head -->


            <div class="rh_property">
                <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
                    <ol class="carousel-indicators">
                        <li data-target="#carouselExampleIndicators" data-slide-to="0" class=""></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="1" class=""></li>
                        <li data-target="#carouselExampleIndicators" data-slide-to="2" class="active"></li>
                    </ol>
                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">


                        <div class="carousel-inner">
                            @foreach($home->images as $image)
                                <div class="carousel-item {{ $image->img==$loop->first ? 'active' : '' }}">
                                    <img src="{{asset('photo/'.$image->img)}}" class="d-block w-100" alt="...">
                                </div>
                            @endforeach
                        </div>
                    </div>
                    <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="sr-only">Previous</span>
                    </a>
                    <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="sr-only">Next</span>
                    </a>
                </div>

                <div class="rh_property__wrap rh_property--padding">
                    <div class="rh_property__main">

                        <div class="rh_property__content clearfix">


                            <div class="rh_property__row rh_property__meta_wrap">

                                <div class="rh_property__meta">
                                    <h4>
                                        Sahe            </h4>
                                    <div>
                                        <i class="fa-1x fas fa-vector-square" style="color: #B3B3B3;
                                                   font-size: 23px;"></i>

                                        <span class="figure">{{$home->area}}</span>
                                    </div>
                                </div>

                                <div class="rh_property__row rh_property__meta_wrap">

                                    <div class="rh_property__meta">
                                        <h4>
                                            Otaq            </h4>
                                        <div>
                                            <i class="fa-1x fas fa-door-open" style="color: #B3B3B3;font-size: 23px;"></i>
                                            <span class="figure">{{$home->bedrooms}}</span>
                                        </div>
                                    </div>






                                </div>
                                <div class="rh_property__row rh_property__meta_wrap">

                                    <div class="rh_property__meta">
                                        <h4>
                                            Date            </h4>
                                        <div>
                                            <i class="fa-1x fas fa-calendar-times-o" style="color: #B3B3B3;font-size: 23px;"></i>

                                            <span class="figure">{{$home->date}}</span>
                                        </div>
                                    </div>








                                </div>
                                <div class="rh_property__row rh_property__meta_wrap">

                                    <div class="rh_property__meta">
                                        <h4>
                                            mertebe            </h4>
                                        <div>
                                            <i class=" fa-1x far fa-building" style="color: #B3B3B3; font-size:23px;"></i>
                                            <span class="figure">{{$home->floor}}</span>
                                        </div>
                                    </div>








                                </div>





                            </div>

                            <h4 class="rh_property__heading">Haqqinda</h4>

                            <div class="rh_content">
                                <p>
                                    {{$home->description}}
                                </p>
                            </div>















                            <div id="property_map" style="position: relative; overflow: hidden;"><div style="height: 100%; width: 100%; position: absolute; top: 0px; left: 0px; background-color: rgb(229, 227, 223);"><div class="gm-err-container"><div class="gm-err-content"><div class="gm-err-icon"><img src="http://maps.gstatic.com/mapfiles/api-3/images/icon_error.png" draggable="false" style="user-select: none;"></div><div class="gm-err-title">Oops! Something went wrong.</div><div class="gm-err-message">This page didn't load Google Maps correctly. See the JavaScript console for technical details.</div></div></div></div></div>
                        </div>

                    </div>


                </div>

                <!-- /.rh_property__sidebar -->
            </div>
            <!-- /.rh_property__wrap -->
        </div>
        <!-- /.rh_property -->

    </section>
@endsection