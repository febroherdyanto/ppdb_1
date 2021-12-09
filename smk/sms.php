
	<link rel="stylesheet" type="text/css" href="https://reguler.zenziva.net/easyui-themes/pepper-grinder/easyui.css"/>
	<link rel="stylesheet" type="text/css" href="https://reguler.zenziva.net/easyui-themes/icon.css"/>
	<link rel="stylesheet" type="text/css" href="https://reguler.zenziva.net/zmz.css"/>
	<link rel="shortcut icon" href="https://reguler.zenziva.net/apps/zenziva.ico"/>
	<script type="text/javascript" src="https://reguler.zenziva.net/latest-jquery/jquery-1.6.min.js"></script>
	<script type="text/javascript" src="https://reguler.zenziva.net/latest-jquery/jquery.easyui.min.js"></script>
	<script type="text/javascript" src="https://reguler.zenziva.net/latest-jquery/jquery.edatagrid.js"></script>


	<script type="text/javascript" src="https://reguler.zenziva.net/apps/karakter.js"></script>
	<script type="text/javascript" src="https://reguler.zenziva.net/apps/number.js"></script>	
	<script type="text/javascript">		
		$(function(){
			$('#cg').combogrid({
				panelWidth:400,
				panelHeight:310,
				url: 'phonebook_getdata.php',
				loadMsg: 'Sedang Loading Data Mohon Tunggu',
				idField:'nohp',
				textField:'nohp',
				mode:'remote',
				fitColumns:true,
				rownumbers:true,
				pagination:true,
				columns:[[
					{field:'nama',title:'<strong>Nama</strong>',align:'left',width:60},
					{field:'alamat',title:'<strong>Alamat</strong>',align:'left',width:80},
					{field:'nohp',title:'<strong>Nomor HP</strong>',align:'center',width:80}					
				]]
			});
			$("input[name='mode']").change(function(){
				var mode = $(this).val();
				$('#cg').combogrid({
					mode: mode
				});
			});
		});
		
		$(function(){
			/*$('#cd').combogrid({
				panelWidth:350,
				panelHeight:310,
				url: 'get_device.php',
				loadMsg: 'Sedang Loading Data Mohon Tunggu',
				idField:'ID',
				textField:'ID',
				mode:'remote',
				fitColumns:true,
				rownumbers:true,
				pagination:true,
				columns:[[
					{field:'ID',title:'<strong>Device</strong>',align:'left',width:60}					
				]]
			});
			$("input[name='mode']").change(function(){
				var mode = $(this).val();
				$('#cd').combogrid({
					mode: mode
				});
			});*/
			var device = [
		    {nama:'device01',id:'device01'},
		    {nama:'device02',id:'device02'},
		    {nama:'device03',id:'device03'},
		    {nama:'device04',id:'device04'},
		    {nama:'device05',id:'device05'},
		    {nama:'device06',id:'device06'},
		    {nama:'device07',id:'device07'},
		    {nama:'device08',id:'device08'},
		    {nama:'device09',id:'device09'},
		    {nama:'device10',id:'device10'},
		    {nama:'device11',id:'device11'},
		    {nama:'device12',id:'device12'},
		    {nama:'device13',id:'device13'},
		    {nama:'device14',id:'device14'},
		    {nama:'device15',id:'device15'},
		    {nama:'device16',id:'device16'}
			];
		 	$('#cd').combobox({
        data:device,
        valueField:'nama',  
        textField:'nama'  
    	});
    	
		});		
					
	$(document).ready(function(){
	$("#main-nav li a.main-link").hover(function(){
		$("#main-nav li a.close").fadeIn("fast");
		$("#main-nav li a.main-link").removeClass("active");												 
		$(this).addClass("active");										 
		$("#sub-link-bar").animate({
			height: "10px"					   
		});
		$(".sub-links").hide();
		$(this).siblings(".sub-links").fadeIn("fast");
	});
	$("#main-nav li a.close").click(function(){
		$("#main-nav li a.main-link").removeClass("active");												 									 
		$(".sub-links").fadeOut("fast");
		$("#sub-link-bar").animate({
			height: "10px"					   
		});		
		$("#main-nav li a.close").fadeOut("fast");
	});	
	});	
	function template() {
    	window.open("templatepop.php","Template","menubar=no,width=560,height=500,toolbar=no");
	};
	function info(){
			$.messager.alert('Info Fitur SMS Sapaan', 'Tambahkan kata [nama] pada isi pesan untuk menampilkan nama si penerima SMS,<br> atau tambahkan kata [pangglian] untuk menampilkan nama panggilan atau gelar dan kata [alamat] untuk menampilkan alamat.<br><br> Contoh:<br>Kepada [panggilan] [nama] di [alamat], harap datang di tempat biasa pada pukul 09:00.<br><br> SMS akan menjadi:<br>Kepada Bapak Cecep Eri Gandari di Bandung, harap datang di tempat biasa pada pukul 09:00.<br><br>*Catatan:<br>Fitur ini dapat digunakan jika mengirim SMS ke nomor yang telah terdaftar dalam Phonebook atau Grup.<br>Nama panggilan dapat di setting pada daftar Phonebook.', 'info');
	};
	
	document.oncontextmenu =
  function(e) {
    // If IE
    if(!e) {
      e = event;
      e.target = e.srcElement;
    }
    if (e.target.nodeName.toLowerCase() == 'input') {
      // If IE
      if (!e.prevenDefault)
        e.returnValue = false;
      else
        e.preventDefault();
      return false;
    }
  };
	</script>





<form action="https://reguler.zenziva.net/apps/sending.php" method="post" id="myForm" name="send">			
			<h3>.:: KIRIM PESAN KE SATU ::.</h3>
	  	<h5>PESAN SEDANG DALAM PROSES PENGIRIMAN.</h5>			<div id="sendbox">
				<div class="centered">
					<table width="310px" border="0" cellpadding="5" cellspacing="0">
						<br>
	  				<tr>
    					<td width="130" valign="bottom">Isi Pesan:</td>
	    				<td width="40" align="center">
	    				<a href="javascript:template()" onMouseOver="self.status='Open A Window'; return true;"><img src="../easyui-themes/icons/smstemplate.png" border="0" title="SMS Template"/></a><br />Template	    				
	    				</td>
	    				<td width="40" align="center">
	    				<a href="javascript:info()" onMouseOver="self.status='Open A Window'; return true;"><img src="../easyui-themes/icons/sapaan.png" border="0" title="Info tambahan fitur SMS"/></a><br />Sapaan
							</td>
    				</tr>
    				    				<tr>
	    				<td colspan="3"><textarea oncontextmenu="alert('Klik Kanan Disable');return false;" id="eBann" name="pesan" cols="40" rows="5" onFocus="toCount('eBann','sBann','Jumlah Karakter {CHAR}.',145);", onChange="toCount('eBann','sBann','Jumlah Karakter {CHAR}.',145);", onKeyUp="toCount('eBann','sBann','Jumlah Karakter {CHAR}.',145);", onKeyDown="toCount('eBann','sBann','Jumlah Karakter {CHAR}.',145);"></textarea></td>
    				</tr>
    				<tr>
    					<td colspan='3' align='right'>Jml SMS <input onClick="toCount('eBann','sBann','Jumlah Karakter {CHAR}.',145);" readonly='readonly' id='jmlsms' name='jmlsms' value='1' style='width:32px'></input>&nbsp;&nbsp;&nbsp;&nbsp;<span id='sBann'>Jumlah Karakter 0.</span></td>
     				</tr>
    				<tr>
	    				<td colspan="1">Nomor Tujuan:</td>
	    				    				</tr>
	  				<tr>
	    				<td colspan="1"><input class="validate[required,minSize[10],custom[phone]] text-input" id="cg" name="nohp" style="width:150px"></input>
	    				<input name="kredit" type="hidden" value="0"></input>
	    				</td>
	    				    				</tr>
    				<tr>
	    				<td></td>
    				</tr>
	  				<tr align="right">
	    				<td colspan="3"><input id="submit" type="submit" name="submit" value=" Kirim "></td>
    				</tr>
  				</table>
  			</div>
  		</div>
		</form>