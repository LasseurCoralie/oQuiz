<div class="tag-categ">
    <ul class="list-tag">
        @foreach($tagsName as $tagName)
        <a class="tag" href=" {{ route('tagQuiz', ['id' => $tagName->id]) }}"><li class="categ"> {{$tagName->name}}</li></a>
        @endforeach
    </ul>
</div>