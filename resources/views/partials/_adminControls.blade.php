@if(Request::getPathInfo() === '/admin/revenue')
  <a href="{{ route('revenue.create') }}">
    <li><i class="fa fa-plus"></i></li>
  </a>

<!-- Clients -->
@elseif(Request::getPathInfo() === '/admin/clients')
  <a href="{{ route('clients.create') }}">
    <li><i class="fa fa-plus"></i></li>
  </a>
@elseif(isset($client))
  @if(Request::getPathInfo() === '/clients/'. $client->id)
    <a href="{{url('clients/'.$client->id.'/edit')}}">
      <li><i class="fa fa-pencil"></i></li>
    </a>
    <form action="{{route('clients.destroy', $client->id)}}" method="POST">
      @csrf
      <input name="_method" type="hidden" value="DELETE">
        <a class="delete negative">
          <li>
            <button class="admin-nav-btn"><i class="negative fa fa-trash"></i></button>
          </li>
        </a>
    </form>
  @endif
<!-- End Clients -->

<!-- Projects -->
@elseif(Request::getPathInfo() === '/admin/projects')
  <a href="{{ route('projects.create') }}">
    <li><i class="fa fa-plus"></i></li>
  </a>
@elseif(isset($project))
  @if(Request::getPathInfo() === '/projects/'. $project->id)
    <a href="{{url('projects/'.$project->id.'/edit')}}">
      <li><i class="fa fa-pencil"></i></li>
    </a>
    <form action="{{route('projects.destroy', $project->id)}}" method="POST">
      @csrf
      <input name="_method" type="hidden" value="DELETE">
        <a class="delete negative">
          <li>
            <button class="admin-nav-btn"><i class="negative fa fa-trash"></i></button>
          </li>
        </a>
    </form>
  @endif
<!-- End Projects -->


<!-- Posts -->
@elseif(Request::getPathInfo() === '/admin/posts')
  <a href="{{route('posts.create')}}">
    <li><i class="fa fa-plus"></i></li>
  </a>
@elseif(isset($post))
  @if(Request::getPathInfo() === '/posts/'. $post->id)
    <a href="{{url('posts/'.$post->id.'/edit')}}">
      <li><i class="fa fa-pencil"></i></li>
    </a>
    <form action="{{route('posts.destroy', $post->id)}}" method="POST">
      @csrf
      <input name="_method" type="hidden" value="DELETE">
        <a class="delete negative">
          <li>
            <button class="admin-nav-btn"><i class="negative fa fa-trash"></i></button>
          </li>
        </a>
    </form>
  @endif
<!-- End Posts -->

@endif
