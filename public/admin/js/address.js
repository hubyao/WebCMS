layui.use('form', function(){
var array = [];
var form = layui.form();
form.on('select', function(data){
	// console.log(data);
	//console.log(data.elem.selectedOptions["0"].id);
 	array[data.elem.id] = data.value;

 	if(data.elem.id == 'province'){
 		array['city'] ='';
 		array['area'] ='';
 	}
 	if(data.elem.id == 'city'){
 		array['area'] ='';
 	}
  	var address = array['province']+" "+array['city']+" "+array['area'];
  	$('#hidden_address').val(address);
 	});
	if($('#province').attr("placeholder")!='请选择'){
		array['province']=$('#province').attr("placeholder");
		array['city']=$('#city').attr("placeholder");
		array['area']=$('#area').attr("placeholder");
		var address = array['province']+" "+array['city']+" "+array['area'];
  		$('#hidden_address').val(address);
	}

});
//初始数据
        var areaData = Area;

        var $form;
        var form;
        var $;
        layui.use(['jquery', 'form'], function() {
            $ = layui.jquery;
            form = layui.form();
            $form = $('form');
            loadProvince();
        });
         //加载省数据
        function loadProvince() {
            var proHtml = '';

            	for (var i = 0; i < areaData.length; i++) {

            		if(areaData[i].provinceName==$('#province').attr("placeholder")){
            			province_id=areaData[i].provinceName+'_'+areaData[i].mallCityList.length+'_'+i;

            		  proHtml += '<option selected id="' + areaData[i].provinceName + '_' + areaData[i].mallCityList.length + '_' + i + '" value="' + areaData[i].provinceName  + '">' + areaData[i].provinceName + '</option>';
           			 }
           			 else{


           			 	 proHtml += '<option  id="' + areaData[i].provinceName + '_' + areaData[i].mallCityList.length + '_' + i + '" value="' + areaData[i].provinceName  + '">' + areaData[i].provinceName + '</option>';

           			 }

            }

            //初始化省数据
            $form.find('select[id=province]').append(proHtml);

            form.render();
            //form.on('select(province)', function(data) {
            form.on('select(province)', function(data) {
                $form.find('select[id=area]').html('<option value="">请选择县/区</option>').parent().hide();
                var value = data.elem.selectedOptions["0"].id;
                var d = value.split('_');
                var code = d[0];
                var count = d[1];
                var index = d[2];
                if (count > 0) {
                    loadCity(areaData[index].mallCityList);
                } else {
                     $form.find('select[id=city]').parent().hide();
                }
            });
            if($('#province').val!='请选择'){
            	var d =0;
                 d = province_id.split('_');
                var code = d[0];
                var count = d[1];
                var index = d[2];
                if (count > 0) {
                    loadCity(areaData[index].mallCityList);
                } else {
                    $form.find('select[id=city]').parent().hide();
                }
            }




        }
         //加载市数据
        function loadCity(citys) {
            var cityHtml = '';

            	for (var i = 0; i < citys.length; i++) {
            		if($('#city').attr("placeholder")==citys[i].cityName){
            			city_id=citys[i].cityName + '_' + citys[i].mallAreaList.length + '_' + i;
            			 cityHtml += '<option selected id="' + citys[i].cityName + '_' + citys[i].mallAreaList.length + '_' + i + '"  value="' + citys[i].cityName+ '">' + citys[i].cityName + '</option>';
            		}else{
            			cityHtml += '<option id="' + citys[i].cityName + '_' + citys[i].mallAreaList.length + '_' + i + '"  value="' + citys[i].cityName+ '">' + citys[i].cityName + '</option>';

            		}

            }

            $form.find('select[id=city]').html(cityHtml).parent().show();
            form.render();

            form.on('select(city)', function(data) {
                var value = data.elem.selectedOptions["0"].id;
                var d = value.split('_');
                var code = d[0];
                var count = d[1];
                var index = d[2];
                if (count > 0) {
                    loadArea(citys[index].mallAreaList);
                } else {
                    $form.find('select[id=area]').parent().hide();
                }
            });
              if($('#city').val!='请选择'){
            	 var d = city_id.split('_');
                var code = d[0];
                var count = d[1];
                var index = d[2];
                if (count > 0) {
                    loadArea(citys[index].mallAreaList);
                } else {
                    $form.find('select[id=area]').parent().hide();
                }
			}
        }
         //加载县/区数据
        function loadArea(areas) {
            var areaHtml = '';

            	for (var i = 0; i < areas.length; i++) {
            		if($('#area').attr("placeholder")==areas[i].areaName ){

						areaHtml += '<option  selected value="' + areas[i].areaName + '">' + areas[i].areaName + '</option>';
            		}else{
            			 areaHtml += '<option value="' + areas[i].areaName + '">' + areas[i].areaName + '</option>';
            		}

            }


            $form.find('select[id=area]').html(areaHtml).parent().show();
            form.render();
            form.on('select(area)', function(data) {
                // console.log(data);
            });
        }