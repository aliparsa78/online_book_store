@extends('layouts/backend/main')
@section('title')
    Users
@endsection

@section('content')
    <div class="">
        <div class="main p-5">
            <div class="card shadow">
                <div class="card-header">
                    <h4 class="text-center">Catagory Table Content</h4>
                </div>
                <div class="card-body">
                    <table class="table table-bordered table-responsive table-hover p-5">
                    <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Role_as</th>
                        <th>Change Password</th>
                        <th>Update</th>
                        <th>Delete</th>
                        
                    </tr>
                    </thead>
                    <tbody>
                    @php $idNumber=1   @endphp
                        @foreach($user as $item)
                        
                        <tr>
                            <td>{{$idNumber++}}</td>
                            <td>{{$item->name}}</td>
                            <td>{{$item->email}}</td>
                            <td>
                                <?php if($item->role_as== 1 ){echo "admin";}else{echo "user";} ?>
                            </td>
                            <td>
                                <a href="{{url('change-password/'.$item->id)}}" class="btn btn-info fa fa-info ">ChangePassword</a>
                            </td>
                            <td>
                                <a href="{{url('edite-user/'.$item->id)}}" class="btn btn-info fa fa-edit">Update</a>
                            </td>
                            <td>
                                <a href="{{url('delete_user/'.$item->id)}}" class="btn btn-danger fa fa-remove">Remove</a>
                            </td>
                            
                        </tr>
                        @endforeach
                    </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection