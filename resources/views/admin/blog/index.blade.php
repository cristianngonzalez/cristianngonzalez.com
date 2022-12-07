@extends('admin.index')
@section('title', 'Home ')

@section('content')

<div class="h-100 p-4">
    <p class="h1">Blog</p>


    <table class="table striped table-border mt-4"
        data-role="table"
        data-rows="5"
        data-rows-steps="5, 10"
        data-show-activity="false"
        data-rownum="false"
        data-check="false"
        data-check-style="2"
    >
        <thead>
            <tr>
                <th data-sortable="true" data-sort-dir="asc"  data-format="int">ID</th>
                <th data-sortable="true">Title</th>
                <th data-sortable="true"  data-format="date" data-format-mask="%d-%m-%y" >Date</th>
                <th data-sortable="false"></th>
                <th data-sortable="false"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($blogs as $blog)
                <tr>
                    <td>{{$blog->id}}</td>
                    <td>{{$blog->title}}</td>
                    <td>{{$blog->created_at}}</td>
                    <td><a href="">Edit</a></td>
                    <td><a href="">Delete</a></td>
                </tr>
            @endforeach
        </tbody>
    </table>


</div>

@endsection