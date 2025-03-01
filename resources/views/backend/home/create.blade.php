@component('backend.components.form',$settings)
    {{-- Component content--}}
    <form id="form_validation" action="{{route('home.store')}}" method="post"  enctype="multipart/form-data">
        @csrf
        <div class="row clearfix">

            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="image" type="file" required="required" class="form-control hidden post-image" id="postImage">
                        <label for="postImage" style="cursor: pointer">
                            <img class="img-responsive thumbnail post-img-preview"   src="{{asset('admin/images/image-gallery/thumb/thumb-15.jpg')}}">
                        </label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="img[]" type="file" multiple required class="form-control " >
                        <label  style="cursor: pointer">
                            images
                        </label>
                    </div>
                </div>
            </div>

            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="header" type="text" required class="form-control">
                        <label class="form-label">Header</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="description" type="text" required class="form-control">
                        <label class="form-label">Description</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="country" type="text" required class="form-control">
                        <label class="form-label">Country</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="bedrooms" type="text" required class="form-control">
                        <label class="form-label">Bedrooms</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="floor" type="text" required class="form-control">
                        <label class="form-label">Floor</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="area" type="text" required class="form-control">
                        <label class="form-label">Area</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="price" type="text" required class="form-control">
                        <label class="form-label">Price</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="city" type="text" required class="form-control">
                        <label class="form-label">City</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="address" type="text" required class="form-control">
                        <label class="form-label">Address	</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="form-line">
                        <input name="date" type="date" required class="form-control">
                    </div>

                </div>
            </div>
            <div class="col-sm-6">
                <div class="form-group form-float">
                    <div class="demo-radio-button">
                        <input name="type" type="radio" id="radio_1" checked="" value="0">
                        <label for="radio_1">Menzil</label>
                        <input name="type" type="radio" id="radio_2" value="1">
                        <label for="radio_2">Obyekt</label>
                    </div>
                </div>
            </div>
            <div class="col-sm-12">
                <div class="demo-switch">
                    <button type="submit" class="btn btn-success waves-effect right">Create category</button>
                </div>
            </div>
    </form>
@endcomponent