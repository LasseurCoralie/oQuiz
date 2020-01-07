@include('layouts.header')

<div>
    @foreach($quiz as $oneQuiz)
    <h2>{{ $oneQuiz->title }} - <span>xx questions</span></h2>
</div>

<div>
    <h4>{{ $oneQuiz->description }}</h4>
</div>

<div>
    <p>by {{ $users->firstWhere('id', $oneQuiz->app_users_id)->getFullName() }}</p>
</div>
    @endforeach

<div class="row">
    @foreach($questions as $question)
    <div class="col-3 question">

        <span class="level level--beginner">{{ $levels->firstWhere('id', $question->levels_id)->name }}</span>

        <div class="question__question">{{$question->question}}</div>
        <div>
            <ul>
                <li>1. Lorem ipsum </li>
                <li>2. Lorem ipsum </li>
                <li>3. Lorem ipsum </li>
                <li>d. La réponse D </li>
            </ul> 
        </div>
    </div>
    @endforeach;

</div>
</main>

@include('layouts.footer')
