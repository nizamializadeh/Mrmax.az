@component('backend.components.table',$settings)
    {{-- Component content--}}
    @foreach($videos as $video)
        <tr>
            <td>{{$video->id}}</td>
            <td>
                <video controls="" style="width: 30%" >
                    <source src="{{asset('video/'.$video->link)}}" type="video/mp4">
                    <source src="mov_bbb.ogg" type="video/ogg">
                </video>

            </td>
            <td>
                <form action="{{route('video.destroy',['video' => $video->id])}}" method="post">
                    {{ method_field('delete') }}
                    @csrf
                    {{--<a class="btn bg-blue btn-circle waves-effect waves-circle waves-float" href="{{route('video.edit',['video' => $video->id])}}"><i class="material-icons">edit</i></a>--}}
                    <button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endcomponent