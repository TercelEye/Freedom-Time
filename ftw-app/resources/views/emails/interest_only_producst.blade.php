<br><br>
<strong>Email</strong> : {{ $invitaion->email }} <br>
<strong>Name</strong> : {{ $invitaion->name }} <br>
<strong>Phone </strong> : {{ $invitaion->tel }} <br>
<strong>Feedback </strong> : {{ $invitaion->feedback }} <br>
<br><br>

<table border="1" cellpadding="5">

    <tr>
    	<td>Intrests products</td>
        <td>:</td>
        <td>
		<?php $products = json_decode($invitaion->intrest_products);
		if(count($products) > 0){foreach($products as $k=>$v):
			echo $v." | ";
		endforeach;}
		?></td>
    </tr>
     <tr>
    	<td>Note</td>
        <td>:</td>
        <td>
        <?php if($invitaion->quality_check == 1){ ?>
        I’d really be interested in a FREE Healthy Home Air and Surface Quality Check Up ($ 39.00 value). Please send the kit to me so I can test my own home!
        <?php } ?>

		<br><br><br>
        {{ $invitaion->note }}</td>
    </tr>
</table>

