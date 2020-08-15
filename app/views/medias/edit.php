<?php require APPROOT1 . '/views/inc/header.php'; ?>

<section class="main">
    <div class="container">
        <div class="main-outer">
            <div class="main-left">

                <aside>
                    <h3>Image Filters</h3>
                    <form id="slider-form">
                        <p><a href="<?php echo URLROOT1; ?>" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i> Back</a></p>
                        <p>
                            <label for="gs">Grayscale</label>
                            <input id="gs" name="gs" type="range" min="" max="100" value="0" class="slider">
                        </p>

                        <p>
                            <label for="blur">Blur</label>
                            <input id="blur" name="blur" type="range" min="0" max="" value="0" class="slider">
                        </p>

                        <p>
                            <label for="hue-rotate">Hue-Rotate</label>
                            <input id="hue-rotate" name="hue-rotate" type="range" min="0" max="" value="0" class="slider">
                        </p>

                        <p>
                            <label for="sepia">Sepia</label>
                            <input id="sepia" name="sepia" type="range" min="0" max="" value="0" class="slider">
                        </p>

                        <button type="reset">Reset</button>
                        <button type="button" id="save">Download</button>

                    </form>
                </aside>
            </div>
            <div class="main-right">

                <div class="img-area">

                    <img src="<?php echo URLROOT1; ?>/gallary/<?php echo $data; ?>" id="targetimage" alt="">
                    <canvas id="myCanvas" width=400 height=400></canvas>
                    <a id="link"></a>
                </div>
            </div>

        </div>

    </div>
</section>
<script src="<?php echo URLROOT1; ?>/js/main.js"> </script>
<?php require APPROOT1 . '/views/inc/footer.php'; ?>