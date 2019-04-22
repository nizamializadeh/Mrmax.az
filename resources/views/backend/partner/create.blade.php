@component('backend.components.form',$settings)
    {{-- Component content--}}
    <form id="form_validation" action="{{route('partner.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="row clearfix">
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="image" type="file" required class="form-control hidden post-image" id="postImage">
                        <label for="postImage" style="cursor: pointer">
                            <img class="img-responsive thumbnail post-img-preview" src="{{asset('admin/images/image-gallery/thumb/thumb-15.jpg')}}">
                        </label>
                    </div>
                </div>

            </div>
            <div class="col-sm-6">
                <div class="input-group hidden colorpicker colorpicker-element">
                    <div class="form-line">
                        <input type="text" class="form-control " name="color" value="#00AABB">
                    </div>
                    <span class="input-group-addon">
                        <i style="background-color: rgb(134, 186, 191);"></i>
                    </span>
                </div>
            </div>


            <div class="col-sm-12">
                <div class="demo-switch">
                    <button type="submit" class="btn btn-success waves-effect right">Create Partners</button>
                </div>
            </div>

    </form>
@endcomponent