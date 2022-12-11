@extends('admin.layouts.admin')
@section('title', 'Blogs ')

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
                    <!--Edit a post------------------------------------------------>
                    <td>
                        <a href="{{route('admin.blogs.edit' , [$blog])}}">Edit</a>
                    </td>
                    <!--End Edit a post------------------------------------------------>
                    <!--Delete a post------------------------------------------------>
                    <td>
                        <form action="{{route('admin.blogs.delete')}}" method="POST">
                            @csrf
                            @method('POST')
                            <input type="text" name="id" value="{{$blog->id}}" hidden>
                            <input type="text" name="title" value="{{$blog->title}}" hidden>
                            <input href="" type="submit" value="Delete">
                        </form>
                    </td>
                    <!--End Delete a post------------------------------------------------>
                </tr>
            @endforeach
        </tbody>
    </table>


</div>

@endsection