<?php
$list = [
    [
        'listtiltle' => 'Dc comics',
        'listitem' => ['Characters', 'Comics', 'Movies', 'Tv', 'Games', 'Videos', 'News'],
    ],
    [
        'listtiltle' => 'Dc',
        'listitem' => ['Terms Of Use', 'Privacy policy (New)', 'Ad Choices', 'Advertising', 'Jobs', 'Subscriptions', 'Talent Workshops', 'CPSC Certificates', 'Ratings', 'Shop Help', 'Contact Us'],
    ],
    [
        'listtiltle' => 'Sites',
        'listitem' => ['DC', 'MAD Magazine', 'DC Kids', 'DC Universe', 'DC Power Visa'],
    ],
    [
        'listtiltle' => 'Shop',
        'listitem' => ['Shop DC', 'Shop DC Collectibles'],
    ],
];

?>

<div role="footer" class="footers bg-blue-footer">
    <div class="container container-foo" id="footerTop">
        <div class="mx-3 cardshop w-100">
            <div class="img-cont">
                <img src="/images/buy-comics-digital-comics.png" alt="footer-logos">
            </div>
            <h5>digital comics</h5>
            <div class="img-cont">
                <img src="/images/buy-comics-merchandise.png" alt="footer-logos">
            </div>
            <h5>dc merchandise</h5>
            <div class="img-cont">
                <img src="/images/buy-comics-shop-locator.png" alt="footer-logos">
            </div>
            <h5>subscription</h5>
            <div class="img-cont">
                <img src="/images/buy-comics-subscriptions.png" alt="footer-logos">
            </div>
            <h5>comic shop locator</h5>
        </div>
        </>
    </div>
    <div role="footer" class="footers bg-footer">
        <div class="container container-foo footerCenter">
            <div class="w-50 d-flex flex-wrap p-6 fs-5">
                @foreach ($list as $item)
                    <div class="listitems d-flex justify-content-center animate__animated animate__fadeInLeft">
                        <ul>
                            <h5 class="text-uppercase fs-2 pb-3">{{ $item['listtiltle'] }}</h5>
                            @foreach ($item['listitem'] as $listItem)
                                <li class="list-unstyled"><a href="" class="text-white">{{ $listItem }}</a></li>
                            @endforeach
                        </ul>
                    </div>
                @endforeach
            </div>
            <div class="w-50 ptpb-30 animate__animated animate__fadeInRight">
                <img src="/images/dc-logo-bg.png" alt="dc-footer-logo" class="object-posit" />
            </div>
        </div>
    </div>
    <div role="footer" class="footers bg-dark-footer">
        <div class="container container-foo" id="footerBottom">
            <div class="d-flex justify-content-center align-items-center">
                <button type="button"
                    class="btn btn-outline-primary text-white p-2 rounded-0 p-3 text-uppercase fw-bolder">
                    Sign-up now!
                </button>
            </div>
            <div class="d-flex justify-content-between align-items-center text-uppercase">
                <div class="text-center">
                    <h4 class="px-2 my-auto blu-logo fw-bolder">follow us</h4>
                </div>
                <div class="d-flex justify-content-center align-items-center ">
                    <img src="/images/footer-facebook.png" alt="facebook" class="px-2 cursorF animate__animated" />
                    <img src="/images/footer-twitter.png" alt="twitter" class="px-2 cursorF animate__animated" />
                    <img src="/images/footer-youtube.png" alt="youtube" class="px-2 cursorF animate__animated" />
                    <img src="/images/footer-pinterest.png" alt="pinterest" class="px-2 cursorF animate__animated" />
                    <img src="/images/footer-periscope.png" alt="periscope" class="px-2 cursorF animate__animated" />
                </div>
            </div>
        </div>
    </div>
