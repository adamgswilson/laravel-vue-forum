<div class="col-md-8">
    <br>
    <div class="card">
        <div class="card-header"><a href="#">{{ $reply->owner->name }}</a> said {{ $reply->created_at->diffForHumans() }}...</div>
        <div class="card-body">{{ $reply->body }}</div>
    </div>
</div>