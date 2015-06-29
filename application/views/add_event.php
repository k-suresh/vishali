<?php include 'header.php'; ?>
    
    <!--Container-->
    <div class="container donor">
      <div class="logout">
        <h3>Add News &amp; Events</h3> </div>
      <div class="adminform">
      <form method="post" name="form1">
        <table width="100%" border="0" cellspacing="0" cellpadding="0">
          <tr>
    <td align="left" valign="top"><table width="100%" cellspacing="0" cellpadding="0" border="0" class="add-donor">
              <tbody>
                <tr>
                  <td width="46%" valign="middle" height="15" align="right">News Title : </td>
                  <td width="54%" valign="middle" height="15" align="left"><input type="text" id="title" name="title"></td>
                </tr>
              <tr>
                <td valign="top" height="15" align="right">News Comments : </td>
                <td valign="top" height="15" align="left"><textarea name="comments" id="textarea"></textarea></td>
              </tr>
              <tr>
                <td valign="middle" height="15" align="right">&nbsp;</td>
                <td valign="middle" height="15" align="left">
                    <input type="submit" value="Submit" id="submit" name="submit">
                    <input type="button" value="Cancel" id="submit" name="button" onClick="location.href='<?php echo site_url()?>event'">
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