<!--
	// 郵便番号から住所を求めるjs
	// 以下がフォームのHTMLから見たCGIまでのパス
	// 基本的に <this_url> は修正しなくても動作します。
	var getpostcode_cgi = "<this_url>";
	var postcode_form_Id = "";
	var postcode_ELM = "";
	var feedback_address = "";
	function postcode_getQuery(){
		if ((httpObj.readyState == 4) && (httpObj.status == 200)) {
			var obj = document.forms[postcode_form_Id];
			var getAddress = decodeURI(httpObj.responseText);
			var getAddressGroup = new Array();
			getAddressGroup = getAddress.split(",");
			if(getAddressGroup.length == 3){
				obj.elements[feedback_address].value = getAddressGroup[0] + getAddressGroup[1] + getAddressGroup[2];
			}
		}
	}
	function mfpc(formId,postcodeELM,fb_address){
		var obj = document.forms[formId];
		postcode_form_Id = formId;
		postcode_ELM = postcodeELM;
		feedback_address = fb_address;
		var single_char = new Array('0','1','2','3','4','5','6','7','8','9','-');
		var double_char = nl;
	}
	function createXMLHttpRequest(){
		var XMLhttpObject = null;
		try{
			XMLhttpObject = new XMLHttpRequest();
		}
		catch(e){
			try{
				XMLhttpObject = new ActiveXObject("Msxml2.XMLHTTP");
			}
			catch(e){
				try{
					XMLhttpObject = new ActiveXObject("Microsoft.XMLHTTP");
				}
				catch(e){
					return null;
				}
			}
		}
		return XMLhttpObject;
	}
//-->