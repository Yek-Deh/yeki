<div class="container-fluid">
    <div class="row">
        {{--   sidebar     --}}
            @include('layouts.sidebar')
        <div class="col-8 offset-3" id="main">
            <section class="section" id="section1">
                <h1>Main Article Title</h1>
                <hr>
                <img src="{{asset($user->image)}}" alt="Descriptive Alt Text" class="img-fluid">
                <p>Description: {{$user->description}}</p>
                <p>This section contains the main content of the article. Wikipedia articles typically begin with a
                    summary that provides an overview of the topic. This summary should be concise and informative,
                    allowing readers to grasp the essence of the article quickly.</p>
            </section>
            <section class="section" id="section2">
                <h2>About Section</h2>
                <hr>
                <p>This is where you can delve into specific topics related to the article. Use concise and
                    informative paragraphs to present the information clearly.</p>
                <p>In this section, you might include statistics, historical context, or related concepts that
                    enrich the reader's understanding of the main topic.</p>


                <!-- Check if user has images -->
                @if($user->images->isNotEmpty())
                    <!-- Carousel -->
                    <div id="carouselExampleCaptions" class="carousel slide col-6">
                        <!-- Carousel Indicators -->
                        <div class="carousel-indicators">
                            @foreach($user->images as $index => $image)
                                <button type="button" data-bs-target="#carouselExampleCaptions"
                                        data-bs-slide-to="{{ $index }}"
                                        class="{{ $loop->first ? 'active' : '' }}"
                                        aria-label="Slide {{ $index + 1 }}"></button>
                            @endforeach
                        </div>
                        <!-- Carousel Inner (loop through images) -->
                        <div class="carousel-inner">
                            @foreach($user->images as $index => $image)
                                <div class="carousel-item {{ $loop->first ? 'active' : '' }}">
                                    <img src="{{ asset($image->path) }}" class="d-block w-100" alt="Image"
                                         style="border-radius: 20px;">
                                    <div class="carousel-caption d-none d-md-block">
                                        <h5>Slide {{ $index + 1 }}</h5>
                                        <p>Description for slide {{ $index + 1 }}</p>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                        <!-- Carousel Controls -->
                        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="prev">
                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Previous</span>
                        </button>
                        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions"
                                data-bs-slide="next">
                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                            <span class="visually-hidden">Next</span>
                        </button>
                    </div>
                @else
                    <!-- Fallback content if no images exist -->
                    <div>
                        <img src="https://via.placeholder.com/800x300" alt="Another Descriptive Alt Text"
                             class="img-fluid">
                        <div class="alert alert-warning" role="alert">
                            No images available for this user.
                        </div>
                    </div>
                @endif


            </section>
            <section class="section" id="section3">
                <h3>Information Section</h3>
                <hr>
                <p>Further breakdown of the topic can be included here. This could involve detailed descriptions,
                    analysis, or discussions of different perspectives on the topic.</p>
                <p>Make sure to use citations or references where applicable, as credibility is crucial in an
                    encyclopedia-style format.
                </p>
                <img src="https://via.placeholder.com/800x300" alt="Another Descriptive Alt Text" class="img-fluid">
            </section>

        </div>

    </div>
</div>
