<!DOCTYPE html>
<html>
<head>
    <title>How to Install and Use Trix Editor in Laravel</title>
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="https://unpkg.com/trix@2.0.8/dist/trix.css">
    <style type="text/css">
        .trix-content img {
            width: 500px;
            height: 300px;
        }
    </style>
</head>
<body>
    
<div class="container">

    <div class="card mt-5">
        <h3 class="card-header p-3">How to Install and Use Trix Editor in Laravel?</h3>
        <div class="card-body">
            <form action="{{ route('trix.store') }}" method="POST">
                @csrf

                <div class="form-group">
                    <strong>Title:</strong>
                    <input type="text" name="title" class="form-control" placeholder="Title" value="{{ old('title') }}">
                </div>
          
                <div class="form-group">
                    <strong>Slug:</strong>
                    <input type="text" name="slug" class="form-control" placeholder="Slug" value="{{ old('slug') }}">
                </div>
          
                <div class="form-group">
                    <strong>Body:</strong>
                    <input id="x" type="hidden" name="body">
                    <trix-editor input="x" class="trix-content"></trix-editor>
                </div>
          
                <div class="form-group mt-2">
                    <button class="btn btn-success" type="submit">Submit</button>
                </div>
          
            </form>
        </div>
    </div>
</div>
     
<script type="text/javascript" src="https://unpkg.com/trix@2.0.8/dist/trix.umd.min.js"></script>
<script type="text/javascript">
    var fileUploadURL = "{{ route('trix.upload') }}";
</script>
<script src="{{ asset('js/attachments.js') }}"></script>

</body>
</html>
