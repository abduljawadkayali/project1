@include ('includes.navbar')



<div class="container text-right">


    <h1 class=" text-center">{!! $post->title !!}</h1>
    <hr>
    <p class="lead">{!! $post->body !!} </p>
    <hr>
   
    <a href="{{ url()->previous() }}" class="btn btn-primary">@lang("Back")</a>
    <hr>
<br>
   
    


</div>


@include ('includes.footer')

