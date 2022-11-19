<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Rented Product</title>
    <link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <script src="https://kit.fontawesome.com/7a4aae7e35.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="style.css">
    <style>
        p{
            margin-top: 0;
    margin-bottom:0 !important;
        }
        a{
            color: #007bff;
    text-decoration: none;
    background-color: transparent;
        }
        /* .img-wish {
    text-align: center !important;
} */

.card-body {
    -ms-flex: 1 1 auto;
    flex: 1 1 auto;
    height: 120px;
   
}
.button1 {
  background-color: #9DCAEB;
  border: none;
  color: white;
  padding: 15px 32px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  margin: 4px 2px;
  cursor: pointer;
}

.text2{
    float: right;
}

/*the container must be positioned relative:*/
.custom-select {
  position: relative;
  font-family: Arial;
}

.custom-select select {
  display: none; /*hide original SELECT element:*/
} 

.select-selected {
  background-color: white;
}

/*style the arrow inside the select element:*/
.select-selected:after {
  position: absolute;
  content: "";
  top: 14px;
  right: 10px;
  width: 0;
  height: 0;
  border: 6px solid transparent;
  border-color: #fff transparent transparent transparent;
}

/*point the arrow upwards when the select box is open (active):*/
.select-selected.select-arrow-active:after {
  border-color: transparent transparent #fff transparent;
  top: 7px;
}

/*style the items (options), including the selected item:*/
.select-items div,.select-selected {
  color: #343a40;
  padding: 8px 16px;
  border: 1px solid transparent;
  border-color: rgb(0 0 0 / 15%);
  cursor: pointer;
  user-select: none;
  font-size: 14px;
}

/*style items (options):*/
.select-items {
  position: absolute;
  background-color: white;
  top: 100%;
  left: 0;
  right: 0;
  z-index: 99;
}

/*hide the items when the select box is closed:*/
.select-hide {
  display: none;
}

.select-items div:hover, .same-as-selected {
  background-color: rgba(0, 0, 0, 0.1);
}
.button3 {font-size: 16px;}

#display-image{
  width: 100%;
  height: 120px;
  border: 1px solid #e6e6e6;
  background-position: center;
  background-size: cover;
}

    </style>
</head>

<body>
    <!-- header start -->
    <div id="profile_header">
        <div class="iconprofileheader">
            <i class="fa fa-angle-left fa-2x" onclick="history.go(-1)"></i>
        </div>
        <div id="profile_heading">
            <div id="profheadrev">Rented Products</div>
        </div>
        <!-- <div class="iconprofileheader">
        <a href="update.php" style="color:black"><i class="fa-solid fa-gear fa-2x"></i></a>
        
        </div> -->
    </div>
    <!-- header end -->

    <!-- <div style="margin-bottom:50%">
        <div class="myproducts">
            <div class="prod1">
                <div class="imgprod1"></div>
                <div>
                    <div class="tory1">Tory Burchearrings</div>
                    <div class="tory2">117 views</div>
                    <div class="tory2">27 Favourites</div>
                    <div class="tory2">2 times rental out</div>
                </div>
            </div>


            <div class="prod1">
                <div class="imgprod2"></div>
                <div>
                    <div class="tory1">Tory Burchearrings</div>
                    <div class="tory2">117 views</div>
                    <div class="tory2">27 Favourites</div>
                    <div class="tory2">2 times rental out</div>
                </div>
            </div>
        </div>
        <div class="myproducts">
            <div class="prod1">
                <div class="imgprod3"></div>
                <div>
                    <div class="tory1">Tory Burchearrings</div>
                    <div class="tory2">117 views</div>
                    <div class="tory2">27 Favourites</div>
                    <div class="tory2">2 times rental out</div>
                </div>
            </div>


            <div class="prod1">
                <div class="imgprod4"></div>
                <div>
                    <div class="tory1">Tory Burchearrings</div>
                    <div class="tory2">117 views</div>
                    <div class="tory2">27 Favourites</div>
                    <div class="tory2">2 times rental out</div>
                </div>
            </div>
        </div>
        <div class="myproducts">
            <div class="prod1">
                <div class="imgprod5"></div>
                <div>
                    <div class="tory1">Tory Burchearrings</div>
                    <div class="tory2">117 views</div>
                    <div class="tory2">27 Favourites</div>
                    <div class="tory2">2 times rental out</div>
                </div>
            </div>
        </div>
    </div> -->

    <div id="fav1">

    <div  class="img-wish" style="margin: 6px;">
        

                             <div class="card" style="width: 100%; border:none;">
                                <img class="img-fluid" alt="100%x280" src="product1.jpg" style="width: 100%;">
                                <i data-toggle="modal" data-target="#exampleModalCenter" class="fa-regular fa-message" style="position:absolute; left:85%; top:3%; color:#fff;"></i>
                                <div class="card-body" style="padding: 8px;">
                                    
                                  <span class="fa fa-heart" style="float: right;"></span>
                                 <p class="card-text" style="color: black;">Brand New Watch</p>
                                 <small class="text-muted" >Louis Vuitton</small>
                                 <small class="text2" style="color: green;">Approved</small>

                                 
                                <center>
                                 <a href="#" class="btn btn-primary">€ 39.55 / Day</a>
                                  </center>
                                </div>
                              </div>
                              <div class="custom-select"  style="width:100%;"  >
  <select >
    <!-- <option value="0">Select car:</option> -->
    <option value="1"  selected>Availible For Rent</option>
    <option value="1">Availible For Rent</option> 
    <option value="2">Waiting For Return</option>
    <option value="3">Waiting For Shipment</option>
    
  </select>
</div>



</div>



<div  class="img-wish" style="margin: 6px;">
        

                              <div class="card" style="width: 100%; border:none;">
                                <img class="img-fluid" alt="100%x280" src="product4.jpg" style="width: 100%;">
                                <!-- <i data-toggle="modal" data-target="#exampleModalCenter" class="fa-regular fa-message" style="position:absolute; left:85%; top:3%; color:#fff;"></i> -->
                                <div class="card-body" style="padding: 8px;">
                                    
                                  <span class="fa fa-heart" style="float: right;"></span>
                                 <p class="card-text" style="color: black;">Brand New Watch</p>
                                 <small class="text-muted" >Louis Vuitton</small>
                                 <small class="text2" style="color: red;">Reject</small>

                                 
                                <center>
                                 <a href="#" class="btn btn-primary">€ 39.55 / Day</a>
                                  </center>
                                </div>
                              </div>
                              <div class="custom-select"  style="width:100%;"  >
  <select >
    <!-- <option value="0">Select car:</option> -->
    <option value="1"  selected>Availible For Rent</option>
    <option value="1">Availible For Rent</option> 
    <option value="2">Waiting For Return</option>
    <option value="3">Waiting For Shipment</option>
    
  </select>
</div>



</div>


<div  class="img-wish" style="margin: 6px;">
        

                             <div class="card" style="width: 100%; border:none;">
                                <img class="img-fluid" alt="100%x280" src="product3.jpg" style="width: 100%;">
                                <!-- <i data-toggle="modal" data-target="#exampleModalCenter" class="fa-regular fa-message" style="position:absolute; left:85%; top:3%; color:#fff;"></i> -->
                                <div class="card-body" style="padding: 8px;">
                                    
                                  <span class="fa fa-heart" style="float: right;"></span>
                                 <p class="card-text" style="color: black;">Brand New Watch</p>
                                 <small class="text-muted" >Louis Vuitton</small>
                                 <small class="text2" style="color: blue;">Pending</small>

                                 
                                <center>
                                 <a href="#" class="btn btn-primary">€ 39.55 / Day</a>
                                  </center>
                                </div>
                              </div>
                              <div class="custom-select"  style="width:100%;"  >
  <select >
    <!-- <option value="0">Select car:</option> -->
    <option value="1"  selected>Availible For Rent</option>
    <option value="1">Availible For Rent</option> 
    <option value="2">Waiting For Return</option>
    <option value="3">Waiting For Shipment</option>
    
  </select>
</div>



</div>

<!-- Modal Review -->
<div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
<div class="modal-dialog modal-dialog-centered" role="document">
<div class="modal-content">
<div class="modal-header">
<h5 class="modal-title" id="exampleModalLongTitle">Write a Review</h5>
<button type="button" class="close" data-dismiss="modal" aria-label="Close">
  <span aria-hidden="true">&times;</span>
</button>
</div>
<div class="modal-body">

<textarea class="size-110 bor8 stext-102 cl2 p-lr-20 p-tb-10" placeholder="Write your message" id="review" name="review" style="height: 70px; border: 1px solid #e6e6e6; margin-top:10px; width:100%;"></textarea>

<input type="file" id="image-input" accept="image/jpeg, image/png, image/jpg" style="width: 100%; padding:5px;">
<div id="display-image"></div>

  <div class="stars" style="margin: 10px 20px;">
  <i class="fa-solid fa-star favcol"></i>
  <i class="fa-solid fa-star favcol"></i>
  <i class="fa-solid fa-star favcol"></i>
  <i class="fa-solid fa-star favcol"></i>
  <i class="fa-solid fa-star favcol"></i>
</div>

</div>
<div class="modal-footer">
<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
<button type="button" class="btn btn-primary" style="background-color: #fff; color:#888; margin-left:10px"> Submit</button>
</div>
</div>
</div>
</div>

    </div>

    <div class="moreproducts1">

<a href="productupload.php"><button class="button1 button3 ">Upload More Products</button></a>
    
</div>

<div class="gapgap1"></div>

    <!-- footer start -->
    <?php include 'footer.php' ?>
    <!-- footer end -->
    <script src="vendor/select2/select2.min.js"></script>
    <script>
        $(".js-select2").each(function() {
            $(this).select2({
                minimumResultsForSearch: 20,
                dropdownParent: $(this).next('.dropDownSelect2')
            });
        })
    </script>

  <script>
    const image_input = document.querySelector("#image-input");
image_input.addEventListener("change", function() {
  const reader = new FileReader();
  reader.addEventListener("load", () => {
    const uploaded_image = reader.result;
    document.querySelector("#display-image").style.backgroundImage = `url(${uploaded_image})`;
  });
  reader.readAsDataURL(this.files[0]);
});
  </script>



    <script src="https://stackpath.bootstrapcdn.com/bootstrap/5.0.0-alpha1/js/bootstrap.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>


</body>

</html>