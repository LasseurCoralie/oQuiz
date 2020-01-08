<?php $levelClassList = [1 => 'beginner', 2 => 'medium', 3 => 'expert'] ?>

@include('layouts.header')
@include('partials.tags')

<div class="container-quiz">
<div>
    
    <h2>{{ $quiz->title }} - <span>{{$quiz->questions->count()}} questions</span></h2>
</div>

<div>
    <h4>{{ $quiz->description }}</h4>
</div>

<div>
    <p>by {{ $quiz->author->getFullName() }}</p>
</div>

@if(!empty($quiz->tags))
    <ul>
        @foreach($quiz->tags as $tags)
        <li>{{$tags->name}}</li>
        @endforeach
    </ul>
@endif

<div class="row">
    @foreach($quiz->questions as $question)
    <div class="col-3 question">
    <!-- {{ dump($question->level->name)}} -->
        <span class="level level--{{$levelClassList[$question->level->id]}}">{{ $question->level->name}}</span>
        
        <div class="question__question">{{ $question->question }}</div>
    
        <div>
            <ul>
                @foreach($question->answer as $answer)
                <li>{{$answer->description }}</li>
                @endforeach
            </ul> 
        </div>
    </div>
    @endforeach
    

</div>
</div>
</main>

@include('layouts.footer')
