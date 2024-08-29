<!DOCTYPE html>
<html>
<head>
    <title>Laravel Simple Pagination</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.0.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
      
<div class="container">
    <div class="card mt-5">
        <h3 class="card-header p-3">Laravel Simple Pagination</h3>
        <div class="card-body">
            <table class="table table-bordered data-table">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Email</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($users as $user)
                        <tr>
                            <td>{{ $user->id }}</td>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="3">There are no users.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
          
            <!-- You can use Tailwind CSS Pagination as like here: -->
            <!-- {!! $users->withQueryString()->links() !!} -->
          
            {!! $users->withQueryString()->links('pagination::bootstrap-5') !!}
        </div>
    </div>
</div>

</body> 
</html>
