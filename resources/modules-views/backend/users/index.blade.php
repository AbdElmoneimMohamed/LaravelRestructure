@extends('backend.layouts.app')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{__("messages.Users")}}</div>
                <div class="panel-body">
                    <table class="table table-condensed">
                        <thead>
                        <tr>
                            <th>{{__("messages.Name")}}</th>
                            <th>{{__("messages.Email")}}</th>
                            <th>{{__("messages.Role")}}</th>
                            <th>{{__("messages.Action")}}</th>
                        </tr>
                        </thead>
                        <tbody>
                        @foreach( $users as $user)
                        <tr>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->roles[0]->name}}</td>
                            <td> {{Html::link("admin/users/$user->id", 'view') }}
                            </td>
                        </tr>
                       @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
