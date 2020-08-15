<?php require APPROOT . '/views/inc/header.php'; ?>

<section class="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-6 main-outer">
                <div class="main-left">
                    <aside>
                        <h3>Image Editor</h3>
                        <form id="slider-form">
                            <p><a href="<?php echo URLROOT; ?>" class="btn btn-light"><i class="fa fa-backward" aria-hidden="true"></i> Back</a></p>
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

                            <button type="reset" class="btn btn-success">Reset</button>
                            <button type="button" id="save" class="btn btn-primary">Download</button>
                            <button type="button" id="crop" class="btn btn-info">Crop</button>

                        </form>
                    </aside>
                </div>
            </div>

            <div class="col-sm-6 main-outer">
                <img src="<?php echo URLROOT; ?>/gallary/<?php echo $data; ?>" id="targetimage" alt="">
                <canvas id="myCanvas" width=400 height=400 hidden></canvas>
                <a id="link"></a>

            </div>
        </div>
    </div>

</section>
<script src="<?php echo URLROOT; ?>/js/main.js"> </script>
<?php require APPROOT . '/views/inc/footer.php'; ?>