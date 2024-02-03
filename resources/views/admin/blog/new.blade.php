@extends('admin.layouts.admin')
@section('title', 'Home ')

@section('content')

@if(isset($newblog))
    {{ 'A new blog was added' }}
@endif


<div class="container">
    <div class="row justify-content-center">

        <div class="col-md-12 mt-2">
            <!--Alerts------------------>
            @if( isset($success) )
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{$success}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            @if( isset($warning) )
                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                    {{$warning}}
                    <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                </div>
            @endif
            <!--End Alerts------------------>
        </div>

        <div class="col-md-12">

            <h1>New blog</h1>
            <hr>

            <form action="{{route('admin.blogs.set')}}" method="POST" enctype='multipart/form-data'>
                @csrf
                @method('POST')

                <div class="form-floating mb-3">
                    <input type="title" class="form-control" name="title" id="blog-title" required>
                    <label for="blog-title">Blog title</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="file" class="form-control" name="picture-file" id="picture-file">
                    <label for="picture-file">Picture file</label>
                </div>

                <div class="form-floating mb-3">
                    <input type="title" class="form-control" name="video" id="video" required>
                    <label for="video">Url YouTube Video</label>
                </div>

                <textarea name="article"></textarea>
                <!--Tiny script-->
                <script>
                    tinymce.init({
                        selector: 'textarea',
                        plugins: 'anchor autolink charmap codesample emoticons image link lists media searchreplace table visualblocks wordcount checklist mediaembed casechange export formatpainter pageembed linkchecker a11ychecker tinymcespellchecker permanentpen powerpaste advtable advcode editimage tinycomments tableofcontents footnotes mergetags autocorrect typography inlinecss',
                        toolbar: 'undo redo | blocks fontfamily fontsize | bold italic underline strikethrough | link image media table mergetags | addcomment showcomments | spellcheckdialog a11ycheck typography | align lineheight | checklist numlist bullist indent outdent | emoticons charmap | removeformat',
                        tinycomments_mode: 'embedded',
                        tinycomments_author: 'Author name',
                        mergetags_list: [
                            { value: 'First.Name', title: 'First Name' },
                            { value: 'Email', title: 'Email' },
                        ]
                    });
                </script>
                <!--End tiny script-->
                <input type="submit" value="Publish blog" class="btn btn-success mt-3">
            </form>

            <img src="{{asset('storage/387d9f49-2a7c-4bdc-941c-c41cd5ab0ef4.svg')}}" alt="">
            

        </div>
    </div>
</div>



@endsection