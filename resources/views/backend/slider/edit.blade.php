@component('backend.components.form',$setting)
    {{-- Component content--}}

    <form id="form_validation" action="{{route('slider.update',['slider' => $slider->id])}}" method="post" enctype="multipart/form-data">
        {{method_field('PUT')}}
        @csrf
        <div class="row clearfix">
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="image" type="file" required class="form-control hidden post-image" id="postImage">
                        <label for="postImage" style="cursor: pointer">
                            <img width="150px;" class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$slider->image)}}">
                        </label>
                    </div>
                </div>

                <div class="col-sm-6">
                    <div class="form-group form-float">
                        <div class="form-line">
                            <select name="project_id" id="">
                                @foreach($projects as $project)
                                    <option value="{{$project->id}}">{{$project->header}}</option>
                                @endforeach
                            </select>

                        </div>
                    </div>


                </div>




            <div class="col-sm-12">
                <div class="demo-switch">
                    <button type="submit" class="btn btn-success waves-effect right">Edit Slider</button>
                </div>
            </div>

        </div>

    <hr>
</div>




@endcomponent