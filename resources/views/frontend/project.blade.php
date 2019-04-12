@extends('layouts.frontend.frontend')
@section('content')
<section id="home-properties-section" class="rh_section rh_section--props_padding rh_latest-properties ajax-pagination diagonal-mod">


    <div class="container-later-properties">
        <div id="home-properties-section-wrapper" class="wrapper-section-contents">
            <div id="home-properties-section-inner">





                <div id="London" class="tabcontent rh_section__properties " style="width: 100%">







@foreach($projeects as $project)
                        <article class="yan rh_prop_card">

                            <div class="">

                                <div class="rh_label rh_label__property">
                                    <div class="rh_label__wrap">
                                        {{$project->country}}                    <span></span>
                                    </div>
                                </div>            <!-- /.rh_label -->

                                <figure class="rh_prop_card__thumbnail">
                                    <a href="property/villa-on-grand-avenue/index.html">
                                        <img style="width: 380px;height: 285px"  src="{{asset('photo/'.$project->image)}}" class="attachment-modern-property-child-slider size-modern-property-child-slider wp-post-image" sizes="(max-width: 680px) 100vw, 680px" />

                                    </a>

                                    <div class="rh_overlay">

                                    </div>
                                    <div class="rh_overlay__contents rh_overlay__fadeIn-bottom">
                                        <a href="{{ route('projectsingle', $project->id) }}" ">View Property</a>
                                    </div>
                                </figure>
                                <!-- /.rh_prop_card__thumbnail -->

                                <div class="rh_prop_card__details" style="text-align: center; border:2px solid #DCDBDB;">
                                    <div id="rh_prop_card_one">
                                        <h3 style="margin-left: -8%; margin-bottom: 1%;">
                                            <center>
                                                <a href="property/villa-on-grand-avenue/index.html">
                                                    {{$project->header}}
                                                </a>
                                            </center>
                                        </h3>
                                    </div>
                                </div>
                            </div>

                        </article>

                    @endforeach





                </div>

            </div>



        </div>
    </div>










</section>
@endsection