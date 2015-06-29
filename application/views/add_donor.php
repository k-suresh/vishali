<?php include 'header.php'; ?>
<!--Container-->
<div class="container donor">
    <div class="logout">
        <h3>Add Donors</h3> </div>
    <div class="adminform">
        <form name="form1" method="post" action="" enctype="multipart/form-data">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="left" valign="top"><table width="100%" cellspacing="0" cellpadding="0" border="0" class="add-donor">
                            <tbody>
                                <tr>
                                    <td valign="middle" height="15" align="right">Donor Image : </td>
                                    <td valign="middle" height="15" align="left"><input type="file" name="image" id="image"></td>
                                </tr>
                                <tr>
                                    <td width="46%" valign="middle" height="15" align="right">Donor Name : </td>
                                    <td width="54%" valign="middle" height="15" align="left"><input type="text" id="name" name="name"></td>
                                </tr>
                                <tr>
                                    <td valign="middle" height="15" align="right">Company Name : </td>
                                    <td valign="middle" height="15" align="left"><input type="text" id="company" name="company"></td>
                                </tr>
                                <tr>
                                    <td valign="middle" height="15" align="right">Profession : </td>
                                    <td valign="middle" height="15" align="left"><input type="text" id="profession" name="profession"></td>
                                </tr>
                                <tr>
                                    <td valign="middle" height="15" align="right">Amount Donated : </td>
                                    <td valign="middle" height="15" align="left"><input type="text" id="amount" name="amount"></td>
                                </tr>
                                <tr>
                                    <td valign="middle" height="15" align="right">Email ID : </td>
                                    <td valign="middle" height="15" align="left"><input type="text" id="email" name="email"></td>
                                </tr>
                                <tr>
                                    <td valign="middle" height="15" align="right">Phone No : </td>
                                    <td valign="middle" height="15" align="left"><input type="text" id="phone" name="phone"></td>
                                </tr>
                                <tr>
                                    <td valign="top" height="15" align="right">Address : </td>
                                    <td valign="top" height="15" align="left"><textarea id="address" name="address"></textarea></td>
                                </tr>
                                <tr>
                                    <td valign="middle" height="15" align="right">Village/City : </td>
                                    <td valign="middle" height="15" align="left"><input type="text" id="city" name="city"></td>
                                </tr>
                                <tr>
                                    <td valign="middle" height="15" align="right">District : </td>
                                    <td valign="middle" height="15" align="left"><input type="text" id="district" name="district"></td>
                                </tr>
                                <tr>
                                    <td valign="middle" height="15" align="right">State : </td>
                                    <td valign="middle" height="15" align="left">
                                        <select name="state" id="state">
                                            <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                                            <option value="Andhra Pradesh">Andhra Pradesh</option>
                                            <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                                            <option value="Assam">Assam</option>
                                            <option value="Bihar">Bihar</option>
                                            <option value="Chandigarh">Chandigarh</option>
                                            <option value="Chhattisgarh">Chhattisgarh</option>
                                            <option value="Dadra and Nagar Haveli">Dadra and Nagar Haveli</option>
                                            <option value="Daman and Diu">Daman and Diu</option>
                                            <option value="Delhi">Delhi</option>
                                            <option value="Goa">Goa</option>
                                            <option value="Gujarat">Gujarat</option>
                                            <option value="Haryana">Haryana</option>
                                            <option value="Himachal Pradesh">Himachal Pradesh</option>
                                            <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                                            <option value="Jharkhand">Jharkhand</option>
                                            <option value="Karnataka">Karnataka</option>
                                            <option value="Kerala">Kerala</option>
                                            <option value="Lakshadweep">Lakshadweep</option>
                                            <option value="Madhya Pradesh">Madhya Pradesh</option>
                                            <option value="Maharashtra">Maharashtra</option>
                                            <option value="Manipur">Manipur</option>
                                            <option value="Meghalaya">Meghalaya</option>
                                            <option value="Mizoram">Mizoram</option>
                                            <option value="Nagaland">Nagaland</option>
                                            <option value="Odisha">Odisha</option>
                                            <option value="Puducherry">Puducherry</option>
                                            <option value="Punjab">Punjab</option>
                                            <option value="Rajasthan">Rajasthan</option>
                                            <option value="Sikkim">Sikkim</option>
                                            <option value="Tamil Nadu">Tamil Nadu</option>
                                            <option value="Telengana">Telengana</option>
                                            <option value="Tripura">Tripura</option>
                                            <option value="Uttar Pradesh">Uttar Pradesh</option>
                                            <option value="Uttarakhand">Uttarakhand</option>
                                            <option value="West Bengal">West Bengal</option>
                                        </select></td>
                                </tr>
                                <tr>
                                    <td valign="middle" height="15" align="right">Pin Code : </td>
                                    <td valign="middle" height="15" align="left"><input type="text" id="pincode" name="pincode"></td>
                                </tr>
                                <tr>
                                    <td valign="top" height="15" align="right">Description : </td>
                                    <td valign="top" height="15" align="left"><textarea id="description" name="description"></textarea></td>
                                </tr>
                                <tr>
                                    <td valign="middle" height="15" align="right">&nbsp;</td>
                                    <td valign="middle" height="15" align="left">
                                        <input type="submit" value="Submit" id="submit" name="submit">
                                        <input type="button" value="Cancel" id="cancel" name="cancel" onClick="location.href = '<?php echo site_url();?>donor/'">
                                    </td>
                                </tr>
                            </tbody></table></td>
                </tr>
                <tr>
                    <td align="left" valign="top">&nbsp;</td>
                </tr>
                <tr>
                    <td align="left" valign="top">&nbsp;</td>
                </tr>
                <tr>
                    <td align="left" valign="top">&nbsp;</td>
                </tr>
            </table>
        </form>
    </div>
</div>
<?php include 'footer.php'; ?>