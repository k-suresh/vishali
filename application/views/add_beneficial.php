<?php include 'header.php'; ?>

<!--Container-->
<div class="container donor">
    <div class="logout"><h3>Add Beneficiaries</h3> </div>
    <div class="adminform">
        <form action="" method="post" enctype="multipart/form-data" name="beneficialForm">
            <table width="100%" border="0" cellspacing="0" cellpadding="0">
                <tr>
                    <td align="left" valign="top"><table width="100%" cellspacing="0" cellpadding="0" border="0" class="add-donor">
                            <tbody>
                                <tr>
                                    <td valign="middle" height="15" align="right">Beneficiarie Image : </td>
                                    <td valign="middle" height="15" align="left"><input type="file" name="image" id="image"></td>
                                </tr>
                                <tr>
                                    <td width="46%" valign="middle" height="15" align="right">Beneficiarie Name : </td>
                                    <td width="54%" valign="middle" height="15" align="left"><input type="text" id="name" name="name"></td>
                                </tr>
                                <tr>
                                    <td valign="middle" height="15" align="right">School Name : </td>
                                    <td valign="middle" height="15" align="left"><input type="text" id="school" name="school"></td>
                                </tr>
                                <tr>
                                    <td valign="middle" height="15" align="right">Class : </td>
                                    <td valign="middle" height="15" align="left"><input type="text" id="class" name="class"></td>
                                </tr>
                                <tr>
                                    <td valign="middle" height="15" align="right">Father Name : </td>
                                    <td valign="middle" height="15" align="left"><input type="text" id="parent" name="parent"></td>
                                </tr>
                                <tr>
                                    <td valign="top" height="15" align="right">Address : </td>
                                    <td valign="top" height="15" align="left"><textarea id="address" name="address"></textarea></td>
                                </tr>
                                <tr>
                                    <td valign="middle" height="15" align="right">Phone No : </td>
                                    <td valign="middle" height="15" align="left"><input type="text" id="phone" name="phone"></td>
                                </tr>
                                <tr>
                                    <td valign="middle" height="15" align="right">&nbsp;</td>
                                    <td valign="middle" height="15" align="left">                                        
                                        <input type="submit" value="Submit" id="submit" name="submit">
                                        <input type="button" value="Cancel" id="cancel" name="cancel" onClick="location.href = '<?php echo site_url();?>beneficial/'">
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