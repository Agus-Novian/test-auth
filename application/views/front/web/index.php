<!-- Carousel -->
<div class="bd-example">
    <div id="carousel" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carousel" data-slide-to="0" class="active"></li>
            <li data-target="#carousel" data-slide-to="1"></li>
            <li data-target="#carousel" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="<?= base_url('assets/front/imgs/slide1.png') ?>" class="d-block w-100" alt="Slide1">
                <div class="carousel-caption d-none d-md-block">
                    <h5>First slide label</h5>
                    <p>Nulla vitae elit libero, a pharetra augue mollis interdum.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/front/imgs/slide2.png') ?>" class="d-block w-100" alt="Slide2">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Second slide label</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
                </div>
            </div>
            <div class="carousel-item">
                <img src="<?= base_url('assets/front/imgs/slide3.png') ?>" class="d-block w-100" alt="Slide3">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Third slide label</h5>
                    <p>Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carousel" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carousel" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
</div>
<!-- End Carousel -->

<div id="container">

    <!-- Content 1 -->
    <section id="content-top">
        <div class="container">

            <!-- Row Content Top -->
            <div class="row content-newsr">

                <!-- Column Content News -->
                <div class="col-lg-8 content-newsc">

                    <!-- Media News -->
                    <div id="media-news">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="newspaper-tab" data-toggle="tab" href="#newspaper" role="tab" aria-controls="newspaper" aria-selected="true">Newpaper</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">All Media</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">My News</a>
                            </li>
                            <!-- <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false">Profile</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-toggle="tab" href="#contact" role="tab" aria-controls="contact" aria-selected="false">Contact</a>
                            </li> -->
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="newspaper" role="tabpanel" aria-labelledby="newspaper-tab">

                                <!-- Isi Newspaper -->
                                <div class="isi-newspaper">
                                    <!-- Row Isi Newspaper -->
                                    <div class="row">
                                        <!-- Column Isi -->
                                        <div class="col-lg">
                                            <div class="card">
                                                <a href="#">
                                                    <img src="<?= base_url('assets/front/imgs/default.jpg') ?>" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg">
                                            <div class="card">
                                                <a href="#">
                                                    <img src="<?= base_url('assets/front/imgs/default.jpg') ?>" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg">
                                            <div class="card">
                                                <a href="#">
                                                    <img src="<?= base_url('assets/front/imgs/default.jpg') ?>" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg">
                                            <div class="card">
                                                <a href="#">
                                                    <img src="<?= base_url('assets/front/imgs/default.jpg') ?>" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Column Isi -->
                                    </div>
                                    <!-- End Row Isi Newspaper -->
                                </div>
                                <!-- End Isi Newspaper -->

                            </div>
                            <!-- <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">...</div>
                            <div class="tab-pane fade" id="contact" role="tabpanel" aria-labelledby="contact-tab">...</div> -->
                        </div>
                    </div>
                    <!-- End Media News -->

                </div>
                <!-- End Column Content News -->

                <!-- Column Sidebar Sign In -->
                <div class="col-lg content-signc">

                    <!-- Sign In -->
                    <div class="sign-in">
                        <div class="card">
                            <article class="card-body">
                                <a href="" class="float-right btn btn-outline-primary">Sign up</a>
                                <h4 class="card-title mb-4 mt-1">Sign in</h4>
                                <p>
                                    <a href="#" class="btn btn-block btn-outline-primary"> <i class="fab fa-facebook-f"></i>   Login via facebook</a>
                                </p>
                                <hr>
                                <form>
                                    <div class="form-group">
                                        <input name="" class="form-control" placeholder="Email or login" type="email">
                                    </div> <!-- form-group// -->
                                    <div class="form-group">
                                        <input class="form-control" placeholder="******" type="password">
                                    </div> <!-- form-group// -->
                                    <div class="row">
                                        <div class="col-md-6">
                                            <div class="form-group">
                                                <button type="submit" class="btn btn-primary btn-block"> Login </button>
                                            </div> <!-- form-group// -->
                                        </div>
                                        <div class="col-md-6 text-right">
                                            <a class="small" href="#">Forgot password?</a>
                                        </div>
                                    </div> <!-- .row// -->
                                </form>
                            </article>
                        </div> <!-- card.// -->

                    </div>
                    <!-- End Sidebar Sign In -->

                </div>
                <!-- End Column Sign In -->

            </div>
            <!-- End Row Content Top -->
        </div>
    </section>
    <!-- End Content 1 -->

    <!-- Content 2 -->
    <section id="content-bottom">
        <div class="container">

            <!-- Row Content Bottom -->
            <div class="row content-blogr">

                <!-- Column Content Blog -->

                <div class="col-lg-8 content-blogc">
                    <!-- Content Bottom Blog -->
                    <div class="content-blog">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="business-tab" data-toggle="tab" href="#business" role="tab" aria-controls="business" aria-selected="true">Business</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="beauty-tab" data-toggle="tab" href="#beauty" role="tab" aria-controls="beauty" aria-selected="false">Beauty</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="sports-tab" data-toggle="tab" href="#sports" role="tab" aria-controls="sports" aria-selected="false">Sports</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="business" role="tabpanel" aria-labelledby="business-tab">
                                <!-- Isi Business -->
                                <div class="isi-business">
                                    <!-- Row Isi Business -->
                                    <div class="row">
                                        <!-- Column Isi Business -->
                                        <div class="col-lg">
                                            <div class="card">
                                                <a href="#">
                                                    <img src="<?= base_url('assets/front/imgs/default.jpg') ?>" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg">
                                            <div class="card">
                                                <a href="#">
                                                    <img src="<?= base_url('assets/front/imgs/default.jpg') ?>" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg">
                                            <div class="card">
                                                <a href="#">
                                                    <img src="<?= base_url('assets/front/imgs/default.jpg') ?>" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg">
                                            <div class="card">
                                                <a href="#">
                                                    <img src="<?= base_url('assets/front/imgs/default.jpg') ?>" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Column Isi Business -->
                                    </div>
                                    <!-- End Row Isi Business -->
                                </div>
                                <!-- end Isi Business -->
                            </div>
                            <div class="tab-pane fade" id="beauty" role="tabpanel" aria-labelledby="beauty-tab">
                                <!-- Isi Beauty -->
                                <div class="isi-beauty">
                                    <!-- Row Isi Beauty -->
                                    <div class="row">
                                        <!-- Column Isi Beauty -->
                                        <div class="col-lg">
                                            <div class="card">
                                                <a href="#">
                                                    <img src="<?= base_url('assets/front/imgs/default.jpg') ?>" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg">
                                            <div class="card">
                                                <a href="#">
                                                    <img src="<?= base_url('assets/front/imgs/default.jpg') ?>" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg">
                                            <div class="card">
                                                <a href="#">
                                                    <img src="<?= base_url('assets/front/imgs/default.jpg') ?>" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg">
                                            <div class="card">
                                                <a href="#">
                                                    <img src="<?= base_url('assets/front/imgs/default.jpg') ?>" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Column Isi Beauty -->
                                    </div>
                                    <!-- End Row Isi Beauty -->
                                </div>
                                <!-- end Isi Beauty -->
                            </div>
                            <div class="tab-pane fade" id="sports" role="tabpanel" aria-labelledby="sports-tab">
                                <!-- Isi Sports -->
                                <div class="isi-sports">
                                    <!-- Row Isi Sports -->
                                    <div class="row">
                                        <!-- Column Isi Sports -->
                                        <div class="col-lg">
                                            <div class="card">
                                                <a href="#">
                                                    <img src="<?= base_url('assets/front/imgs/default.jpg') ?>" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg">
                                            <div class="card">
                                                <a href="#">
                                                    <img src="<?= base_url('assets/front/imgs/default.jpg') ?>" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg">
                                            <div class="card">
                                                <a href="#">
                                                    <img src="<?= base_url('assets/front/imgs/default.jpg') ?>" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg">
                                            <div class="card">
                                                <a href="#">
                                                    <img src="<?= base_url('assets/front/imgs/default.jpg') ?>" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Column Isi Sports -->
                                    </div>
                                    <!-- End Row Isi Sports -->
                                </div>
                                <!-- end Isi Sports -->
                            </div>
                        </div>
                    </div>
                    <!-- Content Bottom Blog -->

                </div>
                <!-- End Column Content Blog -->

                <!-- Column Sidebar Store -->
                <div class="col-lg content-storec">

                    <!-- Sidebar Store -->
                    <div class="store">
                        <ul class="nav nav-tabs" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active" id="all-shop-tab" data-toggle="tab" href="#all-shop" role="tab" aria-controls="all-shop" aria-selected="true">All Shop</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="fashion-tab" data-toggle="tab" href="#fashion" role="tab" aria-controls="fashion" aria-selected="false">Fashion</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="eyelashes-tab" data-toggle="tab" href="#eyelashes" role="tab" aria-controls="eyelashes" aria-selected="false">Eyelashes</a>
                            </li>
                        </ul>
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="all-shop" role="tabpanel" aria-labelledby="all-shop-tab">
                                <!-- Isi All Shop -->
                                <div class="isi-shop">
                                    <!-- Row isi All Shop -->
                                    <div class="row">
                                        <!-- Column Isi All Shop -->
                                        <div class="col-lg">
                                            <div class="card">
                                                <a href="#">
                                                    <img src="<?= base_url('assets/front/imgs/default.jpg') ?>" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example</p>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg">
                                            <div class="card">
                                                <a href="#">
                                                    <img src="<?= base_url('assets/front/imgs/default.jpg') ?>" class="card-img-top" alt="...">
                                                </a>
                                                <div class="card-body">
                                                    <p class="card-text">Some quick example</p>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- End Column Isi All SHop -->
                                    </div>
                                    <!-- End Row Isi All Shop -->
                                </div>
                                <!-- End Isi All Shop -->
                            </div>
                            <div class="tab-pane fade" id="fashion" role="tabpanel" aria-labelledby="fashion-tab">
                                fashion
                            </div>
                            <div class="tab-pane fade" id="eyelashes" role="tabpanel" aria-labelledby="eyelashes-tab">
                                eyelashes
                            </div>
                        </div>
                    </div>
                    <!-- End Sidebar Store -->

                </div>
                <!-- End Column Sidebar Store -->
            </div>
            <!-- End Row Content Bottom -->
        </div>
    </section>
    <!-- End Content 2 -->

</div> 