<?php
if (!isset($hero_image))
{
    $hero_image = asset("t1/img/services/laly-brad.webp");
}else 
{
    $hero_image = asset($hero_image);
}

if (!isset($h1_title))
{
    $h1_title = "Fit.Reset.Consultation";
}

if (!isset($h2_subtitle))
{
    $h2_subtitle = "<strong>Reset Your Body. Reclaim Your Power.</strong> A life-changing consultation only $129";
}

?>

<!-- Hero -->
<div class="container-fluid p-0 mb-0">
    <div id="header-carousel" class="carousel slide" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="w-100" src="{{ $hero_image  }}" alt="Image">
                <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                    <div class="p-3" style="max-width: 900px;">
                        <div class="cuadro-laly">
                            <h1 class="display-2 text-white mb-md-4 fs-1 text-uppercase"><span class="text-primary">{{  $h1_title  }}</span></h1>
                            <h5 class="text-white text-uppercase">{!!  $h2_subtitle  !!}</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->