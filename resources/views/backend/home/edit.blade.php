@component('backend.components.form',$setting)
    {{-- Component content--}}

    <form id="form_validation" action="{{route('home.update',['home' => $home->id])}}" method="post" enctype="multipart/form-data">
        {{method_field('PUT')}}
        @csrf
        <div class="row clearfix">
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="image" type="file" required class="form-control hidden post-image" id="postImage">
                        <label for="postImage" style="cursor: pointer">
                            <img width="150px;" class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$home->image)}}">
                        </label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="header" type="text" required class="form-control" value="{{$home->header}}">
                            <label class="form-label">Header</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="description" type="text" required class="form-control" value="{{$home->description}}">
                            <label class="form-label">Description</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="country" type="text" required class="form-control" value="{{$home->country}}">
                            <label class="form-label">Country</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="bedrooms" type="text" required class="form-control" value="{{$home->bedrooms}}">
                            <label class="form-label">Bedrooms</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="floor" type="text" required class="form-control" value="{{$home->floor}}">
                            <label class="form-label">Floor</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="area" type="text" required class="form-control" value="{{$home->area}}">
                            <label class="form-label">Area</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="price" type="text" required class="form-control" value="{{$home->price}}">
                            <label class="form-label">Price</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="city" type="text" required class="form-control" value="{{$home->city}}">
                            <label class="form-label">City</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="address" type="text" required class="form-control" value="{{$home->address}}">
                            <label class="form-label">Address	</label>
                        </div>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="date" type="date" required class="form-control" value="{{$home->date}}">
                        </div>

                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="demo-radio-button">
                            @if( $home->type ==0)
                                <input name="type" type="radio" id="radio_1" checked value="0">
                                <label for="radio_1">Menzil</label>
                                <input name="type" type="radio" id="radio_2" value="1">
                                <label for="radio_2">Obyekt</label>
                            @else
                                <input name="type" type="radio" id="radio_1" value="0">
                                <label for="radio_1">Menzil</label>
                                <input name="type" type="radio" id="radio_2" checked value="1">
                                <label for="radio_2">Obyekt</label>
                            @endif

                        </div>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="demo-switch">
                        <button type="submit" class="btn btn-success waves-effect right">Edit Home</button>
                    </div>
                </div>

            </div>
    </form>
    <hr>
    <div class="col-sm-12 col-md-12 col-lg-12">
        <form id="form_validation"  action="{{route('homeupload')}}"   method="post"  enctype="multipart/form-data">
            @csrf
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="img[]" type="file" multiple required class="form-control " >
                        <input name="home_id" type="hidden"   class="form-control " value="{{$home->id}}" >
                        <label  style="cursor: pointer">
                            images
                        </label>
                    </div>
                </div>

                <div class="col-sm-12">
                    <div class="demo-switch">
                        <button type="submit" class="btn btn-success waves-effect right">Create Image</button>
                    </div>
                </div>
            </div>
        </form>
    </div>
    <div class="col-sm-12 col-md-12 col-lg-12">
        @foreach($home->images as $image)
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="col-sm-6">
                        <img  style="max-height:250px" width="150px"  class="img-responsive thumbnai" src="{{asset('photo/'.$image->img)}}">
                    </div>
                    <div class="col-xs-3 col-sm-3 col-md-3 col-lg-3">

                        <form action="{{route('homeimg',['homeimg' => $image->id])}}" method="post">
                            {{ method_field('delete') }}
                            @csrf
                            <button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                                <i class="material-icons">delete</i>
                            </button>
                        </form>
                    </div>
                </div>
            </div>
        @endforeach
    </div>



@endcomponent