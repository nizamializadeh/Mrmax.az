@extends('layouts.frontend.frontend')
@section('content')
<section>
    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">
            @foreach($sliders as $slider)
                <div class="carousel-item {{ $slider->image==$loop->first ? 'active' : '' }}">
                        <a href="{{ route('projectsingle', $slider->id) }}" >
                        <img class="d-block w-100" src="{{asset('photo/'.$slider->image)}}" alt="Second slide">
                    </a>
                </div>
                @endforeach



        </div>
        <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</section>



    <div class="wrapper-home-sections diagonal-mod-wrapper">

        <section id="home-properties-section"
                 class="rh_section rh_section--props_padding rh_latest-properties ajax-pagination diagonal-mod">

            <div class="diagonal-mod-background"></div>

            <div class="container-later-properties">
                <div id="home-properties-section-wrapper" class="wrapper-section-contents">
                    <div id="home-properties-section-inner">

                        <div class="rh_section__head">


                            <div style="height: 100px;" class="tab">
                                <button id="d2" class="obyekt red " type="submit"  onClick="openCity2(event)">
                                    <i class="fa-2x fas fa-home"></i>
                                    <i class=" fa-2x fas fa-building"></i>
                                    HAMISI
                                </button>
                                <button id="d1"  class="obyekt tablinks"  onclick="openCity(event, 'London')">
                                    <i class="fa-2x fas fa-home"></i>
                                    MƏNZİL
                                </button>

                                <button id="d3" class="obyekt " onclick="openCity1(event, 'Paris')">
                                    <i class=" fa-2x fas fa-building"></i>
                                    OBYEKT
                                </button>


                            </div>



                        </div>



                        <div id="London"  class="tabcontent rh_section__properties " style="width: 100%">



                         @foreach($menzils as $menzil)
                                <article   class="yan rh_prop_card">

                                    <div class="">

                                        <div class="rh_label rh_label__property">
                                            <div class="rh_label__wrap">
                                                {{
                                                $menzil->country
                                                }}                    <span></span>
                                            </div>
                                        </div>            <!-- /.rh_label -->

                                        <figure class="rh_prop_card__thumbnail">
                                            <a href="property/villa-on-grand-avenue/index.html">
                                                <img style="width: 380px;height: 285px"  src="{{asset('photo/'.$menzil->image)}}" class="attachment-modern-property-child-slider size-modern-property-child-slider wp-post-image" sizes="(max-width: 680px) 100vw, 680px" />
                                            </a>

                                            <div class="rh_overlay">

                                            </div>
                                            <div class="rh_overlay__contents rh_overlay__fadeIn-bottom">
                                                <a href="{{ route('homesingle', $menzil->id) }}" ">View Property</a>
                                            </div>
                                        </figure>
                                        <!-- /.rh_prop_card__thumbnail -->

                                        <div class="rh_prop_card__details" style="text-align: center; border:2px solid #DCDBDB;">
                                            <div  id="rh_prop_card_one">
                                                <h3 style="margin-left: -8%; margin-bottom: 1%;">
                                                    <a href="property/villa-on-grand-avenue/index.html">
                                                       {{$menzil->header}}
                                                    </a>
                                                </h3>
                                                <div style="margin-left: -7.6%;">
                                                    <p class="rh_prop_card__excerpt" style="font-size: 14px;"><span style="margin-left:0.1%;">{{$menzil->description}}</span>
                                                    </p>
                                                </div>
                                                <!-- /.rh_prop_card__excerpt -->

                                                <div class="" style="margin: 0 auto">
                                                    <div class="rh_prop_card__meta">

                                                        <div class="big">
                                                            <div class=" itemm">

                                                                <i class="fa-1x fas fa-map-marker-alt" style="color: #B3B3B3; font-size: 23px;">
                                                                </i>
                                                                <h4 class="pad" >
                                                                    Şəhər
                                                                </h4>
                                                                <span class="bold">{{$menzil->city}}</span>

                                                            </div>
                                                            <div class=" itemm">
                                                                <i class="fa-1x fas fa-door-open" style="color: #B3B3B3;font-size: 23px;"></i>
                                                                <h4 class="pad" >
                                                                    Otaq
                                                                </h4>
                                                                <span class="bold">{{$menzil->bedrooms}}</span>
                                                            </div>
                                                            <div class="itemm">
                                                                <i class="fa-1x fas fa-vector-square" style="color: #B3B3B3;
                                                   font-size: 23px;"></i>
                                                                <h4 class="pad"  >
                                                                    Sahe
                                                                </h4>
                                                                <span class="bold" style="">{{$menzil->area}}</span>
                                                            </div>
                                                            <div class=" itemm">


                                                                <i class=" fa-1x far fa-building" style="color: #B3B3B3; font-size:23px;"></i>
                                                                <h4 class="pad" >
                                                                    Mertebe
                                                                </h4>
                                                                <span class="bold" >
                                                            {{$menzil->floor}}
                                                        </span>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div class="rh_prop_card__priceLabel">

                                                        <center>
                                                            <div style="background-color: #FCD505;width: 110px;height: 50px; padding-top: 15px; border-radius: 5px;">
                                                                <p style="color: white; font-size: 17px;" class="rh_prop_card__price">
                                                                    {{$menzil->price}}
                                                                    <i class="fas fa-euro-sign" style="font-size: 17px"></i>
                                                                </p>
                                                            </div>
                                                        </center>

                                                    </div>
                                                </div>

                                            </div>
                                            <!-- /.rh_prop_card__meta_wrap -->



                                        </div>
                                        <!-- /.rh_prop_card__details -->

                                    </div>
                                    <!-- /.rh_prop_card__wrap -->

                                </article>
                             @endforeach




                        </div>
                        <div id="Paris"  class="tabcontent rh_section__properties " style="width: 100%">


                            @foreach($obyekts as $obyekt)
                                <article   class="yan rh_prop_card">

                                    <div class="">

                                        <div class="rh_label rh_label__property">
                                            <div class="rh_label__wrap">
                                                {{
                                                $obyekt->country
                                                }}                    <span></span>
                                            </div>
                                        </div>            <!-- /.rh_label -->

                                        <figure class="rh_prop_card__thumbnail">
                                            <a href="property/villa-on-grand-avenue/index.html">
                                                <img style="width: 380px;height: 285px"  src="{{asset('photo/'.$obyekt->image)}}" class="attachment-modern-property-child-slider size-modern-property-child-slider wp-post-image" sizes="(max-width: 680px) 100vw, 680px" />
                                            </a>

                                            <div class="rh_overlay">

                                            </div>
                                            <div class="rh_overlay__contents rh_overlay__fadeIn-bottom">
                                                <a href="property/villa-on-grand-avenue/index.html">View Property</a>
                                            </div>
                                        </figure>
                                        <!-- /.rh_prop_card__thumbnail -->

                                        <div class="rh_prop_card__details" style="text-align: center; border:2px solid #DCDBDB;">
                                            <div  id="rh_prop_card_one">
                                                <h3 style="margin-left: -8%; margin-bottom: 1%;">
                                                    <a href="property/villa-on-grand-avenue/index.html">
                                                        {{$obyekt->header}}
                                                    </a>
                                                </h3>
                                                <div style="margin-left: -7.6%;">
                                                    <p class="rh_prop_card__excerpt" style="font-size: 14px;"><span style="margin-left:0.1%;">{{$obyekt->description}}</span>
                                                    </p>
                                                </div>
                                                <!-- /.rh_prop_card__excerpt -->

                                                <div class="" style="margin: 0 auto">
                                                    <div class="rh_prop_card__meta">

                                                        <div class="big">
                                                            <div class=" itemm">

                                                                <i class="fa-1x fas fa-map-marker-alt" style="color: #B3B3B3; font-size: 23px;">
                                                                </i>
                                                                <h4 class="pad" >
                                                                    Şəhər
                                                                </h4>
                                                                <span class="bold">{{$obyekt->city}}</span>

                                                            </div>
                                                            <div class=" itemm">
                                                                <i class="fa-1x fas fa-door-open" style="color: #B3B3B3;font-size: 23px;"></i>
                                                                <h4 class="pad" >
                                                                    Otaq
                                                                </h4>
                                                                <span class="bold">{{$obyekt->bedrooms}}</span>
                                                            </div>
                                                            <div class="itemm">
                                                                <i class="fa-1x fas fa-vector-square" style="color: #B3B3B3;
                                                   font-size: 23px;"></i>
                                                                <h4 class="pad"  >
                                                                    Sahe
                                                                </h4>
                                                                <span class="bold" style="">{{$obyekt->area}}</span>
                                                            </div>
                                                            <div class=" itemm">


                                                                <i class=" fa-1x far fa-building" style="color: #B3B3B3; font-size:23px;"></i>
                                                                <h4 class="pad" >
                                                                    Mertebe
                                                                </h4>
                                                                <span class="bold" >
                                                            {{$obyekt->floor}}
                                                        </span>
                                                            </div>

                                                        </div>
                                                    </div>


                                                    <div class="rh_prop_card__priceLabel">

                                                        <center>
                                                            <div style="background-color: #FCD505;width: 110px;height: 50px; padding-top: 15px; border-radius: 5px;">
                                                                <p style="color: white; font-size: 17px;" class="rh_prop_card__price">
                                                                    {{$menzil->price}}
                                                                    <i class="fas fa-euro-sign" style="font-size: 17px"></i>
                                                                </p>
                                                            </div>
                                                        </center>

                                                    </div>
                                                </div>

                                            </div>
                                            <!-- /.rh_prop_card__meta_wrap -->



                                        </div>
                                        <!-- /.rh_prop_card__details -->

                                    </div>
                                    <!-- /.rh_prop_card__wrap -->

                                </article>
                            @endforeach



                        </div>






<div>
    <span> {{$menzils->links()}}</span>
</div>




        </section>


        <section class="rh_section rh_section--featured diagonal-mod ">

            <div class="diagonal-mod-background"></div>

            <div class="wrapper-section-contents">

                <div class="rh_section__head">

                                    <span class="rh_section__subtitle">
                        Check Out                   </span>
                    <!-- /.rh_section__subtitle -->

                    <h2 class="rh_section__title">
                        Featured Properties                 </h2>
                    <!-- /.rh_section__title -->

                    <p class="rh_section__desc">
                        View list of our short listed properties.                   </p>
                    <!-- /.rh_section__desc -->

                </div>

                <div class="">

                    <video controls="" style="width: 60%" poster="{{asset('img/play3.jpg')}}">
                        <source src="{{asset('video/'.$video->link)}}" type="video/mp4">
                        <source src="mov_bbb.ogg" type="video/ogg">
                    </video>

                </div>



            </div>

        </section>



        <section class="rh_section rh_section__partners diagonal-mod">
            <div class="diagonal-mod-background"></div>
            <div class="wrapper-section-contents">
                <div class="rh_section__head">



                    <h2 style="margin: 2px" class="rh_section__title">
                        Partners					</h2>


                </div>
                <div class="rh_section__partners_wrap">
                  @foreach($partners as $partner)
                        <div class="rh_partner post-118 partners type-partners status-publish has-post-thumbnail hentry">
                            <a target="_blank" href="{{$partner->link}}" title="Codecanyon">
                                <img width="137" height="117" src="{{asset('photo/'.$partner->img)}}" class="attachment-partners-logo size-partners-logo wp-post-image" alt="no image"  />                            </a>
                        </div>
                      @endforeach

                </div>
            </div>
        </section><!-- /.rh_section rh_section__partners -->    </div>




@endsection