@extends('layouts.main')

@section('title')
    Read More
@endsection
@section('content')
    <div class="container justify-content-center">
            <div class="card " style="width: 100%;">
                <img src="{{url('uploads/')}}/{{$content->photo}}" class="card-img-top">
                <div class="card-body">
                    <h1 class="card-title">{{ $content->title }}</h1>
                    <p class="card-text">{!! nl2br($content->content) !!}</p>
                </div>
                <div class="card-footer">
                    <small class="text-muted">Last updated: {{ $content->updated_at }}</small>
                </div>
            </div>
            <div id="disqus_thread" class="mt-4"></div>
            <script>
                (function() { // DON'T EDIT BELOW THIS LINE
                var d = document, s = d.createElement('script');
                s.src = 'https://cuy-news.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
                })();
            </script>
            <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
@endsection

