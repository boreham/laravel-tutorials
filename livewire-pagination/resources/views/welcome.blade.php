<!DOCTYPE html>
<html>
<head>
    <title>Laravel Livewire</title>
    @livewireStyles
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" crossorigin="anonymous">
</head>
<body>
    
<div class="container">
    
    <div class="card mt-5">
        <h3 class="card-header p-3">Laravel Livewire Pagination</h3>
        <div class="card-body">
            @livewire('user-pagination')
        </div>
    </div>
        
</div>
    
</body>
  
@livewireScripts
  
</html>
