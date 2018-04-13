<?php 

require '../includes/common.php';
 ?>

<html>
<head>
<title>iVehicle</title>
<script type="text/javascript">
    function processImage() {
        // **********************************************
        // *** Update or verify the following values. ***
        // **********************************************

        // Replace the subscriptionKey string value with your valid subscription key.
        var subscriptionKey = "e92c12bc49444c6cbdcb18aa11c83d08";

        // Replace or verify the region.
        //
        // You must use the same region in your REST API call as you used to obtain your subscription keys.
        // For example, if you obtained your subscription keys from the westus region, replace
        // "westcentralus" in the URI below with "westus".
        //
        // NOTE: Free trial subscription keys are generated in the westcentralus region, so if you are using
        // a free trial subscription key, you should not need to change this region.
        var uriBase = "https://westcentralus.api.cognitive.microsoft.com/vision/v1.0/ocr";

        // Request parameters.
        var params = {
            "language": "unk",
            "detectOrientation ": "true",
        };

        // Display the image.
        var sourceImageUrl = document.getElementById("inputImage").value;
        document.querySelector("#sourceImage").src = sourceImageUrl;

        // Perform the REST API call.
        $.ajax({
            url: uriBase + "?" + $.param(params),

            // Request headers.
            beforeSend: function(jqXHR){
                jqXHR.setRequestHeader("Content-Type","application/json");
                jqXHR.setRequestHeader("Ocp-Apim-Subscription-Key", subscriptionKey);
            },

            type: "POST",

            // Request body.
            data: '{"url": ' + '"' + sourceImageUrl + '"}',
        })

        .done(function(data) {
            // Show formatted JSON on webpage.
            //$("#responseTextArea").val(JSON.stringify(data, null, 2));
           // $("#car_no").value(data.regions[0].lines[0].words[0].text);
           $("#car_no").val(data.regions[0].lines[0].words[0].text);
        })

        .fail(function(jqXHR, textStatus, errorThrown) {
            // Display error message.
            var errorString = (errorThrown === "") ? "Error. " : errorThrown + " (" + jqXHR.status + "): ";
            errorString += (jqXHR.responseText === "") ? "" : (jQuery.parseJSON(jqXHR.responseText).message) ? 
                jQuery.parseJSON(jqXHR.responseText).message : jQuery.parseJSON(jqXHR.responseText).error.message;
            alert(errorString);
        });
    };
</script>
	<!-- Latest compiled and minified CSS -->
   <script src="https://code.jquery.com/jquery-2.1.3.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

<!-- Optional theme -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

<!-- Latest compiled and minified JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
<link rel="stylesheet" type="text/css" href="../css/login.css">
</head>
<body>
  <?php include '../includes/header.php'; ?>
   <div class="jumbotron">
     <h2 style="text-align:center">Welcome To the DashBoard</h2>
   </div>
    <div class="container">
      <div class="row">
        <div class=" col-sm-5 well  ">
               <form method="GET" action="../php/information.php" id="form" >
          <div class="form-group" >
            <label for="car_no" >Car No</label>
            <input type="text" id="car_no" placeholder="Enter Car No." maxlength="20" class="form-control" name="car_no"   required>
          </div>
          <div class="form-group">
            <label for="car_color" > Color :</label>
            <input type="text" id="car_color" placeholder="Color Here" maxlength="15" class="form-control" name="car_color" required>
          </div>
          <div class="form-group">
            <button type="submit" name="submission" class="btn btn-success btn-block">Check Vehicle Info</button>
          </div>
                    </form>
        </div>
        <div class="col-sm-6 well" style="margin-left:10px">
         Enter the URL to an image of printed text, then click the <strong>Read image</strong> button.
<br><br>
 <input type="text" class="form-control" name="inputImage" id="inputImage"  placeholder="Enter URL"/>
<button class="btn btn-info" style="margin-top:10px" onclick="processImage()">Read image</button>
           <div id="imageDiv" style="width:420px; display:table-cell;">
        <h5>Source image:<h5>
        <br><br>
        <img id="sourceImage" width="400" />
    </div>
        </div>
      </div>
     </div>
     <!-- Enter the URL to an image of printed text, then click the <strong>Read image</strong> button.
<br><br>
Image to read: <input type="text" name="inputImage" id="inputImage" value="https://i.ytimg.com/vi/jkMscAv7Nj8/maxresdefault.jpg" />
<button onclick="processImage()">Read image</button>
<br><br> -->
<!-- <div id="wrapper" style="width:1020px; display:table;">
    <div id="jsonOutput" style="width:600px; display:table-cell;">
        Response:
        <br><br>
        <textarea id="responseTextArea" class="UIInput" style="width:580px; height:400px;"></textarea>
    </div> -->
    <!-- <div id="imageDiv" style="width:420px; display:table-cell;">
        Source image:
        <br><br>
        <img id="sourceImage" width="400" />
        value="https://i.ytimg.com/vi/jkMscAv7Nj8/maxresdefault.jpg"
    </div> -->
    
</div>
<!--  <footer class="navbar-fixed-bottom">
   <p style="text-align:centre">Copyright &copy; Lifestyle Store. All Rights
Reserved | Contact Us: +91 90000 00000</p>
   
   </footer> -->
</body>
   
</html>