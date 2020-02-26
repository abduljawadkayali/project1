@include ('includes.navbar')



<style>

/*
*
* ==========================================
* FOR DEMO PURPOSE
* ==========================================
*
*/
body {
    background: #e8cbc0;
    background: -webkit-linear-gradient(to right, #e8cbc0, #636fa4);
    background: linear-gradient(to right, #e8cbc0, #636fa4);
    min-height: 100vh;
}

.social-link {
    width: 30px;
    height: 30px;
    border: 1px solid #ddd;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #666;
    border-radius: 50%;
    transition: all 0.3s;
    font-size: 0.9rem;
}

.social-link:hover, .social-link:focus {
    background: #ddd;
    text-decoration: none;
    color: #555;
}
</style>



<!-- For demo purpose -->
<div class="container py-5">
    <div class="row text-center text-white">
        <div class="col-lg-8 mx-auto">
            <h1 class="display-4">@lang("Primary School Staff")</h1>
        

                
            </p>
        </div>
    </div>
</div><!-- End -->


<div class="container">
    <div class="row text-center">

        
        @foreach($data as $errors)
    <!-- Team item -->
        <div class="col-xl-4 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4">
          
                <img src="{{ URL::to('/') }}/images/{{ $errors->image }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"> 
                <h5 class="mb-0">{!! $errors->name !!}</h5><span class="small text-uppercase text-muted">{!! $errors->job !!}</span>
                <p>{!! $errors->description !!}</p>
                <ul class="social mb-0 list-inline mt-3">
                    @if($row->mail != '0')  
                    <li class="list-inline-item"><a href="mailto:{!! $row->mail !!}" class="social-link"><i class="fa fa-envelope"></i></a></li>
                    
                    @endif
                    @if($row->facebook != '0')  
                    <li class="list-inline-item"><a href="{{ $row->facebook }}" class="social-link"><i class="fa fa-facebook"></i></a></li>
                    
                    @endif

                    @if($row->whatsup != '0')  
                    <li class="list-inline-item"><a href="https://wa.me/{{ $row->whatsup }}" class="social-link"><i class="fa fa-whatsapp"></i></a></li>
                    
                    @endif
                    
                    
 
                    
                    
                </ul>
            </div>
        </div><!-- End -->
        @endforeach
        {!! $errors->title !!}

      


    </div>
</div>


@include ('includes.footer')

{!! $data->links() !!}


        

                
            </p>
        </div>
    </div>
</div><!-- End -->


<div class="container">
    <div class="row text-center">


        @foreach($data as $errors)
    <!-- Team item -->
        <div class="col-xl-4 col-sm-6 mb-5">
            <div class="bg-white rounded shadow-sm py-5 px-4">
          
                <img src="{{ URL::to('/') }}/images/{{ $errors->image }}" alt="" width="100" class="img-fluid rounded-circle mb-3 img-thumbnail shadow-sm"> 
                <h5 class="mb-0">{!! $errors->name !!}</h5><span class="small text-uppercase text-muted">{!! $errors->job !!}</span>
                <p>{!! $errors->description !!}</p>
                <ul class="social mb-0 list-inline mt-3">
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-facebook-f"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-twitter"></i></a></li>
                    <li class="list-inline-item"><a href="#" class="social-link"><i class="fa fa-instagram"></i></a></li>
                    <li class="list-inline-item"><a href=" https://wa.me/00963945358474" class="social-link"><i class="fa fa-whatsapp"></i></a></li>
                </ul>
            </div>
        </div><!-- End -->
        @endforeach
        {!! $errors->title !!}

      


    </div>
</div>


@include ('includes.footer')

{!! $data->links() !!}

