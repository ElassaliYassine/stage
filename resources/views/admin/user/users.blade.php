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
               

                {{-- serche start --}}
                <form action="/search_user"  method="get">
                    {{-- @csrf --}}
                    <select name="option" id=""  class="" >
                        <option hidden value="">choose</option>
                        <option value="id">Id</option>
                        <option value="name">Name</option>
                        <option value="lastname">Lastname</option>
                        <option value="email">Email</option>
                        <option value="admin">Admin</option>
                        <option value="no_admin">No admin</option>
                    </select>
                    
                    <input type="text" name="search_user"   >
                    <input type="submit">
                </form>
                {{-- serche end  --}}

                {{-- start select --}}

                 <!-- Nav Item - User Information -->
                        <div hidden  class="  dropdown no-arrow p-0">
                            <a class="nav-link dropdown-toggle" href="#" id="search_2415" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                 
                                <h6 class="mx-4 font-weight-bold text-primary">Select 
                                    <i class="fas fa-search fa-sm fa-fw mr-2 text-primary"></i>    
                                </h6>
                               
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu  shadow animated--grow-in"
                                aria-labelledby="search_2415">

                                {{-- <a  class="dropdown-item  "  href="{{route('admin/user/sel', 'all' )}}">
                                    <i class="fas fa-align-left fa-sm fa-fw mr-2 text-gray-400"></i>
                                    all
                                </a>  --}}
                                


                               
                            </div>
                        </div>

                {{-- end select --}}
                       
               
             


            </div>
            <div class="card-body">
                <div class="table-responsive">

                @if (  count($users) >= 1 )
                    
                <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                    <thead>
                        <tr>
                            <th>id</th>
                            <th>image</th>
                            <th>Name</th>
                            <th>Lastname</th>
                            <th>phone number</th>
                            <th>Email</th>
                            <th>is admin</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>id</th>
                            <th>image</th>
                            <th>Name</th>
                            <th>Lastname</th>
                            <th>phone nomber</th>
                            <th>Email</th>
                            <th>is admin</th>
                            <th>Action</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach ($users as $user)
                            
                       
                        <tr  >
                            <td>
                                {{  $user->id }}
                            </td>
                            <td>
                                <a  href="#" class="" data-bs-toggle="modal" data-bs-target="#image{{$user->id }}"  >
                                    <img src="/assets/images/profile/{{$user->img_user}}" width="200px"  alt="n">
                                </a>
                            </td>
                            <td>{{$user->name  }}</td>
                            <td>{{$user->lastname }}</td>
                            <td>   <a href="tel:+{{$user->number_phone }}">  {{$user->number_phone }}   </a> </td>
                            <td> 
                                <a href="mailto:{{$user->email }}">{{$user->email }}</a>
                            </td>
                            <td>
                                {{($user->is_admin) ? "Yes" : "No"}}   
                            </td>
                            
                            <td class=" " >
                              
                                <div class="icon">
                                      
                                    <a href=""  class="bi bi-trash m-2  text-danger  "   data-bs-toggle="modal" data-bs-target="#AUZiuaz361{{  $user->id }}" ></a>
                                    <a   class="bi  m-1  bi-upload  text-info"  href="" data-bs-toggle="modal" data-bs-target="#update_to_admin{{  $user->id }}">  </a>
                                </div>
                             
                            </td>
                        </tr>
                        {{-- start modal delete --}}
                        <div class="modal fade" id="AUZiuaz361{{  $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                                    <button type="button" class="btn btn-info text-light  " data-bs-dismiss="modal">Close</button>
                                    <a href="{{route('admin/user/delete', $user->id)}}"  class=" mx-3  btn btn-danger  "   >delete</a>
                                </div>
                                </div>
                            </div>
                        </div>
                        {{-- end modal --}}
                        {{-- start modal  apdate to admin --}}
                        <div class="modal fade" id="update_to_admin{{  $user->id }}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                            <div class="modal-dialog">
                                <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="exampleModalLabel"> Attention  </h5>
                                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                    Are you sure to update user to be admin ?
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-info text-light " data-bs-dismiss="modal">Close</button>
                                    <a href="{{route('admin/user/update_to_admin', $user->id)}}"  class="btn btn-success  "   >update</a>
                                </div>
                                </div>
                            </div>
                        </div>
                        {{-- end modal --}}
                        {{-- start model image --}}
                        <div class="modal fade" id="image{{$user->id }}" tabindex="-1" aria-labelledby="image{{$user->id }}Label" aria-hidden="true">
                            <div class="modal-dialog modal-fullscreen">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title h4" id="image{{$user->id }}Label"> image </h5>
                                        <button type="button" class="btn-close mx-2 " data-bs-dismiss="modal" aria-label="Close"></button>
                                    </div>
                                    <div class="modal-body">
                                        <div  class="w-100  text-center "  >
                                            <img src="/assets/images/profile/{{$user->img_user}}"  class="image_full_modal"  alt="n">
                                        </div>
                                        
                                    </div>
                                
                                </div>
                            </div>
                        </div>
                        {{-- end  model --}}
                         

                    


                            @endforeach
                    </tbody>
                </table>
                @else
                    <h1>  Not found  </h1>
                @endif    

                </div>
                <div class="" >
                    <div class=" w-25 m-auto text-center px-5 " >
                        {{ $users->withQueryString()->links() }}
                       {{-- {{ ( 1)? $users->links() :'' }} --}}
                        {{-- Current page:{{$users->count()}} --}}
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!-- /.container-fluid -->








@endsection




