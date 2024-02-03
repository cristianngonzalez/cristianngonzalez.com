@extends('admin.layouts.admin')
@section('title', 'Blogs ')

@section('content')

<div class="h-100 p-4">
    <p class="h1">Users</p>


    <table class="table striped table-border mt-4"
        data-role="table"
        data-rows="10"
        data-rows-steps="5, 10"
        data-show-activity="false"
        data-rownum="false"
        data-check="false"
        data-check-style="2"
    >
        <thead>
            <tr>
                <th data-sortable="true" data-sort-dir="asc"  data-format="int">ID</th>
                <th data-sortable="true">Name</th>
                <th data-sortable="true">Email</th>
                <th data-sortable="false">Admin</th>
                <th data-sortable="true"  data-format="date" data-format-mask="%d-%m-%y" >Delete</th>
            </tr>
        </thead>
        <tbody>

            @foreach ($users as $user)
                <tr>
                    <td>{{$user->id}}</td>
                    <td>{{$user->name}}</td>
                    <td>{{$user->email}}</td>
                    <!--Edit a post------------------------------------------------>
                    <td>{{$user->admin}}</td>
                    <!--End Edit a post------------------------------------------------>
                    <!--Delete a post------------------------------------------------>
                    <td>{{$user->created_at}}</td>
                    <!--End Delete a post------------------------------------------------>
                </tr>
            @endforeach

        </tbody>
    </table>


</div>

@endsection