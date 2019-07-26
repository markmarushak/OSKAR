$(document).ready(function(){

	$('#paykas').keydown(function(el){
		var d = $(this).serializeArray(),
			c = 0;
		if(d.length >= 4){
			for (var i = d.length - 1; i >= 0; i--) {
				if(d[i].value != ''){
					c++;
				}
			}
		}
		if(c >= 4){
			$(this).find('button').removeAttr('disabled');
		}
	});
	
	$('#paykas').submit(function(el){
		el.preventDefault();
		var data = $(this).serializeArray();
		console.log('start');
		$.ajax({
			url: '/pay',
			method: 'POST',
			data: data,
		})
		.done(function(data) {
			alert(data);
			$('#pay-btn').attr('href',data);		
		});

		for (var i = data.length - 1; i >= 0; i--) {
			$('.'+data[i].name).text(data[i].value);
		}
	});

	var s = $('#currency');
	$('select[name="pay-system"]').change(function(){
		var sys  = $(this).val()
		s.html('');
		switch(sys) {
			case 'payeer' :
				add_option(s, ['RUB','USD']);
				break;
			case 'perfectmoney' :
				add_option(s,'USD');
				break;
			case 'advcash' :
				add_option(s, ['RUB','USD']);
				break;
			case 'berty' :
				add_option(s, ['RUB','USD']);
				break;
			case 'bitcoin' :
				add_option(s, 'BTC');
				break;
			case 'ethereum' :
				add_option(s, 'ETH');
				break;
			case 'litecoin' :
				add_option(s, 'LTC');
				break;
			case 'dogecoin' :
				add_option(s, 'DOGE');
				break;
			case 'dash' :
				add_option(s, 'DASH');
				break;
			case 'bitcoincash' :
				add_option(s, 'BCH');
				break;
			case 'zcash' :
				add_option(s, 'ZEC');
				break;
			case 'monero' :
				add_option(s, 'XMR');
				break;
			case 'ethereumclassic' :
				add_option(s, 'ETC');
				break;
			case 'ripple' :
				add_option(s, 'XRP');
				break;
			case 'neo' :
				add_option(s, 'NEO');
				break;
			case 'gas' :
				add_option(s, 'GAS');
				break;
			case 'bitcoinsv' :
				add_option(s, 'BSV');
				break;
		}
	});


	function add_option(ob,data) {
		if(Array.isArray(data)){
			for (var i=0; i < data.length; i++) {
				s.append('<option value="'+data[i]+'">'+data[i]+'</option>')
			}
		}else{
			s.append('<option value="'+data+'" selected>'+data+'</option>')
		}
	}

});