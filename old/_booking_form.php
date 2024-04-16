<?php include_once 'utils.php' ?>
<form id="form1" name="form1" method="post" action="form.php">
  <fieldset>
  <legend class="style5">Booking Form</legend>
  <table width="443" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td colspan="2" valign="top" class="style3"><div align="left">Full Name</div></td>
      <td width="303"><div align="left"><span id="sprytextfield1">
          <label>
          <input name="Full name" type="text" id="Full name" size="17" />
          </label>
          <span class="textfieldRequiredMsg">Please enter your full name.</span></span></div></td>
    </tr>
    <tr>
      <td colspan="2" valign="top" class="style3"><div align="left">Email Address</div></td>
      <td width="303"><div align="left"><span id="sprytextfield2">
      <label>
      <input name="Email" type="text" id="Email" size="17" />
      </label>
      <span class="textfieldRequiredMsg">Please enter your email address.</span><span class="textfieldInvalidFormatMsg">Invalid email.</span></span></div></td>
    </tr>
    <tr>
      <td colspan="2" valign="top" class="style3"><div align="left">Contact Number</div></td>
      <td width="303"><div align="left"><span id="sprytextfield3">
      <label>
      <input name="Contact Number" type="text" id="Contact Number" size="17" />
      </label>
      <span class="textfieldRequiredMsg">Please enter contact number.</span><span class="textfieldInvalidFormatMsg">Invalid numbner.</span></span></div></td>
    </tr>
    <tr>
      <td colspan="2" valign="top" class="style3"><div align="left">Date of Arrival</div></td>
      <td width="303"><div align="left"><span id="spryselect1">
        <label>
        <select name="Arrival Date" id="Arrival Date">
          <?php print_month_dates_as_option() ?>
        </select>
        </label>
        <span class="selectRequiredMsg">Please enter date.</span></span><span id="spryselect2">
        <label>
        <select name="Arrival Month" id="Arrival Month">
         <?php print_months_as_option() ?>
        </select>
        </label>
        <span class="selectRequiredMsg">Please select month.</span></span><span id="spryselect3">
        <label>
        <select name="Arrival Year" id="Arrival Year">
          <option>YYYY</option>
          <option value="<?= $current_year ?>"><?= $current_year ?></option>
          <option value="<?= $current_year + 1 ?>"><?= $current_year + 1 ?></option>
        </select>
        </label>
        <span class="selectRequiredMsg">Please select year.</span></span></div></td>
    </tr>
    <tr>
      <td colspan="2" valign="top" class="style3"><div align="left">Date of Departurel</div></td>
      <td><div align="left"><span id="spryselect3">
          <label><span id="spryselect6">
          <select name="Departure Date" id="Departure Date">
            <?php print_month_dates_as_option() ?>
          </select>
          <span class="selectRequiredMsg">Please select date.</span></span></label>
          <span class="selectRequiredMsg">Please select date.</span></span><span id="spryselect4">
          <label>
          <select name="Departure Month" id="Departure Month">
            <?php print_months_as_option() ?>
          </select>
          </label>
          <span class="selectRequiredMsg">Please select month.</span></span><span id="spryselect5">
          <label>
          <select name="Departure Year" id="Departure Year">
            <option>YYYY</option>
            <option value="<?= $current_year ?>"><?= $current_year ?></option>
            <option value="<?= $current_year + 1 ?>"><?= $current_year + 1 ?></option>
          </select>
          </label>
          <span class="selectRequiredMsg">Please select year.</span></span></div></td>
    </tr>
    <tr>
      <td colspan="2" valign="top" class="style3"><div align="left">No. of Person</div></td>
      <td width="303"><div align="left"><span id="spryselect7">
        <label>
        <select name="Child" id="Child">
          <option>Child</option>
          <option value="0">0</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
        </select>
        </label>
        <span class="selectRequiredMsg">Please select no. of children.</span></span><span id="spryselect8">
        <label>
        <select name="Adult" id="Adult">
          <option>Adult</option>
          <option value="1">1</option>
          <option value="2">2</option>
          <option value="3">3</option>
          <option value="4">4</option>
          <option value="5">5</option>
          <option value="6">6</option>
          <option value="7">7</option>
          <option value="8">8</option>
          <option value="9">9</option>
        </select>
        </label>
        <span class="selectRequiredMsg">Please select no. of adults.</span></span></div></td>
    </tr>
    <tr>
      <td colspan="2" valign="top" class="style3"><div align="left">Other Details</div></td>
      <td width="303"><div align="left">
        <label>
        <textarea name="Other Details" id="Other Details" cols="25" rows="3"></textarea>
        </label>
      </div></td>
    </tr>
    <tr>
      <td colspan="2" valign="top" class="style3">&nbsp;</td>
      <td><div style="float:left;">
Please type the code shown in the image: <input type="text" name="wsp_code"/>
</div>
<div style="float:left;">
<script type="text/javascript" src="http://webspamprotect.com/captcha/5697/"></script>
<noscript>This form protected by <a href="http://webspamprotect.com" target="_blank" title="Web form spam protection">WebSpamProtect</a>. JavaScript must be enabled in your browser to view this image.
</noscript>
</div>
</td>
    </tr>
    <tr>
      <td width="123" height="35"><div align="right">
        <label>
        <input type="reset" name="reset" id="reset" value="Reset" />
        </label>
      </div></td>
      <td width="17">&nbsp;</td>
      <td width="303"><div align="left">
        <label>
        <input type="submit" name="Submit" id="Submit" value="Submit" />
        </label>
      </div></td>
    </tr>
        </table>
  </fieldset>
</form>
