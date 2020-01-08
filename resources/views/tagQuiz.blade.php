@include('layouts.header')
@include('partials.tags')

<div class="container-quiz">
    <div>
        <h2>{{ $tags->name }}</h2>
    </div>

    

    <div class="row col-quiz">  
        @foreach($tags->quizzes as $quiz)
        <div class="col-4">
            <a href="{{ route('quiz', ['id' => $quiz->id]) }}"><h3>{{$quiz->title}}</h3></a>
            <h5>{{$quiz->description}}</h5>
            <p>by {{ $users->firstWhere('id', $quiz->app_users_id)->getFullName() }}</p>
        </div>
        @endforeach
        
    </div>
</div>


@include('layouts.footer')