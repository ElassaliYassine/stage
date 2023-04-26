@extends('admin.layouts.app')

@section('page_content')



   <!-- Begin Page Content -->
    <div class="container-fluid">

        <!-- Page Heading -->
        <h1 class="h3 mb-2 text-gray-800">Tables</h1>
        {{-- <p class="mb-4">DataTables is a third party plugin that is used to generate the demo table below.
            For more information about DataTables, please visit the <a target="_blank"
                href="https://datatables.net">official DataTables documentation</a>.</p> --}}

                  

        <!-- DataTales Example -->
        <div class="card shadow mb-4">
            <div class="card-header py-3">
               

                {{-- start select --}}

                 <!-- Nav Item - User Information -->
                        <div class=" dropdown no-arrow p-0">
                            <a class="nav-link dropdown-toggle" href="#" id="search_2415" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 
                                <h6 class="mx-4 font-weight-bold text-primary">Select 
                                    <i class="fas fa-search fa-sm fa-fw mr-2 text-primary"></i>    
                                </h6>
                               
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu  shadow animated--grow-in"
                                aria-labelledby="search_2415">

                                <a  class="dropdown-item  "  href="{{route('admin/post/sel', 'all' )}}">
                                    <i class="fas fa-align-left fa-sm fa-fw mr-2 text-gray-400"></i>
                                    all
                                </a> 
                                <a  class="dropdown-item  "  href="{{route('admin/post/sel', 'active' )}}">
                                    <i class=" fas fa fa-check-square fa-sm fa-fw mr-2 text-gray-400" aria-hidden="true"></i>

                                    active
                                </a>                    
                                <a  class="dropdown-item  "  href="{{route('admin/post/sel', 'no_active' )}}">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    no active
                                    <i class="fa fa-pencil-square-o" aria-hidden="true"></i>
                                </a>    


                               
                            </div>
                        </div>

                {{-- end select --}}
                       
               

            </div>
            <div class="card-body">
                <div class="table-responsive">

                    <form  method="post" action="/admin/post/update"  enctype="multipart/form-data">
                        @csrf
                    <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                        <thead>
                            <tr>
                                <th>image</th>
                                <th>Name</th>
                                <th>Title</th>
                                <th>description</th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr>
                                <th>image</th>
                                <th>Name</th>
                                <th>Title</th>
                                <th>description</th>
                                <th>Active</th>
                                <th>Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            @foreach ($posts as $post)
                                
                           
                            <tr  >
                                <td>
                                    <img src="/assets/images/advertisement/{{$post->Images_post[0]->image_path}}" width="200px"  alt="n">
                                </td>
                                <td>{{$post->user->name  }}</td>
                                <td>{{$post->title }}</td>
                                <td>{{$post->description }}</td>
                                <td>
                                    <div class="mb/-3   mx-5 form/-check    fo/rm-switch">
                                    <input class="form-check-input  text-info "  name="id[]" value="{{ $post->id}}"    type="checkbox" role="switch"  {{ ($post ->active ) ?  'checked  disabled  ': '' }}   >
                                    
                                   </div>
                                </td>
                                <td class=" " >
                                  
                                    <div class="icon">
                                               
                                        <a href="{{route('admin/post/delete', $post->id)}}"  class="bi bi-trash m-2  text-danger  "   data-bs-toggle="modal" data-bs-target="#AUZiuaz361{{ $post ->id }}" ></a>
                                        <a   class="bi bi-eye m-1  text-info"  href="{{route('admin/post/show' , $post->id)}}"></a>
                                    </div>
                                 
                                </td>
                            </tr>
                            {{-- start modal --}}
                            <div class="modal fade" id="AUZiuaz361{{ $post ->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title" id="exampleModalLabel"> Attention  </h5>
                                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        Are you sure to detete ?
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary mx-5 " data-bs-dismiss="modal">Close</button>
                                        <a href="{{route('admin/post/delete', $post->id)}}"  class="bi bi-trash mx-5  text-danger  "   >delete</a>
                                    </div>
                                    </div>
                                </div>
                            </div>
                            {{-- end modal --}}
                             
                                @endforeach
                        </tbody>
                    </table>
                    <input type="submit" value="valide">
                    </form>
                </div>
                <div class="" >
                    <div class=" w-25 m-auto text-center px-5 " >
                        {{-- {{ $posts->withQueryString()->links() }} --}}
                        {{ $posts->links() }}
                        Current page:{{$posts->count()}}
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->






@endsection