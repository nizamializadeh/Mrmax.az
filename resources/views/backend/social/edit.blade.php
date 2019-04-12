@component('backend.components.form',$setting)
    {{-- Component content--}}
    <form id="form_validation" action="{{route('social.update',['social' => $social->id])}}" method="post" enctype="multipart/form-data">
        {{method_field('PUT')}}
        @csrf
        <div class="row clearfix">
            <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="icon" type="text" required class="form-control" value="{{$social->icon}}">
                            <label class="form-label">Icon</label>
                        </div>
                    </div>
                </div>
            <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <input name="link" type="text" required class="form-control" value="{{$social->link}}">
                            <label class="form-label">Link</label>
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