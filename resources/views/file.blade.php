<!DOCTYPE html>
<html>
<head>
    <title> Files </title>
</head>
<body>
    <h1>Files</h1>

    @foreach ($files as $file)
        <div>
            <h3>{{ $file->file_name }}</h3>
            <img src="{{ route('file.download', $file->id) }}" alt="{{ $file->file_name }}" style="max-width: 400px; max-height: 400px;">
          
           
        </div>
    @endforeach
</body>
</html> 

