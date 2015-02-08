@extends('app')

@section('content')
    
    <!-- Post Content -->
    <article>
        <div class="container">
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2 col-md-10 col-md-offset-1">
                    <?php echo $post->content ?>
                </div>
            </div>
        </div>
    </article>

@stop