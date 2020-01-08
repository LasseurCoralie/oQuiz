@include('layouts.header')
@include('partials.tags')
            
            <div class="presentation">
                <h2> Bienvenue sur O'Quiz </h2>
                <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.
                
                </p>
            </div>
            
            <div id="main-title" class="canvas-basic">
                    <a href="{{route('home')}}">
                        <h1 class="shadow-Line">Time to learn kids!</h1>
                    </a>
            </div>

            <div class="row col-quiz">
                
                @foreach($quizzes as $quiz)
                <div class="col-4">
                    <a href="{{ route('quiz', ['id' => $quiz->id]) }}"><h3>{{ $quiz->title }}</h3></a>
                    <h5>{{ $quiz->description }}</h5>
                    <p>by {{ $users->firstWhere('id', $quiz->app_users_id)->getFullName() }}</p>
                </div>
                @endforeach

            </div>
        </main>
@include('layouts.footer')