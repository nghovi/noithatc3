<div class="col-md-4">
    <div class="single-blog-item">
        <div class="img-holder">
            <img src="{{asset($post->image)}}" alt="Awesome Image">
            <div class="overlay">
                <div class="box">
                    <div class="content">
                        <a href="{{route('posts.show', $post->id)}}"><i class="fa fa-link"
                                                                        aria-hidden="true"></i></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-holder">
            <a href="{{route('posts.show', $post->id)}}">
                <h3 class="blog-title">{{$post->title}}</h3>
            </a>
            <ul class="meta-info">
                <li><i class="fa fa-user" aria-hidden="true"></i><a href="#">Admin</a></li>
                <li><i class="fa fa-clock-o" aria-hidden="true"></i><a
                        href="#">{{$post->updated_at->format('M d, Y')}}</a></li>
            </ul>
            <div class="text">
                <a class="readmore" href="{{route('posts.show', $post->id)}}">Read More<i
                        class="fa fa-caret-right" aria-hidden="true"></i></a>
            </div>
        </div>
    </div>
</div>
