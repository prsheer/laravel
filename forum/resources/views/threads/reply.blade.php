<div class="card-body">
    <article>
        <h4>Created by {{ $reply->owner->name }} at {{ $reply->created_at->diffForHumans() }}</h4>
        <p>{{ $reply->body }}</p>
    </article>
</div>