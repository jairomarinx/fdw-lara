<?php
if (!isset($hero_image)) $hero_image = asset("t1/img/services/laly-brad.webp");
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
                            <h1 class="display-2 text-white mb-md-4 fs-1 text-uppercase"><span class="text-primary">Fit.Reset.Consultation</span></h1>
                            <h5 class="text-white text-uppercase"><strong>Reset Your Body. Reclaim Your Power.</strong> A life-changing consultation for less than $130</h5>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Hero End -->