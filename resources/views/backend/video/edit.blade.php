@component('backend.components.form',$setting)
    {{-- Component content--}}
    <form id="form_validation" action="{{route('video.update',['video' => $video->id])}}" method="post" enctype="multipart/form-data">
        {{method_field('PUT')}}
        @csrf
        <div class="row clearfix">
            <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <video controls="" style="width: 30%" >
                                <source src="{{asset('video/'.$video->link)}}" type="video/mp4">
                                <source src="mov_bbb.ogg" type="video/ogg">
                            </video>
                            <label class="form-label">Video</label>
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