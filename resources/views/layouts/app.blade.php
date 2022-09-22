<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    
    <link href="https://fonts.googleapis.com/css?family=Material+Icons" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Nunito:300,400,400i,600,700,800,900" rel="stylesheet" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.1/css/all.css" />
    <link rel="stylesheet" href="{{ asset('public/css/vendors.bundle.min.css') }}" />
    <link href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" href="{{ asset('public/css/main.bundle.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('public/css/tailwind.bundle.min.css') }}" />
    <link href="{{ asset('public/css/custom.css') }}" rel="stylesheet">
   
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.css"/>
    @if (Auth::check() && Request::segment(1) != "organizations"  && Request::segment(1) != "fleets"  && Request::segment(1) != "rpics"  && Request::segment(1) != "users")
	<link href="{{ asset('public/css/app.css') }}" rel="stylesheet">
    
	
    @endif
    <link href="{{ asset('public/css/flowbite.css') }}" rel="stylesheet">
</head>
<body>

    <div id="app">
        @yield('content')
    </div>
    <script src="{{ asset('public/js/app.js') }}"></script>
    
	<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.4.1/jquery.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/cropperjs/1.5.6/cropper.js"></script>
    <script src="{{ asset('public/js/index.js') }}"></script>
    <script src="{{ asset('public/ckeditor/ckeditor.js')}}"></script>
<script>CKEDITOR.replace('article-ckeditor');</script>
 <script
      src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAlj1b3UHMbrvljPNNxwJ7lqYPkx4qyCFI&callback=initAutocomplete&libraries=places&v=weekly"
      defer
    ></script>
    <?php if(isset($mission['mission_location'])) { $mission_location = $mission['mission_location']; }else{ $mission_location = "USA"; } ?>
    @if (Request::segment(1) != "create")
	<script>
    function googleMAP(pacinput = "") {
        if(pacinput == ""){
            var address = '<?php echo $mission_location; ?>';
        }else{
            var address = pacinput;
        }
  

   var map = new google.maps.Map(document.getElementById('googlmap'), { 
       mapTypeId: google.maps.MapTypeId.TERRAIN,
       zoom: 6
   });

   var geocoder = new google.maps.Geocoder();

   geocoder.geocode({
      'address': address
   }, 
   function(results, status) {
      if(status == google.maps.GeocoderStatus.OK) {
         new google.maps.Marker({
            position: results[0].geometry.location,
            map: map
         });
         map.setCenter(results[0].geometry.location);
      }
   });
}

</script>
@endif
    <script>
			$.noConflict();
				
				
	
            jQuery(function($) {
				
                $(document).on('click', '.search-btn', function(event) {
                    event.preventDefault();
                    $('#pac-input').val($('input[name="location"]').val());
                    $('#pac-input').trigger('focus');
                    
                });
                titletxt = $('.card-title.py-3').text();

                if(titletxt == "Edit Mission"){
                    googleMAP();
                }   
                var p = $("#previewimage");
                var image = document.getElementById('image');
			var cropper;
                $("body").on("change", ".image", function(e){
                    var files = e.target.files;
				var done = function(url) {
					image.src = url;

                    cropper = new Cropper(image, {
                        aspectRatio: 1,
                        viewMode: 3,
                        preview: '.preview'
                    });

					jQuery('div[data-target="#imgModalXl"]').addClass('show');
				};
				var reader;
				var file;
				var url;
				if (files && files.length > 0) {
					file = files[0];
					if (URL) {
						done(URL.createObjectURL(file));
					} else if (FileReader) {
						reader = new FileReader();
						reader.onload = function(e) {
							done(reader.result);
						};
						reader.readAsDataURL(file);
					}
				}
                    
                });
               
                $("#crop").click(function() {
				canvas = cropper.getCroppedCanvas({
					width: 400,
					height: 400,
				});
				canvas.toBlob(function(blob) {
					url = URL.createObjectURL(blob);
					var reader = new FileReader();
					reader.readAsDataURL(blob);
					reader.onloadend = function() {
						var base64data = reader.result;
                        jQuery('input[name="image"]').val(base64data);
						alert("Crop image successfully uploaded");
                        jQuery('div[data-target="#imgModalXl"]').removeClass('show');
					}
				});
			});
            });

            jQuery(document).ready(function(){

                jQuery(document).on('click', 'input[name="flight_delayed"]', function(){
                    
                    if(jQuery(this).val() == "Yes"){
                        jQuery('#delayed').show();
                    }else{
                        jQuery('#delayed').hide();
                    }
                });

                jQuery(document).on('click', 'input[name="operable"]', function(){
                    
                    if(jQuery(this).val() == "Yes"){
                        jQuery('#flight_plan').show();
                    }else{
                        jQuery('#flight_plan').hide();
                    }
                });

                jQuery('#equipment').change(function(){
                    v = jQuery(this).val();
                    window.location.href = window.location.href + "?equipment="+v;
                });

                jQuery(".add-btn").click(function(){ 
                    var lsthmtl = jQuery(".clone").html();
                    jQuery(".increment").append(lsthmtl);
                });
                jQuery("body").on("click",".btn-danger",function(){ 
                    jQuery(this).parents(".col-span-12 lst").remove();
                });

                jQuery(document).on('click', '.homepage a[data-toggle="ul-modal"]', function(e){
                    txt = $(this).find('.title').text();
                    $modalTarget = $(this).attr('data-target');
                    $('.fleetsModalXl .card-title').text(txt);
                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    jQuery.ajax({
                        url: "{{ url('/home/showfleets/')}}/" +txt,
                        type: 'GET',
                        data: {_token: CSRF_TOKEN},
                        success: function (data) {
                            $('#fleetsAll').html(data);
                        }
                    });
                    jQuery('div[data-target="'+$modalTarget+'"]').addClass('show');
                });
                jQuery(document).on('click', 'a[data-toggle="ul-modal"]', function(e){
                    datahref = $(this).attr('data-href');
                    jQuery('.dtl').hide();
                    $this = $(this);
                    $modalTarget = $(this).attr('data-target');


                    if($modalTarget == "#sopsModalXl"){
                        datacontent = $(this).attr('data-content');
                        datatitle = $(this).attr('data-title');
                        $('div[data-target="#sopsModalXl"] #title').html(datatitle);
                        $('div[data-target="#sopsModalXl"] #content').html(datacontent);
                        jQuery('div[data-target="#sopsModalXl"]').addClass('show');
                    }else{


                    var CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
                    jQuery.ajax({
                        url: datahref,
                        type: 'GET',
                        data: {_token: CSRF_TOKEN},
                        dataType: 'JSON',
                        success: function (data) {

                            if($modalTarget == "#orgModalXl"){
                                jQuery('.modal-body .avatar-lg, .modal-body .avatar').attr('src', '{{asset("storage/app")}}/'+data.pic);
                                jQuery('#orgname').html(data.org_name);
                                jQuery('#address_line1').html(data.address_line1);
                                jQuery('#city').html(data.city);
                                jQuery('#country').html(data.country);
                                jQuery('#poc_email').html(data.poc_email);
                                jQuery('#poc_name').html(data.poc_name);
                                jQuery('#poc_phone').html(data.poc_phone);
                                jQuery('#short_desc').html(data.short_desc);
                                jQuery('#long_desc').html(data.long_desc);
                                jQuery('div[data-target="'+$modalTarget+'"]').addClass('show');
                            }else if($modalTarget == "#leaderModalXl"){
                               
                                jQuery('.modal.show #name').html(data.name);
                                jQuery('.modal.show #group_type').html(data.group_type);
                                jQuery('.modal.show #phone').html(data.contact);
                                jQuery('.modal.show #address_line').html(data.address_line);
                                jQuery('.modal.show #city').html(data.city);
                                jQuery('.modal.show #country').html(data.country);
                                jQuery('div[data-target="'+$modalTarget+'"]').addClass('show');
                            }else if($modalTarget == "#fleetModalXl"){

                                htm = $this.parents('tr').find('.icon').html();
                                
                                jQuery('#icon').html(htm);
                                jQuery('#fleetname').html(data.name);
                                jQuery('.modal-body .avatar-lg, .modal-body .avatar').attr('src', '{{asset("storage/app")}}/'+data.pic);
                                if(data.equipment != "" && data.equipment != null){
                                    jQuery('#equipment').html(data.equipment).parents('.dtl').show();
                                }

                                if(data.equipment == "Software"){
                                    jQuery('#sofequipment').html(data.name).parents('.dtl').show();
                               }

                                if(data.make != "" && data.make != null){
                                    
                                    jQuery('#make').html(data.make).parents('.dtl').show();
                                }
                                if(data.model != "" && data.model != null){
                                    jQuery('#model').html(data.model).parents('.dtl').show();
                                }
                                if(data.batteries != "" && data.batteries != null){
                                    jQuery('#batteries').html(data.batteries).parents('.dtl').show();
                                }
                                if(data.tail_number != "" && data.tail_number != null){
                                    jQuery('#tailno').html(data.tail_number).parents('.dtl').show();
                                }
                                if(data.group_own_the_dron != "" && data.group_own_the_dron != null){
                                    jQuery('#groupdrone').html(data.group_own_the_dron).parents('.dtl').show();
                                }
                                if(data.drone != "" && data.drone != null){
                                    jQuery('#droneassigned').html(data.drone).parents('.dtl').show();
                                }
                                
                                jQuery('#rpics').html(data.main_rpics);
                                jQuery('#owner').html(data.who_purchased);
                                jQuery('#short_desc').html(data.short_desc);
                                jQuery('#long_desc').html(data.long_desc);
                                jQuery('div[data-target="'+$modalTarget+'"]').addClass('show');
                            }else if($modalTarget == "#rpicModalXl"){
                                
                                $('#allcertificates').html("");
                                $('#dateExpire').html("");
                                jQuery('#rpicname').html(data.first_name+" "+data.last_name);
                                jQuery('.modal-body .avatar-lg img').attr('src', '{{asset("storage/app")}}/'+data.pic);
                                
                                if(data.certificate != ""){
                                    certificates = jQuery.parseJSON((data.certificate));
                                    $.each(certificates,function(key,value){
                                    htm = '<br/><a class="certificatelink" href="{{asset("storage/public/images")}}/'+ value +'" download>Certificate '+(key +1) +'</a>';
                                        $('#allcertificates').append(htm);
                                    });
                                }
                                jQuery('#email').html(data.email);
                                jQuery('#dateC').html(data.date_of_certified);
                                if(data.callsign != "" && data.callsign != null){
                                    jQuery('#callsign').html(data.callsign).parents('.dtl').show();
                                }
                                jQuery('#mission_type').html(data.mission_type);
                                
                                jQuery('#short_desc').html(data.short_desc);
                                jQuery('#long_desc').html(data.long_desc);



                                var countDownDate = new Date(data.certificate_exp).getTime();

                                // Update the count down every 1 second
                                var x = setInterval(function() {

                                // Get today's date and time
                                var now = new Date().getTime();
                                    
                                // Find the distance between now and the count down date
                                var distance = countDownDate - now;
                                    
                                // Time calculations for days, hours, minutes and seconds
                                var days = Math.floor(distance / (1000 * 60 * 60 * 24));
                                var hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
                                var minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));
                                var seconds = Math.floor((distance % (1000 * 60)) / 1000);
                                    
                                // Output the result in an element with id="demo"
                                document.getElementById("dateExpire").innerHTML = days + "d " + hours + "h "
                                + minutes + "m " + seconds + "s ";
                                    
                                // If the count down is over, write some text 
                                if (distance < 0) {
                                    clearInterval(x);
                                    document.getElementById("dateExpire").innerHTML = "EXPIRED";
                                }
                                }, 1000);





                                jQuery('div[data-target="'+$modalTarget+'"]').addClass('show');
                            }else if($modalTarget == "#userModalXl"){
                                data = data[0];
                                jQuery('#name').html(data.name);
                                jQuery('.modal-body .avatar-lg img').attr('src', '{{asset("storage/app")}}/'+data.pic);
                                jQuery('#email').html(data.email);
                                jQuery('#phone').html(data.phone);
                                jQuery('#address_line').html(data.address_line);
                                jQuery('#rolename').html(data.role_name);
                                jQuery('#city').html(data.city);
                                jQuery('#country').html(data.country);
                                jQuery('#long_desc').html(data.long_desc);

                                jQuery('div[data-target="'+$modalTarget+'"]').addClass('show');
                            }
                        }
                        
                    });
                }
                });



              $(document).on('keyup', '#exampleSearch', function(e){

                if(e.which == 13) {
                    v  = $(this).val();
                    document.querySelector("#output").textContent="String found? " + window.find(v);
                }
                
              });

                $(document).on('click', '.modal-close', function(e){

                    $(this).parents('.modal').removeClass('show');
                });

                $(document).on('change', '#pilot', function(e){
                   v = getName('data-pilot');
                   name = getName('data-name');
                   if(v == ""){
                       v = "(Rpic Name)";
                   }
                    $('#rpic_name').html(v);
                    $('#mission_name').val(name);
                });

            $(document).on('click', 'form input.btn.btn-primary', function(e) {
                
        e.preventDefault();
        $('#msg').html('');
            elem = $(this);
                vl = elem.val();
        $('form .contact-error').remove();
        $('form .inputError').removeClass('inputError');
        var hasError = false;
        $('form .requiredField').each(function() {
            if (jQuery.trim($(this).val()) == '' || jQuery.trim($(this).val()) == jQuery.trim($(this).attr('placeholder'))) {
                var labelText = $(this).prev('label').text();
                $(this).parent().append("<strong class='contact-error'>This is a required field</strong>");
                $(this).addClass('inputError');
                hasError = true;
            } else {
                if ($(this).hasClass('email')) {
                    var emailReg = /^([\w-\.]+@([\w-]+\.)+[\w-]{2,6})?$/;
                    if (!emailReg.test(jQuery.trim($(this).val()))) {
                        var labelText = $(this).prev('label').text();
                        $(this).parent().append("<strong class='contact-error'>Please enter a valid email address.</strong>");
                        $(this).addClass('inputError');
                        hasError = true;
                    }
                }
            }
        });
        if (hasError == true) {
            return false;
        } else {
            if(vl == "Create Mission"){
               pacinput =  $('#pac-input').val();
              
                var formAction = elem.parents('form').attr('action'); 
                var formdata = elem.parents('form').serialize(); // here $(this) refere to the form its submitting
                jQuery.ajax({
                    type: 'POST',
                    url: formAction,
                    data: formdata, // here $(this) refers to the ajax object not form
                    success: function (data) {
                        
                        jQuery('.missionModalXl .modal-body').html(data);
                        jQuery('div[data-target="#missionModalXl"]').addClass('show');
                        googleMAP(pacinput);
                    },
                });
            }else{
                $('form input[type="submit"]').trigger('click');
            }
        }


    });
});

function getName(select) {
    return event.target.selectedOptions[0].getAttribute(select);
  
}
function replaceText() {

$("body").find(".highlight").removeClass("highlight");

var searchword = $("#exampleSearch").val();

var custfilter = new RegExp(searchword, "ig");
var repstr = "<span class='highlight'>" + searchword + "</span>";

if (searchword != "") {
    $('body').each(function() {
        $(this).html($(this).html().replace(custfilter, repstr));
    })
}
}
	</script>
		<script src="{{ asset('public/js/vendors.bundle.min.js') }}"></script>
	<script src="{{ asset('public/js/main.bundle.min.js') }}"></script>
    <script src="{{ asset('public/js/pages/dashboard/dataSeries.script.js') }}"></script>
    
	<script src="https://unpkg.com/flowbite@1.3.4/dist/datepicker.js"></script>
	<script src="{{ asset('public/js/pages/dropdown.min.js') }}"></script>
	<script src="{{ asset('public/js/pages/modal.min.js') }}"></script>
	
	<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" type="text/javascript"></script>
    @if (Auth::check() && Request::segment(1) != ""  && Request::segment(1) != "home" )
    <script src="{{ asset('public/js/pages/table.js') }}"></script>
    @endif
    <script src="https://unpkg.com/flowbite@1.3.4/dist/flowbite.js"></script>
	@if (Request::segment(1) != "create")
    <script>
        

var options = {
    fill: {
    colors: ['#4c94d4'],
  },
          series: [{
          data: [<?php echo session('fleets') ?>]
        }],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            borderRadius: 4,
            horizontal: false,
          }
        },
        dataLabels: {
          enabled: true
        },
        xaxis: {
          categories: <?php echo session('fleetLabel') ?>,
        }
        };

var chart = new ApexCharts(document.querySelector('#fleet_type'), options);
chart.render();



var options = {
    fill: {
    colors: ['#4c94d4'],
  },
          series: [{
          data: [<?php echo session('drones') ?>]
        }],
          chart: {
          type: 'bar',
          height: 350
        },
        plotOptions: {
          bar: {
            borderRadius: 4,
            horizontal: false,
          }
        },
        dataLabels: {
          enabled: true
        },
        xaxis: {
          categories: <?php echo session('droneLabel') ?>,
        }
        };

var chart = new ApexCharts(document.querySelector('#drone_make'), options);
chart.render();
</script>
	<script>
			const dateRangePickerEl = document.getElementById('date_picker');
			new DateRangePicker(dateRangePickerEl, {
				// options
			});

	</script>
	
    <script src="{{ asset('public/js/pages/dashboard/dashboard.v1.script.js') }}"></script>
    @endif
</body>
</html>
