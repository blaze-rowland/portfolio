@if(Request::getPathInfo() === '/admin/revenue')
  <a href="#revenue">
    <li><i class="fa fa-plus"></i></li>
  </a>
@elseif(Request::getPathInfo() === '/admin/projects')
  <a href="#projects">
    <li><i class="fa fa-plus"></i></li>
  </a>
@elseif(Request::getPathInfo() === '/admin/clients')
  <a href="#clients">
    <li><i class="fa fa-plus"></i></li>
  </a>

  
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


@elseif(Request::getPathInfo() === '/admin/notes')
  <a href="#notes">
    <li><i class="fa fa-plus"></i></li>
  </a>
@endif
