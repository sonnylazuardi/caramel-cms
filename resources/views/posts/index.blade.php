@extends('post')

@section('content')

<div class="container">
    <div class="row">
        @foreach ($posts as $post)
            <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                <div class="post-preview">
                    <a href="{{url('posts/'.$post->slug)}}">
                        <h2 class="post-title">
                            {{$post->title}}
                        </h2>
                        <h3 class="post-subtitle">
                            {{$post->description}}
                        </h3>
                    </a>
                    <p class="post-meta">Posted about {{$post->timestamp}}</p>
                </div>
                <hr>
            </div>
        @endforeach
    </div>

    <div class="row text-center">
        <?php echo $posts->render() ?>
    </div>
</div>

@stop