@component('backend.components.table',$settings)
    {{-- Component content--}}
    @foreach($homes as $home)
        <tr>
            <td>{{$home->id}}</td>
            <td><img width="75  " class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$home->image)}}"></td>
            <td>{{$home->header}}</td>
            <td>{{$home->description}}</td>
            <td>{{$home->bedrooms}}</td>
            <td>{{$home->floor}}</td>
            <td>{{$home->area}}</td>
            <td>{{$home->country}}</td>
            <td>{{$home->price}}</td>
            <td>{{$home->city}}</td>
            <td>{{$home->address}}</td>
            <td>{{$home->date}}</td>
            <td>
                {{ $home->type === 0? "Menzil" : "Obyekt" }}
            </td>
            <td>
                <form action="{{route('home.destroy',['home' => $home->id])}}" method="post">
                    {{ method_field('delete') }}
                    @csrf
                    <a class="btn bg-blue btn-circle waves-effect waves-circle waves-float" href="{{route('home.edit',['slider' => $home->id])}}"><i class="material-icons">edit</i></a>
                    <button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endcomponent