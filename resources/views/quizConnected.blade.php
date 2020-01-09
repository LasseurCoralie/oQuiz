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
        <li style="display: inline-block" class="list-reponses">{{$tags->name}}</li>
        @endforeach
    </ul>
@endif

    <form>
        <div class="row">
            @foreach($quiz->questions as $question)
            <div class="col-5 question">
            <!-- {{ dump($question->level->name)}} -->
                <span class="level level--{{$levelClassList[$question->level->id]}}">{{ $question->level->name}}</span>
                
                <div class="question__question">{{ $question->question }}</div>
            
                @foreach($question->answer->shuffle() as $answer)
                <div style="display: block">
                        <input type="radio" name="{{$question->question}}" id="exampleRadios1" value="{{$answer->id}}">
                        <label for="exampleRadios1">{{$answer->description }}</label>
                </div>
                @endforeach
            </div>
            @endforeach
        </div>
    </form>

</div>
</main>

@include('layouts.footer')
