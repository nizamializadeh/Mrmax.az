@component('backend.components.form',$settings)
    {{-- Component content--}}
    <form id="form_validation" action="{{route('social.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="row clearfix">
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="icon" type="text" required class="form-control">
                        <label class="form-label">Icon</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="link" type="text" required class="form-control">
                        <label class="form-label">Link</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="demo-switch">
                    <button type="submit" class="btn btn-success waves-effect right">Create Socail</button>
                </div>
            </div>

    </form>
@endcomponent