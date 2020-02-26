@include ('includes.navbar')


@if($data->count()>0)  
<section style="background: url('/img/3.jpg') center center repeat; background-size: cover;" class="bar background-white relative-positioned">
        <div class="container">
          <!-- Carousel Start-->
          
     
          <div class="home-carousel">
        <!--<div class="dark-mask mask-primary" style="background-color: #ddfcf7 ;"></div>-->
            <div class="dark-mask mask-primary"></div>

            <div class="container">
              <div class="homepage owl-carousel">

                

               
                @foreach($data as $row)

                <div class="item">

               
                  <div class="row">
                    <div class="col-md-7"><img src="{{ URL::to('/') }}/images/{{ $row->image }}" class="img-thumbnail"  /></div> 
                     <div class="col-md-5 text-left">
                       
                       <h1>{!! $row->title !!}</h1>
                       <p style="float:right">{!! $row->description !!}<br></p>
                      </div>
                   
                    </div>
                  </div>

                  @endforeach
              </div>
            </div>
          </div>
          
          <!-- Carousel End-->
        </div>
      </section>
      @endif


      @if($dataText->count()>0) 
      @foreach($dataText as $text)
       <section>
        
      
      

      <div class="card text-center">
        <div class="card-header">
          <h5> {!! $text->title !!}</h5>
        </div>
        <div class="card-body text-right">         
          <p class="card-text" style="float:right">{!! $text->body !!}</p>
         
        </div>
        
      </div>
     
    </section>
    @endforeach
      @endif
 
      
      @if($post->count()>0)
      <section class="bar background-pentagon no-mb text-md-center">

        <div class="container">
            <div class="heading text-center">
              <h2>@lang("OUR NEWS")  </h2>
            </div>
            <p class="lead">
              <h3>
              @lang("in this section you can follow our last news")
              <h3>
                <br>
            </p>
            <!-- Carousel Start-->
            <ul class="owl-carousel testimonials list-unstyled equal-height">
              @foreach($post as $text)
              <li class="item">
                <div class="testimonial d-flex flex-wrap">
                  <div class="text">
                    <h5>{!! $text->title !!}</h5>
                    <p style="font-weight: bold !important; color: black !important;">
                      
                      {!! Str::limit($text->body, $limit = 700  ) !!} 
                     
                  
                    </p>
                    <a href="{!! route('post.display', ['id' => $text->id]) !!}">
                      <span><br>  @lang("read more..")</span> </a>
  
                  </div>
                  <div class="bottom d-flex align-items-center justify-content-between align-self-end">
                    
                    <div class="testimonial-info d-flex">
                       </div>
                  </div>
                </div>
              </li>
              @endforeach
            </ul>
          </div>
        </section>
        @endif



   
      

@include ('includes.footer')
{!! $data,$dataText,$post->links() !!}



    