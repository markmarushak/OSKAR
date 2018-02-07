{strip}

<table class="FormatTable" border="1">
<tr>
	<th colspan="2">
		Plan '<span id="plan">?</span>'
	</th>
</tr>
<tr>
	<td>
		Bonus
	</td>
	<td align="right" width="60px">
		<span id="bonus">?</span>%
	</td>
</tr>
<tr>
	<td>
		Accrual
	</td>
	<td align="right">
		<span id="profit">?</span>%
	</td>
</tr>
<tr>
	<td>
		Accruals count
	</td>
	<td align="right">
		<span id="period">?</span>
	</td>
</tr>
<tr>
	<td>
		Duration, days
	</td>
	<td align="right">
		<span id="days">?</span>
	</td>
</tr>
<tr>
	<td>
		Compaund
	</td>
	<td align="right">
		<span id="cmpd">?</span>%
	</td>
</tr>
<tr>
	<td>
		Total profit
	</td>
	<td align="right">
		<span id="prib">?</span>
	</td>
</tr>
<tr>
	<td>
		Deposit return
	</td>
	<td align="right">
		<span id="return">?</span>%
	</td>
</tr>
<tr>
	<td>
		Total returns
	</td>
	<td align="right">
		<b><span id="prib2">?</span></b>
	</td>
</tr>
</table>

<script>
	function round2(z)
	{
		z = (1*z).toFixed(2);
		return 1*z;
	}
	function recalc()
	{
		var sum=round2(document.forms['calc']['sum'].value.replace(',', '.'));
		if (sum<=0) sum=0;
		var prib=0;
{*		
		var cmpd=0;
		var radios=document.getElementsByName('cmpd');
		for (i=0; i<radios.length; i++)
			if (radios[i].checked)
			{
				cmpd=radios[i].value;
				break;
			}
*}
		var cmpd=document.forms['calc']['cmpd'];
		if (cmpd==undefined)
		{
			cmpd=0;
		}
		else
		{
			cmpd=cmpd.value;
		}
		document.getElementById('cmpd').innerHTML=cmpd;
		var days=document.forms['calc']['days'];
		if (days==undefined)
		{
			days=0;
		}
		else
		{
			days=days.value;
		}
		var plans=[{$calc_plans}];
		var pn='?';
		var pd='?';
		var ip='?';
		var db='?';
		var dr='?';
		var dd='?';
		var p=document.forms['calc']['plan'];
		if (p==undefined)
		{
			for (var p in plans)
				if ((sum>=plans[p][1]) & (sum<plans[p][2]))
				{
					pn=plans[p][0];
					pd=plans[p][3];
					ip=plans[p][4];
					db=plans[p][5];
					dr=plans[p][6];
					dd=plans[p][7];
					break;
				}
		}
		else
		{
			p=p.value;
			pn=plans[p][0];
			pd=plans[p][3];
			ip=plans[p][4];
			db=plans[p][5];
			dr=plans[p][6];
			dd=plans[p][7];
		}
		if (pn!='?')
		{
			if (ip == 0)
			{
				ip = days;
				dd = days;
			}
			sum=round2(sum+db*sum/100);
			zcomp=0;
			for (i=0; i<ip; i++)
			{
				profit=round2(pd*sum/100);
				csum=round2(cmpd*profit/100);
				zcomp=zcomp+csum;
				prib=prib+profit-csum;
				sum=sum+csum;
			}
			sum=round2(dr*(sum-zcomp)/100);
		}
		document.getElementById('plan').innerHTML=pn;
		document.getElementById('bonus').innerHTML=db;
		document.getElementById('profit').innerHTML=pd;
		document.getElementById('period').innerHTML=ip;
		document.getElementById('days').innerHTML=dd;
		document.getElementById('prib').innerHTML=round2(prib+zcomp);
		document.getElementById('return').innerHTML=dr;
		document.getElementById('prib2').innerHTML=round2(sum+prib+zcomp);
	}

	recalc();
</script>

{/strip}