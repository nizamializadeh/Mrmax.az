@component('backend.components.form',$setting)
    {{-- Component content--}}
    <form id="form_validation" action="{{route('partner.update',['partner' => $partner->id])}}" method="post" enctype="multipart/form-data">
        {{method_field('PUT')}}
        @csrf
        <div class="row clearfix">
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="image" type="file" required class="form-control hidden post-image" id="postImage">
                        <label for="postImage" style="cursor: pointer">
                            <img style="max-width: 250px" class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$partner->img)}}">
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                    <div class="input-group  hidden colorpicker colorpicker-element">
                        <div class="form-line">
                            <input type="text" class="form-control" name="color" value="rgb(134, 186, 191)">
                        </div>
                        <span class="input-group-addon">
                            <i style="background-color: rgb(134, 186, 191);"></i>
                        </span>
                    </div>
                </div>
            <div class="col-sm-12">
                <div class="demo-switch">
                    <button type="submit" class="btn btn-success waves-effect right">Edit Partner</button>
                </div>
            </div>

    </form>
@endcomponent