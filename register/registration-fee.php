		<form class="paypal" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<span class="special"><i class="icon-angle-right"></i> Total Registration Fee (delegates + faculty advisors + observers):</span> $<?php echo($total.".00");?>
            <input type="hidden" name="business" value="admin@worldmun.org">
            <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="add" value="1">
            <input type="hidden" name="item_name" value="Delegation fee">
            <input type="hidden" name="amount" value=<?php echo('"'.$total.'"'); ?>>
            <input type="hidden" name="currency_code" value="USD">
            <input class="paypal" type="image" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" alt="PayPal - The safer, easier way to pay online">
            <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
          </form>
          <form class="paypal" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<span class="special"><i class="icon-angle-right"></i> Social Event Package (per delegate):</span> $100.00
			<br/>Number of tickets to purchase: <select name="quantity" style="width:40px;font-size:9px;margin-top:4px">
				<option value="1" selected>1</option>
				<?php
					for ($i = 2; $i <= $num_delegates; $i++) {
    					echo('<option value="'.$i.'">'.$i.'</option>');
					}
				?>
			</select> 
            <input type="hidden" name="business" value="admin@worldmun.org">
            <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="add" value="1">
            <input type="hidden" name="item_name" value="Social Event Package (per delegate)">
            <input type="hidden" name="amount" value=100>
            <input type="hidden" name="currency_code" value="USD">
            <input class="paypal" type="image" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" alt="PayPal - The safer, easier way to pay online">
            <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
          </form>
          <form class="paypal" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<span class="special"><i class="icon-angle-right"></i> Night Zero Entrance (per delegate):</span> $15.00
            <br/>Number of tickets to purchase: <select name="quantity" style="width:40px;font-size:9px;margin-top:4px">
				<option value="1" selected>1</option>
				<?php
					for ($i = 2; $i <= $num_delegates; $i++) {
    					echo('<option value="'.$i.'">'.$i.'</option>');
					}
				?>
			</select>
            <input type="hidden" name="business" value="admin@worldmun.org">
            <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="add" value="1">
            <input type="hidden" name="item_name" value="Night Zero Entrance (per delegate)">
            <input type="hidden" name="amount" value=15>
            <input type="hidden" name="currency_code" value="USD">
            <input class="paypal" type="image" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" alt="PayPal - The safer, easier way to pay online">
            <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
          </form>
          <form class="paypal" target="paypal" action="https://www.paypal.com/cgi-bin/webscr" method="post">
			<span class="special"><i class="icon-angle-right"></i> Single Social Event (per delegate):</span> $35.00
            <br/>Number of tickets to purchase: <select name="quantity" style="width:40px;font-size:9px;margin-top:4px">
				<option value="1" selected>1</option>
				<?php
					for ($i = 2; $i <= $num_delegates; $i++) {
    					echo('<option value="'.$i.'">'.$i.'</option>');
					}
				?>
			</select>
            <input type="hidden" name="business" value="admin@worldmun.org">
            <input type="hidden" name="cmd" value="_cart">
            <input type="hidden" name="add" value="1">
            <input type="hidden" name="item_name" value="Night Zero Entrance (per delegate)">
            <input type="hidden" name="amount" value=35>
            <input type="hidden" name="currency_code" value="USD">
            <input class="paypal" type="image" name="submit" border="0" src="https://www.paypalobjects.com/en_US/i/btn/btn_cart_LG.gif" alt="PayPal - The safer, easier way to pay online">
            <img alt="" border="0" width="1" height="1" src="https://www.paypalobjects.com/en_US/i/scr/pixel.gif" >
          </form>