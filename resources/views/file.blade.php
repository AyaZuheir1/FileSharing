<!DOCTYPE html>
<html>
<head>
    <title>قائمة الصور المحملة</title>
</head>
<body>
    <h1>قائمة الصور المحملة</h1>

    @foreach ($files as $file)
        <div>
            <h3>{{ $file->file_name }}</h3>
            <img src="{{ Storage::url($file->file_path) }}" alt="{{ $file->file_name }}" style="max-width: 400px; max-height: 400px;">
        </div>
    @endforeach
</body>
</html> 
