<div class="container">
    <form action="/search" method="POST" role="search">
        {{ csrf_field() }}
        <div class="input-group">
            <input type="text" class="form-control" name="q"
                placeholder="Search users"> <span class="input-group-btn">
                <button type="submit" class="btn btn-default">
                    <span class="glyphicon glyphicon-search"></span>
                </button>
            </span>
        </div>
    </form>
        
    @if(isset($details))
        <p> The Search results for your query <b> {{ $query }} </b> are :</p>
        <hr>
    <table class="table table-striped">
        <thead>
            <tr>
                <th>Name</th>
                <th>Auth</th>
            </tr>
        </thead>
        <tbody>
            @foreach($details as $book)
            <tr>
                <td>{{$book->name}}</td>
                <td>{{$book->auth}}</td>
            </tr>
            @endforeach
        </tbody>
    </table>
    @endif
</div>