<div class="container-fluid">
    <div class="row">
        <div class="col-2 ml-2 position-fixed" id="sticky-sidebar">
            <div class="nav flex-column flex-nowrap overflow-auto text-white p-2">
                <a href="#section1" class="nav-link link-scroll myLink">Main</a>
                <a href="#section2" class="nav-link link-scroll myLink">About</a>
                <a href="#section3" class="nav-link link-scroll myLink">Information</a>
                <hr >
                <a href="" class="nav-link">Other ...</a>
            </div>
        </div>
        <div class="col-8 offset-3" id="main">
            @empty($user)
            @else
                <table class="table table-hover table-dark table-bordered">
                <thead>
                <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Name</th>
                    <th scope="col">Email</th>
                    <th scope="col">Description</th>
                </tr>
                </thead>
                <tbody>

                    <tr>
                        <th scope="row">{{$user->id}}</th>
                        <td>{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td>{{$user->description}}</td>
                    </tr>

                </tbody>
            </table>
            @endempty
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
                <div id="carouselExampleCaptions" class="carousel slide col-6">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0"
                                class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('assets/img/1.jpg')}}" class="d-block w-100" alt="..."
                                 style="border-radius: 20px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/img/2slide.jpg')}}" class="d-block w-100" alt="..."
                                 style="border-radius: 20px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/img/5slide.jpg')}}" class="d-block w-100" alt="..."
                                 style="border-radius: 20px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
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
                <!-- <img src="https://via.placeholder.com/800x300" alt="Another Descriptive Alt Text" class="img-fluid"> -->
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
            <section>
                <div id="carouselExampleCaptionss" class="carousel slide col-6">
                    <div class="carousel-indicators">
                        <button type="button" data-bs-target="#carouselExampleCaptionss" data-bs-slide-to="0"
                                class="active"
                                aria-current="true" aria-label="Slide 1"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptionss" data-bs-slide-to="1"
                                aria-label="Slide 2"></button>
                        <button type="button" data-bs-target="#carouselExampleCaptionss" data-bs-slide-to="2"
                                aria-label="Slide 3"></button>
                    </div>
                    <div class="carousel-inner">
                        <div class="carousel-item active">
                            <img src="{{asset('assets/img/1.jpg')}}" class="d-block w-100" alt="..."
                                 style="border-radius: 20px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>First slide label</h5>
                                <p>Some representative placeholder content for the first slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/img/2slide.jpg')}}" class="d-block w-100" alt="..."
                                 style="border-radius: 20px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Second slide label</h5>
                                <p>Some representative placeholder content for the second slide.</p>
                            </div>
                        </div>
                        <div class="carousel-item">
                            <img src="{{asset('assets/img/5slide.jpg')}}" class="d-block w-100" alt="..."
                                 style="border-radius: 20px;">
                            <div class="carousel-caption d-none d-md-block">
                                <h5>Third slide label</h5>
                                <p>Some representative placeholder content for the third slide.</p>
                            </div>
                        </div>
                    </div>
                    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptionss"
                            data-bs-slide="prev">
                        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Previous</span>
                    </button>
                    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptionss"
                            data-bs-slide="next">
                        <span class="carousel-control-next-icon" aria-hidden="true"></span>
                        <span class="visually-hidden">Next</span>
                    </button>
                </div>
            </section>

        </div>

    </div>
</div>
