
<h1>User prifile</h1>
<h1>Name: {{$auth->name}}</h1>
<h1>Email: {{$auth->email}}</h1>
<h1>password: {{$auth->password}}</h1>
{{-- <form action="{{route('admin.user.uploadImage')}}" method="POST" enctype="multipart/form-data">
    @csrf
    <input type="text" name="name" id="" placeholder="input name">
    <input type="file" name="image" id="">
    <input type="submit" name="submit" value="Add Image">
</form> --}}