<?php include_once "handler.php" ?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>UploadFile</title>
</head>

<body>
    <div>
        <div>
            <div>
                <div style="color: white; font-size: 18px">
                    <div>

                        <p>Drop Files here</p>

                        <form id="fileupload" action="" method="POST" enctype="multipart/form-data">
                            <input id="myfile" type="file" name="files[]" multiple />
                            <input type='submit' name="submit" value="START">
                        </form>
                        <span style="color: red"><?php echo $errorsize . "<br/>" . $errortype . "<br/>" . $message ?></span>
                        <span style="color: green"><?php echo $success ?></span>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
        <form id="targetsend" action="" method="POST">
            <h5>Settings</h5>
            <div>
                <label>Target format:</label><br>
                <select name="target[]" multiple>
                    <option value="bmp">BMP</option>
                    <option value="eps">EPS</option>
                    <option value="gif">GIF</option>
                    <option value="exr">HDR/EXR</option>
                    <option value="ico">ICO</option>
                    <option value="jpg">JPG</option>
                    <option value="png">PNG</option>
                    <option value="svg">SVG</option>
                    <option value="tga">TGA</option>
                    <option value="tiff">TIFF</option>
                    <option value="wbmp">WBMP</option>
                    <option value="webp">WebP</option>
                </select>
            </div>
            <div>
                <label>Change size:</label><br>
                <div>
                    <label>Width:</label>
                    <div>
                        <input placeholder="1 - 65000" style="width: 150px" name="width" type="number" min="1" max="65000" step="1">
                        <span>px</span>
                    </div>
                    <div>
                        <label>Height:</label>
                        <div>
                            <input placeholder="1 - 65000" style="width: 150px" name="height" type="number" min="1" max="65000" step="1">
                            <div>
                                <span>px</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
                <label>DPI:</label>
                <div>
                    <input placeholder="10 - 1200" style="width: 150px" name="dpi" type="number" min="10" max="1200" step="1">
                    <div>
                        <span>dpi</span>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div>
        <h5>How to resize an image?</h5>
        <ol>
            <li>Upload the photo you want to resize.</li>
            <li>In the drop-down menu, choose the format you want your images to be converted to.</li>
            <li>You can also use the DPI to change the image size when it comes to printing.</li>
            <li>Click on "Start" to resize your photo.</li>
        </ol>
    </div>

    </div>

</body>

</html>