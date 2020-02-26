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
 
      
     

   
      

@include ('includes.footer')
{!! $data,$dataText->links() !!}



    