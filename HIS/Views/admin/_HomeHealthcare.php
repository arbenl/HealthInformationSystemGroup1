<!doctype html>
<html lang="en">
  <head>
    
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    
    
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
       body{
	width: 100%;
	height:100%;
	overflow: hidden;
	background-image: url(../images/background.jpg);
}
.inner-layer{
	position: absolute;
	width: 100%;
	height:100%;
	background-color: rgba(0,147,173,0.7);
	overflow: auto;
}
.form-data{
	margin-top: 21%;
	background-color: #FFF;
	
}
.form-body{
	padding: 20px;
}
.form-head{
	padding: 10px;
	border-bottom: 1px solid #CCC;
}
.form-head h2{
	font-size: 22px;
	font-weight: 600;
}
.no-margin{
	margin: 0px;
}

.form-row{
	margin-bottom: 15px;
}
.form-control{
	background-color: #f7f7ff;
	border-radius: 0px;

}
.form-control:focus{
	box-shadow: none;
	border: 3px solid #138496;
}
.btn-appointment{
	background-color: #138496 !important;
	border-color: #138496 !important;
	width: 100%;
}
.content{
	margin-top: 15%;
	text-align: center;
	color: #FFF;
	padding: 30px;
}
.content h1{
	font-weight: 600;
	font-size: 3.5rem;
}
.content h2{
	font-weight: 600;
	font-size:2.5rem;
	margin-top: 20px;
}
.content p{
	font-size: 22px;
	margin-top: 20px;
}
.datepicker td, .datepicker th{
	padding: 5px;
}
.dropdown-menu.datepicker{
	max-width: 300px !important;
}


@media screen and (max-width: 976px){
	
}.datepicker {
top: 0;
left: 0;
padding: 4px;
margin-top: 1px;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
/*.dow {
border-top: 1px solid #ddd !important;
}*/
}
.datepicker:before {
content: '';
display: inline-block;
border-left: 7px solid transparent;
border-right: 7px solid transparent;
border-bottom: 7px solid #ccc;
border-bottom-color: rgba(0, 0, 0, 0.2);
position: absolute;
top: -7px;
left: 6px;
}
.datepicker:after {
content: '';
display: inline-block;
border-left: 6px solid transparent;
border-right: 6px solid transparent;
border-bottom: 6px solid #ffffff;
position: absolute;
top: -6px;
left: 7px;
}
.datepicker > div {
display: none;
}
.datepicker table {
width: 100%;
margin: 0;
}
.datepicker td, .datepicker th {
text-align: center;
width: 20px;
height: 20px;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
}
.datepicker td.day:hover {
background: #eeeeee;
cursor: pointer;
}
.datepicker td.old, .datepicker td.new {
color: #999999;
}
.datepicker td.active, .datepicker td.active:hover {
background-color: #006dcc;
background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
background-image: -ms-linear-gradient(top, #0088cc, #0044cc);
background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
background-image: -o-linear-gradient(top, #0088cc, #0044cc);
background-image: linear-gradient(top, #0088cc, #0044cc);
background-repeat: repeat-x;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0088cc', endColorstr='#0044cc', GradientType=0);
border-color: #0044cc #0044cc #002a80;
border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
color: #fff;
text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}
.datepicker td.active:hover,
.datepicker td.active:hover:hover,
.datepicker td.active:active,
.datepicker td.active:hover:active,
.datepicker td.active.active,
.datepicker td.active:hover.active,
.datepicker td.active.disabled,
.datepicker td.active:hover.disabled,
.datepicker td.active[disabled],
.datepicker td.active:hover[disabled] {
background-color: #0044cc;
}
.datepicker td.active:active,
.datepicker td.active:hover:active,
.datepicker td.active.active,
.datepicker td.active:hover.active {
background-color: #003399 \9;
}
.datepicker td span {
display: block;
width: 47px;
height: 54px;
line-height: 54px;
float: left;
margin: 2px;
cursor: pointer;
-webkit-border-radius: 4px;
-moz-border-radius: 4px;
border-radius: 4px;
}
.datepicker td span:hover {
background: #eeeeee;
}
.datepicker td span.active {
background-color: #006dcc;
background-image: -moz-linear-gradient(top, #0088cc, #0044cc);
background-image: -ms-linear-gradient(top, #0088cc, #0044cc);
background-image: -webkit-gradient(linear, 0 0, 0 100%, from(#0088cc), to(#0044cc));
background-image: -webkit-linear-gradient(top, #0088cc, #0044cc);
background-image: -o-linear-gradient(top, #0088cc, #0044cc);
background-image: linear-gradient(top, #0088cc, #0044cc);
background-repeat: repeat-x;
filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0088cc', endColorstr='#0044cc', GradientType=0);
border-color: #0044cc #0044cc #002a80;
border-color: rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.1) rgba(0, 0, 0, 0.25);
filter: progid:DXImageTransform.Microsoft.gradient(enabled = false);
color: #fff;
text-shadow: 0 -1px 0 rgba(0, 0, 0, 0.25);
}
.datepicker td span.active:hover,
.datepicker td span.active:active,
.datepicker td span.active.active,
.datepicker td span.active.disabled,
.datepicker td span.active[disabled] {
background-color: #0044cc;
}
.datepicker td span.active:active, .datepicker td span.active.active {
background-color: #003399 \9;
}
.datepicker td span.old {
color: #999999;
}
.datepicker th.switch {
width: 145px;
}
.datepicker thead tr:first-child th {
cursor: pointer;
}
.datepicker thead tr:first-child th:hover {
background: #eeeeee;
}
.input-append.date .add-on i, .input-prepend.date .add-on i {
display: block;
cursor: pointer;
width: 16px;
height: 16px;
}
.dropdown-menu.datepicker { max-width:220px }
 
    </style>
  </head>

    <body style="background-image: url('https://www.humanitas.net/content/uploads/2017/10/doctor-smiling-e1479990735873.jpg');">
        
      <div class="inner-layer">
          <div class="container">
            <div class="row no-margin">
                <div class="col-sm-7">
                    <div class="content">
                        <h2>Shëndeti në shtëpinë tuaj, rruga drejtë mirëqenies dhe lumturisë</h2>
                        <p>“Çdo pacient ka të drejtën për akses në shërbimet shëndetësore sipas nevojave vetjake. Shërbimet shëndetësore tek ne garantojnë akses të barabartë për këdo, pa diskriminim bazuar në të ardhurat financiare, llojin e sëmundjes apo kohën e marrjes së shërbimit </p>
                        <h2>Per ndihme kontakto: 043877697</h2>
                    </div>
                </div>
                <div class="col-sm-5">
                    <div class="form-data">
                        <div class="form-head">
                            <h2>Cakto Termin</h2>
                        </div>
                        <div class="form-body">
                            <div class="row form-row">
                              <input type="text" placeholder="Emri Mbiemri" class="form-control">
                            </div>
                            <div class="row form-row">
                              <input type="text" placeholder="Numri i telefonit" class="form-control">
                            </div>
                             <div class="row form-row">
                              <input type="text" placeholder="Emaili" class="form-control">
                            </div>
                            <div class="row form-row">
                             <input id="dat" type="date" placeholder="Data e terminit" class="form-control">
                             </div>

                            
                            <h6>Detajet e adreses</h6>

                             <div class="row form-row">
                                <div class="col-sm-6">
                                   <input type="text" placeholder="Rruga" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                   <input type="text" placeholder="Nr i shtepise" class="form-control">
                                </div>
                            </div>
                             <div class="row form-row">
                                <div class="col-sm-6">
                                   <input type="text" placeholder="Qyteti" class="form-control">
                                </div>
                                <div class="col-sm-6">
                                   <input type="text" placeholder="Kodi postar" class="form-control">
                                </div>
                            </div>

                             <div class="row form-row">
                               <button class="btn btn-success btn-appointment">
                                 Cakto Termin
                               </button>
                               
                            </div>

                        </div>
                    </div>
                </div>
            </div>
          </div>
      </div>
      
    </body>
  
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="assets/js/jquery-3.3.1.min.js"></script>
    <script src="assets/js/popper.min.js"></script>
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-datepicker.js"></script>

    <script>
      $(document).ready(function(){
          $("#dat").datepicker();
      })
    </script>
    
  </body>
</html>