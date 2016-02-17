<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	<style type="text/css">
		/* Credit to bootsnipp.com for the css for the color graph */
.colorgraph {
  height: 5px;
  border-top: 0;
  background: #c4e17f;
  border-radius: 5px;
  background-image: -webkit-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -moz-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: -o-linear-gradient(left, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
  background-image: linear-gradient(to right, #c4e17f, #c4e17f 12.5%, #f7fdca 12.5%, #f7fdca 25%, #fecf71 25%, #fecf71 37.5%, #f0776c 37.5%, #f0776c 50%, #db9dbe 50%, #db9dbe 62.5%, #c49cde 62.5%, #c49cde 75%, #669ae1 75%, #669ae1 87.5%, #62c2e4 87.5%, #62c2e4);
}

</style>
</head>
<body>
<div class="container">
 <div class="panel panel-info">

  <div class="panel-body">
   <div class="row">
      <div class="col-xs-12 col-sm-8 col-md-6 col-sm-offset-2 col-md-offset-3">
		<form role="form">
			<h2>Modificar Usuario</h2>
			<hr class="colorgraph">
			<div class="row">
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
                        <input type="text" name="first_name" id="first_name" class="form-control input-lg" placeholder="Cedula" tabindex="1">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Nombre " tabindex="2">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Apellido " tabindex="2">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Correo " tabindex="2">
					</div>
				</div>
				<div class="col-xs-12 col-sm-12 col-md-12">
					<div class="form-group">
						<input type="text" name="last_name" id="last_name" class="form-control input-lg" placeholder="Contraseña " tabindex="2">
					</div>
				</div>
			</div>
			
			<div class="row">
				
				<div class="col-xs-12 col-md-12"><a href="#" class="btn btn-success btn-block btn-lg" id="btn_modifi_client">Modificar</a></div>
			</div>
		</form>
	  </div>
   </div>
  </div> 
 </div>
</div> 
<!-- Modal -->

</body>
</html>


<script src="https://code.jquery.com/jquery-2.1.4.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
<script type="text/javascript">
	$(function () {
    $('.button-checkbox').each(function () {

        // Settings
        var $widget = $(this),
            $button = $widget.find('button'),
            $checkbox = $widget.find('input:checkbox'),
            color = $button.data('color'),
            settings = {
                on: {
                    icon: 'glyphicon glyphicon-check'
                },
                off: {
                    icon: 'glyphicon glyphicon-unchecked'
                }
            };

        // Event Handlers
        $button.on('click', function () {
            $checkbox.prop('checked', !$checkbox.is(':checked'));
            $checkbox.triggerHandler('change');
            updateDisplay();
        });
        $checkbox.on('change', function () {
            updateDisplay();
        });

        // Actions
        function updateDisplay() {
            var isChecked = $checkbox.is(':checked');

            // Set the button's state
            $button.data('state', (isChecked) ? "on" : "off");

            // Set the button's icon
            $button.find('.state-icon')
                .removeClass()
                .addClass('state-icon ' + settings[$button.data('state')].icon);

            // Update the button's color
            if (isChecked) {
                $button
                    .removeClass('btn-default')
                    .addClass('btn-' + color + ' active');
            }
            else {
                $button
                    .removeClass('btn-' + color + ' active')
                    .addClass('btn-default');
            }
        }

        // Initialization
        function init() {

            updateDisplay();

            // Inject the icon if applicable
            if ($button.find('.state-icon').length == 0) {
                $button.prepend('<i class="state-icon ' + settings[$button.data('state')].icon + '"></i>');
            }
        }
        init();
    });
});


</script>