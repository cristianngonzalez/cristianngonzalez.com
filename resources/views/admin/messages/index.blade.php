@extends('admin.layouts.admin')
@section('title', 'Blogs ')

@section('content')


<div class="h-100 p-4">
    <p class="h1">Messages</p>


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
                <th data-sortable="true">Name</th>
                <th data-sortable="true"  data-format="date" data-format-mask="%d-%m-%y" >Date</th>
                <th data-sortable="false"></th>
            </tr>
        </thead>
        <tbody>
            @foreach ($messages as $message)
                <tr>
                    <td>{{$message->id}}</td>
                    <td><a href="{{route('admin.messages.detail' ,  [$message] )}}" target="_blank">{{$message->name}}</a></td>
                    <td>{{$message->created_at}}</td>
                    <!--Delete a post------------------------------------------------>
                    <td>Delete</td>
                    <!--End Delete a post------------------------------------------------>
                </tr>
            @endforeach
        </tbody>
    </table>


</div>

@endsection