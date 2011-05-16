<html>
<body>
	<form action='expresscheckout.php' METHOD='POST'>
		<table>
        	<tbody>
                <tr>
                    <th colspan="2">
                        Select Your Plan
                    </th>
                </tr>
                <tr>
                    <td style="width:30px">
                        <input id="monthly" type="radio" value="1" name="Payment_Amount">
                    </td>
                    <td>
                        <label for="monthly">
                            $1 per month
                        </label>
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="yearly" type="radio" value="10" name="Payment_Amount">
                    </td>
                    <td>
                        <label for="yearly">
                            $10 per year
                        </label> 
                    </td>
                </tr>
                <tr>
                    <td>
                        <input id="biyearly" type="radio" value="18" name="Payment_Amount">
                    </td>
                    <td>
                        <label for="biyearly">
                            $18 per 2 years
                        </label>
                    </td>
                </tr>
            </tbody>
        </table>
		<input type='image' name='submit' src='https://www.paypal.com/en_US/i/btn/btn_xpressCheckout.gif' border='0' align='top' alt='Check out with PayPal'/>
	</form>
</body>
</html>
