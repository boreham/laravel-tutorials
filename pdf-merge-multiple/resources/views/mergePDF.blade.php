<html lang="en">
<head>
  <title>Laravel Merge Multiple PDF Files</title>
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>    
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">Laravel Merge Multiple PDF Files</h3>
        <div class="card-body">

            @if (count($errors) > 0)
            <div class="alert alert-danger">
                <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
                </ul>
            </div>
            @endif
                 
            <form method="post" action="{{ route('merge.pdf.post') }}" enctype="multipart/form-data">
                  {{csrf_field()}}
                  <input type="file" name="filenames[]" class="myfrm form-control" multiple="">
                  <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
            </form>  

        </div>
    </div>
</div>
</body>
</html>
