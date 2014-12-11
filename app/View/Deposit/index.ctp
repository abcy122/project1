<h2>Deposit Funds</h2>
<?php 
echo $this->Form->create('Contact', array('type'=>'file'));
echo $this->Form->input('Name on the Card');
echo $this->Form->input('Credit Card Type', array(
    
    'options' => array('Visa', 'Credit Card'),
    'type' => 'radio'
));
echo $this->Form->input('Credit Card Number', array(
    'label' => 'Credit Card Number:',
    'div' => false,
    'name' => false,
    'maxlength' => 16,
    'autocomplete' => 'off',
    'class' => 'card-number stripe-sensitive'
));

echo $this->Form->input('Expiry Date:', array(
         'type' => 'date',
         'label' => 'Expiry Date',
         'dateFormat' => 'DMY',
         'minYear' => date('Y'),
         'maxYear' => date('Y') -90));
echo $this->Form->input('security_number', array('label' => 'Security Number / CVV Code:', 'maxLength' => 3, 'title' => 'CVV Code', 'type'=>'password'));


echo $this->Form->input('Contact Adress:');
/*&echo $this->$lang->countrySelect('Foo.country', array(
    'label' => __('Choose a Country', true),
    'default' => 'ru',
    
));*/
echo $this->Form->input('Billing City:');
echo $this->Form->input('Billing ZIP Code:');


echo $this->Form->end('Submit');
?>























<!--<form action="#" method="post">
   <input type="hidden" name="merchantIdentifier" value="<?php //echo $ZaakMerchantIdentifier;?>"/>
   <input type="hidden" name="orderId" value="<?php //echo $orderId;?>"/>
   <input type="hidden" name="txnType" value="1"/>
   <input type="hidden" name="zpPayOption" value="1"/>
   <input type="hidden" name="mode" value="1"/>
   <input type="hidden" name="currency" value="INR"/>
   <input type="hidden" name="amount" value="item price"/>
   <input type="hidden" name="merchantIpAddress" value="<?php //echo $_SERVER['SERVER_ADDR']?>"/>
   <input type="hidden" name="purpose" value="1"/>
   <input type="hidden" name="productDescription" value="product description"/>
   <input type="hidden" name="txnDate" id="txnDate" value="<?php //echo date('Y-m-d');?>"/>
           <h2>Deposit via Global Collect</h2>



   <table width="650px;">
       <tr>
           <td colspan="2">&nbsp;</td>
       </tr>
       <tr>
           <td width="50%" align="right" valign="middle">Name on the Card:</td>
           <td width="50%" align="center" valign="middle"><input type="text" value="cardname"/></td>
       </tr>
       <tr>
           <td width="50%" align="right" valign="middle">Price</td>
           <td width="50%" align="center" valign="middle"></td>
       </tr>
       <tr>
           <td colspan="2">&nbsp;</td>
       </tr>
       <tr>
           <td width="50%" align="right" valign="middle">Buyer Email</td>
           <td width="50%" align="center" valign="middle"><input type="text" name="buyerEmail"
                                                                 value="buyer_email"/></td>
       </tr>
       <tr>
           <td width="50%" align="right" valign="middle">Buyer First Name</td>
           <td width="50%" align="center" valign="middle"><input type="text" name="buyerFirstName"
                                                                 value=""/></td>
       </tr>
       <tr>
           <td width="50%" align="right" valign="middle">Buyer Last Name</td>
           <td width="50%" align="center" valign="middle"><input type="text" name="buyerLastName"
                                                                 value=""/></td>
       </tr>
       <tr>
           <td width="50%" align="right" valign="middle">Buyer Address</td>
           <td width="50%" align="center" valign="middle"><input type="text" name="buyerAddress" value=""/></td>
       </tr>
       <tr>
           <td width="50%" align="right" valign="middle">Buyer City</td>
           <td width="50%" align="center" valign="middle"><input type="text" name="buyerCity" value=""/></td>
       </tr>
       <tr>
           <td width="50%" align="right" valign="middle">Buyer State</td>
           <td width="50%" align="center" valign="middle"><input type="text" name="buyerState" value=""/></td>
       </tr>
       <tr>
           <td width="50%" align="right" valign="middle">Buyer Country</td>
           <td width="50%" align="center" valign="middle"><input type="text" name="buyerCountry" value=""/></td>
       </tr>
       <tr>
           <td width="50%" align="right" valign="middle">Buyer Pincode</td>
           <td width="50%" align="center" valign="middle"><input type="text" name="buyerPincode" value=""/></td>
       </tr>
       <tr>
           <td width="50%" align="right" valign="middle">Buyer Phone No</td>
           <td width="50%" align="center" valign="middle"><input type="text" name="buyerPhoneNumber" value=""/>
           </td>
       </tr>
       <tr>
           <td width="50%" align="right" valign="middle">&nbsp;</td>
           <td width="50%" align="center" valign="middle">
               <input type="submit" name="submit" value="Pay Now"/>
           </td>
       </tr>


   </table>

</form>-->
