@extends('_layout.cork')
        
@section('content')

        <h1>Welcome to book list</h1>
            <div class="table-responsive">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th scope="col">Книга</th>
                <th scope="col">>моментално празно поле<</th>
                <th class="text-center" scope="col">Корисник</th>
                <th class="text-center" scope="col">Изнајми</th>
            </tr>
            </thead>
            <tbody>
            
            @foreach ($books as $book)
            
            
            
        
            <tr>
                <td>
                <div class="media">
                        <div class="avatar me-2">
                            <img alt="avatar" src="../src/assets/img/profile-7.jpeg" class="rounded-circle" />
                        </div>
                        <div class="media-body align-self-center">
                            <h5><a href="{{ route('kniga.prikazi',['bookId' => $book->id]) }}">{{ $book->title }} </a></h5>
                            <span>$author->name (помош)</span>
                        </div>
                    </div>

                    

                
                </td>
                <td>
                    <ul>
                    @foreach($book->author as $author)
                    <li><a href="{{ route('avtor.prikazi',['authorId' => $author->id]) }}">  </a> </li>
                    @endforeach
                    </ul>
                </td>
                <td class="text-center">
                    
                </td>
                <td class="text-center">
                    <div class="action-btns">
                        <button>Изнајми</button>
                    </div>
                </td>
            </tr>


       
            @endforeach
        </div>
 </tbody>
    </table>
</div>
            
@endsection