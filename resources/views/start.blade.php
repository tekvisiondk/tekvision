@extends('layouts.app')

@section('slider')
    <!-- Slider #1
    ============================================= -->
    <section id="slider" class="section slider text-center">
        <div class="slide--item">
            <div class="bg-section">
                <img src="{{asset('images/background/bg-1.jpg')}}" alt="bg">
            </div>
            <div class="container">
                <div class="row row-content mt-30">
                    <div class="col-xs-12 col-sm-6 col-sm-offset-3 col-md-10 col-md-offset-1 pt-100">
                        <div class="slide--headline">Vi skaber <span class="typed-text" data-typed-string="strålende hjemmesider,god support, glade kunder"></span> </div>
                        <div class="slide--bio">Står du med udfordringer eller har du en ny hjemmeside i tankerne?</div>
                        <div class="slide--action">
                            <a class="btn btn--primary btn--rounded" href="#">Kontakt os i dag</a>
                        </div>
                    </div>
                    <div class="col-xs-12 col-sm-12 col-md-12 wow fadeInUp" data-wow-duration="1s">
                        <div class="slide--holder mt-100">
                            <img class="img-responsive center-block" src="{{asset('images/mockup/1.png')}}" alt="screens">
                        </div>
                    </div>
                </div>
                <!-- .row end -->
            </div>
            <!-- .container end -->
        </div>
        <!-- .slide-item end -->

    </section>
    <!-- #slider end -->
@endsection

@section('content')
    <!-- Feature #1
    ============================================= -->
    <section id="itsupport" class="section feature text-center bg-white">
        <div class="container">
            <div class="row clearfix">
                <div class="col-xs-12 col-sm-12 col-md-6 col-md-offset-3">
                    <div class="heading heading-1 mb-80 text--center wow fadeInUp" data-wow-duration="1s">
                        <h2 class="heading--title">Nok Danmarks bedste support</h2>
                        <p class="heading--desc">TEK Vision går højt op i kundetilfredshed. Vi lever for glade kunder, og yder den bedste support.</p>
                        <div class="divider--line divider--center"></div>
                    </div>
                </div>
                <!-- .col-md-6 end -->
            </div>
            <!-- .row end -->
            <div class="row">
                <!-- Panel #1 -->
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="feature-panel wow fadeInUp" data-wow-duration="1s">
                        <div class="feature--icon">
                            <i class="lnr lnr-phone-handset"></i>
                        </div>
                        <div class="feature--content">
                            <h3>Ring til os</h3>
                            <p>Er problemet ude så giv os et kald. Vi sørger vi for at finde et passende tidspunkt at komme forbi.</p>
                        </div>
                    </div>
                    <!-- .feature-panel end -->
                </div>
                <!-- .col-md-4 end -->

                <!-- Panel #2 -->
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="feature-panel wow fadeInUp" data-wow-duration="1s">
                        <div class="feature--icon">
                            <i class="lnr lnr-car"></i>
                        </div>
                        <div class="feature--content">
                            <h3>Vi rykker ud</h3>
                            <p>Når et passende tidspunkt er fundet, rykker vores teknikere ud på stedet. Vi fejlfinder og løser problemet hurtigst muligt.</p>
                        </div>
                    </div>
                    <!-- .feature-panel end -->
                </div>
                <!-- .col-md-4 end -->

                <!-- Panel #3 -->
                <div class="col-xs-12 col-sm-4 col-md-4">
                    <div class="feature-panel wow fadeInUp" data-wow-duration="1s">
                        <div class="feature--icon">
                            <i class="lnr lnr-smile"></i>
                        </div>
                        <div class="feature--content">
                            <h3>Glad kunde</h3>
                            <p>Problemet er løst, og vores kunde er glad. Kundens tilfredshed betyder alverdens for os. Er kunden ikke tilfreds, har vi ikke udført opgaven korrekt.</p>
                        </div>
                    </div>
                    <!-- .feature-panel end -->
                </div>
                <!-- .col-md-4 end -->
            </div>
            <!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #feature2 end -->

    <!-- Feature #2
    ============================================= -->
    <section id="feature2" class="section feature feature-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-5">
                    <div class="wow fadeInUp" data-wow-duration="1s">
                        <i class="lnr lnr-rocket"></i>
                        <div class="divider--line"></div>
                        <h2 class="">Works on all platforms</h2>
                        <p class="">Duis aute irure dolor in reprehenderit in voluptate esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui official.</p>
                    </div>
                </div><!-- .col-md-6 end -->
                <div class="col-xs-12 col-sm-6 col-md-7 wow fadeInUp">
                    <img class="img-responsive center-block" src="{{asset('images/mockup/2.png')}}" alt="device"/>
                </div><!-- .col-md-6 end -->
            </div><!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #feature2 end -->
    <!-- Divider
    ============================================= -->
    <section class="pt-0 pb-0">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-12 col-md-12">
                    <hr class="feature-divider">
                </div>
            </div><!-- .row end -->
        </div><!-- .container end -->
    </section>
    <!-- Feature #2
    ============================================= -->
    <section id="feature2" class="section feature feature-2">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 col-md-7 wow fadeInUp">
                    <img class="img-responsive center-block" src="{{asset('images/mockup/3.png')}}" alt="device"/>
                </div><!-- .col-md-6 end -->
                <div class="col-xs-12 col-sm-6 col-md-5">
                    <div class="wow fadeInUp" data-wow-duration="1s">
                        <i class="lnr lnr-pointer-up"></i>
                        <div class="divider--line"></div>
                        <h2 class="">Easy & secure access</h2>
                        <p class="">Duis aute irure dolor in reprehenderit in voluptate esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui official.</p>
                    </div>
                </div><!-- .col-md-6 end -->

            </div><!-- .row end -->
        </div>
        <!-- .container end -->
    </section>
    <!-- #feature2 end -->
@endsection()