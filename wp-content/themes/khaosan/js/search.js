$(document).ready(function(){

	// エリアが選択されていない場合
	var arrEmptyItem = {

		"0":[ { id:"0", name:"HOTEL" } ]

	};
	// エリアを選択された場合
	var arrHotelItem = {
/*TOKYO*/
		"a1":[ 
				{ id:"0", name:"SELECT HOTEL" },
				{ id:"13030036", name:"KHAOSAN TOKYO SAMURAI CAPSULE" },
			    { id:"13030037", name:"KHAOSAN TOKYO ORIGAMI" },
			    { id:"13030038", name:"KHAOSAN WORLD ASAKUSA HOSTEL" },
			    { id:"13030039", name:"KHAOSAN WORLD ASAKUSA RYOKAN" },
			    { id:"13030040", name:"KHAOSAN TOKYO LABORATORY" },
			    { id:"13030041", name:"KHAOSAN TOKYO KABUKI" },
			    { id:"13030042", name:"KHAOSAN TOKYO ORIGINAL" }
			],
			/*KYOTO*/
		"a2":[ 
				{ id:"0", name:"SELECT HOTEL" },
				{ id:"26030034", name:"KHAOSAN KYOTO THEATER" },
		      	{ id:"26030035", name:"KHAOSAN KYOTO GUESTHOUSE" } 
		    ],
		    /*OSAKA*/
		"a3":[
				{ id:"0", name:"SELECT HOTEL" }, 
				{ id:"0", name:"KHAOSAN WORLD NAMBA HOSTEL" } 
			],
			/*HOKKAIDO*/
		"a4":[ 
				{ id:"0", name:"SELECT HOTEL" },
				{ id:"01030033", name:"KHAOSAN SAPPORO FAMILY HOSTEL" },
				{ id:"0", name:"KHAOSAN CHITOSE AIRPORT HOSTEL" }  
			],
			/*KANAZAWA*/
		"a5":[
				{ id:"0", name:"SELECT HOTEL" }, 
				{ id:"17030032", name:"KHAOSAN KANAZAWA FAMILY HOSTEL" },
		    ],
		    /*ATAMI*/
		"a6":[
				{ id:"0", name:"SELECT HOTEL" }, 
				{ id:"22030031", name:"KHAOSAN ATAMI ONSEN RYOKAN & HOSTEL" } 
			]
	};


	/**
	 *Defalut get all hotel
	 */

	var hotel = $('#hotel')[0];
	var obj_area = $('.obj_area')[0];
	var obj_area_value = obj_area.options[ obj_area.selectedIndex ].value;

	while( hotel.lastChild ){
			hotel.removeChild(hotel.lastChild);
		}
	/*when not selecy area (obj_area)*/
		if (obj_area_value == "0") {
			hotel.options[0] = new Option("HOTEL","0");
		}

		

/**
 *when user select other obj_area
 */
	$('.obj_area').on('change' , function(){
		

		var obj_area_value = obj_area.options[ obj_area.selectedIndex ].value;
		
		while( hotel.lastChild ){
			hotel.removeChild(hotel.lastChild);
		}
		/*when not selecy area (obj_area)*/
		if (obj_area_value == "0") {
			hotel.options[0] = new Option("HOTEL","0");
		}else {
			for(var num_hotel = 0; num_hotel < arrHotelItem[ obj_area_value ].length; num_hotel++){
				var selectLn = hotel.options.length;
				hotel.options[selectLn] = new Option(arrHotelItem[ obj_area_value ][ num_hotel ].name, arrHotelItem[ obj_area_value ][ num_hotel ].id);
			}
		}
	});

	$('form.obj_search').on('submit' , function(){

		var date = $('#check-in').val();
		var time = date.split("/");

		$('input#selYear').attr({ name : "obj_year" , value :  time[2]});
		$('input#selMonth').attr({ name : "obj_month" , value :  time[0]});
		$('input#selDay').attr({ name : "obj_day" , value :  time[1]});


			var id_hotel = hotel.options[ hotel.selectedIndex ].value;

			var area_value = obj_area.options[ obj_area.selectedIndex ].value;

			$('input#area_yado_id').attr( "value" , area_value );

		
			var sAction = "";
			if( id_hotel == "0" ){
				sAction = "https://www.489pro.com/asp/g/c/calendar.asp?kid=00103" + "&lan=ENG";
			}
			else{
				sAction = "https://www.489pro.com/asp/489/menu.asp?id=" + id_hotel + "&ty=ser&kid=00103" + "&lan=ENG";
			}
 			
			$(this).attr('action' , sAction);
			$(this).submit();

	});
});

