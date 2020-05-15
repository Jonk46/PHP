<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>


<form action="run.php" method="post" enctype="multipart/form-data">
  Drop down file here:<br />
  <!-- <input type="hidden" name="MAX_FILE_SIZE" value="15000" /> -->
  <input type="file" name="userfile[]" multiple /><br />
  
  <select data-options-type="base" class="form-control" id="inputTarget" name="target[]" multiple>
      <option value="bmp">BMP</option>
      <option value="eps">EPS</option>
      <option value="gif">GIF</option>
      <option value="exr">HDR/EXR</option>
      <option value="ico">ICO</option>
      <option value="image/jpeg">JPG</option>
      <option selected="png" value="png">PNG</option>
      <option value="svg">SVG</option>
      <option value="tga">TGA</option>
      <option value="tiff">TIFF</option>
      <option value="wbmp">WBMP</option>
      <option value="webp">WebP</option>
    </select>
  
  <input type="submit" value="Отправить" />
</form>

<div>
<p>Settings</p>

  <div>
    <label for="inputTarget">Target format:
      <i data-toggle="tooltip" title=""
        data-original-title="Select your target format"></i>
    </label>
    
  </div>
      
      <div>
        <label>Change size: <i data-toggle="tooltip" title=""
            data-original-title="Change the size of the image."></i></label>
        <div>
          <div>
            <label>Width:</label>
            <div>
              <input placeholder="1 - 65000" id="inputWidth" data-value-type="integer" data-options-type="options"
                data-category="image" data-validation-method="number_range" name="width" type="number" min="1"
                max="65000">
              <span>px</span>
              <i></i>
            </div>
          </div>
          <div>
            <label>Height:</label>
            <div>
              <input placeholder="1 - 65000" id="inputHeight" data-value-type="integer" data-options-type="options"
                data-category="image" data-validation-method="number_range" name="height" type="number" min="1"
                max="65000">
              <span>px</span>
              <i></i>
            </div>
          </div>
        </div>
      </div>
      <div>
        <div>
          <div>
            <label for="inputDpi">DPI: <i data-toggle="tooltip" title=""
                data-original-title="Change the DPI (dots per inch) value of your image."></i></label>
            <div>
              <input id="inputDpi" data-category="image" placeholder="10 - 1200" data-value-type="integer"
                data-options-type="options" data-validation-method="number_range" name="dpi" type="number" min="10"
                max="1200">
              <span>dpi</span>
              <i></i>
            </div>
          </div>
        </div>
      </div>
    </div>

</body>
</html>
