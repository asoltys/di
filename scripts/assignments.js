$(function() {
  $('input[type=radio],input[type=checkbox]').css('background', '#ddd');
  $('a#add_vehicle').click(addVehicle);
});

function addVehicle()
{
  $('#num_vehicles').val(parseInt($('#num_vehicles').val()) + 1);
  
  var new_vehicle = $('#vehicle').clone();
  new_vehicle.attr('id', new_vehicle.attr('id') + '_' + $('#num_vehicles').val());
  new_vehicle.show();
  new_vehicle.find('legend').text('Vehicle ' + $('#num_vehicles').val());
  new_vehicle.find('input,textarea').each(function() { 
    $(this).attr(
      'name', 
      $(this).attr('name') + '_' + $('#num_vehicles').val())
  });
  new_vehicle.insertBefore('a#add_vehicle');
}
