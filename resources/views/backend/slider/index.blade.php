@component('backend.components.table',$settings)
    {{-- Component content--}}
    @foreach($sliders as $slider)
        <tr>
            <td>{{$slider->id}}</td>
            <td><img width="75  " class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$slider->image)}}"></td>
            <td> {{  $slider->header}}</td>

            <td>
                <form action="{{route('slider.destroy',['slider' => $slider->id])}}" method="post">
                    {{ method_field('delete') }}
                    @csrf
                    <a class="btn bg-blue btn-circle waves-effect waves-circle waves-float" href="{{route('slider.edit',['slider' => $slider->id])}}"><i class="material-icons">edit</i></a>
                    <button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endcomponent