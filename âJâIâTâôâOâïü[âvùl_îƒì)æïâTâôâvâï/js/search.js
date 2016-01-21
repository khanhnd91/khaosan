/**
 * @author ability consultant
 * @version ooedoonsen
 */

function setYproSearch(){

	var nInitDay       = 7;		// 日付(○日後) ※本日の場合は 0
	var nInitPer       = 2;		// 人数(大人)
	var nInitChild1    = 0;		// 人数(小児1)
	var nInitChild2    = 0;		// 人数(小児2)
	var nInitChild3    = 0;		// 人数(小児3)
	var nInitChild4    = 0;		// 人数(小児4)
	var nInitChild5    = 0;		// 人数(小児5)
	var nInitStay      = 1;		// 泊数
	var nInitRoom      = 1;		// 部屋数
	var nInitBudgetMin = 0;		// 料金下限(optionの番号) ※下限なしの場合は 0
	var nInitBudgetMax = 0;		// 料金上限(optionの番号) ※上限なしの場合は 0

	var nOpMaxYear  = 2;			// 日付(今年も含めて何年分表示するか)
	var nOpMaxPer   = 10;			// 人数(大人)(最大選択値)
	var nOpMaxChild = 10;			// 人数(小児)(最大選択値)
	var nOpMaxStay  = 10;			// 泊数(最大選択値)
	var nOpMaxRoom  = 10;			// 部屋数(最大選択値)

	// 料金
	var arrBudget = [
		[1, "5,000円"],
		[2, "6,000円"],
		[3, "7,000円"],
		[4, "8,000円"],
		[5, "9,000円"],
		[6, "10,000円"],
		[7, "12,000円"],
		[8, "14,000円"],
		[9, "16,000円"],
		[10, "18,000円"],
		[11, "20,000円"],
		[12, "30,000円"],
		[13, "40,000円"],
		[14, "50,000円"]
	];

	// 日付の設定
	var thisDate = new Date();
	thisDate.setTime( thisDate.getTime() + nInitDay * 1000 * 60 * 60 * 24 );

	var thisYear = thisDate.getFullYear();
	var thisMonth = thisDate.getMonth()+1;
	var thisDay = thisDate.getDate();	

	/*
	 * 年のセレクトボックス生成
	 */
	var arrYear = getYproElementsByClass( "obj_year" );
	if( arrYear != undefined && arrYear != null ){

		for( var nCnt = 0; nCnt < arrYear.length; nCnt++ ){

			var objYear = arrYear[ nCnt ];
			if( objYear != undefined ){

				while( objYear.lastChild ){
					objYear.removeChild(objYear.lastChild);
				}
				for(optionYear = thisYear; optionYear < thisYear+nOpMaxYear; optionYear++){
					selectLn = objYear.options.length;
					objYear.options[selectLn] = new Option(optionYear, optionYear);

					if( optionYear == thisDay ){
						objYear.options[selectLn].selected = true;
					}

				}

				if(window.attachEvent){
					objYear.attachEvent('onchange', updateYproDaySelect);
				}
				else{
					objYear.addEventListener('change', updateYproDaySelect, false);
				}

			}

		}

	}

	/*
	 * 月のセレクトボックス生成
	 */
	var arrMonth = getYproElementsByClass( "obj_month" );
	if( arrMonth != undefined && arrMonth != null ){

		for( var nCnt = 0; nCnt < arrMonth.length; nCnt++ ){

			var objMonth = arrMonth[ nCnt ];
			if( objMonth != undefined ){

				while( objMonth.lastChild ){
					objMonth.removeChild(objMonth.lastChild);
				}
				for(var optionMonth = 1; optionMonth < 13; optionMonth++){
					var selectLn = objMonth.options.length;
					objMonth.options[selectLn] = new Option(optionMonth, optionMonth);

					if( optionMonth == thisMonth ){
						objMonth.options[selectLn].selected = true;
					}

				}

				if(window.attachEvent){
					objMonth.attachEvent('onchange', updateYproDaySelect);
				}
				else{
					objMonth.addEventListener('change', updateYproDaySelect, false);
				}

			}

		}

	}

	
	// 日のセレクトボックスを更新する
	updateYproDaySelect();

	// ホテルのセレクトボックスを更新する
	updateYproYadoSelect();

}

/*
 * 日のセレクトボックスを更新する
 */

function updateYproDaySelect(){

	var arrSearch = getYproElementsByClass( "obj_search" );
	if( arrSearch != undefined && arrSearch != null ){

		for( var nCnt = 0; nCnt < arrSearch.length; nCnt++ ){

			var objSearch = arrSearch[ nCnt ];
			if( objSearch != undefined ){

				var objYear = objSearch.obj_year;
				var objMonth = objSearch.obj_month;
				var objDay = objSearch.obj_day;

				if( objYear != undefined && objMonth != undefined && objDay != undefined ){

					var nYear = objYear.options[ objYear.selectedIndex ].value;
					var nMonth = objMonth.options[ objMonth.selectedIndex ].value;
					var nDay = objDay.options[ objDay.selectedIndex ].value;

					var nDayNum = new Date( nYear, nMonth, 0).getDate();

					while( objDay.lastChild ){
						objDay.removeChild(objDay.lastChild);
					}
					for(var optionDay = 1; optionDay < nDayNum + 1; optionDay++){
						var selectLn = objDay.options.length;
						objDay.options[selectLn] = new Option(optionDay, optionDay);

						if( optionDay == nDay ){
							objDay.options[selectLn].selected = true;
						}

					}

					if( nDay > nDayNum ){
						objDay.selectedIndex = ( nDayNum ) - 1;
					}

				}

			}

		}

	}

}

/*
 * ホテルのセレクトボックスを更新する
 */

function updateYproYadoSelect(){

	// エリアが選択されていない場合
	var arrEmptyItem = {

		"0":[ { id:"0", name:"ホテルを選択してください" } ]

	};

	// エリアを選択された場合
	var arrYadoItem = {

		"1":[ { id:"13030036", name:"カオサン東京サムライカプセル" },
		      { id:"13030037", name:"カオサン東京オリガミ" },
		      { id:"13030038", name:"カオサンワールド浅草ホステル" },
		      { id:"13030039", name:"カオサンワールド浅草旅館" },
		      { id:"13030040", name:"カオサン東京ラボラトリー" },
		      { id:"13030041", name:"カオサン東京歌舞伎" },
		      { id:"13030042", name:"カオサン東京オリジナル" } ],

		"2":[ { id:"26030034", name:"カオサン京都シアター" },
		      { id:"26030035", name:"カオサン京都ゲストハウス" } ],

		"3":[ { id:"17030032", name:"カオサン金沢ファミリーホステル" },
		      { id:"22490014", name:"伊東温泉　伊東ホテルニュ－岡部" } ],

		"4":[ { id:"01030033", name:"インターナショナルホステルカオサン札幌" } ],

		"5":[ { id:"22030031", name:"カオサン熱海温泉旅館&ホステル" } ]

	};

	var arrSearch = getYproElementsByClass( "obj_search" );
	if( arrSearch != undefined && arrSearch != null ){

		for( var nCnt = 0; nCnt < arrSearch.length; nCnt++ ){

			var objSearch = arrSearch[ nCnt ];
			if( objSearch != undefined ){

				var objArea = objSearch.obj_area;
				if( objArea != undefined ){

					var nArea = objArea.options[ objArea.selectedIndex ].value;
					var objYado = objSearch.obj_yado;

					while( objYado.lastChild ){
						objYado.removeChild(objYado.lastChild);
					}

					// エリアが選択されていない場合
					if( nArea == "0" ){

						for(var optionYado = 0; optionYado < arrEmptyItem[ nArea ].length; optionYado++){
							var selectLn = objYado.options.length;
							objYado.options[selectLn] = new Option(arrEmptyItem[ nArea ][ optionYado ].name, arrEmptyItem[ nArea ][ optionYado ].id);
						}

					}
					
					// エリアを選択された場合
					else{

						for(var optionYado = 0; optionYado < arrYadoItem[ nArea ].length; optionYado++){
							var selectLn = objYado.options.length;
							objYado.options[selectLn] = new Option(arrYadoItem[ nArea ][ optionYado ].name, arrYadoItem[ nArea ][ optionYado ].id);
						}

					}

				}

				if( objArea != undefined ){

					if(window.attachEvent){
						objArea.attachEvent('onchange', updateYproYadoSelect);
					}
					else{
						objArea.addEventListener('change', updateYproYadoSelect, false);
					}

				}

			}

		}

	}

}

/*
 * 指定したクラス名の要素を取得する
 */
function getYproElementsByClass( sSearchClass ){

	var ii;
	var jj;
	var arrClassElements = new Array();

	if( document.all ){

		var objAllElements = document.all;
		for( ii = 0, jj = 0; ii < objAllElements.length; ii++ ){
			if( objAllElements[ii].className == sSearchClass ){
				arrClassElements[jj] = objAllElements[ii];
				jj++;
			}
		}

	}
	else if( document.getElementsByTagName ){

		var objAllElements = document.getElementsByTagName("*");
		for( ii = 0, jj = 0; ii < objAllElements.length; ii++ ){
			if( objAllElements[ii].className == sSearchClass ){
				arrClassElements[jj] = objAllElements[ii];
				jj++;
			}
		}

	}
	else{

		return null;

	}

	return arrClassElements;

}

/*
 * キーワード検索文字列の変更(ラジオボタン)
 */
function setYproKeywordForRadio( sHiddenName, sHiddenVaue ){
	eval( "document.ypro_search." + sHiddenName + "_value.value='" + sHiddenVaue + "'" );
}

/*
 * キーワード検索文字列の変更(セレクトボックス)
 */
function setYproKeywordForSelect( objSelect, sHiddenName ){
	var sOptionValue = objSelect.options[ objSelect.selectedIndex ].value;
	eval( "document.ypro_search." + sHiddenName + "_value.value='" + sOptionValue + "'" );
}

/*
 * キーワード検索文字列の変更(一般)
 */
function setYproKeyword( sHiddenName, sHiddenVaue ){
	eval( "document.ypro_search." + sHiddenName + "_value.value='" + sHiddenVaue + "'" );
}



/**
 * 検索実行
 */
function submitYproReserve( objThisForm ){

	if( objThisForm != undefined ){

		var objYado = objThisForm.obj_yado;
		var objLan = objThisForm.obj_lan;

		if( objYado != undefined ){

			var sYadoId = objYado.options[ objYado.selectedIndex ].value;
			var sLan = objLan.options[ objLan.selectedIndex ].value;
			if( sYadoId != undefined && sYadoId != "" ){
				var sAction = "";
				if( sYadoId == "0" ){
					sAction = "https://www.489pro.com/asp/g/c/calendar.asp?kid=00103" + "&lan=" + sLan;
				}
				else{
					sAction = "https://www.489pro.com/asp/489/menu.asp?id=" + sYadoId + "&ty=ser&kid=00103" + "&lan=" + sLan;
				}
				objThisForm.action = sAction;
				objThisForm.submit();
			}
			else{
				alert( "ホテルを選んでください" );
			}

		}

	}

}

if(window.attachEvent){
	window.attachEvent('onload', setYproSearch);
}
else{
	window.addEventListener('load', setYproSearch, false);
}
