<div id="home" class="hero-section">
    <div class="hero-slider owl-carousel owl-theme">
        
        
        <!-- owl Slider Begin -->
            @foreach ($sliders as $slider)
            <div class="hero-single" data-background="{{asset('assets/images/slider/'.$slider->image)}}">
                <div class="container">
                    <div class="row">
                        <div class="col-xl-6">
                            <div class="hero-content">
                                <span class="hero-p1">Get Business Service</span>
                                <h2>
                                    {{$slider->title}}
                                </h2>
                                <p>
                                    {{$slider->description}}
                                </p>
                                <div class="hro-btn">
                                    <a href="#" class="theme-btn">More about us <i class="fas fa-arrow-right"></i></a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5">
                            <div class="right-bg">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
                
            @endforeach
        <!-- single Slider End -->
        
       
    </div>
</div>