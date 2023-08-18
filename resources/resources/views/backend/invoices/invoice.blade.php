<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>{{  translate('INVOICE') }}</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
    <meta charset="UTF-8">
	<style media="all">
        @page {
			margin: 0;
			padding:0;
		}
		body{
			font-size: 15px;
            font-family: '<?php echo  $font_family ?>';
            font-weight: normal;
            direction: <?php echo  $direction ?>;
            text-align: <?php echo  $text_align ?>;
			padding:0;
			margin:0; 
		}
		.gry-color *,
		.gry-color{
			color:#000;
		}
		table{
			width: 100%;
		}
		table th{
			font-weight: normal;
			width:50%;
			padding:10px;
			padding-left:0px;
			text-align:left;
		}
	
		table.padding th{
			padding: .25rem .7rem;
		}
		table.padding td{
			padding: .25rem .7rem;
		}
		table.sm-padding td{
			padding: .1rem .7rem;
		}
		.border-bottom td,
		.border-bottom th{
			border-bottom:1px solid #eceff4;
		}
		.text-left{
			text-align:<?php echo  $text_align ?>;
		}
		.text-right{
			text-align:<?php echo  $not_text_align ?>;
		}
	</style>
</head>
<body>
	<div>



		<div style="padding: 3rem 1.5rem;width:80%;margin: 0 auto;">
			<table style="margin-bottom:2em;">
			    
				<tr>
				
					<td style="font-size: 24px;text-align:left;color:#1B2555;font-weight:600;" class=" strong;margin-bottom:2em;">{{  translate('APPLICANT DETAILS') }}</td>
				</tr>
				
				   
			</table>

	
			<table style="text-align:left;">
                <tr>
                    <th>{{  translate('First Name:') }}</th>
                    <td>{{ $order->name }}</td>
                </tr>
                <tr>
                    <th>{{  translate('Last Name:') }}</th>
                    <td>{{ $order->surname }}</td>
                </tr>
                <tr>
                    <th>{{  translate('Email:') }}</th>
                    <td>{{ $order->email }}</td>
                </tr>
                <tr>
                    <th>{{  translate('Phone Number:') }}</th>
                    <td>{{ $order->mobile }}</td>
                </tr>
                <tr>
                    <th>{{  translate('Age:') }}</th>
                    <td>{{ $order->prof }}</td>
                </tr>
                <tr>
                    <th>{{  translate('Gender:') }}</th>
                    <td>{{ $order->designation }}</td>
                </tr>
                <tr>
                    <th>{{  translate('Height:') }}</th>
                    <td>{{ $order->addinv }}</td>
                </tr>
                <tr>
                    <th>{{  translate('Country:') }}</th>
                    <td>{{ $order->country }}</td>
                </tr>
                <tr>
                    <th>{{  translate('State:') }}</th>
                    <td>{{ $order->doi }}</td>
                </tr>
                <tr>
                    <th>{{  translate('City:') }}</th>
                    <td>{{ $order->city }}</td>
                </tr>
                <tr>
                    <th>{{  translate('Education/Qualification:') }}</th>
                    <td>{{ $order->mainname }}</td>
                </tr>
                <tr>
                    <th>{{  translate('Describe yourself:') }}</th>
                    <td>{{ $order->compname }}</td>
                </tr>

                <tr>
                    <th>{{  translate('Close up:') }}</th>
                    <td><img src="{{ static_asset($order->poi) }}" height="150px" style="display:inline-block;"></td>
                </tr>
                <tr>
                    <th>{{  translate('Full size:') }}</th>
                    <td><img src="{{ static_asset($order->alternate) }}" height="200px" style="display:inline-block;"></td>
                </tr>

            </table>

		</div>


	</div>
</body>
</html>
