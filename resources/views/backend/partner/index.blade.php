@component('backend.components.table',$settings)
    {{-- Component content--}}
    @foreach($partners as $partner)
        <tr>
            <td>{{$partner->id}}</td>
            <td><img width="75  " class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$partner->img)}}"></td>

            <td>
                <form action="{{route('partner.destroy',['partner' => $partner->id])}}" method="post">
                    {{ method_field('delete') }}
                    @csrf
                    <a class="btn bg-blue btn-circle waves-effect waves-circle waves-float" href="{{route('partner.edit',['partner' => $partner->id])}}"><i class="material-icons">edit</i></a>
                    <button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endcomponent