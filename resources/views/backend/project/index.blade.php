@component('backend.components.table',$settings)
    {{-- Component content--}}
    @foreach($projects as $project)
        <tr>
            <td>{{$project->id}}</td>
            <td><img width="75  " class="img-responsive thumbnail post-img-preview" src="{{asset('photo/'.$project->image)}}"></td>
            <td>{{$project->header}}</td>
            <td>{{$project->description}}</td>
            <td>{{$project->country}}</td>
            <td>
                <form action="{{route('project.destroy',['project' => $project->id])}}" method="post">
                    {{ method_field('delete') }}
                    @csrf
                    <a class="btn bg-blue btn-circle waves-effect waves-circle waves-float" href="{{route('project.edit',['project' => $project->id])}}"><i class="material-icons">edit</i></a>
                    <button type="submit" class="btn bg-red btn-circle waves-effect waves-circle waves-float">
                        <i class="material-icons">delete</i>
                    </button>
                </form>
            </td>
        </tr>
    @endforeach
@endcomponent